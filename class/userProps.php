<?php
include_once '../db/db2.php'
include_once '../db/error.php'

class userProps
{
    static function getAllInfo($db,$id)
    {
        if($id % 2 == 0)
        {
            $propsInfo =$db->select2('userProps0','*',"userID = '".$id."'",true,P_Android);
        }
        else
        {
            $propsInfo =$db->select2('userProps1','*',"userID = '".$id."'",true,P_Android);
        }
        if($propsInfo)
        {
            return $propsInfo;
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function setAllInfo($db,$array)
    {
        if($array['userID'] % 2 == 0)
        {
            $db->insert2('userProps0',$array);
        }
        else
        {
            $db->insert2('userProps1',$array);
        }
    }

    static function getPropsID($db,$id)
    {
        if($id % 2 == 0)
        {        
            $result = $db->select2('userProps0','propsID',"userID = '".$id."'",true,P_Android);
        }
        else
        {
            $result = $db->select2('userProps1','propsID',"userID = '".$id."'",true,P_Android); 
        }
        if($result)
        {
           return (int)$result['propsID']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function getPropsNumber($db,$id)
    {
        if($id % 2 == 0)
        {
            $result = $db->select2('userProps0','propsNumber',"userID = '".$id."'",true,P_Android);
        }
        else
        {
            $result = $db->select2('userProps1','propsNumber',"userID = '".$id."'",true,P_Android);
        }
        }
        if($result)
        {
           return (int)$result['propsNumber']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }


    static function setPropsNumber($db,$id,$propsNumber) 
    {
        $propsInfo = array();
        $propsInfo["propsNumber"] = $propsNumber;
        if($id % 2 ==0)
        {
            $db->update2('userProps0',$propsInfo,"userID = '".$id."'",false,false);
        }
        else
        {
            $db->update2('userProps1',$propsInfo,"userID = '".$id."'",false,false);
        }
    }

    static function addPropsNumber($db,$id,$propsNumber) 
    {
        if($id % 2 == 0)
        {
            $db->update('update userProps0 set propsNumber=propsNumber+'.$propsNumber.' where userID='.$id.' limit 1');
        }
        else
        {
            $db->update('update userProps1 set propsNumber=propsNumber+'.$propsNumber.' where userID='.$id.' limit 1');
        }
        return userProps::getPropsNumber($db,$id);
    }
} 

?>
