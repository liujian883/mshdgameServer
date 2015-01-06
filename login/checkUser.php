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
                 SendError2(E_AUTH,"SESSION TIMEOUT");
            }
        } 
    }

?>
