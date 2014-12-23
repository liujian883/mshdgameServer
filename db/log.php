<?php

include_once('../db/db.php');

function log_error($info) {
	//echo 'Error: '.$info.PHP_EOL;
}

function log_debug($info) {
	//echo 'Debug: '.$info.PHP_EOL;
}

function log_warning($info) {
	//echo 'Warning: '.$info.PHP_EOL;
}

function log_fatal($info) {
	die('Fatal: '.$info.PHP_EOL);
}

class ErrorInfo{
	var $error;
}

class OkInfo {
	var $result;
}

function sendError($info, $type = null, $exit = true) {
	global $userid_;
	$errinfo = new ErrorInfo;
	$errinfo->error = $info;
	if($type != null) {
		$rtime;
		if(isset($_SERVER['REQUEST_TIME'])) {
			$rtime = $_SERVER['REQUEST_TIME'];
		}else {
			$rtime = time();
		}
		$elog_arr['time'] = "'".date('Y-m-d H:i:s', $rtime)."'";
		if(isset($_SERVER['REMOTE_ADDR'])) {
			$elog_arr['clip'] = "'".preg_replace('/,.*/', '', $_SERVER['REMOTE_ADDR'])."'";
		}else {
			$elog_arr['clip'] = "'0.0.0.0'";
		}
		$elog_arr['type'] = $type;
		if(isset($_SERVER['REQUEST_URI'])) {
			$elog_arr['rurl'] = "'".preg_replace('/\?.*/', '', $_SERVER['REQUEST_URI'])."'";
		}else {
			$elog_arr['rurl'] = "'cannot get'";
		}
		$elog_arr['wjid'] = isset($userid_) ? $userid_ : 0;
        $info = str_replace("'", "\\'", $info);
		$elog_arr['info'] = "'".$info."'";
		DB::getInstance()->insert2('elog', $elog_arr);
	}
    if($exit) {
        die(json_encode($errinfo));
    }
}

function sendOk() {
	$okinfo = new OkInfo;
	$okinfo->result = 'ok';
	echo json_encode($okinfo);;
}
