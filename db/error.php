<?php

define('E_AUTH', 0); // 用户名或密码错误
define('E_ARG', 1); // 缺少参数
define('E_DB', 2); // 数据库错误
define('E_RSTR', 3); // 受限错误
define('E_OTHER', 4); // 其它错误
define('E_OK',5);//ok

class Info
{
	var $ok;
	var $type;
	var $info;
}
function SendError($info,$type)
{
	$errinfo = new info;
	$errinfo->ok = 'error';
	$errinfo->info = $info;
	$errinfo->type = $type;
	die(json_encode($errinfo));
}

function SendOk($info)
{
	$okinfo = new Info;
	$okinfo->ok = 'ok';
	$okinfo->info = $info;
	$okinfo->type = E_OK;
	echo json_encode($okinfo);
}