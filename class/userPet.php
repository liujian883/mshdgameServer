<?php
include_once '../db/db2.php'
include_once '../db/error.php'

class userPet
{
    static function getAllInfo($db,$id)
    {
        $petInfo = array();
        if($id % 4 == 0) 
        {
            $result = $db->select2('userPet0','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 1) 
        {
            $result = $db->select2('userPet1','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 2) 
        {
            $result = $db->select2('userPet2','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 3) 
        {
            $result = $db->select2('userPet3','*',"userID = '".$id."'",true,P_Android);
        }
        
        if($result)
        {
            return $result;
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function setAllInfo($db,$array)
    {
        if($array['userID'] % 4 == 0) 
        {
             $db->insert2('userPet0',$array);
        }
        else if($array['userID'] % 4 == 1) 
        {
             $db->insert2('userPet1',$array);
        }
        else if($array['userID'] % 4 == 2) 
        {
             $db->insert2('userPet2',$array);
        }
        else if($array['userID'] % 4 == 3) 
        {
             $db->insert2('userPet3',$array);
        }       
    }

    static function getPetID($db,$id)
    {
        if($id % 4 == 0) 
        {
            $result = $db->select2('userPet0','petID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 1) 
        {
            $result = $db->select2('userPet1','petID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 2) 
        {
            $result = $db->select2('userPet2','petID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 3) 
        {
            $result = $db->select2('userPet3','petID',"userID = '".$id."'",true,P_Android);
        }
        if($result)
        {
           return (int)$result['petID']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function getPetLevel($db,$id)
    {
        if($id % 4 == 0) 
        {
            $result = $db->select2('userPet0','petLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 1) 
        {
            $result = $db->select2('userPet1','petLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 2) 
        {
            $result = $db->select2('userPet2','petLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 3) 
        {
            $result = $db->select2('userPet3','petLevel',"userID = '".$id."'",true,P_Android);
        }
        if($result)
        {
           return (int)$result['petLevel']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }


    static function setPetLevel($db,$id,$petLevel) 
    {
        $petInfo = array();
        $petInfo["petLevel"] = $petLevel;
        if($id % 4 == 0) 
        {
             $db->update2('userPet0',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 1) 
        {
             $db->update2('userPet1',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 2) 
        {
             $db->update2('userPet2',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 3) 
        {
             $db->update2('userPet3',$petInfo,"userID = '".$id."'",false,false);
        }
    }

    static function addPetLevel($db,$id,$petLevel) 
    {
        if($id % 4 == 0) 
        {
             $db->update('update userPet0 set petLevel=petLevel+'.$petLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 4 == 1) 
        {
             $db->update('update userPet1 set petLevel=petLevel+'.$petLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 4 == 2) 
        {
             $db->update('update userPet2 set petLevel=petLevel+'.$petLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 4 == 3) 
        {
             $db->update('update userPet3 set petLevel=petLevel+'.$petLevel.' where userID='.$id.' limit 1');
        }
        return userPet::getPetLevel($db,$id);
    }

    static function getUseItOrNot($db,$id)
    {
        if($id % 4 == 0) 
        {
            $result = $db->select2('userPet0','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 1) 
        {
            $result = $db->select2('userPet1','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 2) 
        {
            $result = $db->select2('userPet2','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 4 == 3) 
        {
            $result = $db->select2('userPet3','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        
        if($result)
        {
           return (int)$result['useItOrNot']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        } 
    }

    static function setUseItOrNot($db,$id,$useItOrNot) 
    {
        $petInfo = array();
        $petInfo["useItOrNot"] = $useItOrNot;
        if($id % 4 == 0) 
        {
             $db->update2('userPet0',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 1) 
        {
             $db->update2('userPet1',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 2) 
        {
             $db->update2('userPet2',$petInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 4 == 3) 
        {
             $db->update2('userPet3',$petInfo,"userID = '".$id."'",false,false);
        }
    }
} 

?>
