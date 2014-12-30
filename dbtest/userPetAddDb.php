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
     //echo $i.PHP_EOL;

     $userID = mt_rand(1,200000);
     $petID = mt_rand(0,20);
     $newUser['userID'] = "'".$userID."'";
     $newUser['petID'] = "'".$petID."'";
     $newUser['petLevel'] = "'".mt_rand(0,60)."'";
     $newUser['useItOrNot'] = "'".mt_rand(0,1)."'";
     //echo " $i ";
     if($userID%4 == 0)
     {
         $result = $db->select2('userPet0','*',"userID = '".$userID."' And petID = '".$petID."'",false,P_Android);
         if(!$result)
         {
             $db->insert2('userPet0',$newUser,true);
         }
     }
     else if($userID%4 == 1)
     {
         $result = $db->select2('userPet1','*',"userID = '".$userID."' And petID = '".$petID."'",false,P_Android);
         if(!$result)
         {
             $db->insert2('userPet1',$newUser,true);
         }
     }
     else if($userID%4 == 2)
     {
         $result = $db->select2('userPet2','*',"userID = '".$userID."' And petID = '".$petID."'",false,P_Android);
         if(!$result)
         {
             $db->insert2('userPet2',$newUser,true);
         }
     }
     else if($userID%4 == 3)
     {
         $result = $db->select2('userPet3','*',"userID = '".$userID."' And petID = '".$petID."'",false,P_Android);
         if(!$result)
         {
             $db->insert2('userPet3',$newUser,true);
         }
     }

     if($i%50000==0)
     {
        echo $i.PHP_EOL;
     }

     if($i%20==0)
     {
        mysql_query("COMMIT");
        mysql_query("BEGIN");
     }
}
mysql_query("COMMIT");
echo date('H:i:s').PHP_EOL;

?>
