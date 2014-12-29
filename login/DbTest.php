<?php

include_once ('../db/db.php');
//include_once ('../db/error.php');
$db = DB::getInstance();
$db->init_db(P_Android);
//echo " DbTest ";
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$newUser = array();

for($i=1;$i<4000001;$i++)
{
     $newUser['pwd'] = "'".$i."'";
     $newUser['userName'] = "'".$i."'";
     //echo " $i ";
     $db->insert2('userID',$newUser,true);
     if($i%10==0)
     {
        mysql_query("COMMIT");
        mysql_query("BEGIN");
     }
}
mysql_query("COMMIT");
echo date('H:i:s').PHP_EOL;

?>
