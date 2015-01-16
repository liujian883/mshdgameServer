<?php

include_once '../db/error.php';

function errordeal()
{
    set_exception_handler('myException');
    set_error_handler('myError');
   // register_shutdown_function('myShutdown');
}

function myError($errno,$errstr,$errfile,$errline)
{
    $out = 'Error:';
    switch($errno)
    {
    case E_USER_ERROR:
        $out .= "Fatal error on line $errline ";
        exit(1);
        break;
    case E_USER_WARNING:
        $out.="WARNING [$errno] $errstr ";
        break;
    case E_USER_NOTICE:
        $out.="NOTICE [$errno] $errstr ";
        break;
    default:
        $out.= "Unknow type error [$errno] $errstr ";
        break;  
    }
    TypeLog('Error',$out);
}

function myException($exception)
{ 
    TypeLog('Exception','Exception:'.$exception->getMessage());
}


function TypeLog($type,$message)
{
    //define_syslog_variables();
    openlog($type,LOG_PID,LOG_LOCAL0);

    $data = date("Y/m/s H:i:s");

    syslog(LOG_DEBUG,"Message:$message.file trace:".getBacktrace());
    closelog();
}
errordeal();
