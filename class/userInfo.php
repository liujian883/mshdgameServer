<?php
include_once '../db/error.php';
include_once '../db/db2.php';
include_once '../db/config.php';
include_once '../login/checkUser.php';

 
class userInfo
{
    static function getAllUserInfo($db,$userID) 
    {
        $userInfo = $db->select2('userInfo','*',"userID = '".$userID."'",true,P_Android);
        if(!$userInfo) 
        {
             SendError2(E_DB,"Cannot get userInfo from userInfo table userID = ");
        }
        return $userInfo;
    }

    static function getUserGold($db,$userID) 
    {
        $userGold = $db->select2('userInfo','userGold',"userID = '".$userID."'",true,P_Android);
        if(!$userGold) 
        {
             SendError2(E_DB,"Cannot get userGold from userInfo table userID = ");
        }
        return (int)$userGold["userGold"];
    }

    static function setUserGold($db,$userID,$userGold) 
    {
        $userInfo = array();
        $userInfo["userGold"] = $userGold;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }

    static function addUserGold($db,$userID,$userGold) 
    {
        $db->update('update userInfo set userGold=userGold+'.$userGold.' where userID='.$userID.' limit 1');
        return userInfo::getUserGold($db,$userID);
    }
   
    static function getUserLevel($db,$userID) 
    {
        $userLevel = $db->select2('userInfo','userLevel',"userID = '".$userID."'",true,P_Android);
        if(!$userLevel) 
        {
             SendError2(E_DB,"Cannot get userLevel from userInfo table userID = ");
        }
        return (int)$userLevel["userLevel"];
    }

    static function setUserLevel($db,$userID,$userLevel) 
    {
        $userInfo = array();
        $userInfo["userLevel"] = $userLevel;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }

    static function addUserLevel($db,$userID,$userLevel) 
    {
        $db->update('update userInfo set userLevel=userLevel+'.$userLevel.' where userID='.$userID.' limit 1');
        return userInfo::getUserLevel($db,$userID);
    }

    static function getUserLevel($db,$userID) 
    {
        $userLevel = $db->select2('userInfo','userLevel',"userID = '".$userID."'",true,P_Android);
        if(!$userLevel) 
        {
             SendError2(E_DB,"Cannot get userLevel from userInfo table userID = ");
        }
        return (int)$userLevel["userLevel"];
    }

    static function setUserLevel($db,$userID,$userLevel) 
    {
        $userInfo = array();
        $userInfo["userLevel"] = $userLevel;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }

    static function addUserLevel($db,$userID,$userLevel) 
    {
        $db->update('update userInfo set userLevel=userLevel+'.$userLevel.' where userID='.$userID.' limit 1');
        return userInfo::getUserLevel($db,$userID);
    }



}
?>
