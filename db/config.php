<?php

// db
$_config['mysql_host'] = 'localhost';
$_config['mysql_user'] = 'root'; // ???ݿ??û???
$_config['mysql_password'] = 'miaosuhudong2014'; // ???ݿ?????
$_config['mysql_dbname'] = 'babyplan'; // ???ݿ???
$_config['db'] = array('babyplan'=>array('mysql_host'=>'localhost','mysql_user'=>'root','mysql_password'=>'miaosuhudong2014', 'mysql_dbname'=>'babyplan'),
                       'babyplanID'=> array('mysql_host'=>'localhost','mysql_user'=>'root','mysql_password'=>'miaosuhudong2014','mysql_dbname'=>'babyplanID'),
                       'register'=> array('mysql_host'=>'localhost','mysql_user'=>'root','mysql_password'=>'miaosuhudong2014','mysql_dbname'=>'register'));

$_config['server'] = array('1'=>'42.62.14.109','2'=>'42.62.14.110');

// memcache
$_config['memcache'] = array('host'=>'10.6.14.167','port'=>'11211');

// tableConst
$_config['table'] = array('userPet'=>4,'userProps'=>2,'userEquipment'=>6);

