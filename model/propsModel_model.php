<?php


class propsModelModel {
	var $propsModelID;
	var $propsName;
	var $useGold;
	var $money;
	var $takeLimit;
	var $haveLimit;
	var $useDis;
	var $effectTime;
	var $useTime;
	var $heroDefence;
	var $restoreBlood;
	var $restoreMagic;
	var $rebound;
	var $changeCat;
	var $petAttack;
	var $petAttackSpeed;
	var $petRunSpeed;
	var $enemyAttack;
	var $enemyAttackSpeed;
	var $enemyRunSpeed;
	var $attackCircle;
	var $defenceCircle;
	var $light;
	public static $data = array(
		1=>array(
			'propsName'=>'护盾',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>2,
			'haveLimit'=>999,
			'useDis'=>0,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>2,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		2=>array(
			'propsName'=>'大蓝瓶',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>3,
			'haveLimit'=>999,
			'useDis'=>0,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>40,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		3=>array(
			'propsName'=>'小蓝瓶',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>6,
			'haveLimit'=>999,
			'useDis'=>0,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>20,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		4=>array(
			'propsName'=>'大血瓶',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>3,
			'haveLimit'=>999,
			'useDis'=>-1,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>0,
			'restoreBlood'=>40,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		5=>array(
			'propsName'=>'小血瓶',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>6,
			'haveLimit'=>999,
			'useDis'=>-1,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>0,
			'restoreBlood'=>20,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		6=>array(
			'propsName'=>'复原剂',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>2,
			'haveLimit'=>999,
			'useDis'=>0,
			'effectTime'=>1,
			'useTime'=>0,
			'heroDefence'=>2,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>-1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		7=>array(
			'propsName'=>'照明弹',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>5,
			'haveLimit'=>999,
			'useDis'=>40,
			'effectTime'=>1,
			'useTime'=>8,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>1,
		),
		8=>array(
			'propsName'=>'狂暴',
			'useGold'=>1,
			'money'=>0,
			'takeLimit'=>2,
			'haveLimit'=>999,
			'useDis'=>-2,
			'effectTime'=>1,
			'useTime'=>8,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1.5,
			'petRunSpeed'=>1.5,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		9=>array(
			'propsName'=>'冰霜',
			'useGold'=>2,
			'money'=>0,
			'takeLimit'=>2,
			'haveLimit'=>999,
			'useDis'=>40,
			'effectTime'=>1,
			'useTime'=>8,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>0,
			'enemyAttackSpeed'=>0,
			'enemyRunSpeed'=>0,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		10=>array(
			'propsName'=>'反弹',
			'useGold'=>2,
			'money'=>0,
			'takeLimit'=>2,
			'haveLimit'=>999,
			'useDis'=>0,
			'effectTime'=>5,
			'useTime'=>0,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>1,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>0,
			'defenceCircle'=>0,
			'light'=>0,
		),
		11=>array(
			'propsName'=>'守护',
			'useGold'=>2,
			'money'=>0,
			'takeLimit'=>1,
			'haveLimit'=>999,
			'useDis'=>-1,
			'effectTime'=>1,
			'useTime'=>8,
			'heroDefence'=>0,
			'restoreBlood'=>0,
			'restoreMagic'=>0,
			'rebound'=>0,
			'changeCat'=>1,
			'petAttack'=>1,
			'petAttackSpeed'=>1,
			'petRunSpeed'=>1,
			'enemyAttack'=>1,
			'enemyAttackSpeed'=>1,
			'enemyRunSpeed'=>1,
			'attackCircle'=>1,
			'defenceCircle'=>1,
			'light'=>0,
		),
	);

	function __construct($id) {
		$this->propsModelID = $id;
		$this->propsName = self::$data[$id]['propsName'];
		$this->useGold = self::$data[$id]['useGold'];
		$this->money = self::$data[$id]['money'];
		$this->takeLimit = self::$data[$id]['takeLimit'];
		$this->haveLimit = self::$data[$id]['haveLimit'];
		$this->useDis = self::$data[$id]['useDis'];
		$this->effectTime = self::$data[$id]['effectTime'];
		$this->useTime = self::$data[$id]['useTime'];
		$this->heroDefence = self::$data[$id]['heroDefence'];
		$this->restoreBlood = self::$data[$id]['restoreBlood'];
		$this->restoreMagic = self::$data[$id]['restoreMagic'];
		$this->rebound = self::$data[$id]['rebound'];
		$this->changeCat = self::$data[$id]['changeCat'];
		$this->petAttack = self::$data[$id]['petAttack'];
		$this->petAttackSpeed = self::$data[$id]['petAttackSpeed'];
		$this->petRunSpeed = self::$data[$id]['petRunSpeed'];
		$this->enemyAttack = self::$data[$id]['enemyAttack'];
		$this->enemyAttackSpeed = self::$data[$id]['enemyAttackSpeed'];
		$this->enemyRunSpeed = self::$data[$id]['enemyRunSpeed'];
		$this->attackCircle = self::$data[$id]['attackCircle'];
		$this->defenceCircle = self::$data[$id]['defenceCircle'];
		$this->light = self::$data[$id]['light'];
	}

	public static function GetData($id,$field) {
		return self::$data[$id][$field];
	}
}
