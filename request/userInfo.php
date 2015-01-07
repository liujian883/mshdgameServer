<?php
include_once '../db/db2.php';
include_once '../db/error.php';
include_once '../login/checkUser.php';

    $db = new DB2('babyplan');
    $userID = checkUser();
    $userInfo = array();
    $result = $db->select2('userInfo','*',"userID = '".$_SESSION['userID']."'",false,P_Android);
    if($result)
    { 
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
        SendError2(E_AUTH,"Please relogin");
    }

?>
