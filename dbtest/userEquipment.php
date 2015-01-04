<?php

include_once ('../db/db.php');
//include_once ('../db/error.php');
$db = DB::getInstance();
$db->init_db(P_Android);
//echo " DbTest ";
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$newUser = array();

for($i=1;$i<8000001;$i++)
{
     //echo $i.PHP_EOL;

     $userID = mt_rand(1,200000);
     $equipID = mt_rand(0,40);
     $newUser['userID'] = "'".$userID."'";
     $newUser['equipmentID'] = "'".$equipID."'";
     $newUser['equipmentLevel'] = "'".mt_rand(0,30)."'";
     $newUser['useItOrNot'] = "'".mt_rand(0,1)."'";
     //echo " $i ";
     //
     if($userID%6 == 0)
     {
         $result = $db->select2('userEquipment0','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment0',$newUser,true);
         }
     }
     else if($userID%6 == 1)
     {
          $result = $db->select2('userEquipment1','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment1',$newUser,true);
         }
     }
     else if($userID%6 == 2)
     {
           $result = $db->select2('userEquipment2','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment2',$newUser,true);
         }
     }
     else if($userID%6 == 3)
     {
            $result = $db->select2('userEquipment3','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment3',$newUser,true);
         }
     }
     else if($userID%6 == 4)
     {
            $result = $db->select2('userEquipment4','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment4',$newUser,true);
         }
     }
     else if($userID%6 == 5)
     {
            $result = $db->select2('userEquipment5','*',"userID = '".$userID."' And equipmentID = '".$equipID."'",false,P_Android);
         if(!$result && count($result)<2)
         {
             $db->insert2('userEquipment5',$newUser,true);
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
