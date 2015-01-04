<?php

include_once ('../db/db.php');
//include_once ('../db/error.php');
$db = DB::getInstance();
$db->init_db(P_Android);
//echo " DbTest ";
echo date('H:i:s').PHP_EOL;
mysql_query("BEGIN");
$userProps = array();

for($i=1;$i<2000001;$i++)
{
     $userID = mt_rand(1,200000);
     $propsID = mt_rand(0,20);
     $userProps['userID'] = "'".$userID."'";
     $userProps['propsID'] = "'".$propsID."'";
     $userProps['propsNumber'] = "'".mt_rand(0,10)."'";
     if($userID % 2 == 0)
     {
         $result = $db->select2('userProps0','*',"userID = '".$userID."' And propsID = '".$propsID."'",false,P_Android);
         if(!$result)
         {
            $db->insert2('userProps0',$userProps,true);   
         }
     }
     else
     { 
         $result = $db->select2('userProps1','*',"userID = '".$userID."' And propsID = '".$propsID."'",false,P_Android);
         if(!$result)
         {
            $db->insert2('userProps1',$userProps,true);    
         }
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
