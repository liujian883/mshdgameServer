-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 11:24 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babyplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `enemyModel`
--

CREATE TABLE IF NOT EXISTS `enemyModel` (
  `level` int(11) NOT NULL,
  `IDPrefab` int(11) NOT NULL,
  `property` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `longorshort` tinyint(4) NOT NULL,
  `HP` float NOT NULL,
  `attack` float NOT NULL,
  `attackDistance` float NOT NULL,
  `defence` float NOT NULL,
  `patrolDistance` float NOT NULL,
  `attackNumber` int(11) NOT NULL,
  `slowDownTime` float NOT NULL,
  `dizzinessTime` float NOT NULL,
  `specialAttackProbability` float NOT NULL,
  `specialAttackType` tinyint(4) NOT NULL,
  `slowDownFactor` float NOT NULL,
  `workAroundDistance` float NOT NULL,
  `escapeDistance` float NOT NULL,
  `lockDistance` float NOT NULL,
  `backSpeed` float NOT NULL,
  `attackSpeed` float NOT NULL,
  `run2petSpeed` float NOT NULL,
  `patrolSpeed` float NOT NULL,
  `standNoPatrolTime` float NOT NULL,
  `patrolNearestDistance` float NOT NULL,
  `patrolFarestDistance` float NOT NULL,
  `escapeNearestDistance` float NOT NULL,
  `escapeFarestDistance` float NOT NULL,
  PRIMARY KEY (`level`,`IDPrefab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `equipmentModel`
--

CREATE TABLE IF NOT EXISTS `equipmentModel` (
  `equipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '装备ID',
  `equipmentName` varchar(32) NOT NULL COMMENT '装备名字',
  `equipmentQuality` int(11) NOT NULL COMMENT '装备品质',
  `equipmentLevelMax` int(11) NOT NULL COMMENT '等级上限',
  `equipmentType` int(11) NOT NULL COMMENT '装备分类',
  `equipmentDescribe` varchar(32) NOT NULL COMMENT '装备描述',
  `killTarget` int(11) NOT NULL COMMENT '击杀目标',
  `petTarget` int(11) NOT NULL COMMENT '宠物目标',
  `petStrengthenProperty` int(11) NOT NULL COMMENT '宠物强化属性',
  `heroStrengthenProperty` int(11) NOT NULL COMMENT '主角强化属性',
  `propTarget` int(11) NOT NULL COMMENT '道具目标',
  `propStrengthenProperty` int(11) NOT NULL COMMENT '道具强化属性',
  `skillType` int(11) NOT NULL COMMENT '技能类型',
  `skillEffectDescbribe` varchar(32) NOT NULL COMMENT '技能效果描述',
  `skillEffectNmuber` int(11) NOT NULL COMMENT '技能影响数值',
  `Time` float NOT NULL COMMENT '时间数值',
  `NumberType` int(11) NOT NULL COMMENT '数值类型',
  `NumberTarget` int(11) NOT NULL COMMENT '数值目标',
  `Number` float NOT NULL COMMENT '数值',
  `upNmuberAddType` int(11) NOT NULL COMMENT '升级加成类型',
  `upNumber` float NOT NULL COMMENT '升级数值',
  PRIMARY KEY (`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `heroModel`
--

CREATE TABLE IF NOT EXISTS `heroModel` (
  `heroID` int(11) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '1',
  `magicPoint` float NOT NULL DEFAULT '0',
  `magicPointRestore` float NOT NULL DEFAULT '0',
  `animalTime` float NOT NULL DEFAULT '0',
  `attackFactor` float NOT NULL DEFAULT '0',
  `defenceFactor` float NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`heroID`,`level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `petModel`
--

CREATE TABLE IF NOT EXISTS `petModel` (
  `level` int(11) NOT NULL DEFAULT '1',
  `IDPrefab` int(11) NOT NULL DEFAULT '0',
  `name` varchar(20) NOT NULL,
  `property` tinyint(4) NOT NULL,
  `longorshort` tinyint(4) NOT NULL,
  `magicPoint` float NOT NULL,
  `HP` float NOT NULL,
  `attack` float NOT NULL,
  `attackDistance` float NOT NULL,
  `defence` float NOT NULL,
  `patrolDistance` float NOT NULL,
  `attackNumber` int(11) NOT NULL,
  `slowDownTime` float NOT NULL,
  `dizzinessTime` float NOT NULL,
  `specialAttackProbability` float NOT NULL,
  `specialAttackType` tinyint(4) NOT NULL,
  `slowDownFactor` float NOT NULL,
  `selfDestructTime` float NOT NULL,
  `selfDestructAttackExtDistance` float NOT NULL,
  `attackSpeed` float NOT NULL,
  `runBack2HeroSpeed` float NOT NULL,
  `followHeroSpeed` float NOT NULL,
  `find2EnemySpeed` float NOT NULL,
  `run2EnemySpeed` float NOT NULL,
  PRIMARY KEY (`level`,`IDPrefab`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `propsModel`
--

CREATE TABLE IF NOT EXISTS `propsModel` (
  `propsModelID` int(11) NOT NULL AUTO_INCREMENT COMMENT '道具ID',
  `propsName` varchar(20) NOT NULL COMMENT '道具名字',
  `useGold` int(11) NOT NULL COMMENT '消耗货币（金币 1 钻石 2）',
  `money` int(11) NOT NULL COMMENT '价格',
  `takeLimit` int(11) NOT NULL COMMENT '携带上限',
  `haveLimit` int(11) NOT NULL COMMENT '拥有上限',
  `useDis` float NOT NULL COMMENT '作用范围（-1 法阵范围 -2 全场景 0 无范围 其他为具体范围）',
  `effectTime` int(11) NOT NULL COMMENT '效果次数',
  `useTime` float NOT NULL COMMENT '持续时间(s)',
  `heroDefence` int(11) NOT NULL COMMENT '主角护盾（层数）',
  `restoreBlood` int(11) NOT NULL COMMENT '恢复血量（百分比）',
  `restoreMagic` int(11) NOT NULL COMMENT '恢复魔法（具体值）',
  `rebound` float NOT NULL COMMENT '反弹（1 完全反弹 0 不反弹 其他为反弹伤害百分比）',
  `changeCat` int(11) NOT NULL COMMENT '变羊（1 不影响 -1 变羊恢复 0 不变羊',
  `petAttack` float NOT NULL COMMENT '宠物攻击力（1 攻击不变 其他为百分比）',
  `petAttackSpeed` float NOT NULL COMMENT '宠物攻击速度（1 速度不变 其他为百分比）',
  `petRunSpeed` float NOT NULL COMMENT '宠物移动速度（1 速度不变 其他为百分比）',
  `enemyAttack` float NOT NULL COMMENT '怪物攻击力（1 攻击不变 其他为百分比）',
  `enemyAttackSpeed` float NOT NULL COMMENT '怪物攻击速度（1 速度不变 其他为百分比）',
  `enemyRunSpeed` float NOT NULL COMMENT '怪物移动速度（1 速度不变 其他为百分比）',
  `attackCircle` float NOT NULL COMMENT '攻击法阵变化（0 正常 -1 不提供 1 提供 其他为变化百分比）',
  `defenceCircle` float NOT NULL COMMENT '防御法阵变化（0 正常 -1 不提供 1 提供 其他为变化百分比）',
  `light` tinyint(4) NOT NULL COMMENT '照明（1 照明 0 不照明）',
  PRIMARY KEY (`propsModelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment0`
--

CREATE TABLE IF NOT EXISTS `userEquipment0` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=851803 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment1`
--

CREATE TABLE IF NOT EXISTS `userEquipment1` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=851647 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment2`
--

CREATE TABLE IF NOT EXISTS `userEquipment2` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=851358 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment3`
--

CREATE TABLE IF NOT EXISTS `userEquipment3` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=851837 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment4`
--

CREATE TABLE IF NOT EXISTS `userEquipment4` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=851674 ;

-- --------------------------------------------------------

--
-- Table structure for table `userEquipment5`
--

CREATE TABLE IF NOT EXISTS `userEquipment5` (
  `userEquipmentID` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键',
  `userID` int(11) NOT NULL COMMENT '用户ID',
  `equipmentID` int(11) NOT NULL COMMENT '装备ID',
  `equipmentLevel` smallint(6) NOT NULL COMMENT '装备等级',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否使用装备',
  PRIMARY KEY (`userEquipmentID`),
  KEY `userID` (`userID`,`equipmentID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户装备表' AUTO_INCREMENT=850917 ;

-- --------------------------------------------------------

--
-- Table structure for table `userHero`
--

CREATE TABLE IF NOT EXISTS `userHero` (
  `userHeroID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `heroID` int(11) NOT NULL DEFAULT '0',
  `heroLevel` int(11) NOT NULL DEFAULT '0',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userHeroID`),
  UNIQUE KEY `userID` (`userID`,`heroID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=912725 ;

-- --------------------------------------------------------

--
-- Table structure for table `userInfo`
--

CREATE TABLE IF NOT EXISTS `userInfo` (
  `userID` int(11) NOT NULL,
  `userName` varchar(20) NOT NULL DEFAULT '""',
  `userGold` int(11) NOT NULL DEFAULT '0',
  `userLevel` int(11) NOT NULL DEFAULT '1',
  `userEXP` int(11) NOT NULL DEFAULT '0',
  `userPower` int(11) NOT NULL DEFAULT '0',
  `userDiamond` int(11) NOT NULL DEFAULT '0',
  `numberOfPassLevel` int(11) NOT NULL DEFAULT '0' COMMENT '通过关卡数',
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userPet0`
--

CREATE TABLE IF NOT EXISTS `userPet0` (
  `userPetID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `petID` int(11) NOT NULL DEFAULT '0',
  `petLevel` int(11) NOT NULL DEFAULT '0',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userPetID`),
  KEY `userID` (`userID`,`petID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3000013 ;

-- --------------------------------------------------------

--
-- Table structure for table `userPet1`
--

CREATE TABLE IF NOT EXISTS `userPet1` (
  `userPetID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `petID` int(11) NOT NULL DEFAULT '0',
  `petLevel` int(11) NOT NULL DEFAULT '0',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userPetID`),
  UNIQUE KEY `userID` (`userID`,`petID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1643892 ;

-- --------------------------------------------------------

--
-- Table structure for table `userPet2`
--

CREATE TABLE IF NOT EXISTS `userPet2` (
  `userPetID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `petID` int(11) NOT NULL DEFAULT '0',
  `petLevel` int(11) NOT NULL DEFAULT '0',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userPetID`),
  UNIQUE KEY `userID` (`userID`,`petID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1645067 ;

-- --------------------------------------------------------

--
-- Table structure for table `userPet3`
--

CREATE TABLE IF NOT EXISTS `userPet3` (
  `userPetID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `petID` int(11) NOT NULL DEFAULT '0',
  `petLevel` int(11) NOT NULL DEFAULT '0',
  `useItOrNot` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userPetID`),
  UNIQUE KEY `userID` (`userID`,`petID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1645519 ;

-- --------------------------------------------------------

--
-- Table structure for table `userProps0`
--

CREATE TABLE IF NOT EXISTS `userProps0` (
  `userPropsID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `propsID` int(11) NOT NULL DEFAULT '0',
  `propsNumber` int(11) NOT NULL DEFAULT '0' COMMENT '道具数量',
  PRIMARY KEY (`userPropsID`),
  UNIQUE KEY `userID` (`userID`,`propsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=796046 ;

-- --------------------------------------------------------

--
-- Table structure for table `userProps1`
--

CREATE TABLE IF NOT EXISTS `userProps1` (
  `userPropsID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL DEFAULT '0',
  `propsID` int(11) NOT NULL DEFAULT '0',
  `propsNumber` int(11) NOT NULL DEFAULT '0' COMMENT '道具数量',
  PRIMARY KEY (`userPropsID`),
  UNIQUE KEY `userID` (`userID`,`propsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=794878 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
