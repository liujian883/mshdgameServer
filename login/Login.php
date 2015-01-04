<?php

session_start();

include_once '../db/error.php';
include_once ('../db/db2.php');
//include_once ('../db/error.php');

  global $_config;
  $db = new DB2('babyplanID');
   if (isset($_POST["userName"]) 
        && $_POST["userName"] != ''
        && isset($_POST["pwd"])
        && $_POST["pwd"] != '')
    {
        $result = $db->select2('userID','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
        if(strcmp($result[0]["pwd"],$_POST["pwd"]) == 0)
        {
            $userID = $db->select2('userID','userID',"userName = '".$_POST['userName']."'",false,P_Android);
            $_SESSION['userID'] = $userID;
            SendOk2($_config['server']);
        }
        else
        {
            SendError2(E_AUTH,"Login Fail");
        }
    }
    else 
    {
        SendError2(E_AUTH,"Accept LoginInfo Error !!!");
    }
?>
