<?php

class RandomStr
{
    static public function CreateRandomStr()
    {
        $ip = $_SERVER["REMOTE_ADDR"];
        $port = $_SERVER["REMOTE_PORT"];
        $time = date(time());
        $ranNum = mt_rand(1,10000);
        $resultStr = "'".$ip.$port.$time.$ranNum."'";
        return $resultStr;
    }

}
?>
