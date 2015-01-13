<?php


class enemyModelModel {
	var $level;
	var $IDPrefab;
	var $property;
	var $name;
	var $longorshort;
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
	var $workAroundDistance;
	var $escapeDistance;
	var $lockDistance;
	var $backSpeed;
	var $attackSpeed;
	var $run2petSpeed;
	var $patrolSpeed;
	var $standNoPatrolTime;
	var $patrolNearestDistance;
	var $patrolFarestDistance;
	var $escapeNearestDistance;
	var $escapeFarestDistance;
	public static $data = array(
		'1+101'=>array(
			'property'=>1,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>200,
			'attack'=>29,
			'attackDistance'=>5,
			'defence'=>21,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>20,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+102'=>array(
			'property'=>2,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>200,
			'attack'=>29,
			'attackDistance'=>5,
			'defence'=>21,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>20,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+103'=>array(
			'property'=>0,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>200,
			'attack'=>29,
			'attackDistance'=>8,
			'defence'=>21,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>20,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+104'=>array(
			'property'=>0,
			'name'=>'',
			'longorshort'=>2,
			'HP'=>6250,
			'attack'=>72.8,
			'attackDistance'=>35,
			'defence'=>27,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>2,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>0,
			'patrolFarestDistance'=>0,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+105'=>array(
			'property'=>0,
			'name'=>'',
			'longorshort'=>0,
			'HP'=>0,
			'attack'=>0,
			'attackDistance'=>0,
			'defence'=>0,
			'patrolDistance'=>0,
			'attackNumber'=>0,
			'slowDownTime'=>0,
			'dizzinessTime'=>0,
			'specialAttackProbability'=>0,
			'specialAttackType'=>0,
			'slowDownFactor'=>0,
			'workAroundDistance'=>0,
			'escapeDistance'=>0,
			'lockDistance'=>0,
			'backSpeed'=>0,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>20,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+106'=>array(
			'property'=>1,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>280,
			'attack'=>56,
			'attackDistance'=>8,
			'defence'=>13,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>0,
			'patrolFarestDistance'=>0,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+107'=>array(
			'property'=>1,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>280,
			'attack'=>56,
			'attackDistance'=>8,
			'defence'=>13,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>400,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>15,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+108'=>array(
			'property'=>2,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>280,
			'attack'=>56,
			'attackDistance'=>8,
			'defence'=>13,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>0,
			'patrolFarestDistance'=>0,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+109'=>array(
			'property'=>2,
			'name'=>'',
			'longorshort'=>1,
			'HP'=>280,
			'attack'=>56,
			'attackDistance'=>8,
			'defence'=>13,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>400,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>15,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+110'=>array(
			'property'=>3,
			'name'=>'',
			'longorshort'=>2,
			'HP'=>196,
			'attack'=>72.8,
			'attackDistance'=>15,
			'defence'=>9.1,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>40,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>0,
			'patrolFarestDistance'=>0,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
		'1+111'=>array(
			'property'=>3,
			'name'=>'',
			'longorshort'=>2,
			'HP'=>196,
			'attack'=>72.8,
			'attackDistance'=>15,
			'defence'=>9.1,
			'patrolDistance'=>35,
			'attackNumber'=>1,
			'slowDownTime'=>3,
			'dizzinessTime'=>1,
			'specialAttackProbability'=>0,
			'specialAttackType'=>1,
			'slowDownFactor'=>0.5,
			'workAroundDistance'=>400,
			'escapeDistance'=>10,
			'lockDistance'=>8,
			'backSpeed'=>5,
			'attackSpeed'=>1.2,
			'run2petSpeed'=>10,
			'patrolSpeed'=>8,
			'standNoPatrolTime'=>3,
			'patrolNearestDistance'=>10,
			'patrolFarestDistance'=>15,
			'escapeNearestDistance'=>20,
			'escapeFarestDistance'=>40,
		),
	);

	function __construct($id,$level) {
		$this->level = $level;
		$this->IDPrefab = $id;
		$this->property = self::$data[$id.'+'.$level]['property'];
		$this->name = self::$data[$id.'+'.$level]['name'];
		$this->longorshort = self::$data[$id.'+'.$level]['longorshort'];
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
		$this->workAroundDistance = self::$data[$id.'+'.$level]['workAroundDistance'];
		$this->escapeDistance = self::$data[$id.'+'.$level]['escapeDistance'];
		$this->lockDistance = self::$data[$id.'+'.$level]['lockDistance'];
		$this->backSpeed = self::$data[$id.'+'.$level]['backSpeed'];
		$this->attackSpeed = self::$data[$id.'+'.$level]['attackSpeed'];
		$this->run2petSpeed = self::$data[$id.'+'.$level]['run2petSpeed'];
		$this->patrolSpeed = self::$data[$id.'+'.$level]['patrolSpeed'];
		$this->standNoPatrolTime = self::$data[$id.'+'.$level]['standNoPatrolTime'];
		$this->patrolNearestDistance = self::$data[$id.'+'.$level]['patrolNearestDistance'];
		$this->patrolFarestDistance = self::$data[$id.'+'.$level]['patrolFarestDistance'];
		$this->escapeNearestDistance = self::$data[$id.'+'.$level]['escapeNearestDistance'];
		$this->escapeFarestDistance = self::$data[$id.'+'.$level]['escapeFarestDistance'];
	}
}
