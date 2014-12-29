<?php

define('E_AUTH', 0); // ?û?????????????
define('E_ARG', 1); // ȱ?ٲ???
define('E_DB', 2); // ???ݿ?????
define('E_RSTR', 3); // ???޴???
define('E_OTHER', 4); // ????????
define('E_OK',5);//ok

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
	$errinfo->info = $info;
	$errinfo->type = $type;
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
