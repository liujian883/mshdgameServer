<?php

session_start();

include_once '../db/error.php';
include_once ('../db/db2.php');
//include_once ('../db/error.php');
include_once ('../db/mem.php');

  global $_config;
  $db = new DB2('babyplanID');
   if (isset($_POST["userName"]) 
        && $_POST["userName"] != ''
        && isset($_POST["pwd"])
        && $_POST["pwd"] != '')
   {

       $result = $db->select2('gitUserID','userID',"userName = '".$_POST['userName']."'",false,P_Android);
       if($result[0]["userID"] % 10 == 0)
       {
            $pwd = $db->select2('userID0','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID0','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }

       }
       else if($result[0]["userID"] % 10 == 1)
       {
            $pwd = $db->select2('userID1','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID1','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 2)
       {
            $pwd = $db->select2('userID2','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID2','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 3)
       {
            $pwd = $db->select2('userID3','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID3','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 4)
       {
            $pwd = $db->select2('userID4','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID4','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 5)
       {
            $pwd = $db->select2('userID5','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID5','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 6)
       {
            $pwd = $db->select2('userID6','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID6','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 7)
       {
            $pwd = $db->select2('userID7','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID7','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 8)
       {
            $pwd = $db->select2('userID8','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID8','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
       else if($result[0]["userID"] % 10 == 9)
       {
            $pwd = $db->select2('userID9','pwd',"userName = '".$_POST['userName']."'",false,P_Android);
            if(strcmp($pwd[0]["pwd"],$_POST["pwd"]) == 0)
            {
                $userID = $db->select2('userID9','userID',"userName = '".$_POST['userName']."'",false,P_Android);
                $_SESSION['userID'] = $userID[0]['userID'];
                $_SESSION['userName'] = $_POST['userName'];
                //判断memory cache中是否存在userID，存在删除对应session
                $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
                if($sessionID !== false)
                {
                    mem::getInstance()->mcDel($sessionID);
                }
                mem::getInstance()->mcSet("mshd-".$_SESSION['userID'],session_id(),36000);//10小时失效
                SendOk2($_config['server']);
            }
            else
            {
                SendError2(E_AUTH,"Login Fail");
            }
       }
    }
    else 
    {
        SendError2(E_AUTH,"Accept LoginInfo Error !!!");
    }
?>
