<?php

include_once '../db/error.php';
include_once ('../db/db2.php');

    $db = new DB2('babyplanID');
    global $_config;
    SendOk2($_config['server']);

?>
