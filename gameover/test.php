<?php
include_once '../db/error.php';
include_once '../class/randomStr.php';
include_once '../db/mem.php';
//$target_path = "/var/www/html/mshd/srv/wjx/server/gameover/test777/";
//$target_path = $target_path .basename( $_FILES['data']['name']); 

//echo file_get_contents($_FILES['data']['tmp_name']).PHP_EOL;
//if(move_uploaded_file($_FILES['data']['tmp_name'],$target_path))
//{
   // var_dump($target_path);
//}
//else
//{
    //echo 'error';
//}
//
function proStartTime() 
{
    global $startTime;
    $mtime1 = explode(" ", microtime());
    $startTime = $mtime1[1] + $mtime1[0];
}
function proEndTime() 
{
    global $startTime,$set;
    $mtime2 = explode(" ", microtime());
    $endtime = $mtime2[1] + $mtime2[0];
    $totaltime = ($endtime - $startTime);
    $totaltime = number_format($totaltime, 7);
    echo "process time: ".$totaltime.PHP_EOL;
}

$privateKey = "huangxuwangjingx";
$iv     = "liujianzhangjing";

$resultlevel = file_get_contents($_FILES['data']['tmp_name']);
//proStartTime();
//$resultlevel = iconv('GBK//IGNORE', 'UTF-8', $resultlevel);
//$resultlevel = base64_decode($resultlevel); 
$decrypted = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $privateKey, $resultlevel, MCRYPT_MODE_CBC, $iv);
$resultlevel = rtrim($decrypted, "\0"); 
//$resultlevel = str_replace("\0","",$decrypted);
//SendOk2($resultlevel);
$resultArray= json_decode($resultlevel,true);
SendOk2($resultArray['RandomID']);
//if(mem::mcGet($randomID) === false)
//{
   // SendError2(E_MEM,"");
//}
//else
//{

//proEndTime();
//echo $decrypted;
//SendOk2(file_get_contents($_FILES['data']['tmp_name']));
//SendOk2(microtime());
//SendOk2($decrypted);
//}


?>
