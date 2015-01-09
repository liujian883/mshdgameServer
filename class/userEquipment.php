<?php
include_once '../db/db2.php'
include_once '../db/error.php'

class userEquipment
{
    static function getAllInfo($db,$id)
    {
        if($id % 6 == 0)
        {
            $equipmentInfo = $db->select2('userEquipment0','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 1)
        {
            $equipmentInfo = $db->select2('userEquipment1','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 2)
        {
            $equipmentInfo = $db->select2('userEquipment2','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 3)
        {
            $equipmentInfo = $db->select2('userEquipment3','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 4)
        {
            $equipmentInfo = $db->select2('userEquipment4','*',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 5)
        {
            $equipmentInfo = $db->select2('userEquipment5','*',"userID = '".$id."'",true,P_Android);
        }
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
        if($array['userID'] % 6 == 0)
        {
            $db->insert2('userEquipment0',$array);
        }
        else if($array['userID'] % 6 == 1)
        {
            $db->insert2('userEquipment1',$array);
        }
        else if($array['userID'] % 6 == 2)
        {
            $db->insert2('userEquipment2',$array);
        }
        else if($array['userID'] % 6 == 3)
        {
            $db->insert2('userEquipment3',$array);
        }
        else if($array['userID'] % 6 == 4)
        {
            $db->insert2('userEquipment4',$array);
        }
        else if($array['userID'] % 6 == 5)
        {
            $db->insert2('userEquipment5',$array);
        }
    }

    static function getEquipmentID($db,$id)
    {
        if($id % 6 == 0)
        {
            $result = $db->select2('userEquipment0','equipmentID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 1)
        {
            $result = $db->select2('userEquipment1','equipmentID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 2)
        {
            $result = $db->select2('userEquipment2','equipmentID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 3)
        {
            $result = $db->select2('userEquipment3','equipmentID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 4)
        {
            $result = $db->select2('userEquipment4','equipmentID',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 5)
        {
            $result = $db->select2('userEquipment5','equipmentID',"userID = '".$id."'",true,P_Android);
        }
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
        if($id % 6 == 0)
        {
            $result = $db->select2('userEquipment0','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 1)
        {
            $result = $db->select2('userEquipment1','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 2)
        {
            $result = $db->select2('userEquipment2','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 3)
        {
            $result = $db->select2('userEquipment3','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 4)
        {
            $result = $db->select2('userEquipment4','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 5)
        {
            $result = $db->select2('userEquipment5','equipmentLevel',"userID = '".$id."'",true,P_Android);
        }
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
        $equipmentInfo = array();
        $equipmentInfo["equipmentLevel"] = $equipmentLevel;
        if($id % 6 == 0)
        {
            $db->update2('userEquipment0',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 1)
        {
            $db->update2('userEquipment1',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 2)
        {
            $db->update2('userEquipment2',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 3)
        {
            $db->update2('userEquipment3',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 4)
        {
            $db->update2('userEquipment4',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 5)
        {
            $db->update2('userEquipment5',$equipmentInfo,"userID = '".$id."'",false,false);
        }
    }

    static function addEquipmentLevel($db,$id,$equipmentLevel) 
    {
        if($id % 6 == 0)
        {
            $db->update('update userEquipment0 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 6 == 1)
        {
            $db->update('update userEquipment1 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 6 == 2)
        {
            $db->update('update userEquipment2 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 6 == 3)
        {
            $db->update('update userEquipment3 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 6 == 4)
        {
            $db->update('update userEquipment4 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        else if($id % 6 == 5)
        {
            $db->update('update userEquipment5 set equipmentLevel=equipmentLevel+'.$equipmentLevel.' where userID='.$id.' limit 1');
        }
        return userEquipment::getHeroLevel($db,$id);
    }

    static function getUseItOrNot($db,$id)
    {
        if($id % 6 == 0)
        {
            $result = $db->select2('userEquipment0','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 1)
        {
            $result = $db->select2('userEquipment1','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 2)
        {
            $result = $db->select2('userEquipment2','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 3)
        {
            $result = $db->select2('userEquipment3','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 4)
        {
            $result = $db->select2('userEquipment4','useItOrNot',"userID = '".$id."'",true,P_Android);
        }
        else if($id % 6 == 5)
        {
            $result = $db->select2('userEquipment5','useItOrNot',"userID = '".$id."'",true,P_Android);
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
        $equipmentInfo = array();
        $equipmentInfo["useItOrNot"] = $useItOrNot;
        if($id % 6 == 0)
        {
            $db->update2('userEquipment0',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 1)
        {
            $db->update2('userEquipment1',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 2)
        {
            $db->update2('userEquipment2',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 3)
        {
            $db->update2('userEquipment3',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 4)
        {
            $db->update2('userEquipment4',$equipmentInfo,"userID = '".$id."'",false,false);
        }
        else if($id % 6 == 5)
        {
            $db->update2('userEquipment5',$equipmentInfo,"userID = '".$id."'",false,false);
        }
    }
} 

?>
