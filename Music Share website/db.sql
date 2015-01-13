--
-- MySQL 5.1.67
-- Sun, 21 Apr 2013 02:59:59 +0000
--

CREATE TABLE `cantplay` (
   `s_sendid` int(11),
   `s_sendtime` datetime,
   `s_sendby` varchar(20),
   `s_id` int(11) not null auto_increment,
   PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312 AUTO_INCREMENT=5;

INSERT INTO `cantplay` (`s_sendid`, `s_sendtime`, `s_sendby`, `s_id`) VALUES 
('', '0000-00-00 00:00:00', '', '4');

CREATE TABLE `classes` (
   `c_id` int(11) not null auto_increment,
   `c_name` varchar(20),
   PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312 AUTO_INCREMENT=8;

INSERT INTO `classes` (`c_id`, `c_name`) VALUES 
('1', 'Pop'),
('2', 'Classical'),
('3', 'Rock'),
('4', 'Jazz'),
('5', 'Blues'),
('6', 'Other'),
('7', 'Reggae');

CREATE TABLE `songs` (
   `s_id` int(11) not null auto_increment,
   `s_name` varchar(50) not null,
   `s_class` int(11),
   `s_shareby` varchar(50),
   `s_sharetime` datetime,
   `s_tag` varchar(20),
   `s_picurl` varchar(100),
   `s_shareip` varchar(20),
   `s_url` longtext,
   `s_singer` varchar(20),
   `s_playtimes` int(11) default '0',
   PRIMARY KEY (`s_id`),
   KEY `s_name` (`s_name`)
) ENGINE=MyISAM DEFAULT CHARSET=gb2312 AUTO_INCREMENT=9;

INSERT INTO `songs` (`s_id`, `s_name`, `s_class`, `s_shareby`, `s_sharetime`, `s_tag`, `s_picurl`, `s_shareip`, `s_url`, `s_singer`, `s_playtimes`) VALUES 
('1', 'Some one like you', '1', '', '0000-00-00 00:00:00', 'adele', 'http://www.9ku.com/pic/zhuanji/s300_5252fbabd4c0cf0c8341c7b1f15208a6.jpg', '108.21.119.199', 'http://34843044.1.9ku.com/file2/418/417591.mp3', 'Adele', '29'),
('8', 'Wide Awake', '1', '', '2012-09-30 00:00:00', 'Katyperry', 'http://www.9ku.com/pic/zhuanji/s300_2a68bd49f3ce6666e40e47357a1851b4.jpg', '108.21.119.199', 'http://mp3.9ku.com/mp3/466/465819.mp3', 'Katy Perry', '24'),
('5', 'Halo', '1', '', '0000-00-00 00:00:00', 'Voice from China', 'http://gb.cri.cn/mmsource/images/2012/09/24/51/13229577188511670463.jpg', '108.21.119.199', 'http://mp3.9ku.com/mp3/472/471838.mp3', 'Jike Junyi', '23'),
('6', 'Poker Face', '1', '', '0000-00-00 00:00:00', '', 'http://www.9ku.com/pic/zhuanji/lll_090224_094718.jpg', '108.21.119.199', 'http://34844772.1.9ku.com/file2/361/360221.mp3', 'Lady Gaga', '22'),
('7', 'Paparazzi', '1', '', '0000-00-00 00:00:00', 'LadyGaGa', 'http://www.9ku.com/pic/zhuanji/lll_090224_094718.jpg', '108.21.119.199', 'http://34844772.1.9ku.com/file2/196/195837.mp3', 'Lady GaGa', '22');