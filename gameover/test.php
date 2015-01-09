<?php
include_once '../db/error.php';

SendOk2(file_get_contents($_FILES['test']['tmp_name']));
//file_get_contents($_FILES['test']['tmp_name']);
//SendOk2($_FILES);
?>
