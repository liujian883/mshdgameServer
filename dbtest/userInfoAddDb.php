<?php

include_once ('../db/db.php');
//include_once ('../db/error.php');
$db = DB::getInstance();
$db->init_db(P_Android);
//echo " DbTest ";
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$newUser = array();

for($i=1;$i<200001;$i++)
{
     $newUser['userID'] = "'".$i."'";
     $newUser['userGold'] = "'".$i."'";
     $newUser['userEXP'] = "'".$i."'";
     $newUser['userPower'] = "'".$i."'";
     $newUser['userDiamond'] = "'".$i."'";

     $db->insert2('userInfo',$newUser,true);
     if($i%10==0)
     {
        mysql_query("COMMIT");
        mysql_query("BEGIN");
     }
}
mysql_query("COMMIT");
echo date('H:i:s').PHP_EOL;

?>
