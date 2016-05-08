-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 05 月 08 日 13:10
-- 服务器版本: 5.0.90
-- PHP 版本: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `app_zhfskysss`
--

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `date` datetime NOT NULL,
  `title` varchar(50) NOT NULL,
  `type_id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `code` text NOT NULL,
  `comment` varchar(120) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  `update_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `content`
--

INSERT INTO `content` (`date`, `title`, `type_id`, `user_id`, `code`, `comment`, `id`, `update_time`) VALUES
('2016-05-07 11:34:00', 'aGVhZA==', 2, 1, 'PGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLi4vY3NzL2Jvb3RzdHJhcC5taW4uY3NzIi8+DQogICAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iLi4vY3NzL2N1c3RvbS5jc3MiLz4NCiAgICA8c2NyaXB0IHNyYz0iLi4vanMvanF1ZXJ5LTEuMTEuMC5taW4uanMiPjwvc2NyaXB0PiA8IS0t6I+c5Y2V5LiN5ruR5Yqo5Y+v5Zyo5q2k5byV5YWlIGpxdWVyeS0xLjExLjAubWluLmpzICDkuI5tZW51LW1vYmlsZS5waHDlj6/ph43lpI0tLT4NCg0KICAgIDwhLS1tb2JpbGUgbWVudSBiZWdpbi0tPg0KICAgICA8IS0tbW9iaWxlIG1lbnUgZW5kLS0+DQoNCiAgICA8IS0t5LqM57qn6I+c5Y2V5ruR5YqoYmVnaW4tLT4NCiAgICA8IS0t5LqM57qn6I+c5Y2V5ruR5YqoZW5kLS0+DQogICAgPHN0eWxlIHR5cGU9InRleHQvY3NzIj4NCiAgICAgICAgI2Jhb21pbmd7DQogICAgICAgICAgICBmb250LWZhbWlseTogIk1pY3Jvc29mdCBZYUhlaSI7DQogICAgICAgICAgICBmb250LXNpemU6MTUwJTsNCiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA1MDA7DQogICAgICAgICAgICBwYWRkaW5nLXRvcDoxOSU7DQogICAgICAgICAgICBwYWRkaW5nLWJvdHRvbTogMTAlOw0KICAgICAgICAgICAgdGV4dC1zaGFkb3c6ICNmZmZkYTQ7DQogICAgICAgIH0NCiAgICAgICAgI2Jhb21pbmcgYSB7DQogICAgICAgICAgICBmb250LWZhbWlseTogIk1pY3Jvc29mdCBZYUhlaSI7DQogICAgICAgICAgICBmb250LXNpemU6MTUwJTsNCiAgICAgICAgICAgIGZvbnQtd2VpZ2h0OiA1MDA7DQogICAgICAgICAgICB0ZXh0LWFsaWduOiBjZW50ZXI7DQogICAgICAgICAgICBjb2xvcjogIzAwMDsNCiAgICAgICAgICAgIHRleHQtZGVjb3JhdGlvbjogbm9uZTsNCiAgICAgICAgICAgIHRleHQtc2hhZG93OiAjZmZmZGE0Ow0KICAgICAgICB9DQogICAgICAgICNiYW9taW5nIGEgOmhvdmVyew0KICAgICAgICAgICAgZm9udC1mYW1pbHk6ICJNaWNyb3NvZnQgWWFIZWkiOw0KICAgICAgICAgICAgZm9udC1zaXplOjE1MCU7DQogICAgICAgICAgICBmb250LXdlaWdodDogNTAwOw==', '', 1, '2016-05-07 11:40:05'),
('2016-05-07 11:40:41', 'Zm9vdGVy', 2, 1, 'PCEtLSBCYW5uZXIgLS0+DQo8ZGl2IGNsYXNzPSJiYW5uZXIiPg0KICAgIDxkaXYgY2xhc3M9ImNvbnRhaW5lciI+DQogICAgICAgIDxkaXYgY2xhc3M9ImNvbC1tZC0xMiAiIGlkPSJiYW9taW5nIj4NCiAgICAgICAgICAgIDxkaXYgY2xhc3M9ImNvbC1tZC0zICI+DQogICAgICAgICAgICAgICAgPGEgaHJlZj0ianIvaHVpeXVhbi5odG1sIiB0YXJnZXQ9Il9ibGFuayI+IOWtpuWRmOaKpeWQjTwvYT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTMgIj4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSJqci9zdGFmZi5odG1sIiB0YXJnZXQ9Il9ibGFuayI+IOmDqOWRmOeUs+ivtzwvYT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTMgIj4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSJqci9JdC5odG1sIiB0YXJnZXQ9Il9ibGFuayI+IOaKgOacr+WKoOebnzwvYT4NCiAgICAgICAgICAgIDwvZGl2Pg0KICAgICAgICAgICAgPGRpdiBjbGFzcz0iY29sLW1kLTMgIj4NCiAgICAgICAgICAgICAgICA8YSBocmVmPSJqci9jb3JlcGFpci5odG1sIiB0YXJnZXQ9Il9ibGFuayI+57u05L+u6Zif5oub5YufPC9hPg0KICAgICAgICAgICAgPC9kaXY+DQoNCg==', '', 2, '0000-00-00 00:00:00'),
('2016-05-07 23:50:10', '', 1, 1, '', '', 5, '0000-00-00 00:00:00'),
('2016-05-07 23:53:58', '', 1, 1, '', '', 6, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `huiyuan`
--

CREATE TABLE IF NOT EXISTS `huiyuan` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(16) NOT NULL,
  `tel` char(11) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `major` varchar(50) NOT NULL COMMENT '专业',
  `class` varchar(20) NOT NULL COMMENT '班级',
  `joinreason` varchar(200) NOT NULL COMMENT '加入原因',
  `jointime` date NOT NULL COMMENT '加入日期',
  `groups` varchar(16) NOT NULL COMMENT '学习小组组别',
  `identity` varchar(16) NOT NULL COMMENT '身份：会员/部员/管理层',
  `level` varchar(300) NOT NULL COMMENT '计算机水平',
  `session` int(12) NOT NULL COMMENT '届次',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `huiyuan`
--

INSERT INTO `huiyuan` (`id`, `name`, `tel`, `sex`, `email`, `major`, `class`, `joinreason`, `jointime`, `groups`, `identity`, `level`, `session`) VALUES
(1, '找', '18220739710', '男', 'abc@zhfsky.com', '光电 电子', '1305', '', '2016-05-09', 'a组', '管理员', 'asacasc', 12),
(2, '张', '18220729710', '男', 'c@zhfsky.com', '光电 电子', '1205', '', '2014-05-09', 'b组', '超级', 'asacasc', 25);

-- --------------------------------------------------------

--
-- 表的结构 `identity_type`
--

CREATE TABLE IF NOT EXISTS `identity_type` (
  `name` varchar(30) NOT NULL,
  `type_value` varchar(30) NOT NULL,
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='身份类型' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `identity_type`
--

INSERT INTO `identity_type` (`name`, `type_value`, `id`) VALUES
('会员', '1', 1),
('部员', '2', 2),
('部长', '3', 3),
('会长', '4', 4),
('技术团队', '5', 5);

-- --------------------------------------------------------

--
-- 表的结构 `it`
--

CREATE TABLE IF NOT EXISTS `it` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `group` varchar(12) NOT NULL COMMENT '所在组别',
  `experience` varchar(200) NOT NULL COMMENT '经历/经验/',
  `honor` varchar(120) NOT NULL COMMENT '所获荣誉',
  `jointime` date NOT NULL,
  `work` varchar(200) NOT NULL COMMENT '作品/项目/',
  `type` varchar(20) NOT NULL COMMENT '身份类型：',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `it`
--


-- --------------------------------------------------------

--
-- 表的结构 `minister`
--

CREATE TABLE IF NOT EXISTS `minister` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(16) NOT NULL,
  `sex` varchar(12) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `session` int(11) NOT NULL COMMENT '届次',
  `group` varchar(12) NOT NULL COMMENT '所在部门',
  `type` varchar(5) NOT NULL COMMENT '类型:正/副',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `minister`
--


-- --------------------------------------------------------

--
-- 表的结构 `president`
--

CREATE TABLE IF NOT EXISTS `president` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `session` int(12) NOT NULL COMMENT '届次',
  `type` varchar(6) NOT NULL COMMENT '类型：正/副',
  `experience` varchar(300) NOT NULL,
  `work` varchar(400) NOT NULL,
  `feeling` varchar(1000) NOT NULL,
  `advice` varchar(3000) NOT NULL,
  `self-evaluation` varchar(3000) NOT NULL COMMENT '自我评价',
  `retire-time` date NOT NULL COMMENT '离任时间',
  `in-time` date NOT NULL COMMENT '上任时间',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `president`
--


-- --------------------------------------------------------

--
-- 表的结构 `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(16) NOT NULL,
  `tel` char(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `bumen` varchar(16) NOT NULL COMMENT '所在部门',
  `identity` varchar(25) NOT NULL COMMENT '身份：',
  `jointime` date NOT NULL COMMENT '成为部员日期',
  `session` int(12) NOT NULL COMMENT '届次',
  `major` varchar(30) NOT NULL COMMENT '专业',
  `class` varchar(20) NOT NULL COMMENT '班级',
  `college` varchar(30) NOT NULL COMMENT '学院',
  `lefttime` date NOT NULL COMMENT '离职日期',
  `honor` varchar(200) NOT NULL COMMENT '所获荣誉',
  `joinreason` varchar(300) NOT NULL COMMENT '加入原因',
  `level` varchar(200) NOT NULL COMMENT '计算机水平',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `staff`
--


-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(16) NOT NULL,
  `tel` char(11) NOT NULL,
  `sex` char(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jointime` date NOT NULL COMMENT '加入日期',
  `identity` varchar(16) NOT NULL COMMENT '身份：会员/部员/管理层',
  `major` varchar(24) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `student`
--


-- --------------------------------------------------------

--
-- 表的结构 `study_group`
--

CREATE TABLE IF NOT EXISTS `study_group` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(12) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='学习小组组别' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `study_group`
--

INSERT INTO `study_group` (`id`, `name`) VALUES
(1, 'PS组'),
(2, 'C语言组'),
(3, '视频组'),
(4, 'Office组');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL auto_increment,
  `type` varchar(16) NOT NULL,
  `username` varchar(16) NOT NULL,
  `email` varchar(24) NOT NULL,
  `password` varchar(100) NOT NULL,
  `valid` varchar(200) NOT NULL,
  `token` int(100) NOT NULL,
  `regist_time` datetime NOT NULL,
  `token_time` datetime NOT NULL,
  `motto` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `type`, `username`, `email`, `password`, `valid`, `token`, `regist_time`, `token_time`, `motto`, `image`) VALUES
(1, '0', 'abc@zhfsky.com', 'abc@zhfsky.com', '37ce1150687857a523d157e1c6493035', '1', 278, '2016-05-07 00:00:00', '2016-05-07 00:00:00', 'assasaas', 'http://zhfskysss-codecloud.stor.sinaapp.com/1462550423.jpg'),
(2, '1', 'naihai', '448435279@qq.com', '37ce1150687857a523d157e1c6493035', '0', 0, '2016-05-07 00:00:00', '2016-05-07 00:00:00', '', ''),
(3, '1', 'bbb', '2029488556@qq.com', '37ce1150687857a523d157e1c6493035', '0', 43012343, '2016-05-07 00:00:00', '2016-05-07 00:00:00', '', '');
