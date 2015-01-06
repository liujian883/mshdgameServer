<?php
include_once ('../db/mem.php');
mem::getInstance()->mcSet('liujian', 'liujian883');
mem::getInstance()->mcSet('liujian', 'liujian883');
mem::getInstance()->mcSet('liujian', 'liujian883');
mem::getInstance()->mcSet('liujian', 'liujian883');
mem::getInstance()->mcSet('liujian', 'liujian884');
echo mem::getInstance()->mcGet('liujian');

mem::getInstance()->mcDel('liujian');
var_dump(mem::getInstance()->mcDel('liujian'));

var_dump( mem::getInstance()->mcGet('liujian'));

?>
