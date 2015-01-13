<?php


class petModelModel {
	var $level;
	var $IDPrefab;
	var $name;
	var $property;
	var $longorshort;
	var $magicPoint;
	var $HP;
	var $attack;
	var $attackDistance;
	var $defence;
	var $patrolDistance;
	var $attackNumber;
	var $slowDownTime;
	var $dizzinessTime;
	var $specialAttackProbability;
	var $specialAttackType;
	var $slowDownFactor;
	var $selfDestructTime;
	var $selfDestructAttackExtDistance;
	var $attackSpeed;
	var $runBack2HeroSpeed;
	var $followHeroSpeed;
	var $find2EnemySpeed;
	var $run2EnemySpeed;
	public static $data = array(
		'1+1'=>array(
			'name'=>'',
			'property'=>1,
			'longorshort'=>2,
			'magicPoint'=>20,
			'HP'=>280,
			'attack'=>56,
			'attackDistance'=>15,
			'defence'=>13,
			'patrolDistance'=>20,
			'attackNumber'=>1,
			'slowDownTime'=>5,
			'dizzinessTime'=>3,
			'specialAttackProbability'=>100,
			'specialAttackType'=>2,
			'slowDownFactor'=>0.5,
			'selfDestructTime'=>0,
			'selfDestructAttackExtDistance'=>0,
			'attackSpeed'=>1.2,
			'runBack2HeroSpeed'=>5,
			'followHeroSpeed'=>0,
			'find2EnemySpeed'=>10,
			'run2EnemySpeed'=>30,
		),
		'1+2'=>array(
			'name'=>'',
			'property'=>2,
			'longorshort'=>1,
			'magicPoint'=>20,
			'HP'=>196,
			'attack'=>72.8,
			'attackDistance'=>8,
			'defence'=>9.1,
			'patrolDistance'=>20,
			'attackNumber'=>1,
			'slowDownTime'=>5,
			'dizzinessTime'=>3,
			'specialAttackProbability'=>100,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'selfDestructTime'=>0,
			'selfDestructAttackExtDistance'=>0,
			'attackSpeed'=>1.2,
			'runBack2HeroSpeed'=>5,
			'followHeroSpeed'=>0,
			'find2EnemySpeed'=>10,
			'run2EnemySpeed'=>30,
		),
		'1+3'=>array(
			'name'=>'',
			'property'=>0,
			'longorshort'=>0,
			'magicPoint'=>30,
			'HP'=>280,
			'attack'=>84,
			'attackDistance'=>8,
			'defence'=>19.5,
			'patrolDistance'=>20,
			'attackNumber'=>0,
			'slowDownTime'=>5,
			'dizzinessTime'=>3,
			'specialAttackProbability'=>100,
			'specialAttackType'=>2,
			'slowDownFactor'=>0.5,
			'selfDestructTime'=>1,
			'selfDestructAttackExtDistance'=>10,
			'attackSpeed'=>0,
			'runBack2HeroSpeed'=>5,
			'followHeroSpeed'=>0,
			'find2EnemySpeed'=>10,
			'run2EnemySpeed'=>30,
		),
	);

	function __construct($id,$level) {
		$this->level = $level;
		$this->IDPrefab = $id;
		$this->name = self::$data[$id.'+'.$level]['name'];
		$this->property = self::$data[$id.'+'.$level]['property'];
		$this->longorshort = self::$data[$id.'+'.$level]['longorshort'];
		$this->magicPoint = self::$data[$id.'+'.$level]['magicPoint'];
		$this->HP = self::$data[$id.'+'.$level]['HP'];
		$this->attack = self::$data[$id.'+'.$level]['attack'];
		$this->attackDistance = self::$data[$id.'+'.$level]['attackDistance'];
		$this->defence = self::$data[$id.'+'.$level]['defence'];
		$this->patrolDistance = self::$data[$id.'+'.$level]['patrolDistance'];
		$this->attackNumber = self::$data[$id.'+'.$level]['attackNumber'];
		$this->slowDownTime = self::$data[$id.'+'.$level]['slowDownTime'];
		$this->dizzinessTime = self::$data[$id.'+'.$level]['dizzinessTime'];
		$this->specialAttackProbability = self::$data[$id.'+'.$level]['specialAttackProbability'];
		$this->specialAttackType = self::$data[$id.'+'.$level]['specialAttackType'];
		$this->slowDownFactor = self::$data[$id.'+'.$level]['slowDownFactor'];
		$this->selfDestructTime = self::$data[$id.'+'.$level]['selfDestructTime'];
		$this->selfDestructAttackExtDistance = self::$data[$id.'+'.$level]['selfDestructAttackExtDistance'];
		$this->attackSpeed = self::$data[$id.'+'.$level]['attackSpeed'];
		$this->runBack2HeroSpeed = self::$data[$id.'+'.$level]['runBack2HeroSpeed'];
		$this->followHeroSpeed = self::$data[$id.'+'.$level]['followHeroSpeed'];
		$this->find2EnemySpeed = self::$data[$id.'+'.$level]['find2EnemySpeed'];
		$this->run2EnemySpeed = self::$data[$id.'+'.$level]['run2EnemySpeed'];
	}
}
