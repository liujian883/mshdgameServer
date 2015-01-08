<?php
include_once '../db/error.php';
include_once '../db/db2.php';
include_once '../db/config.php';
include_once '../login/checkUser.php';
include_once '../class/userInfo.php';

    $db = new DB2('babyplan');
    $db->init_db(P_Android);
    $userID = checkUser();
    $result = array();

    $db->start_transaction();
    $result["userGold"] = userInfo :: addUserGold($db,$userID,$_POST["GoldNum"]);
   // $result["userGold"] = userInfo :: getUserGold($db,$userID);
    $db->commit_transaction();

    //if($_POST["WinOrFail"] === false)
   // {
    
    //}
    //else 
    {
       if($_POST["EndTime"] >5 && $_POST["GoldNum"] >8)
       {
           $result["star"] = 3;
            SendOk2($result);
        }        
       else if($_POST["EndTime"] >2 && $_POST["GoldNum"] >3)
        {
           $result["star"] = 2;
            SendOk2($result);
        }
       else if( $_POST["GoldNum"] >0)
        {
           $result["star"] = 1;
            SendOk2($result);
        }
       else
        {
           $result["star"] = 0;
            SendOk2($result);
        }

    }
    //$db->start_transaction();
   //$db->commit_transaction();
      
   ?>
