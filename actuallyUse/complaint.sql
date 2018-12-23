-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2018 at 06:37 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.2.11-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `se18_10`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `adminpassword` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `adminname` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminpassword`, `adminname`) VALUES
('admin', 'admin', 'ผู้ดูแลระบบ');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catname`) VALUES
('การเรียน'),
('กิจกรรม'),
('สถานที่ต่างๆ'),
('ห้องเรียน'),
('อื่นๆ');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `username` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `comid` int(50) NOT NULL,
  `comment` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`username`, `comid`, `comment`, `time`) VALUES
('5339824014', 55, 'กกกก', '2018-12-24 03:10:03'),
('5339824014', 57, 'จริงหรอออ', '2018-12-24 03:08:38'),
('5339824014', 33, 'หูยยยยยย', '2018-12-24 02:57:45'),
('5339824014', 33, 'อิอิ', '2018-12-24 02:58:05'),
('5339824014', 40, 'เธอไม่ชัดเจนน5555', '2018-12-24 04:09:21'),
('5367507890', 38, '555555555 ', '2018-12-24 05:13:02'),
('5367507890', 65, 'update ja', '2018-12-24 04:28:42'),
('5367507890', 34, 'นั่งพื้นไปเลยยย', '2018-12-24 05:23:19'),
('5474129179', 65, 'กลายเปน  00 ให้หมด', '2018-12-24 03:54:04'),
('59070501043', 39, '5555555555555', '2018-12-24 01:39:26'),
('59070501043', 39, '55555555555556', '2018-12-24 01:39:35'),
('59070501043', 17, 'ขอลองคอมเม้นท์หน่อยนะครับ', '2018-12-24 04:01:39'),
('59070501043', 33, 'จงดูไอหนุ่มน่อย', '2018-12-23 23:24:38'),
('59070501043', 68, 'จริงป่ะจ๊ะ', '2018-12-24 06:30:13'),
('59070501043', 65, 'จะคอมเม้นท์หน่อยนะ', '2018-12-24 06:18:16'),
('59070501043', 17, 'ตะงุ้ยยยย', '2018-12-24 04:04:27'),
('59070501043', 36, 'ผมก็สงสัยเหมือนกัน', '2018-12-23 23:59:16'),
('59070501043', 65, 'ผมก็เห็นครับ', '2018-12-24 03:53:09'),
('59070501043', 36, 'เอาไงดีน๊าาา', '2018-12-23 23:59:27'),
('59070501043', 65, 'โอเครครับ', '2018-12-24 05:59:25'),
('59070501043', 33, 'ใจเย็นกอนๆ', '2018-12-23 23:25:39'),
('staff1', 38, '55555', '2018-12-24 05:54:56'),
('staff1', 68, 'ดูแล้วจ้าาาา', '2018-12-24 06:29:48'),
('staff1', 33, 'ทดสอบการตั้งคำถามจากผู้ดูแล', '2018-12-23 23:45:24'),
('staff1', 33, 'ทดสอบการตั้งคำถามจากผู้ดูแลเอ๊ะ', '2018-12-23 23:45:46'),
('staff1', 33, 'ทดสอบการตั้งคำถามจากผู้ดูแลเอ๊ะเอ้า', '2018-12-23 23:46:03'),
('staff1', 33, 'บิงงไรนักหนา', '2018-12-23 23:46:12'),
('staff1', 33, 'บิงๆ', '2018-12-23 23:25:59'),
('staff1', 65, 'ผมว่าผมเห็นแล้วนะครับ', '2018-12-24 03:51:58'),
('staff1', 38, 'ยึดโทรศัพท์ก่อนเข้าเรียน', '2018-12-24 04:16:09'),
('staff1', 57, 'ระวังคำพูดด้วยครับ นศ.', '2018-12-24 05:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `comid` int(50) NOT NULL,
  `comname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `comdetail` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `catname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stuid` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `score` int(50) NOT NULL DEFAULT '0',
  `statusid` int(50) NOT NULL DEFAULT '0',
  `datetimes` datetime DEFAULT NULL,
  `timetouch` date DEFAULT NULL,
  `studentsee` int(10) NOT NULL,
  `receiversee` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`comid`, `comname`, `comdetail`, `catname`, `stuid`, `score`, `statusid`, `datetimes`, `timetouch`, `studentsee`, `receiversee`) VALUES
(16, 'หลงทาง', 'หลงจริงๆเว้ย', 'สถานที่ต่างๆ', '5367507890', 5, 2, '2018-12-20 11:14:34', NULL, 1, 1),
(17, 'สกปรกไปหน่อยนะห้อง', 'ดีพาร์ตเมนต์ ไฮแจ็คเมคอัพดิสเครดิตแอนด์แทคติค ยิมอิสรชน แทคติคสุริยยาตร', 'ห้องเรียน', '5567902411', 4, 1, '2018-12-12 14:34:24', NULL, 0, 0),
(18, 'จีบผู้สาวละเขาไม่สนใจ', 'ชาร์จอันเดอร์นู้ด โหงวพีเรียดโดนัทเซฟตี้รีสอร์ต สโตร์ดีพาร์ตเมนท์ โซน สตาร์เหมยพฤหัสคอรัปชัน แลนด์ฮิปฮอปกิฟท์ แฟ็กซ์มอลล์ คลาสสิกซัพพลายอุปทาน อุปทานแชมปิยองการันตี', 'อื่นๆ', '5999941143', 4, 1, '2018-12-10 08:23:28', NULL, 0, 0),
(33, 'มองกระดานไม่เห็น', 'เพื่อนข้างหน้าตัวสูงเกินไป  ทำให้มองกระดานไม่เห็น', 'การเรียน', '5999941143', 12, 2, '2018-09-18 09:35:19', NULL, 0, 1),
(34, 'ที่นั่ง', 'ที่นั่ังเยอะเกินไป เลลือกที่นั่งเรียนไม่ถูก', 'ห้องเรียน', '5474129179', 4, 1, '2018-07-09 10:00:35', NULL, 0, 0),
(35, 'Edvac', 'ขนมไม่พอกิน', 'กิจกรรม', '5529045008', 5, 1, '2018-04-10 13:31:00', NULL, 0, 0),
(36, 'ตึกภาค', 'หาตึกภาควิชาไม่เจอ', 'สถานที่ต่างๆ', '5367507890', 3, 1, '2018-01-30 08:30:14', NULL, 0, 0),
(37, 'การสอบ', 'ตารางสอบติดกันมากเกินไป ', 'การเรียน', '59070501043', 17, 2, '2017-12-04 12:42:14', NULL, 1, 1),
(38, 'เพื่อนแอบเล่นเกมในห้อง', 'เล่นตามเพื่อนเรียนไม่รู้เรื่อง', 'การเรียน', '5367507890', 19, 3, '2018-12-22 11:25:19', NULL, 0, 1),
(39, 'โต๊เรียน', 'มีโต๊ะเรียนน้อยเกินไป', 'ห้องเรียน', '5999941143', 3, 1, '2018-06-10 15:17:17', NULL, 0, 0),
(40, 'โปรเจคเตอร์ภาพไม่ชัด55555555', 'โปรเจคเตอร์ห้อง 8401 ภาพเบลอหรือว่าเธอไม่ชัดเจน5555555555fsdsdfesdf', 'ห้องเรียน', '5339824014', 8, 1, '2018-12-23 23:14:58', NULL, 1, 0),
(41, 'ห้องป.ตรีมีกลิ่นเหม็น', 'ห้องป.ตรีมีกลิ่นอับมากกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกกก', 'ห้องเรียน', '5567902411', 3, 1, '2018-12-22 05:23:14', NULL, 0, 0),
(42, 'ห้องทำงาน', 'ห้องทำงานที่ตึกภาคไม่เพียงพอ', 'สถานที่ต่างๆ', '5367507890', 4, 1, '2018-12-20 14:25:00', NULL, 0, 0),
(43, 'ห้องน้ำ', 'ห้องน้ำส่งกลิ่นและกระดาษชำระไม่เพียงพอ', 'สถานที่ต่างๆ', '5999941143', 4, 1, '2018-09-11 13:30:21', NULL, 0, 0),
(44, 'เครื่อมคอมพิวเตอร์ในห้องปฏิบัติการ', 'เครื่องคอมพิวเตอร์ในห้องปฏิบัติเสียเป็นจำนวนมาก', 'อื่นๆ', '5999941143', 4, 1, '2018-12-22 08:30:31', NULL, 0, 0),
(56, 'เก้าอี้หัก', 'เพื่อนน้ำหนักเยอะเกินไป ทำให้เก้าอี้ห้อง 8302 พังไปหลายตัว', 'ห้องเรียน', '5339824014', 3, 1, '2018-12-24 02:59:30', NULL, 0, 0),
(57, 'เรียนไม่รู้เรื่อง', 'นอนน้อยไป ', 'การเรียน', '5339824014', 3, 3, '2018-12-24 03:07:37', NULL, 0, 1),
(59, 'เบื่อการเรียน', 'เบื่ออีกแล้วหรอ', 'ห้องเรียน', '59070501043', 1, 1, '2018-12-24 03:12:02', NULL, 1, 0),
(60, 'เบื่อการเรียน', 'เบื่ออีกแล้วหรอ', 'ห้องเรียน', '59070501043', 1, 1, '2018-12-24 03:13:07', NULL, 1, 0),
(61, 'ห้องน้ำเสีย', 'ห้องน้ำชอบเสีย', 'การเรียน', '5339824014', 2, 2, '2018-12-24 03:14:25', NULL, 0, 1),
(63, 'งานที่มากเกินไป', 'อาจารย์สั่งงานไม่หยุดเลย', 'การเรียน', '59070501043', 2, 1, '2018-12-12 11:28:29', NULL, 1, 0),
(64, 'ห้องเรียนไม่สะอาด', 'ตามนั้นครับ', 'ห้องเรียน', '59070501043', 0, 1, '2018-12-12 11:28:29', NULL, 1, 0),
(65, 'ทดสอบว่าครูเห็นไหม', 'ทดสอบว่าครูเห็นไหม', 'การเรียน', '59070501043', 11, 1, '2018-12-12 11:28:29', NULL, 1, 0),
(66, '5555', 'อิอิ', 'การเรียน', '5367507890', 1, 2, '2018-12-12 11:28:29', NULL, 1, 1),
(67, 'ขำแล้วขำอีก', 'แง๊', 'กิจกรรม', '59070501043', 0, 1, '2018-12-12 11:28:29', NULL, 1, 0),
(68, 'พี่เท่ห์ดูให้หน่อย', 'งื้อ', 'การเรียน', '59070501043', 3, 2, '2018-12-12 11:28:29', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedid` int(50) NOT NULL,
  `rid` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `comid` int(50) NOT NULL,
  `feedback` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `score` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `rid` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `rpassword` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `rname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `rLname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `catname` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`rid`, `rpassword`, `rname`, `rLname`, `catname`) VALUES
