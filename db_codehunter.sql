-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 29, 2014 at 12:39 AM
-- Server version: 5.1.58
-- PHP Version: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dollarst_dl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dl_meeting3_quiz`
--

CREATE TABLE IF NOT EXISTS `dl_meeting3_quiz` (
  `NoRC` int(3) NOT NULL COMMENT 'ID RC',
  `QRCode` varchar(15) NOT NULL COMMENT 'รหัส qrcode ประจำ RC',
  `hint` text NOT NULL COMMENT 'คำใบ้สำหรับ RC ถัดไป',
  `type` int(2) NOT NULL COMMENT 'รูปแบบคำถาม 1 ถามตอบ 2 ตัวเลือก',
  `mission` text NOT NULL COMMENT 'คำถาม',
  `choice` text NOT NULL COMMENT 'แต่ตัวเลือกคั่นด้วย | ',
  `answer` varchar(100) NOT NULL COMMENT 'เฉลยที่ถูกต้อง',
  `RC` varchar(100) NOT NULL COMMENT 'คำใบ้ตำแหน่ง RC ถัดไป',
  `teamwin` varchar(20) DEFAULT NULL COMMENT 'ทีมที่ตอบ RC นี้ถูก',
  `timewin` datetime DEFAULT NULL COMMENT 'เวลาที่ตอบถูก',
  PRIMARY KEY (`NoRC`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dl_meeting3_quiz`
--

INSERT INTO `dl_meeting3_quiz` (`NoRC`, `QRCode`, `hint`, `type`, `mission`, `choice`, `answer`, `RC`, `teamwin`, `timewin`) VALUES
(0, 'TEST', '', 1, 'password : test', '', 'test', 'สนามเด็กเล่น ยางรถยนต์', 'red', '2014-12-29 00:34:24'),
(1, '02GD', '', 2, 'ถังขยะสีเหลืองมีกี่ถังโดยรอบ', '1 ถัง|2 ถัง|3 ถัง|4 ถัง', '7', 'ขับมาตามทางเจอป้ายจำกัดความเร็ว 20', NULL, NULL),
(2, 'O13V', '', 1, 'ก่อนที่จะเป็นพยาบาลเป็นอะไรก่อน', '', 'พยาตูม', 'ขับขวาผ่านตลอด จนเจอเด็กชักกะเย่อ 3 คน', 'blue', '2014-05-17 17:28:52'),
(3, 'W07F', '', 1, 'ต้นที่อยู่ข้างทางมีชื่อวิทยาศาสตร์ว่า (อังกฤษพิมพ์เล็กหมด)', '', 'streblus asper lour.', 'ขับตามทางมาเรื่อยๆ จะเจอ ขี่ช้าๆ', 'blue', '2014-05-17 17:39:02'),
(4, '16ER', '', 1, 'งูอะไรทำเหมือนหมา', '', 'งูเห่า', 'ขับมาตามทาง จะเจอป้าย 20 กม อีกแล้ว ขับมาเรื่อยๆ จะเจอรูปปั้นสี่เหลี่ยมสี่รูป', 'blue', '2014-05-17 17:45:37'),
(5, 'SH7N', '', 1, 'Concept to make a photo by camera can _____ only shot to shot in limited', '', 'keep', 'ขับมาเรื่อยๆ ยาวๆ จะเจอร้านขายน้ำฐิตารีย์', 'blue', '2014-05-17 18:01:41'),
(6, 'C6UF', '', 2, 'YWC สาขาที่ต้องเขียนเว็บไซต์มีชื่อว่า web _______', 'content|programming|marketing|design|engineer|developer', 'programming', 'ซื้อน้ำก่อนออกเดินทางทีมละขวด ขับมานิดเดียวเจอรถไฟแล้ว', 'green', '2014-05-17 18:04:42'),
(7, '12MN', '', 1, 'อวัยวะส่วนใดในร่างกายที่เหม็นที่สุด', '', 'ไหปลาร้า', 'ขับต่อไป เจอศาลาหกเหลี่ยมจอดที่นี่', 'red', '2014-05-17 18:12:48'),
(8, 'W0UV', '', 1, 'ธงชาติไทยหนึ่งผืนมีสามสีถ้าเอามารวกกัน 5 ผืนจะมีกี่สี', '', '3', 'BICYCLE NOT ALLOWED', 'red', '2014-05-17 18:19:44'),
(9, 'S6YV', '', 1, 'พี่โน้ต dek-d มีเว็บอีกนึงชื่อว่า _______.com', '', 'dogilike', 'ขับตามทางมายาวๆ จะกลับมา RC ที่หนึ่ง จะมีคำเขียนอยู่ตรงป้าย', 'red', '2014-05-17 18:36:03'),
(10, '7735', '', 1, 'มีเรืออยู่ลำหนึ่งบรรทุกคนได้ทั้งหมด50คนขณะนี้มีคนอยู่บนเรือแล้ว49คน \nพอคนที่50ขึ้นเรือเป็นผู้หญิงท้อง5เดือนพอขึ้นไปแล้วทำไมเรือค่อยๆจม ', '', 'เรือดำน้ำ', 'มองตรงข้ามจะเห็นหิน 11 ก้อนให้ทุกคนในทีมถ่ายรูปยืนบนหินแล้วอัพรูปลงเฟสกรุ๊ป JWC ทีมใดอัพก่อนได้คะแนน', 'green', '2014-05-17 18:42:01'),
(11, 'SHMZ', '', 0, '', '', '', '', NULL, NULL),
(12, 'KXQZ', '', 0, '', '', '', '', NULL, NULL),
(13, 'OH38', '', 0, '', '', '', '', NULL, NULL),
(14, 'KDIJ', '', 0, '', '', '', '', NULL, NULL),
(15, 'GDQ8', '', 0, '', 'คครีคตร่ค', '', '', NULL, NULL),
(16, '96UB', '', 0, '', '', '', '', NULL, NULL),
(17, 'FISH', '', 0, '', '', '', '', NULL, NULL),
(18, '3CAB', '', 0, '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dl_meeting3_setting`
--

CREATE TABLE IF NOT EXISTS `dl_meeting3_setting` (
  `quiz` int(5) NOT NULL,
  `timeexp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dl_meeting3_setting`
--

INSERT INTO `dl_meeting3_setting` (`quiz`, `timeexp`) VALUES
(1, '2014-05-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `dl_meeting3_telphone`
--

CREATE TABLE IF NOT EXISTS `dl_meeting3_telphone` (
  `phone` varchar(12) NOT NULL,
  `team` varchar(10) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dl_meeting3_telphone`
--

INSERT INTO `dl_meeting3_telphone` (`phone`, `team`) VALUES
('0882288335', 'STAFF'),
('0850992641', 'STAFF'),
('0815781987', 'STAFF'),
('0891058553', 'red'),
('0823352301', 'blue'),
('0830953307', 'green'),
('0850277760', 'STAFF'),
('0813482223', 'red');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
