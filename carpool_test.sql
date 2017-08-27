-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2017-08-27 13:45:29
-- 服务器版本： 5.6.37
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpool_test`
--

-- --------------------------------------------------------

--
-- 表的结构 `comments`
--

CREATE TABLE `comments` (
  `com_id` bigint(20) NOT NULL,
  `com_time` varchar(20) NOT NULL,
  `com_name` varchar(255) NOT NULL,
  `com_email` varchar(64) NOT NULL,
  `com_phone` varchar(32) NOT NULL,
  `com_text` varchar(2048) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `comments`
--

INSERT INTO `comments` (`com_id`, `com_time`, `com_name`, `com_email`, `com_phone`, `com_text`) VALUES
(1, '2017-08-03 05:27pm', '陈伟斌', '243246362@qq.com', '0757-88881000', '爱与支持每个人都在找寻爱与支持，但很少人准备好真的要把爱和支持给别人，谢谢你们carpool团队，相信世界会因你们而走向低碳与共享。'),
(2, '2017-08-04 11:49am', 'Maria', 'Maria@esquel.com', '18905550135', 'The app is very userful and meaningful,which let us cost less and make a low carbon world.Keep up and i will stand by your side.');

-- --------------------------------------------------------

--
-- 表的结构 `pin_rec`
--

CREATE TABLE `pin_rec` (
  `rec_id` bigint(20) NOT NULL,
  `info_id` bigint(20) NOT NULL,
  `dri` varchar(255) NOT NULL,
  `psg_id` int(16) NOT NULL,
  `psg` varchar(255) NOT NULL,
  `niceo` int(11) NOT NULL DEFAULT '0',
  `finish` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `pin_rec`
--

INSERT INTO `pin_rec` (`rec_id`, `info_id`, `dri`, `psg_id`, `psg`, `niceo`, `finish`) VALUES
(1, 2, '杨洋', 295119, 'Bob', 1, 0),
(2, 1, '欧阳飘柔', 295119, 'Bob', 0, 0),
(3, 6, 'yum', 295119, 'Bob', 1, 0),
(8, 8, 'Bob', 294119, 'yum', 1, 0),
(12, 9, 'Tina-Chan', 291119, '黎秋水', 1, 0),
(13, 1, '欧阳飘柔', 291119, '黎秋水', 1, 0),
(14, 2, '杨洋', 291119, '黎秋水', 1, 0),
(15, 7, 'Bob', 291119, '黎秋水', 1, 0),
(16, 2, '杨洋', 295119, 'Bob', 0, 0),
(17, 6, 'yum', 295119, 'Bob', 0, 0),
(18, 6, 'yum', 298119, '张作霖', 1, 1),
(19, 9, 'Tina-Chan', 292119, 'Alex-Wong', 1, 0),
(20, 9, 'Tina-Chan', 296119, '林峰', 1, 0),
(21, 8, 'Bob', 296119, '林峰', 1, 0),
(22, 7, 'Bob', 296119, '林峰', 1, 0),
(23, 8, 'Bob', 296119, '林峰', 0, 0),
(24, 8, 'Bob', 296119, '林峰', 0, 0),
(25, 7, 'Bob', 296119, '林峰', 0, 0),
(26, 9, 'Tina-Chan', 296119, '林峰', 0, 0),
(27, 9, 'Tina-Chan', 296119, '林峰', 0, 0),
(28, 9, 'Tina-Chan', 296119, '林峰', 0, 0),
(29, 1, '欧阳飘柔', 296119, '林峰', 1, 0),
(30, 9, 'Tina-Chan', 296119, '林峰', 0, 0),
(31, 9, 'Tina-Chan', 297119, '李菲菲', 1, 0),
(32, 9, 'Tina-Chan', 297119, '李菲菲', 0, 0),
(33, 9, 'Tina-Chan', 299119, '欧阳飘柔', 1, 0),
(34, 10, '李菲菲', 299119, '欧阳飘柔', 1, 0),
(35, 10, '李菲菲', 293119, 'Tina-Chan', 0, 0),
(36, 9, 'Tina-Chan', 292119, 'Alex-Wong', 0, 0),
(37, 9, 'Tina-Chan', 292119, 'Alex-Wong', 0, 0),
(38, 9, 'Tina-Chan', 292119, 'Alex-Wong', 0, 0),
(39, 43, '张作霖', 299119, '欧阳飘柔', 1, 0),
(40, 43, '张作霖', 297119, '李菲菲', 1, 0),
(41, 43, '张作霖', 293119, 'Tina-Chan', 1, 0),
(42, 0, '', 298119, '张作霖', 0, 0),
(43, 0, '', 298119, '张作霖', 0, 0),
(44, 0, '', 298119, '张作霖', 0, 0),
(45, 0, '', 298119, '张作霖', 0, 0),
(46, 40, 'Bob', 298119, '张作霖', 0, 0),
(47, 40, 'Bob', 298119, '张作霖', 0, 0),
(48, 40, 'Bob', 298119, '张作霖', 0, 0),
(49, 9, 'Tina-Chan', 298119, '张作霖', 1, 1),
(50, 10, '李菲菲', 293119, 'Tina-Chan', 1, 1),
(51, 9, 'Tina-Chan', 294318, '陈帅斌', 0, 0),
(52, 9, 'Tina-Chan', 294110, '杨洋', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `seatsinfo`
--

CREATE TABLE `seatsinfo` (
  `info_id` bigint(20) NOT NULL,
  `name` varchar(16) NOT NULL,
  `department` varchar(16) NOT NULL,
  `carnum` varchar(8) NOT NULL,
  `date` varchar(16) NOT NULL,
  `time` varchar(8) NOT NULL,
  `startaddr` varchar(255) NOT NULL,
  `finaladdr` varchar(255) NOT NULL,
  `nice` int(11) NOT NULL DEFAULT '0',
  `seats` int(11) NOT NULL,
  `seatsleft` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `seatsinfo`
--

INSERT INTO `seatsinfo` (`info_id`, `name`, `department`, `carnum`, `date`, `time`, `startaddr`, `finaladdr`, `nice`, `seats`, `seatsleft`) VALUES
(1, '欧阳飘柔', 'EEL-QI', '京A95B27', '2017-07-24', '2:15pm', '天安门广场', '协和医院', 2, 4, 1),
(2, '杨洋', 'GEG-IT', '粤E20171', '2017-07-21', '11:18am', '大润发', '喜悦银湾', 2, 4, 1),
(6, 'yum', 'XJW-QA', '桂A54321', '2017-07-31', '02:41pm', '文华市场', '中医院', 2, 2, 0),
(7, 'Bob', 'GEK-PE', '粤J9V578', '2017-08-01', '12:11pm', '小雪网吧', '明苑茶餐厅', 4, 4, 0),
(8, 'Bob', 'GEK-PE', '粤J9V578', '2017-08-01', '01:42pm', '香港尖沙咀', '九龙', 4, 5, 0),
(9, 'Tina-Chan', 'YMK-FN', '新C34556', '2017-08-01', '02:57pm', '乌鲁木齐人民医院', '溢达棉花生产基地', 6, 20, 4),
(10, '李菲菲', 'GEK-FN', '粤E12345', '2017-08-01', '04:42pm', '大润发超市', '一品烧农庄', 2, 5, 2),
(40, 'Bob', 'GEK-PE', '粤J9V578', '2017-08-02', '12:06pm', '高明区荷香路61号', '文华市场', 4, 3, 0),
(43, '张作霖', 'YMG-QA', '粤Y23457', '2017-08-02', '12:11pm', '绿色世嘉花园', '沃尔玛超市', 3, 4, 1),
(44, '陈帅斌', 'GEK-PE', '粤E17816', '2017-08-16', '10:25am', '广东溢达纺织有限公司(沿江路)', '高明客运站', 0, 12, 12),
(45, '陈帅斌', 'GEK-PE', '粤E17816', '2017-08-16', '10:26am', '大润发(顺德店)', '喜茶HEEKCAA(陈村店)', 0, 3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `userid` bigint(20) NOT NULL,
  `id` int(16) NOT NULL,
  `passwd` varchar(32) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(16) NOT NULL,
  `carnum` varchar(8) NOT NULL,
  `freestyle` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `id`, `passwd`, `name`, `department`, `carnum`, `freestyle`) VALUES
(1, 299119, '0299119', '欧阳飘柔', 'EEL-QI', '京A95B27', ''),
(2, 294110, '0294110', '杨洋', 'GEG-IT', '粤E20171', ''),
(3, 294119, '0294119', 'yum', 'XJW-QA', '桂A54321', ''),
(4, 295119, '0295119', 'Bob', 'GEK-PE', '粤J9V578', ''),
(5, 296119, '0296119', '林峰', 'EEL-TED', '', ''),
(6, 297119, '0297119', '李菲菲', 'GEK-FN', '粤E12345', ''),
(7, 298119, '0298119', '张作霖', 'YMG-QA', '粤Y23457', ''),
(8, 291119, '0291119', '黎秋水', 'GEG-PPC', '', ''),
(9, 292119, '020202', 'Alex-Wong', 'GEW-AT', '', ''),
(10, 293119, '010101', 'Tina-Chan', 'YMK-FN', '新C34556', ''),
(11, 294318, '123456', '陈帅斌', 'GEK-PE', '粤E17816', '各位亲爱的领导大大，月亮代表我的心，感谢溢达这一个多月给我提供的这个平台，我的演讲到此结束！\r\n我叫陈伟斌，GEK-PE，来自广东工业大学，谢谢大家！');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `pin_rec`
--
ALTER TABLE `pin_rec`
  ADD PRIMARY KEY (`rec_id`);

--
-- Indexes for table `seatsinfo`
--
ALTER TABLE `seatsinfo`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- 使用表AUTO_INCREMENT `pin_rec`
--
ALTER TABLE `pin_rec`
  MODIFY `rec_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- 使用表AUTO_INCREMENT `seatsinfo`
--
ALTER TABLE `seatsinfo`
  MODIFY `info_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `userid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
