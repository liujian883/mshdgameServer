<?php
    
include_once './checkUser.php';
include_once '../db/db2.php';

    $userID = checkUser();
    $db = new DB2('babyplan');
    $result = $db->select2('userInfo','*',"userID = '".$_SESSION['userID']."'",false,P_Android);
    if($result)
    {
        SendOk2($result[0]);
    }
    else
    {
        SendError2(E_AUTH,"NO DATA");
    }

?>
