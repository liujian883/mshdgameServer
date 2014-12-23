<?php
include_once '../model/enemymodel.php';
include_once '../model/petmodel.php';

//echo $_POST['type'];
//die("xx");
if(isset($_POST['type']))
{
	if($_POST['type'] == "enemy")
	{
		$enemy = new enemymodel;
		$enemy->getmodeldata();
	}
	else if($_POST['type'] == "pet")
	{
		$pet = new petmodel;
		$pet->getmodeldata();
	}
}
else
{
    echo 'aaaaaaaaaaaaa';
}
