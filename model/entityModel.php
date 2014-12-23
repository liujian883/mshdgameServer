<?php

include_once '../db/db.php';

abstract class entitymodel
{
	protected $db;
	
	public function __construct()
	{
		$this->db = DB::getInstance();
	}
	
	public abstract function getmodeldata(); 
}
