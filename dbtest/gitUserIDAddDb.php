<?php

include_once ('../db/db2.php');
include_once ('../db/error.php');
$db = new DB2('babyplanID');
$db->init_db(P_Android);
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$newUser = array();

for($i=1;$i<300001;$i++)
{
     $newUser['userName'] = "'".$i."'";

     $db->insert2('babyplanID.gitUserID',$newUser,true);
     if($i%20==0)
     {
        mysql_query("COMMIT");
        mysql_query("BEGIN");
     }
     if($i % 50000 == 0)
     {
        echo $i.PHP_EOL;
     }
}
mysql_query("COMMIT");
echo date('H:i:s').PHP_EOL;

?>
