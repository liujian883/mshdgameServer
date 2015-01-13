<?php
include_once ('../db/mem.php');
class randomStr
{
    static public function CreateRandomStr()
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        $port = $_SERVER["REMOTE_PORT"];
        $time = date(time());
        $ranNum = mt_rand(1,10000);
        $resultStr = "'".$ip.$port.$time.$ranNum."'";
        mem::getInstance()->mcSet("mshd-".$resultStr,"LevelRequest",1200);
        return $resultStr;
    }

}
?>
