<?php
include_once '../class/randomStr.php';
include_once '../db/mem.php';
include_once '../db/error.php';
include_once '../db/db2.php';
include_once '../db/config.php';
include_once '../login/checkUser.php';
include_once '../class/userInfo.php';

$privateKey = "huangxuwangjingx";
$iv     = "liujianzhangjing";

//SendOk2(getallheaders());
$resultlevel = file_get_contents($_FILES['data']['tmp_name']);
$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $privateKey, $resultlevel, MCRYPT_MODE_CBC, $iv);
$resultlevel = rtrim($decrypted, "\0"); 
$resultArray= json_decode($resultlevel,true);
//SendOk2($resultArray['RandomID']);
if(mem::getInstance()->mcDel("mshd-".$resultArray['RandomID']) === false)
{
    SendError2(E_MEM,"LevelRandomID Error");
}
else
{
    $db = new DB2('babyplan');
    $db->init_db(P_Android);
    $userID = checkUser2($resultArray['Cookie']);
    $result = array();
    $db->start_transaction();
    $result["userGold"] = userInfo :: addUserGold($db,$userID,$resultArray['GoldNum']);
    $db->commit_transaction();
    SendOk2($result["userGold"]);
}

?>
