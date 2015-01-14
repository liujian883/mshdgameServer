<?php
session_start();
include_once '../db/error.php';
include_once ('../db/mem.php');

    function checkUser()
    {
        if(!isset($_SESSION['userID']))
        { 
            SendError2(E_AUTH,"NO SESSION");
        }
        else
        {
            $sessionID = mem::getInstance()->mcGet("mshd-".$_SESSION['userID']);
            if( $sessionID == session_id() )
            {
                 return $_SESSION['userID'];
            }
            else
            {
                 SendError2(E_AUTH,"SESSIONID MATCH ERROR");
            }
        } 
    }
    function checkUser2($sessionid)
    {
        $session = mem::getInstance()->mcGet($sessionid);
        if($session !== false)
        {
            if(session_decode($session))
            {
                return $_SESSION['userID'];
            }
            else
            {
                SendError2(E_AUTH,"SESSION Decode False mem_session = $session");
            }
        }
        else
        {
            SendError2(E_AUTH,"CANNOT FIND SESSION FROM MEMACHE,sessionid = $sessionid");
        }
         
    }

?>
