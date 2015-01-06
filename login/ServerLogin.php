<?php

include_once ('../db/db2.php');
include_once ('../db/error.php');
include_once '../db/config.php';
include_once 'checkUser.php';

    $db = new DB2('babyplan');
    $userID = checkUser();
    $result = $db->select2('userInfo','*',"userID = '".$userID."'",false,P_Android);
    if($result)
    {
        $userInfo = array();
        $userInfo['userName'] = $result[0]['userName'];
        $userInfo['userGold'] = $result[0]['userGold'];
        $userInfo['userLevel'] = $result[0]['userLevel'];
        $userInfo['userEXP'] = $result[0]['userEXP'];
        $userInfo['userPower'] = $result[0]['userPower'];
        $userInfo['userDiamond'] = $result[0]['userDiamond'];
        //...存在  
        SendOk2($userInfo); 
    }
    else
    {
        $db->start_transaction();
        //插入userInfo表  
        $userInfo = array();
        $userInfo['userID'] = $userID;
        $userInfo['userName'] = "'".$_SESSION['userName']."'";
        $userInfo['userGold'] = 0;
        $userInfo['userLevel'] = 1;
        $userInfo['userEXP'] = 0;
        $userInfo['userPower'] = 0;
        $db->insert2('babyplan.userInfo',$userInfo,true);
        //插入userHero表    
        $userHero = array();
        $userHero['userID'] = $userID;
        $userHero['heroID'] = 0;
        $userHero['heroLevel'] = 0;
        $userHero['useItOrNot'] = 0;
        $db->insert2('babyplan.userHero',$userHero,true);
        //插入userProps表    
        $userProps = array();
        $userProps['userID'] = $userID;
        $userProps['propsID'] = 0;
        $userProps['propsNumber'] = 0;
        if($userID % 2 == 0)
        {
            $db->insert2('babyplan.userProps0',$userProps,true);
        }
        else
        {
            $db->insert2('babyplan.userProps1',$userProps,true);
        }
        //插入userEquipment表   
        $userEquipment = array();
        $userEquipment['userID'] = $userID;
        $userEquipment['equipmentID'] = 0;
        $userEquipment['equipmentLevel'] = 0;
        $userEquipment['useItOrNot'] = 0;
        if($userID % 6 == 0)
        {
            $db->insert2('babyplan.userEquipment0',$userEquipment,true);
        }
        else if($userID % 6 == 1)
        {
            $db->insert2('babyplan.userEquipment1',$userEquipment,true);
        }
        else if($userID % 6 == 2)
        {
            $db->insert2('babyplan.userEquipment2',$userEquipment,true);
        }
        else if($userID % 6 == 3)
        {
            $db->insert2('babyplan.userEquipment3',$userEquipment,true);
        }
        else if($userID % 6 == 4)
        {
            $db->insert2('babyplan.userEquipment4',$userEquipment,true);
        }
        else if($userID % 6 == 5)
        {
            $db->insert2('babyplan.userEquipment5',$userEquipment,true);
        }
        //插入userPet表  
        $userPet = array();
        $userPet['userID'] = $userID;
        $userPet['petID'] = 0;
        $userPet['petLevel'] = 0;
        $userPet['useItOrNot'] = 0;
        if($userID % 4 == 0)
        {
            $db->insert2('babyplan.userPet0',$userPet,true);
        }
        else if($userID % 4 == 1)
        {
            $db->insert2('babyplan.userPet1',$userPet,true);
        }
        else if($userID % 4 == 2)
        {
            $db->insert2('babyplan.userPet2',$userPet,true);
        }
        else if($userID % 4 == 3)
        {
            $db->insert2('babyplan.userPet3',$userPet,true);
        }
   
        $db->commit_transaction();
        //插入成功后返回userInfo表中的数据   
        $Info = $db->select2('userInfo','*',"userID = '".$userID."'",false,P_Android);
        if($Info)
        {
            $Info = array();
            $Info['userName'] = $result[0]['userName'];
            $Info['userGold'] = $result[0]['userGold'];
            $Info['userLevel'] = $result[0]['userLevel'];
            $Info['userEXP'] = $result[0]['userEXP'];
            $Info['userPower'] = $result[0]['userPower'];
            $Info['userDiamond'] = $result[0]['userDiamond'];
            SendOk2($Info);
        }
        else
        {
            SendError2(E_AUTH,"after insert not have data");
        }
    }
?>
