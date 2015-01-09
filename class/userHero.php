<?php
include_once '../db/db2.php'
include_once '../db/error.php'

class userHero
{
    static function getAllInfo($db,$id)
    {
        $heroInfo = array();
        $result = $db->select2('userHero','*',"userID = '".$id."'",true,P_Android);
        if($result)
        {
            $heroInfo['userID'] = $result['userID'];
            $heroInfo['heroID'] = $result['heroID'];
            $heroInfo['heroLevel'] = $result['heroLevel'];
            $heroInfo['useItOrNot'] = $result['useItOrNot'];
            return $heroInfo;
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function setAllInfo($db,$array)
    {
        $db->insert2('userHero',$array);
    }

    static function getHeroID($db,$id)
    {
        $result = $db->select2('userHero','heroID',"userID = '".$id."'",true,P_Android);
        if($result)
        {
           return (int)$result['heroID']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }
    }

    static function getHeroLevel($db,$id)
    {
        $result = $db->select2('userHero','heroLevel',"userID = '".$id."'",true,P_Android);
        if($result)
        {
           return (int)$result['heroLevel']; 
        }
        else
        {
            SendError2(E_AUTH,"No data as this id");
        }


    static function setHeroLevel($db,$id,$heroLevel) 
    {
        $heroInfo = array();
        $heroInfo["heroLevel"] = $heroLevel;
        $db->update2('userHero',$heroInfo,"userID = '".$id."'",false,false);
    }

    static function addHeroLevel($db,$id,$heroLevel) 
    {
        $db->update('update userHero set heroLevel=heroLevel+'.$heroLevel.' where userID='.$id.' limit 1');
        return userHero::getHeroLevel($db,$id);
    }

    static function getUseItOrNot($db,$id)
    {
        $result = $db->select2('userHero','useItOrNot',"userID = '".$id."'",true,P_Android);
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
        $heroInfo = array();
        $heroInfo["useItOrNot"] = $useItOrNot;
        $db->update2('userHero',$heroInfo,"userID = '".$id."'",false,false);
    }
} 

?>
