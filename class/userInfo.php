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

    static function setAllUserInfo($db,$array)
    {
        $db->insert2('userInfo',$array);
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
    
    static function addUserEXP($db,$userID,$userEXP) 
    {
        $db->update('update userInfo set userEXP=userEXP+'.$userEXP.' where userID='.$userID.' limit 1');
        return userInfo::getUserEXP($db,$userID);
    }

    static function getUserEXP($db,$userID) 
    {
        $userEXP = $db->select2('userInfo','userEXP',"userID = '".$userID."'",true,P_Android);
        if(!$userEXP) 
        {
             SendError2(E_DB,"Cannot get userEXP from userInfo table userID = ");
        }
        return (int)$userEXP["userEXP"];
    }

    static function setUserEXP($db,$userID,$userEXP) 
    {
        $userInfo = array();
        $userInfo["userEXP"] = $userEXP;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }
    
    static function addUserPower($db,$userID,$userPower) 
    {
        $db->update('update userInfo set userPower=userPower+'.$userPower.' where userID='.$userID.' limit 1');
        return userInfo::getUserPower($db,$userID);
    }

    static function getUserPower($db,$userID) 
    {
        $userPower = $db->select2('userInfo','userPower',"userID = '".$userID."'",true,P_Android);
        if(!$userPower) 
        {
             SendError2(E_DB,"Cannot get userPower from userInfo table userID = ");
        }
        return (int)$userPower["userPower"];
    }

    static function setUserPower($db,$userID,$userPower) 
    {
        $userInfo = array();
        $userInfo["userPower"] = $userPower;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }

    static function addUserDiamond($db,$userID,$userDiamond) 
    {
        $db->update('update userInfo set userDiamond=userDiamond+'.$userDiamond.' where userID='.$userID.' limit 1');
        return userInfo::getUserDiamond($db,$userID);
    }

    static function getUserDiamond($db,$userID) 
    {
        $userDiamond = $db->select2('userInfo','userDiamond',"userID = '".$userID."'",true,P_Android);
        if(!$userDiamond) 
        {
             SendError2(E_DB,"Cannot get userDiamond from userInfo table userID = ");
        }
        return (int)$userDiamond["userDiamond"];
    }

    static function setUserDiamond($db,$userID,$userDiamond) 
    {
        $userInfo = array();
        $userInfo["userDiamond"] = $userDiamond;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }
    
    static function addNumberOfPassLevel($db,$userID,$numberOfPassLevel) 
    {
        $db->update('update userInfo set numberOfPassLevel=numberOfPassLevel+'.$numberOfPassLevel.' where userID='.$userID.' limit 1');
        return userInfo::getNumberOfPassLevel($db,$userID);
    }

    static function getNumberOfPassLevel($db,$userID) 
    {
        $numberOfPassLevel = $db->select2('userInfo','numberOfPassLevel',"userID = '".$userID."'",true,P_Android);
        if(!$numberOfPassLevel) 
        {
             SendError2(E_DB,"Cannot get numberOfPassLevel from userInfo table userID = ");
        }
        return (int)$numberOfPassLevel["numberOfPassLevel"];
    }

    static function setNumberOfPassLevel($db,$userID,$numberOfPassLevel) 
    {
        $userInfo = array();
        $userInfo["numberOfPassLevel"] = $numberOfPassLevel;
        $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);
    }

}
?>
