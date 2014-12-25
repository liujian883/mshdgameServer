<?php

include_once ('../db/db.php');
include_once ('../db/error.php');
  $db = DB::getInstance();
   if (isset($_POST["userName"]) 

        && $_POST["userName"] != ''
        && isset($_POST["pwd"])
        && $_POST["pwd"] != '')
   {
       $username = $_POST['userName'];
       $result = $db->select2('userID','*',"userName = '".$_POST['userName']."'",false,1);
       if($result)
        {
           SendError2(E_AUTH,"The Same Name");
        }
        else
        {
            $newUser = array();
            $newUser['pwd'] = "'".$_POST['pwd']."'";
            $newUser['userName'] = "'".$_POST['userName']."'";
            $db->insert2('babyplan.userID',$newUser,true);
            SendOk2();
        } 
    }
    else 
    {
        SendError2(E_ARG,"Accept RegisterInfo Error !!!");
    }
?>
