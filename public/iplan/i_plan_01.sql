-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2017 at 12:40 PM
-- Server version: 5.5.25
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `i_plan_01`
--

-- --------------------------------------------------------

--
-- Table structure for table `broadcasts`
--

CREATE TABLE IF NOT EXISTS `broadcasts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `shown_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `user` int(11) NOT NULL,
  `channel` int(11) NOT NULL,
  `studio` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `name_flag` tinyint(4) NOT NULL DEFAULT '1',
  `genre` varchar(500) NOT NULL,
  `genre_flag` tinyint(4) NOT NULL DEFAULT '1',
  `theme` varchar(500) NOT NULL,
  `theme_flag` tinyint(4) NOT NULL DEFAULT '1',
  `duration` varchar(20) NOT NULL,
  `duration_flag` tinyint(4) NOT NULL DEFAULT '1',
  `durationMinute` int(11) NOT NULL,
  `language` varchar(100) NOT NULL,
  `language_flag` tinyint(4) NOT NULL DEFAULT '1',
  `concept` varchar(500) NOT NULL,
  `concept_flag` tinyint(4) NOT NULL DEFAULT '1',
  `show_type` varchar(50) NOT NULL,
  `show_type_flag` tinyint(4) NOT NULL DEFAULT '1',
  `company` varchar(100) NOT NULL,
  `company_flag` tinyint(4) NOT NULL DEFAULT '1',
  `editor` varchar(100) NOT NULL,
  `editor_flag` tinyint(4) NOT NULL DEFAULT '1',
  `anchor` varchar(500) NOT NULL,
  `anchor_flag` tinyint(4) NOT NULL DEFAULT '1',
  `director` varchar(500) NOT NULL,
  `director_flag` tinyint(4) NOT NULL DEFAULT '1',
  `place` int(11) NOT NULL,
  `place_flag` tinyint(4) NOT NULL DEFAULT '1',
  `camera` int(11) NOT NULL,
  `camera_flag` tinyint(4) NOT NULL DEFAULT '1',
  `camera2` int(11) NOT NULL,
  `camera2_flag` tinyint(4) NOT NULL DEFAULT '1',
  `tech1` int(11) NOT NULL,
  `tech1_flag` tinyint(4) NOT NULL DEFAULT '1',
  `tech2` int(11) NOT NULL,
  `tech2_flag` tinyint(4) NOT NULL DEFAULT '1',
  `tech3` int(11) NOT NULL,
  `tech3_flag` tinyint(4) NOT NULL DEFAULT '1',
  `tech4` int(11) NOT NULL,
  `tech4_flag` tinyint(4) NOT NULL DEFAULT '1',
  `tech5` int(11) NOT NULL,
  `tech5_flag` tinyint(4) NOT NULL DEFAULT '1',
  `camera_count` int(11) NOT NULL,
  `camera2_count` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `broadcasts`
--

