<?php
include_once '../db/error.php';
include_once ('../db/db2.php');
include_once '../db/config.php';
include_once '../login/checkUser.php';

    $db = new DB2('babyplan');
    $db->init_db(P_Android);
    $userID = checkUser();
    //if($_POST["WinOrFail"] === false)
   // {
    
    //}
    //else 
    {
       // if($_POST["EndTime"] >5 && $_POST["GoldNum"] >8)
        {
           // SendOk2("3");
        }        
       // else if($_POST["EndTime"] >2 && $_POST["GoldNum"] >3)
        {
           // SendOk2("2");
        }
       // else if( $_POST["GoldNum"] >0)
        {
           // SendOk2("1");
        }
       // else
        {
           // SendOk2("0");
        }

    }
        $db->start_transaction();
        $result = $db->select2('userInfo','*',"userID = '".$userID."'",false,P_Android);
        if($result)
        {
            $userInfo = array();
            $userInfo["userGold"] = $_POST["GoldNum"]+$result[0]["userGold"];
            $db->update2('userInfo',$userInfo,"userID = '".$userID."'",false,false);

            SendOk2($userInfo);
          
        }
        else
        {
             SendError2(E_DB,"Read userInfo Error !!!");
        }
        $db->commit_transaction();
      
   ?>
