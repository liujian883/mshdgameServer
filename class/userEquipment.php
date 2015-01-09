<?php
include_once '../db/db2.php'
include_once '../db/error.php'
global $_config;
class userEquipment
{
    static function getAllInfo($db,$id)
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $equipmentInfo = $db->select2("userEquipment".$tableNumber,'*',"userID = '".$id."'",true,P_Android);
        if($equipmentInfo)
        {
            return $equipmentInfo;
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function setAllInfo($db,$array)
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $db->insert2("userEquipment'".$tableNumber."'",$array);
    }

    static function getEquipmentID($db,$id)
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $result = $db->select2("userEquipment".$tableNumber,'equipmentID',"userID = '".$id."'",true,P_Android);
        if($result)
        {
           return (int)$result['equipmentID']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function getEquipmentLevel($db,$id)
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $result = $db->select2('userEquipment5','equipmentLevel',"userID = '".$id."'",true,P_Android);
        if($result)
        {
           return (int)$result['equipmentLevel']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }


    static function setEquipmentLevel($db,$id,$equipmentLevel) 
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $equipmentInfo = array();
        $equipmentInfo["equipmentLevel"] = $equipmentLevel;
        $db->update2("userEquipment".$tableNumber,$equipmentInfo,"userID = '".$id."'",false,false);
    }

    static function addEquipmentLevel($db,$id,$equipmentLevel) 
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $db->update('update userEquipment'.$tableNumber.' set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        return userEquipment::getHeroLevel($db,$id);
    }

    static function getUseItOrNot($db,$id)
    {
        $tableNumber = $id % $_config['table']['userEquipment'];
        $result = $db->select2('userEquipment'.$tableNumber,'useItOrNot',"userID = '".$id."'",true,P_Android);
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
        $tableNumber = $id % $_config['table']['userEquipment'];
        $equipmentInfo = array();
        $equipmentInfo["useItOrNot"] = $useItOrNot;
        $db->update2('userEquipment'.$tableNumber,$equipmentInfo,"userID = '".$id."'",false,false);
    }
} 

?>
