<?php

include_once ('../db/db.php');
//include_once ('../db/error.php');
$db = DB::getInstance();
$db->init_db(P_Android);
//echo " DbTest ";
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$userHero = array();

for($i=1;$i<1500001;$i++)
{
     $userID = mt_rand(1,200000);
     $heroID = mt_rand(0,5);
     $userHero['userID'] = "'".$userID."'";
     $userHero['heroID'] = "'".$heroID."'";
     $userHero['heroLevel'] = "'".mt_rand(0,60)."'";
     $userHero['useItOrNot'] = "'".mt_rand(0,1)."'";
     $result = $db->select2('userHero','*',"userID = '".$userID."' And heroID = '".$heroID."'",false,P_Android);
     if(!$result)
     {
        $db->insert2('userHero',$userHero,true);   
     }

     if($i % 50000 == 0)
     {
        echo $i.PHP_EOL;
     }
     if($i % 20 == 0)
     {
        mysql_query("COMMIT");
        mysql_query("BEGIN");
     }
}
mysql_query("COMMIT");
echo date('H:i:s').PHP_EOL;

?>
