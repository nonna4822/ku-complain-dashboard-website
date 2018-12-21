-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 11:28 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobtrainning`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchid` int(10) NOT NULL,
  `tax` int(13) NOT NULL,
  `branchname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchid`, `tax`, `branchname`, `address`, `province`, `tel`) VALUES
(1, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ดินแดง 1)', '079 แขวงบุคคโล เขตธนบุรี', 'กรุงเทพ', '021699823'),
(2, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ดินแดง 2)', '231 ตำบลเขาดิน อำเภอเขาพนม', 'กระบี่', '021773127'),
(3, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (คลองเตย)', '923 ตำบลไทรโยค อำเภอไทรโยค', 'กาญจนบุรี', '025652208'),
(4, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (บ่อนไก่)', '112 ตำบลดอนจาน ', 'กาฬสินธุ์', '021954967'),
(5, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (หนองจอก)', '26 ตำบลเทพนคร', 'กำแพงเพชร', '024749049'),
(6, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (บางรัก)', '26 ตำบลเทพนคร', 'ขอนแก่น', '022968036'),
(7, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (หลวงพ่อทว', '164 ตำบลหนองบัว ', 'จันทบุรี', '024254433'),
(8, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (กาญจนสิงห', '186 ตำบลท่าช้าง ', 'ฉะเชิงเทรา', '026755859'),
(9, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (ม้วน บำรุ', '328 ตำบลศาลาแดง', 'ชัยนาท', '026478405'),
(10, 0, 'โรงเรียนฝึกอาชีพกรุงเทพมหานคร (อาทร สังข', '90 ตำบลเขาท่าพระ ', 'ชัยภูมิ', '028868161');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `classid` int(10) NOT NULL,
  `classno` int(10) NOT NULL,
  `branchid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`classid`, `classno`, `branchid`) VALUES
(1, 1301, 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollmentid` int(10) NOT NULL,
  `paystatus` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `paymenttype` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `sectionid` int(10) NOT NULL,
  `studentid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `scheduleid` int(10) NOT NULL,
  `sectionid` int(10) NOT NULL,
  `classid` int(10) NOT NULL,
  `openday` date NOT NULL,
  `closeday` date NOT NULL,
  `day` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`scheduleid`, `sectionid`, `classid`, `openday`, `closeday`, `day`) VALUES
(1, 1, 1, '2018-05-06', '2018-05-26', 'Mon-Fri');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionid` int(10) NOT NULL,
  `sectionname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `maxstudent` int(10) NOT NULL,
  `cost` int(5) NOT NULL,
  `shift` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `subjectid` int(10) NOT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `branchid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionid`, `sectionname`, `maxstudent`, `cost`, `shift`, `subjectid`, `semester`, `branchid`) VALUES
(1, 'A', 20, 300, 'Morning', 2, '1/2561', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(10) NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cardno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` blob NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `branchid` int(10) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `graduate` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `firstname`, `lastname`, `cardno`, `birthday`, `tel`, `email`, `address`, `province`, `zipcode`, `picture`, `gender`, `position`, `branchid`, `status`, `graduate`) VALUES
(1, 'นราวิชญ์', 'คนเดิม', '4716052031332', '2018-05-07', '0963061332', '', '58/58', 'กรุงเทพมหา', '78455', '', 'Female', 'Manager', 1, 'notconfirm', 'Computer Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentid` int(10) NOT NULL,
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cardno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `province` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `zipcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` blob NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `occupation` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `firstname`, `lastname`, `cardno`, `birthday`, `tel`, `email`, `address`, `province`, `zipcode`, `picture`, `gender`, `occupation`) VALUES
(2, 'นราวิชญ์', 'ทับทิมโต', '1485544844514', '2018-05-16', '0817129838', '', '58 / 8 ', 'นครนายก', '73000', '', 'Male', 'นักเรียน '),
(3, 'สิทธิศักดิ์', 'ปลานิลทอด', '6262252148664', '2018-05-23', '0840672491', '', '7/88', 'กรุงเทพมหา', '15484', '', 'Male', 'ครูคอมพิวเตอร์'),
(5, 'Admin', 'ปลาย่าง', 'admin001', '2018-05-09', '0963061332', '', '58 / 8', 'สมุทรสาคร', '14514', '', 'Male', 'โปรแกรมเมอร์'),
(7, 'นิติ', 'บืออออออ', '3826027536834', '2018-05-03', '0864947946', '', '15/65', 'ชัยนาท', '14114', '', 'Male', 'ทหาร'),
(12, 'นัดยิ้ม', 'ปลากริ่มไข่เต่า', '8450551878578', '2018-05-16', '844561420', '', '14/55', 'ฉะเชิงเทรา', '11141', '', 'Female', 'เกษตรกร'),
(15, 'บอมกี้ ', 'อาลาบา', '7355167232036', '2018-05-22', '0878317609', '', '58/8', 'ตราด', '73000', '', 'Male', 'นักตกปลา'),
(17, 'บิ๊กกี้ ', 'งิ๊ๆ ', '4311517800510', '2018-05-25', '0808109965', '', '58/8', 'กรุงเทพมหา', '73000', '', 'Female', 'นักตกปลา');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectid` int(10) NOT NULL,
  `subjecttitle` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjectdescription` varchar(800) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectid`, `subjecttitle`, `subjectdescription`) VALUES
(1, 'ช่างยนต์', 'เรียนเกี่ยวกับองค์ประกอบของระบบหัวฉีด การตรวจสอบความผิดปกติของระบบหัวฉีด การตรวจเช็ค-แก้ไขข้อขัดข้องจากวงจร'),
(2, 'ทักษะการทำของหวาน', 'เรียนเกี่ยวกับการเลือกวัตถุดิบ เทคนิคการตีแป้ง พื้นฐานการอบ'),
(3, 'ช่างไฟ', 'เรียนเกี่ยวกับการเดินสายวิธีต่างๆที่ถูกต้องเหมาะสมกับอาคาร อุปกรณ์ที่ควรมี'),
(4, 'ช่างแอร์', 'เรียนเกี่ยวกับโครงสร้าง การทำความสะอาดเครื่องปรับอากาศ การเปลี่ยนแผ่นกรอง'),
(5, 'ช่างเครื่องเสียง(Sound Engineer)', 'เรียนเกี่ยวกับSound Systems การปรับแต่งเสียงให้เหมาะสมกับดนตรี'),
(6, 'นวดแผนไทย', 'เรียนเกี่ยวกับตำแหน่งการกดบนตัวมนุษย์ ท่านวดในตำแหน่งที่เหมาะสม'),
(7, 'ทักษะภาษาอังกฤษ', 'เรียนการพูดสนทนา การจำลองสถานการณ์ การฝึกพูด'),
(8, 'แต่งหน้า แต่งเล็บ', 'เรียนเกี่ยวกับเทคนิคการเล่นสี การเลือกเครื่องสำอางให้เหมาะกับผิว'),
(9, 'ช่างผมสุภาพบุรุษ', 'เรียนเกี่ยวกับพื้นฐานการตัดแต่งทรง การซอยผม เทคนิคการใช้กรรไกร'),
(10, 'ทักษะการทำอาหารไทย', 'เรียนเกี่ยวกับการเลือกวัตถุดิบ วิธีการทำ เทคนิคการปรุง');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `teachingid` int(10) NOT NULL,
  `staffid` int(10) NOT NULL,
  `sectionid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`classid`),
  ADD KEY `class_branch` (`branchid`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollmentid`),
  ADD KEY `enroll_section` (`sectionid`),
  ADD KEY `enroll_student` (`studentid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`scheduleid`),
  ADD KEY `schedule_class` (`classid`),
  ADD KEY `schedule_section` (`sectionid`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionid`),
  ADD KEY `section_subject` (`subjectid`),
  ADD KEY `section_branch` (`branchid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`),
  ADD KEY `staff_branch` (`branchid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`teachingid`),
  ADD KEY `teaching_staff` (`staffid`),
  ADD KEY `teaching_section` (`sectionid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branchid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `branchid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enrollmentid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `scheduleid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `sectionid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `studentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `teachingid` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_branch` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`);

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enroll_section` FOREIGN KEY (`sectionid`) REFERENCES `section` (`sectionid`),
  ADD CONSTRAINT `enroll_student` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_class` FOREIGN KEY (`classid`) REFERENCES `class` (`classid`),
  ADD CONSTRAINT `schedule_section` FOREIGN KEY (`sectionid`) REFERENCES `section` (`sectionid`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_branch` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`),
  ADD CONSTRAINT `section_subject` FOREIGN KEY (`subjectid`) REFERENCES `subject` (`subjectid`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_branch` FOREIGN KEY (`branchid`) REFERENCES `branch` (`branchid`);

--
-- Constraints for table `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `teaching_section` FOREIGN KEY (`sectionid`) REFERENCES `section` (`sectionid`),
  ADD CONSTRAINT `teaching_staff` FOREIGN KEY (`staffid`) REFERENCES `staff` (`staffid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
