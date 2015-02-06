-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 18, 2015 at 11:25 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `babyplanID`
--

-- --------------------------------------------------------

--
-- Table structure for table `getUserID`
--

CREATE TABLE IF NOT EXISTS `getUserID` (
  `UserID` bigint(20) NOT NULL COMMENT '创建UserID',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='"获取userID"';

-- --------------------------------------------------------

--
-- Table structure for table `gitUserID`
--

CREATE TABLE IF NOT EXISTS `gitUserID` (
  `userID` bigint(20) NOT NULL AUTO_INCREMENT,
  `userName` varchar(32) CHARACTER SET utf8 NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='获取userID' AUTO_INCREMENT=300017 ;

-- --------------------------------------------------------

--
-- Table structure for table `userID`
--

CREATE TABLE IF NOT EXISTS `userID` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID0`
--

CREATE TABLE IF NOT EXISTS `userID0` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID1`
--

CREATE TABLE IF NOT EXISTS `userID1` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID2`
--

CREATE TABLE IF NOT EXISTS `userID2` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID3`
--

CREATE TABLE IF NOT EXISTS `userID3` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID4`
--

CREATE TABLE IF NOT EXISTS `userID4` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID5`
--

CREATE TABLE IF NOT EXISTS `userID5` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID6`
--

CREATE TABLE IF NOT EXISTS `userID6` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID7`
--

CREATE TABLE IF NOT EXISTS `userID7` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID8`
--

CREATE TABLE IF NOT EXISTS `userID8` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID9`
--

CREATE TABLE IF NOT EXISTS `userID9` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userID10`
--

CREATE TABLE IF NOT EXISTS `userID10` (
  `userID` int(11) NOT NULL,
  `pwd` varchar(32) NOT NULL DEFAULT '""' COMMENT '密码',
  `userName` varchar(20) NOT NULL DEFAULT '""',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
