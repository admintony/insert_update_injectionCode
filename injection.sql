-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?02 �?03 �?03:22
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `injection`
--

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `cn` decimal(5,2) DEFAULT NULL,
  `en` decimal(5,2) DEFAULT NULL,
  `math` decimal(5,2) DEFAULT NULL,
  `class` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1005 ;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`id`, `name`, `sex`, `age`, `cn`, `en`, `math`, `class`) VALUES
(1, '宋江', '女', 55, '100.00', '100.00', '100.00', 'T00ls一班'),
(2, '吴用', '男', 18, '9.00', '9.00', '10.00', 'T00ls一班'),
(3, '林冲', '男', 21, '100.00', '100.00', '100.00', 'T00ls一班'),
(5, '俊杰', '男', 22, '89.00', '89.00', '81.00', 'T00ls一班'),
(1001, 'admin', '男', 22, '100.00', '100.00', '100.00', 'T00ls一班'),
(4, '班主任', '女', 20, '0.00', '0.00', '0.00', 'T00ls二班'),
(1003, '注入', '无', 100, '99.00', '99.00', '99.00', '网络班');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