('staff1', 'staff1', 'สมบูรณ์', 'สมบรรณ', 'การเรียน'),
('staff2', 'staff2', 'ศุภกรณ์', 'เชยจัง', 'กิจกรรม'),
('staff5', 'staff5', 'สมศักดิ์', 'อิ่มจัง', 'สถานที่ต่างๆ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stuid` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `spassword` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `stuname` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `stuLname` varchar(50) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stuid`, `spassword`, `stuname`, `stuLname`) VALUES
('5367507890', '12345', 'ธันยกร', 'หลีสันติพงศ์'),
('5474129179', '12345', 'ชูศักดิ์', 'เกียรติเฉลิมคุณ'),
('5529045008', '12345', 'สมบูรณ์', 'เอื้ออัชฌาสัย'),
('5567902411', '12345', 'พรศรี', 'สุตเธียรกุล'),
('5845352194', '12345', 'สมพร', 'สุขธรรมนิตย์'),
('59070501043', '12345', 'นราวิชญ์', 'ทับทิมโต'),
('5920551787', '12345', 'บุญเพิ่ม', 'ได้แล้ว'),
('5999941143', '12345', 'สุภาวดี', 'เมธาวรากร');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catname`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`username`,`comment`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`comid`),
  ADD KEY `catname` (`catname`) USING BTREE,
  ADD KEY `student` (`stuid`) USING BTREE;

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `receiver`
--
ALTER TABLE `receiver`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `catname` (`catname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stuid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `comid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(50) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
