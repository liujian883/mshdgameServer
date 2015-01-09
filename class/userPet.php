<?php
include_once '../db/db2.php'
include_once '../db/error.php'

global $_config;
class userPet
{
    static function getAllInfo($db,$id)
    {
        $tableNumber = $id % $_config['table']['userPet'];
        $petInfo = array();
        $result = $db->select2('userPet'.$tableNumber,'*',"userID = '".$id."'",true,P_Android);
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
        $tableNumber = $array['userID'] % $_config['table']['userPet'];
        $db->insert2('userPet'.$tableNumber,$array);
    }

    static function getPetID($db,$id)
    {
        $tableNumber = $id % $_config['table']['userPet'];
        $result = $db->select2('userPet'.$tableNumber,'petID',"userID = '".$id."'",true,P_Android);
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
        $tableNumber = $id % $_config['table']['userPet'];
        $result = $db->select2('userPet'.$tableNumber,'petLevel',"userID = '".$id."'",true,P_Android);
        if($result)
        {
           return (int)$result['petLevel']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }

    }
    static function setPetLevel($db,$id,$petLevel) 
    {
        $tableNumber = $id % $_config['table']['userPet'];
        $petInfo = array();
        $petInfo["petLevel"] = $petLevel;
        $db->update2('userPet'.$tableNumber,$petInfo,"userID = '".$id."'",false,false);
    }

    static function addPetLevel($db,$id,$petLevel) 
    {
        $tableNumber = $id % $_config['table']['userPet'];
        $db->update('update userPet'.$tableNumber.' set petLevel=petLevel+'.$petLevel.' where userID='.$id.' limit 1');
        return userPet::getPetLevel($db,$id);
    }

    static function getUseItOrNot($db,$id)
    {
        $tableNumber = $id % $_config['table']['userPet'];
        $result = $db->select2('userPet'.$tableNumber,'useItOrNot',"userID = '".$id."'",true,P_Android);
        
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
        $tableNumber = $id % $_config['table']['userPet'];
        $petInfo = array();
        $petInfo["useItOrNot"] = $useItOrNot;
        $db->update2('userPet'.$tableNumber,$petInfo,"userID = '".$id."'",false,false);
    }
} 

?>
