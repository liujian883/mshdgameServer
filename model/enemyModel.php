<?php
include_once '../model/entitymodel.php';

class enemymodel extends entitymodel
{
	public function getmodeldata()
	{

			$level = $_POST['level'];
			$level = intval($level);


		$results = $this->db->select2('enemyModel','*', "level = $level",false,1);
		
		$head = 'Level,IDPrefab,属性,名字,近程远程,血量,攻击力,攻击距离,防御力,巡视距离,攻击个数,减速持续时间,眩晕持续时间,特效攻击概率,特效攻击类型,减速大小,巡游距离,逃脱距离,锁定距离,返回速度,攻击速度,跑向敌人速度,巡逻速度,巡逻站立不动时间,巡逻最近距离,巡逻最远距离,逃跑最近距离,逃跑最远距离'."\r";
		//echo '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28';
		//$headConvert = iconv("GB2312", "UTF-8", $head);
		echo $head;
		$number = count($results);
		$cou = 0;
		foreach ($results as $result)
		{
			$cou++;
			echo $result['level'].',';
		/*	echo iconv("GB2312", "UTF-8", $result['level'].',');
			echo iconv("GB2312", "UTF-8", $result['IDPrefab'].',');
			echo iconv("GB2312", "UTF-8", $result['property'].',');
			echo iconv("GB2312", "UTF-8", $result['name'].',');
			echo iconv("GB2312", "UTF-8", $result['longorshort'].',');
			echo iconv("GB2312", "UTF-8", $result['HP'].',');
			echo iconv("GB2312", "UTF-8", $result['attack'].',');
			echo iconv("GB2312", "UTF-8", $result['attackDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['defence'].',');
			echo iconv("GB2312", "UTF-8", $result['patrolDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['attackNumber'].',');
			echo iconv("GB2312", "UTF-8", $result['slowDownTime'].',');
			echo iconv("GB2312", "UTF-8", $result['dizzinessTime'].',');
			echo iconv("GB2312", "UTF-8", $result['specialAttackProbability'].',');
			echo iconv("GB2312", "UTF-8", $result['specialAttackType'].',');
			echo iconv("GB2312", "UTF-8", $result['slowDownFactor'].',');
			echo iconv("GB2312", "UTF-8", $result['workAroundDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['escapeDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['lockDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['backSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['attackSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['run2petSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['patrolSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['standNoPatrolTime'].',');
			echo iconv("GB2312", "UTF-8", $result['patrolNearestDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['patrolFarestDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['escapeNearestDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['escapeFarestDistance']);
*/
			echo $result['IDPrefab'].',';
			echo $result['property'].',';
			echo $result['name'].',';
			echo $result['longorshort'].',';
			echo $result['HP'].',';
			echo $result['attack'].',';
			echo $result['attackDistance'].',';
			echo $result['defence'].',';
			echo $result['patrolDistance'].',';
			echo $result['attackNumber'].',';
			echo $result['slowDownTime'].',';
			echo $result['dizzinessTime'].',';
			echo $result['specialAttackProbability'].',';
			echo $result['specialAttackType'].',';
			echo $result['slowDownFactor'].',';
			echo $result['workAroundDistance'].',';
			echo $result['escapeDistance'].',';
			echo $result['lockDistance'].',';
			echo $result['backSpeed'].',';
			echo $result['attackSpeed'].',';
			echo $result['run2petSpeed'].',';
			echo $result['patrolSpeed'].',';
			echo $result['standNoPatrolTime'].',';
			echo $result['patrolNearestDistance'].',';
			echo $result['patrolFarestDistance'].',';
			echo $result['escapeNearestDistance'].',';
			echo $result['escapeFarestDistance'];
		//	if($cou != $number)
				echo "\r";
		}
	}
}
