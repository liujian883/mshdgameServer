<?php

define('E_AUTH', 0); // login error 
define('E_ARG', 1); // parament error
define('E_DB', 2); // DB error
define('E_RSTR', 3); // 
define('E_OTHER', 4); // 
define('E_OK',5);//ok
define('E_MEM',6);// memcache error
define('E_RED',7);

class Info
{
	var $ok;
	var $type;
	var $info;
}
function SendError2($type,$info = "error")
{
	$errinfo = new info;
	$errinfo->ok = 'error';
	//$errinfo->info = $info;
    $errinfo->type = $type;
    $errorinfo = getBacktrace();
    $errinfo->info = $info.",errorinfo:$errorinfo";
	die(json_encode($errinfo));
}

function SendOk2($info = "ok")
{
	$okinfo = new Info;
	$okinfo->ok = 'ok';
	$okinfo->info = $info;
	$okinfo->type = E_OK;
	echo json_encode($okinfo);
}

function getBacktrace()
{
    ob_start();
    debug_print_backtrace();
    return ob_get_clean();
}