INSERT INTO `broadcasts` (`id`, `dt`, `added_dt`, `last_dt`, `shown_dt`, `status`, `user`, `channel`, `studio`, `name`, `name_flag`, `genre`, `genre_flag`, `theme`, `theme_flag`, `duration`, `duration_flag`, `durationMinute`, `language`, `language_flag`, `concept`, `concept_flag`, `show_type`, `show_type_flag`, `company`, `company_flag`, `editor`, `editor_flag`, `anchor`, `anchor_flag`, `director`, `director_flag`, `place`, `place_flag`, `camera`, `camera_flag`, `camera2`, `camera2_flag`, `tech1`, `tech1_flag`, `tech2`, `tech2_flag`, `tech3`, `tech3_flag`, `tech4`, `tech4_flag`, `tech5`, `tech5_flag`, `camera_count`, `camera2_count`) VALUES
(1, '2017-07-09 15:19:14', '2017-03-27 18:00:00', '2017-07-09 18:00:00', '0000-00-00 00:00:00', 1, 2, 1, 1, 'Күндарек', 1, '8', 0, 'Реклама', 1, '01:30', 0, 90, 'На русском языке', 1, 'ghgjkghjkghk   jkghjkghk', 0, 'option1', 0, 'Со-производство', 1, 'jkghjkhjk  jkg', 1, ' ghjk  gkghk ', 0, 'ghjk jkghjk', 1, 1, 1, 2, 0, 3, 1, 1, 0, 4, 1, 0, 0, 0, 1, 0, 0, 0, 0),
(2, '2017-07-09 15:24:09', '2000-02-03 18:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 3, 4, 6, 'Ой Ордо ', 0, '0', 0, 'Новости', 0, '01:19', 0, 79, 'английский', 0, 'asd 2222', 0, 'архив', 0, 'Производство?', 0, '12', 0, '21', 0, '23', 0, 2, 0, 2, 0, 3, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(200) NOT NULL,
  `channel` int(11) NOT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT '0',
  `week` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `calendar`
--

INSERT INTO `calendar` (`id`, `dt`, `name`, `channel`, `approve`, `week`, `year`) VALUES
(1, '0000-00-00 00:00:00', 'КТРК-1-17', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `calendar_event`
--

CREATE TABLE IF NOT EXISTS `calendar_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father` int(11) NOT NULL DEFAULT '0',
  `father_name` varchar(500) NOT NULL,
  `added_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_reserve` tinyint(11) NOT NULL DEFAULT '0',
  `duration` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `forced_type` tinyint(4) NOT NULL DEFAULT '0',
  `forced_period_start` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `forced_period_end` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `forced_days` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `calendar_event`
--

INSERT INTO `calendar_event` (`id`, `father`, `father_name`, `added_dt`, `user`, `title`, `dt`, `is_reserve`, `duration`, `type`, `forced_type`, `forced_period_start`, `forced_period_end`, `forced_days`) VALUES
(1, 0, '', '2017-07-07 11:20:31', 1, 'ГИМН Кыргызской Республики', '2017-07-07 00:57:00', 0, 3, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `ch_id` varchar(10) NOT NULL,
  `broadcast_time` varchar(10) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `name`, `fullname`, `ch_id`, `broadcast_time`, `logo`) VALUES
(1, 'КТРК 1', 'Первый общественный канал', '1', '18:12', 'upload_images/ktrk_last.svg'),
(4, 'МТТ', 'Маданият Тарых Тил', '2', '18:26', ''),
(5, 'Спорт', 'КТРК Спорт', '3', '18:26', ''),
(6, 'Баластан', 'Баластан', '4', '18:30', ''),
(7, 'Музыка', 'КТРК Музыка', '5', '18:30', ''),
(8, 'Ала-Тоо 24', 'Ала-Тоо 24', '6', '18:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `father` int(11) NOT NULL,
  `added_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `language` varchar(50) NOT NULL,
  `tag` varchar(200) NOT NULL,
  `theme` varchar(200) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `durationMinute` int(11) NOT NULL,
  `show_type` varchar(50) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_reserve` tinyint(4) NOT NULL DEFAULT '0',
  `incharge` varchar(200) NOT NULL,
  `editor` varchar(500) NOT NULL,
  `anchor` varchar(500) NOT NULL,
  `director` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`id`, `father`, `added_dt`, `user`, `title`, `language`, `tag`, `theme`, `duration`, `durationMinute`, `show_type`, `dt`, `is_reserve`, `incharge`, `editor`, `anchor`, `director`) VALUES
(1, 1, '2017-07-10 16:19:26', 1, '1- чыг', '', 'Социальное развитие', 'Реклама', '01:30', 90, 'оригинал', '2017-07-10 16:19:00', 0, '11', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(2, 1, '2017-07-10 16:20:29', 1, '1- чыг', 'Мультиязычный', 'Социальное развитие', 'Викторины и Розыгрыши', '01:31', 91, '', '2017-07-30 18:20:00', 0, '11', '22', '33', '44'),
(3, 1, '2017-07-10 16:22:09', 1, '1- чыг', 'На кыргызском языке', 'Религиозная политика', 'Магазин на диване', '01:29', 89, '', '2017-07-18 12:18:00', 0, '11', '22', '33', '44'),
(4, 2, '2017-07-10 16:25:20', 1, '1- чыг', 'На русском языке', 'Социальное развитие', 'Информационные программы', '01:19', 79, 'повтор', '2017-07-25 17:25:00', 1, '', '12', '21', '23'),
(5, 2, '2017-07-10 16:25:51', 1, '1- чыг', '', '', '', '01:19', 79, 'live', '2017-07-10 16:25:00', 0, '', '12', '21', '23'),
(6, 2, '2017-07-10 16:26:02', 1, '1- чыг', '', '', '', '01:19', 79, 'повтор', '2017-07-10 16:26:00', 1, '', '12', '21', '23'),
(7, 2, '2017-07-10 16:26:16', 1, '1- чыг', '', '', '', '01:19', 79, 'архив', '2017-07-10 16:26:00', 1, '', '12', '21', '23'),
(8, 2, '2017-07-10 16:27:07', 1, '1- чыг', '', '', '', '01:19', 79, '', '2017-07-10 16:27:00', 0, '', '12', '21', '23'),
(9, 1, '2017-07-10 16:28:02', 1, '1- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:27:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(10, 1, '2017-07-10 16:31:30', 1, '1- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:27:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(11, 1, '2017-07-10 16:31:50', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:27:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(12, 1, '2017-07-10 16:32:12', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:32:00', 1, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(13, 1, '2017-07-10 16:37:58', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:37:00', 1, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(14, 1, '2017-07-10 16:39:18', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:37:00', 1, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(15, 1, '2017-07-10 16:39:36', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:39:00', 1, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(16, 1, '2017-07-10 16:40:24', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:40:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(17, 1, '2017-07-10 16:40:42', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:40:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(18, 1, '2017-07-10 16:43:49', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:43:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(19, 1, '2017-07-10 16:44:59', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:43:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(20, 1, '2017-07-10 16:46:09', 1, '2- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:46:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(21, 1, '2017-07-10 16:46:25', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:46:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(22, 1, '2017-07-10 16:51:07', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:50:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(23, 1, '2017-07-10 16:52:36', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:52:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(24, 1, '2017-07-10 16:54:48', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:54:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(25, 1, '2017-07-10 16:55:06', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:54:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(26, 1, '2017-07-10 16:57:10', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:56:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk'),
(27, 1, '2017-07-10 16:57:57', 1, '3- чыг', '', '', '', '01:30', 90, '', '2017-07-10 16:56:00', 0, '', 'jkghjkhjk  jkg', ' ghjk  gkghk ', 'ghjk jkghjk');

-- --------------------------------------------------------

--
-- Table structure for table `episode_file`
--

CREATE TABLE IF NOT EXISTS `episode_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `archive` tinyint(4) NOT NULL DEFAULT '0',
  `serverpath` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `episode_file`
--

INSERT INTO `episode_file` (`id`, `episode`, `archive`, `serverpath`, `file`) VALUES
(1, 26, 1, '0', '0'),
(2, 27, 1, 'abc deg \\\\ sdsd \\\\ \\\\%27 dsdsds', 'abc deg \\\\ sdsd \\\\ \\\\%27 dsdsds');

-- --------------------------------------------------------

--
-- Table structure for table `episode_guests`
--

CREATE TABLE IF NOT EXISTS `episode_guests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `g1` varchar(200) NOT NULL,
  `g2` varchar(200) NOT NULL,
  `g3` varchar(200) NOT NULL,
  `g4` varchar(200) NOT NULL,
  `w1` varchar(200) NOT NULL,
  `w2` varchar(200) NOT NULL,
  `w3` varchar(200) NOT NULL,
  `w4` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `episode_guests`
--

INSERT INTO `episode_guests` (`id`, `episode`, `g1`, `g2`, `g3`, `g4`, `w1`, `w2`, `w3`, `w4`) VALUES
(1, 0, '', '', '', '', '', '', '', ''),
(2, 11, '', '', '', '', '', '', '', ''),
(3, 12, 'a1', 'a2', 'a3', 'a4', 'f1', 'f2', 'f3', 'f4'),
(4, 13, '', '', '', '', '', '', '', ''),
(5, 14, '', '', '', '', '', '', '', ''),
(6, 15, '', '', '', '', '', '', '', ''),
(7, 16, '', '', '', '', '', '', '', ''),
(8, 17, '', '', '', '', '', '', '', ''),
(9, 18, '', '', '', '', '', '', '', ''),
(10, 19, '', '', '', '', '', '', '', ''),
(11, 20, '', '', '', '', '', '', '', ''),
(12, 21, '', '', '', '', '', '', '', ''),
(13, 22, '', '', '', '', '', '', '', ''),
(14, 23, '', '', '', '', '', '', '', ''),
(15, 24, '', '', '', '', '', '', '', ''),
(16, 25, '', '', '', '', '', '', '', ''),
(17, 26, '', '', '', '', '', '', '', ''),
(18, 27, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `episode_montage`
--

CREATE TABLE IF NOT EXISTS `episode_montage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `montage` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `import` varchar(100) NOT NULL,
  `export` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `episode_montage`
--

INSERT INTO `episode_montage` (`id`, `episode`, `montage`, `dt`, `date_to`, `date_from`, `import`, `export`) VALUES
(1, 18, 0, '2017-07-10 16:43:49', '2017-07-12 16:45:00', '2017-07-10 18:00:00', 'avi', '4k'),
(2, 19, 0, '2017-07-10 16:45:00', '2017-07-12 16:45:00', '2017-07-11 16:44:00', 'avi', '4k'),
(3, 20, 0, '2017-07-10 16:46:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(4, 21, 4, '2017-07-10 16:46:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(5, 22, 0, '2017-07-10 16:51:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(6, 23, 0, '2017-07-10 16:52:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(7, 24, 0, '2017-07-10 16:54:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(8, 25, 0, '2017-07-10 16:55:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(9, 26, 0, '2017-07-10 16:57:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', ''),
(10, 27, 0, '2017-07-10 16:57:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `episode_place`
--

CREATE TABLE IF NOT EXISTS `episode_place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `place` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_from` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `date_to` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `description` varchar(500) NOT NULL,
  `tech` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `episode_place`
--

INSERT INTO `episode_place` (`id`, `episode`, `place`, `dt`, `date_from`, `date_to`, `description`, `tech`) VALUES
(1, 13, 0, '2017-07-10 16:37:58', '2017-07-11 16:37:00', '2017-07-12 16:38:00', 'ahahaha', 0),
(2, 14, 0, '2017-07-10 16:39:18', '2017-07-11 16:37:00', '2017-07-12 16:38:00', 'ahahaha', 0),
(3, 15, 0, '2017-07-10 16:39:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(4, 16, 0, '2017-07-10 16:40:24', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(5, 17, 0, '2017-07-10 16:40:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 2),
(6, 18, 0, '2017-07-10 16:43:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(7, 19, 0, '2017-07-10 16:45:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(8, 20, 0, '2017-07-10 16:46:09', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(9, 21, 0, '2017-07-10 16:46:25', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(10, 22, 0, '2017-07-10 16:51:07', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(11, 23, 0, '2017-07-10 16:52:36', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(12, 24, 0, '2017-07-10 16:54:48', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(13, 25, 0, '2017-07-10 16:55:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(14, 26, 0, '2017-07-10 16:57:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0),
(15, 27, 0, '2017-07-10 16:57:57', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `episode_tools`
--

CREATE TABLE IF NOT EXISTS `episode_tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `camera1` int(11) NOT NULL,
  `camera2` int(11) NOT NULL,
  `camera_count1` int(11) NOT NULL,
  `camera_count2` int(11) NOT NULL,
  `crane` tinyint(4) NOT NULL,
  `rails` tinyint(4) NOT NULL,
  `drone` tinyint(4) NOT NULL,
  `steadycam` tinyint(4) NOT NULL,
  `tool` int(11) NOT NULL,
  `tool_desc` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `episode_tools`
--

INSERT INTO `episode_tools` (`id`, `episode`, `camera1`, `camera2`, `camera_count1`, `camera_count2`, `crane`, `rails`, `drone`, `steadycam`, `tool`, `tool_desc`) VALUES
(1, 22, 2, 0, 1, 0, 1, 0, 1, 0, 4, 'asasas'),
(2, 23, 2, 3, 4, 7, 1, 1, 1, 1, 3, 'ahahaha'),
(3, 24, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(4, 25, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(5, 26, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
(6, 27, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `episode_transport`
--

CREATE TABLE IF NOT EXISTS `episode_transport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `episode` int(11) NOT NULL,
  `need` tinyint(4) NOT NULL,
  `where` varchar(200) NOT NULL,
  `what` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `episode_transport`
--

INSERT INTO `episode_transport` (`id`, `episode`, `need`, `where`, `what`) VALUES
(1, 25, 1, 'dsd', 'sdssdsdddddddddd 33'),
(2, 26, 0, '', ''),
(3, 27, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `added_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `title` varchar(200) NOT NULL,
  `duration` int(11) NOT NULL,
  `duration_string` varchar(20) NOT NULL,
  `show_type` varchar(50) NOT NULL,
  `father_db` varchar(20) NOT NULL,
  `father_id` int(11) NOT NULL,
  `approve` tinyint(4) NOT NULL DEFAULT '0',
  `channel` int(11) NOT NULL,
  `seria` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `added_dt`, `user`, `dt`, `title`, `duration`, `duration_string`, `show_type`, `father_db`, `father_id`, `approve`, `channel`, `seria`) VALUES
(2, '2017-07-11 09:59:45', 1, '2017-07-21 04:00:00', 'Ой Ордо ', 16, '00:16', 'повтор', 'episodes', 4, 0, 4, 0),
(6, '2017-07-11 10:09:39', 1, '2017-07-17 21:00:00', 'Терминатор 8', 120, '02:00', '', 'films', 8, 0, 4, 0),
(10, '2017-07-11 10:46:14', 1, '2017-07-21 10:00:00', 'Ой Ордо ', 81, '01:21', 'повтор', 'episodes', 4, 0, 4, 0),
(11, '2017-07-11 10:46:31', 1, '2017-07-21 05:00:00', 'Ой Ордо ', 81, '01:21', 'повтор', 'episodes', 4, 0, 4, 0),
(13, '2017-07-11 10:52:09', 1, '2017-07-17 18:00:00', 'Ой Ордо ', 60, '01:00', 'повтор', 'episodes', 4, 0, 4, 0),
(14, '2017-07-11 10:52:09', 1, '2017-07-24 18:00:00', 'Ой Ордо ', 60, '01:00', 'повтор', 'episodes', 4, 0, 4, 0),
(15, '2017-07-11 10:52:09', 1, '2017-07-31 18:00:00', 'Ой Ордо ', 60, '01:00', 'повтор', 'episodes', 4, 0, 4, 0),
(16, '2017-07-11 10:52:09', 1, '2017-08-07 18:00:00', 'Ой Ордо ', 60, '01:00', 'повтор', 'episodes', 4, 0, 4, 0),
(18, '2017-07-11 11:55:39', 1, '2017-07-21 20:00:00', 'Игра престолов', 60, '01:00', '', 'films', 6, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `genre` varchar(500) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `durationMinute` int(11) NOT NULL,
  `language` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `director` varchar(200) NOT NULL,
  `serverpath` varchar(500) NOT NULL,
  `other` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `last_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `added_dt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `seria` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `type`, `dt`, `user`, `name`, `genre`, `duration`, `durationMinute`, `language`, `country`, `company`, `director`, `serverpath`, `other`, `number`, `description`, `last_dt`, `added_dt`, `status`, `seria`) VALUES
(1, 0, '2017-07-09 11:32:43', 1, 'Терминатор 1', 'Криминал', '00:32', 32, 'На русском языке', 'Кыргызстан', 'Кыргызфильм', 'sfgsdfg', '', '', 'sfgsdfg', 'sdfgsdfg', '0000-00-00 00:00:00', '2029-06-20 11:00:00', 1, 1),
(2, 1, '2017-07-09 11:35:23', 2, 'Шрек', 'Фантастика', '01:34', 94, 'Мультиязычный', 'Кыргызстан', 'Кыргызтелефильм', 'eleme', '', '0', 'nuomerp', 'ere e rer', '0000-00-00 00:00:00', '2009-06-20 04:00:00', 1, 1),
(3, 1, '2017-07-09 11:41:37', 0, 'Ну, погоди!', '', '01:05', 65, 'Мультиязычный', 'Кыргызстан', 'Кыргызтелефильм', 'sfgsdfg', '', '0', '23123', '213213', '0000-00-00 00:00:00', '2017-02-01 18:00:00', 1, 1),
(4, 1, '2017-07-09 11:43:28', 3, 'Ice Age', '', '01:30', 90, 'На кыргызском языке', 'Россия', 'Кыргызфильм', 'sfgsdfg', '', '0', '452345', 'i8ouio', '0000-00-00 00:00:00', '2017-06-30 18:00:00', 1, 1),
(5, 0, '2017-07-09 11:45:52', 1, 'Терминатор 5', 'Короткометражный, Криминал, ', '00:30', 30, 'На кыргызском языке', 'Казахстан', 'Кыргызтелефильм', 'hjklh', '', '0', 'hj', 'klhjkl', '0000-00-00 00:00:00', '2017-07-08 18:00:00', 1, 1),
(6, 2, '2017-07-09 11:47:43', 1, 'Игра престолов', 'Короткометражный, Кримина', '00:30', 30, 'На кыргызском языке', 'Казахстан', 'Кыргызтелефильм', 'hjklh', '', '0', 'hj', 'klhjkl', '0000-00-00 00:00:00', '2017-07-08 18:00:00', 1, 1),
(7, 0, '2017-07-09 11:47:57', 1, 'Терминатор 7', 'Короткометражный, Криминал', '00:30', 30, 'На кыргызском языке', 'Казахстан', 'Кыргызтелефильм', 'hjklh', '', '0', 'hj', 'klhjkl', '0000-00-00 00:00:00', '2017-07-08 18:00:00', 1, 1),
(8, 0, '2017-07-09 11:50:37', 1, 'Терминатор 8', 'Короткометражный, Криминал', '00:30', 30, 'На кыргызском языке', 'Казахстан', 'Кыргызтелефильм', 'hjklh', '', '0', 'hj', 'klhjkl', '0000-00-00 00:00:00', '2017-07-08 18:00:00', 1, 1),
(9, 0, '2017-07-09 11:50:43', 1, 'Терминатор 9', 'Короткометражный, Криминал', '00:30', 30, 'На кыргызском языке', 'Казахстан', 'Кыргызтелефильм', 'hjklh', '', '0', 'hj', 'klhjkl', '0000-00-00 00:00:00', '2017-07-08 18:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `theme` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`id`, `name`, `code`, `theme`) VALUES
(1, 'Информационные', '1', 'Новости, репортаж'),
(2, 'Социальные', '2', 'Медицина, Права, Религия'),
(3, 'Коммерческие', '3', 'Викторины, Промо сюжеты'),
(4, 'Культура', '4', 'История, Язык, Путешествия');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `code` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `code`) VALUES
(1, 'На кыргызском языке', '1'),
(2, 'На русском языке', '2'),
(3, 'Мультиязычный', '3');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user` int(11) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `query` varchar(500) NOT NULL,
  `action` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `comment` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `dt`, `user`, `ip`, `query`, `action`, `description`, `comment`, `status`) VALUES
(1, '2017-07-09 08:46:13', 1, '127.0.0.1', '', 'Вход пользователя', '', '', 1),
(2, '2017-07-10 04:30:05', 1, '127.0.0.1', '', 'Вход пользователя', '', '', 1),
(3, '2017-07-10 23:17:42', 1, '127.0.0.1', '', 'Вход пользователя', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `montage`
--

CREATE TABLE IF NOT EXISTS `montage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `montage`
--

INSERT INTO `montage` (`id`, `name`) VALUES
(1, 'АВМ 1'),
(2, 'АВМ 2'),
(3, 'АВМ 3'),
(4, 'АВМ 4');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`) VALUES
(1, 'Зал 1'),
(2, 'Зал 2');

-- --------------------------------------------------------

--
-- Table structure for table `studios`
--

CREATE TABLE IF NOT EXISTS `studios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `color` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `studios`
--

INSERT INTO `studios` (`id`, `name`, `code`, `color`) VALUES
(1, 'СТК Ала-Тоо24', '1', '#0080ff'),
(2, 'СТК МТТ', '2', '#ff8040'),
(3, 'СТК Спорт', '3', '#00ff00'),
(4, 'СТК Баластан', '4', '#ff0000'),
(5, 'СТК Музыка', '5', '#bb0484'),
(6, 'СЭИП', '6', '#008040');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `deadline` varchar(100) NOT NULL,
  `report` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `fullname`, `deadline`, `report`) VALUES
(1, 'Год Истории и культуры', 'Объявленный президентом', '2016 год', 'До 15 числа последного мес.квар.'),
(2, 'Социальное развитие', 'Социальное развитие', '2020', ''),
(3, 'Религиозная политика', 'Развитие религиозной политики', '2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE IF NOT EXISTS `tools` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL,
  `amount` int(11) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `is_camera` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id`, `name`, `code`, `amount`, `type`, `is_camera`) VALUES
(1, 'ПТС ФОРД 6 кам.', '1', 1, 0, 0),
(2, 'Камера NXCAM 3', '2', 5, 0, 1),
(3, 'Камера NXCAM 5', '3', 2, 0, 1),
(4, 'Доп. Свет 1000', '1', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `blocked` tinyint(4) NOT NULL DEFAULT '0',
  `dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `father` int(11) NOT NULL DEFAULT '0',
  `channels` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `status`, `blocked`, `dt`, `type`, `father`, `channels`) VALUES
(1, 'Администратор', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 8, 0, '2017-07-08 14:24:31', 0, 0, '4,5,6,1,2'),
(2, 'Асанбек уулу Руслан', 'Asanbek_u', '81dc9bdb52d04dc20036dbd8313ed055', 8, 0, '2017-07-08 14:25:27', 0, 0, '3,4'),
(3, 'adsfasdfasd', 'asdfasdfad', '81dc9bdb52d04dc20036dbd8313ed055', 1, 0, '2017-07-09 06:58:08', 0, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
