<?php
include_once '../db/db2.php'
include_once '../db/error.php'

global $_config;
class userProps
{
    static function getAllInfo($db,$id)
    {
        $tableNumber = $id % $_config['table']['userProps'];
        $propsInfo =$db->select2('userProps'.$tableNumber,'*',"userID = '".$id."'",true,P_Android);
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
        $tableNumber = $array['userID'] % $_config['table']['userProps'];
        $db->insert2('userProps'.$tableNumber,$array);
    }

    static function getPropsID($db,$id)
    {
        $tableNumber = $id % $_config['table']['userProps'];
        $result = $db->select2('userProps'.$tableNumber,'propsID',"userID = '".$id."'",true,P_Android); 
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
        $tableNumber = $id % $_config['table']['userProps'];
        $result = $db->select2('userProps'.$tableNumber,'propsNumber',"userID = '".$id."'",true,P_Android);
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
        $tableNumber = $id % $_config['table']['userProps'];
        $propsInfo = array();
        $propsInfo["propsNumber"] = $propsNumber;
        $db->update2('userProps'.$tableNumber,$propsInfo,"userID = '".$id."'",false,false);
    }

    static function addPropsNumber($db,$id,$propsNumber) 
    {
        $tableNumber = $id % $_config['table']['userProps'];
        $db->update('update userProps'.$tableNumber.' set propsNumber=propsNumber+'.$propsNumber.' where userID='.$id.' limit 1');
        return userProps::getPropsNumber($db,$id);
    }
} 

?>
