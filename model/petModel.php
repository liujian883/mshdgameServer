<?php
include_once '../model/entitymodel.php';

class petmodel extends entitymodel
{
	public function getmodeldata()
	{
		$level = $_POST['level'];
		$level = intval($level);
		$results = $this->db->select2('petModel','*',"level = $level",false,1);
		
		$head = 'Level,IDPrefab,属性,远程进程,魔法值,血量,攻击力,攻击距离,防御力,巡视距离,攻击个数,减速持续时间,眩晕持续时间,特效攻击概率,特效攻击类型,减速大小,名字,自爆时间,自爆伤害扩展距离,攻击速度,召唤速度,跟随速度,跑向敌人速度,冲锋速度'."\r";
		//echo '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28';
	//	$headConvert = iconv("GB2312", "UTF-8", $head);
		//echo $headConvert;
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
			echo iconv("GB2312", "UTF-8", $result['longorshort'].',');
			echo iconv("GB2312", "UTF-8", $result['magicPoint'].',');
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
			echo iconv("GB2312", "UTF-8", $result['name'].',');
			echo iconv("GB2312", "UTF-8", $result['selfDestructTime'].',');
			echo iconv("GB2312", "UTF-8", $result['selfDestructAttackExtDistance'].',');
			echo iconv("GB2312", "UTF-8", $result['attackSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['runBack2HeroSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['followHeroSpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['find2EnemySpeed'].',');
			echo iconv("GB2312", "UTF-8", $result['run2EnemySpeed']);	
*/
			echo $result['IDPrefab'].',';
			echo $result['property'].',';
			echo $result['longorshort'].',';
            echo $result['magicPoint'].',';
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
			echo $result['name'].',';
			echo $result['selfDestructTime'].',';
            echo $result['selfDestructAttackExtDistance'].',';
            echo $result['attackSpeed'].',';
            echo $result['runBack2HeroSpeed'].',';
            echo $result['followHeroSpeed'].',';
            echo $result['find2EnemySpeed'].',';
            echo $result['run2EnemySpeed'];
		//	if($cou != $number)
				echo "\r";
		}
	}
}
