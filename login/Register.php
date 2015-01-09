<?php

include_once ('../db/db2.php');
include_once ('../db/error.php');
include_once '../db/config.php';

    $db = new DB2('babyplanID');
    if (isset($_POST["userName"]) 
        && $_POST["userName"] != ''
        && isset($_POST["pwd"])
        && $_POST["pwd"] != '')
    {
       $username = $_POST['userName'];
       $result = $db->select2('gitUserID','*',"userName = '".$_POST['userName']."'",false,P_Android);
       if($result)
       {
           SendError2(E_AUTH,"The Same Name");
       }
       else
       {
            $db->start_transaction();
            $newUserName = array();
            $newUserName['userName'] = "'".$_POST['userName']."'";
            $newUserID = $db->insert2('babyplanID.gitUserID',$newUserName,true);
            $newUser = array();
            if($newUserID % 10 == 0)
            {    
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID0',$newUser,true);
            }
            if($newUserID % 10 == 1)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID1',$newUser,true);
            }
            if($newUserID % 10 == 2)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID2',$newUser,true);
            }
            if($newUserID % 10 == 3)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID3',$newUser,true);
            }
            if($newUserID % 10 == 4)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID4',$newUser,true);
            }
            if($newUserID % 10 == 5)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID5',$newUser,true);
            }
            if($newUserID % 10 == 6)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID6',$newUser,true);
            }
            if($newUserID % 10 == 7)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID7',$newUser,true);
            }
            if($newUserID % 10 == 8)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID8',$newUser,true);
            }
            if($newUserID % 10 == 9)
            {
                $newUser['userID'] = $newUserID;
                $newUser['pwd'] = "'".$_POST['pwd']."'";
                $newUser['userName'] = "'".$_POST['userName']."'";
                $userID = $db->insert2('babyplanID.userID9',$newUser,true);
            }
            $db->commit_transaction();
            SendOk2();
       } 
    }
    else 
    {
        SendError2(E_ARG,"Accept RegisterInfo Error !!!");
    }
?>
