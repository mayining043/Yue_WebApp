-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-11 03:11:34
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yue`
--

-- --------------------------------------------------------

--
-- 表的结构 `playgroup`
--

CREATE TABLE IF NOT EXISTS `playgroup` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `_groupid` int(11) NOT NULL,
  `_username` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `playgroup`
--

INSERT INTO `playgroup` (`_id`, `_groupid`, `_username`) VALUES
(1, 1, 'myn'),
(2, 2, 'myn'),
(3, 3, 'myn'),
(4, 4, 'myn'),
(5, 5, 'myn'),
(6, 1, 'xcf'),
(10, 1, 'xcf'),
(21, 1, 'xcf');

-- --------------------------------------------------------

--
-- 表的结构 `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `_kind` varchar(10) COLLATE utf8_bin NOT NULL,
  `_username` varchar(50) COLLATE utf8_bin NOT NULL,
  `_rantname` varchar(100) COLLATE utf8_bin NOT NULL,
  `_time` varchar(50) COLLATE utf8_bin NOT NULL,
  `_amount` varchar(10) COLLATE utf8_bin NOT NULL,
  `_isshow` varchar(20) COLLATE utf8_bin NOT NULL,
  `_intro` varchar(200) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `request`
--

INSERT INTO `request` (`_id`, `_kind`, `_username`, `_rantname`, `_time`, `_amount`, `_isshow`, `_intro`) VALUES
(1, '约饭', 'myn', '北二饭堂', '12.31', '10', '妹子', 'hhh'),
(2, '约跑', 'myn', '华工操场', '今晚', '3', '任何人可见', '一起来运动吧~'),
(3, '电影', 'myn', '《你的名字》', '12.3', '2', '妹子', 'Exm? What''s your name?'),
(4, '学习', 'myn', 'C12阿里活动室', '12.12', '2', '任何人可见', '学习weex！！！'),
(5, '约跑', 'myn', '内环', '今年之内', '100', '任何人可见', '还没有和100个人一起跑过内环。。。');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `sex` varchar(10) COLLATE utf8_bin NOT NULL,
  `school` varchar(20) COLLATE utf8_bin NOT NULL,
  `academy` varchar(20) COLLATE utf8_bin NOT NULL,
  `phone` varchar(11) COLLATE utf8_bin NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`username`, `sex`, `school`, `academy`, `phone`, `id`, `password`) VALUES
('1', '汉纸', '1', '1', '', 1, '1'),
('myn', '汉纸', '华南理工大学', '计算机', '', 2, '123'),
('xcf', '汉纸', '123', '123', '', 3, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
