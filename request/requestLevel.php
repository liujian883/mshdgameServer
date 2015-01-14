<?php
include_once '../db/db2.php';
include_once '../db/error.php';
include_once '../login/checkUser.php';
include_once '../class/userInfo.php';
include_once '../class/randomStr.php';

    $db = new DB2('babyplan');
    $userID = checkUser();
    $result = randomStr::CreateRandomStr();
    if($result)
    { 
        //...存在 
        
        SendOk2($result); 
    }
    else
    {
        SendError2(E_AUTH,"Please relogin");
    }

?>
