<?php
session_start();
include_once '../db/error.php';

    function checkUser()
    {
        if(!isset($_SESSION['userID']))
        { 
            SendError2(E_AUTH,"NO SESSION");
        }
        else
        {
            return $_SESSION['userID'];
        } 
    }

?>
