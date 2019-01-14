-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2019 at 08:47 AM
-- Server version: 5.5.39
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmznet_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `addyear`
--

CREATE TABLE IF NOT EXISTS `addyear` (
  `addyearid` int(10) NOT NULL AUTO_INCREMENT,
  `year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`addyearid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=218 ;

--
-- Dumping data for table `addyear`
--

INSERT INTO `addyear` (`addyearid`, `year`) VALUES
(7, '2018'),
(8, '2019'),
(9, '2020'),
(217, '2021');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
  `admin_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `calendar_id` int(1) NOT NULL AUTO_INCREMENT,
  `calendar_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `calendar_sort` int(1) NOT NULL,
  PRIMARY KEY (`calendar_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_company` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `c_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `c_enquiry` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_message` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=38 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `c_name`, `c_company`, `c_email`, `c_phone`, `c_enquiry`, `c_message`) VALUES
(29, 'qqqq', 'qqqq', 'aaa@gmail.com', 'qqqq', 'qqq', 'qqq'),
(28, 'hhh', 'www', 'aaa@gmail.com', 'www', 'www', 'www'),
(35, 'Test', 'Test', 'test@gmail.com', '1234567890', 'Test', 'Test'),
(24, 'aaa', 'ddd', 'aaa@gmail.com', '230215465', 'sfs', 'sfsd'),
(30, '111', '111', '111@gmail.com', '111', '111', '111'),
(31, 'hhh', 'ผผ', 'aaa@gmail.com', 'ผผผ', 'ผผ', 'ผผผ'),
(32, 'tt', 'gg', 'yy@gmail.com', '096767', 'fgfdg', 'gff'),
(33, 'tt', 'gg', 'yy@gmail.com', '096767', 'fgfdg', 'tew'),
(34, 'tt', 'gg', 'yy@gmail.com', '096767', 'fgfdg', 'test'),
(36, 'looooo', 'hhhh', 'siriwat_96@hotmail.com', '08344', 'dfdf', 'looo'),
(37, 'tt', 'gg', 'yy@gmail.com', '096767', 'fgfdg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `history_id` int(10) NOT NULL,
  `history_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `history_sort` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`history_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pic`
--

CREATE TABLE IF NOT EXISTS `pic` (
  `pic_id` int(10) NOT NULL AUTO_INCREMENT,
  `pic_name` text COLLATE utf8_unicode_ci NOT NULL,
  `pic_sort` int(10) NOT NULL,
  `status1` tinyint(1) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `pic`
--

INSERT INTO `pic` (`pic_id`, `pic_name`, `pic_sort`, `status1`) VALUES
(22, '5418446fdd5cc580d33f1959350fc0ab.cmz2.jpg', 2, 0),
(33, 'a0753e368e285ed4d36f4aca831726b0.Untitled-1.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE IF NOT EXISTS `tb_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Surname` varchar(30) NOT NULL,
  `Nickname` varchar(20) NOT NULL,
  `Tel` varchar(10) NOT NULL,
  `B_Date` date NOT NULL,
  `Address` varchar(100) NOT NULL,
  `File1` varchar(70) NOT NULL,
  `File2` varchar(70) NOT NULL,
  `Disease` varchar(50) NOT NULL,
  `family` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Introduce` varchar(30) NOT NULL,
  `DateStart` date NOT NULL,
  `DateEnd` date NOT NULL,
  `University` varchar(50) NOT NULL,
  `Gpa1` varchar(10) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Gpa2` varchar(10) NOT NULL,
  `Diploma` varchar(50) NOT NULL,
  `Gpa3` varchar(10) NOT NULL,
  `S_Primary` varchar(50) NOT NULL,
  `Gpa4` varchar(10) NOT NULL,
  `_attention` varchar(100) NOT NULL,
  `Skill` varchar(100) NOT NULL,
  `Tel2` varchar(10) NOT NULL,
  `_Email` varchar(50) NOT NULL,
  `_Facebook` varchar(50) NOT NULL,
  `_Line_id` varchar(30) NOT NULL,
  `_Contact` varchar(30) NOT NULL,
  `_Namecontact` varchar(50) NOT NULL,
  `_Telcontact` varchar(10) NOT NULL,
  `_Position` varchar(30) NOT NULL,
  `status1` tinyint(1) NOT NULL,
  `year_start` int(4) NOT NULL,
  `year_end` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=115 ;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id`, `Name`, `Surname`, `Nickname`, `Tel`, `B_Date`, `Address`, `File1`, `File2`, `Disease`, `family`, `Status`, `Introduce`, `DateStart`, `DateEnd`, `University`, `Gpa1`, `School`, `Gpa2`, `Diploma`, `Gpa3`, `S_Primary`, `Gpa4`, `_attention`, `Skill`, `Tel2`, `_Email`, `_Facebook`, `_Line_id`, `_Contact`, `_Namecontact`, `_Telcontact`, `_Position`, `status1`, `year_start`, `year_end`) VALUES
(84, 'บุคคลที่3', 'นะครับ', 'ไก่', '1234567890', '2017-07-07', 'aaaa/aaa', 'img_5b176418aca41.png', 'img_5b177b09332a5.png', 'aaa', '2', 'แยกกันอยู่', 'aaaa', '2018-02-02', '2018-06-17', 'ราชภัฏเชียงราย', '2', 'aaa', '2', 'aaa', '2', 'aaa', '2', 'aaa', 'aaa', '1234567890', 'hohoh@gmail.com', 'aaa', 'aaa', 'ตา', 'aaa', '0123456789', 'web design', 2, 2018, 2018),
(85, 'บุคคลที่4', 'กด', 'ไข่', '2302154658', '2018-05-18', '1556', 'img_5b1641b5559b8.jpg', 'img_5b1641b555f66.jpg', 'aaaa', '3', 'แต่งงานแล้ว', 'aaaa', '2018-02-13', '2018-05-15', 'ราชภัฏเชียงใหม่', '4', 'aaa', '4', 'aaa', '4', 'aaa', '4', 'aaaa', 'aaaa', 'aaa', 'aaa@gmail.com', 'aaa', 'aaa', 'ป้า', 'aaaa', '0123456789', 'web programming', 2, 2018, 2018),
(86, 'บุคคลที่5', 'ad', 'aaa', '2302154658', '2018-05-18', '1556', 'img_5b1643b23457e.jpg', 'img_5b1643b234b82.jpg', 'aaaa', '3', 'แต่งงานแล้ว', 'aaaa', '2018-03-13', '2018-04-15', 'aaa', '4', 'aaa', '4', 'aaa', '4', 'aaa', '4', 'aaaa', 'aaaa', 'aaa', 'aaa@gmail.com', 'aaa', 'aaa', 'ป้า', 'aaaa', '0123456789', 'web programming', 2, 2018, 2018),
(87, 'บุคคลที่6', 'ไหน', 'ดำ', '0901010101', '2009-01-01', 'eeeee', 'img_5b18a3a3e7481.gif', 'img_5b18a3a3e7ab6.png', 'eeee', '2', 'หมั้น', 'eeee', '2018-06-07', '2018-06-28', 'มหาวิทยาลัยเชียงใหม่', '3', 'eee', '2', 'eee', '2', 'eee', '2', 'eeee', 'eee', '1234567890', 'aaa@gmail.com', 'eee', 'eee', 'แม่', 'eeee', '0123456789', 'web programming', 2, 2018, 2018),
(88, 'บุคคลที่1', 'ดี', 'ขาว', '0834567890', '2018-05-21', '111', 'img_5b18a4adcec13.jpg', 'img_5b18a4adcf255.png', '1111', '2', 'แต่งงานแล้ว', '1111', '2018-01-01', '2018-03-01', 'ราชภัฏขอนแก่น', '1', '111', '1', '111', '1', '11', '1', '111', '111', '1234567890', 'aaa@gmail.com', '111', '111', 'พ่อ', '1111', '0123456789', 'web design', 2, 2018, 2018),
(89, 'บุคคลที่8', 'มาก', 'แดง', '0834567890', '2018-05-21', 'qqq', 'img_5b18a54039793.jpg', 'img_5b18a54039d3f.jpg', 'qq', '2', 'หมั้น', 'q', '2018-05-21', '2018-07-21', 'มหาวิทยาลัยพะเยา', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'hohoh@gmail.com', 'q', 'q', 'พ่อ', 'q', 'q', 'web programming', 2, 2018, 2018),
(90, 'บุคคลที่2', 'สือออ', 'ปาน', '0866574111', '1985-06-01', '9592ดกงวดดกยนเยดกเยท', 'img_5b1e01ab563c8.jpg', 'img_5b1e01ab56a0b.jpg', 'กดหดหำพ', '1', 'โสด', 'กเกเกเกเก', '2018-01-01', '2018-02-01', 'มหาวิทยาลัยพายับ', '3044', 'ไพพพพ', '522', 'eee', 'รยรนยรย', 'นรีนนน', 'ad', 'รนรน', 'นรนร', '2553', 'ัีัีะุึพคุa@gmail.com', '้้่ัุึคนนรน', 'รนีัน', 'พ่อ', '112', '56611', 'web programming', 2, 2018, 2018),
(91, 'บุคคลที่7', 'ออ', 'กมล', '1234567890', '2018-05-21', 'ooo', 'img_5b1e19a609be5.png', 'img_5b231d0e84615.jpg', 'ooo', '2', 'หมั้น', 'ooo', '2018-08-21', '2018-12-21', 'มหาวิทยาลัยนอร์ช', '2', 'ooo', '2', 'ooo', '2', 'ooo', '2', 'ooo', 'ooo', 'ooo', 'ooohohoh@gmail.com', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 'web design', 2, 2018, 2018),
(92, 'บุคคลที่10', 'พะ', 'ขจร', '2302154658', '2018-05-22', 'กกกก', 'img_5b231b334404d.gif', 'img_5b231b3344516.jpg', 'กกกก', '1', 'แยกกันอยู่', 'กกกก', '2018-07-01', '2019-01-01', 'รามคำแหง', '2', 'กกก', '2', 'กกกก', '2', 'กกกก', '2', 'กกกกก', 'กกกกก', '1234567890', 'กกกก@gmail.com', 'กกกก', 'กกกก', 'กกก', 'กกก', '0123456789', 'web programming', 2, 2018, 2019),
(93, 'qqqq', 'qqq', 'qqq', 'qqq', '2018-05-21', 'qqqq', 'img_5b28bb34dd5e9.png', 'img_5b28bb34dd9cf.png', 'qqqq', '1', 'แต่งงานแล้ว', 'qqqqq', '2019-01-02', '2019-06-07', 'qq', 'q', 'qq', 'q', 'qqq', 'q', 'qq', 'q', 'qqqq', 'qqqq', 'qqq', 'hohoh@gmail.com', 'qq', 'qqq', 'qq', 'qq', 'qq', 'web design', 2, 2019, 2019),
(94, 'กรวิชญ์', 'มินทะนา', 'เฟริส', '1234567890', '2018-05-21', '10/2', 'img_5b29dd6f8faf0.png', 'img_5b29dd6f8ff7a.png', 'ไม่มี', '3', 'โสด', 'กระผมนาย กรวิชญ์', '2018-05-21', '2018-07-30', 'มหาวิทยาลัยราชภัฏเชียงราย', '2', 'โรงพญาเม็งราย', '2', 'โรงพญาเม็งราย', '2', 'โรงพญาเม็งราย', '2', 'ไม่มี', 'ไม่มี', '1234567890', 'korawit@gmail.com', 'korawitminthana', 'korawitminthana', 'แม่', 'แม่', '1234567890', 'web design', 2, 2018, 2018),
(95, 'yyy', 'yyy', 'yyy', '1234567890', '2018-05-21', '111yyy', 'img_5b2b485669109.jpg', 'img_5b2b4856694f3.gif', 'yyyy', '1', 'หมั้น', 'yyy', '2019-02-01', '2019-07-21', 'yyy', 'y', 'yyy', 'y', 'yyy', 'y', 'yyy', 'y', 'yyy', 'yyy', '1234567890', 'yyy@gmail.com', 'yyy', 'yyy', 'yyy', 'yyy', '0123456789', 'web programming', 2, 2019, 2019),
(96, 'eee', 'eee', 'eee', '1234567890', '2018-05-21', '111eee', 'img_5b2b49a33fabf.jpg', 'img_5b2b49a33fea6.png', 'eee', '2', 'แต่งงานแล้ว', 'eee', '2020-01-01', '2020-06-01', 'eee', '2', 'eee', '2', 'eee', '2', 'eee', '2', 'eee', 'eee', '1234567890', 'eee@gmail.com', 'eee', 'eee', 'eee', 'eee', '0123456789', 'web design', 2, 2020, 2020),
(97, 'ปานทิพย์', 'ไชยกุล', 'ปาน', '0867358835', '2018-08-11', '405 หมู่ 5 สันพระเนตร สันทราย', 'img_5b2c7f1aa47ba.jpeg', 'img_5b2c7f1aa4ba3.jpeg', 'ไม่มี', '1', 'โสด', ' Hello my name is parn ', '2018-01-05', '2019-10-18', 'กกกก', '397', 'าาสแ', '345', 'Ujjj', 'Jhj', 'Yhu', 'Hhj', 'Hhjj', 'Jjjjjk', '086735', 'Hjjs', 'Usus', 'Siis', 'Isisii', 'Uui', 'Ujkl', 'marketing', 2, 2018, 2019),
(98, 'ธนกฤษ', 'สุทา', 'แท็ก', '0956652575', '1996-05-30', '129/2 ต.แม่ต๋ำ อ.พญาเม็งราย จ.เชียงราย 57290', 'img_5b32f54ef1dfe.jpg', 'img_5b32f5d128d5d.pdf', '-', '1', 'โสด', '-', '2018-05-21', '2018-07-21', 'มหาวิทยาลัยราชภัฏเชียงราย', '3.05', 'โรงเรียนแม่ต๋ำตาดควันวิทยาคม', '3.10', '-', '-', 'โรงเรียนบ้านบ่อแสง', '3.50', 'PHP\r\nASP.NET', 'PHP\r\nPhotoshop\r\nASP.NET MVC', '0956652575', 'thanakit.sut@crru.ac.th', 'Thanagit Sutha', '-', 'เพื่อน', 'เบิ้ล', '0994383310', 'web programming', 2, 2018, 2018),
(99, '1', '1', '1', '1', '2018-06-27', '1', 'img_5b330ce77ed27.gif', 'img_5b39b12192fe4.pdf', '1', '2', 'โสด', '1', '2018-01-01', '2019-05-01', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'web design', 2, 2018, 2019),
(102, '12121', '12121', '1212', '12121', '2018-07-11', 'asdsd', 'img_5b457579d43e0.jpg', 'img_5b457579d47c5.jpg', 'dsfsef', '2', 'แต่งงานแล้ว', 'zcsdfa', '2018-07-11', '2018-07-12', '', '', '', '', '', '', '', '', 'faf', 'afa', '1234567890', 'hohoh@gmail.com', 'dvs', 'กกกก', 'qq', '1', '0123456789', 'web design', 2, 2018, 2018),
(103, 'ธนกฤษ', 'สุทา', 'แท็ก', '0956652575', '1996-05-30', '129/2 ต.แม่ต๋ำ อ.พญาเม็งราย จ.เชียงราย 57290', 'img_5b4daf8b5b8c1.jpg', 'img_5b4daf8b5bcaf.pdf', '-', '1', 'โสด', '-', '2018-05-21', '2018-07-21', 'มหาวิทยาลัยราชภัฏเชียงราย', '3.05', 'โรงเรียนแม่ต๋ำตาดควันวิทยาคม', '3.10', '-', '-', 'โรงเรียนบ้านบ่อแสง', '3.50', '-MVC ASP.NET\r\n-PHP', '-เขียนเว็บ\r\n-ออกแบบ\r\n-วิเคราะห์ข้อมูล', '0956652575', 'thanakit.sut@crru.ac.th', 'Thanagit Sutha', 'lovebeamnaja', 'เพื่อน', 'ณรงค์ฤทธิ์ กองอินทร์', '0994383310', 'web programming', 1, 2018, 2018),
(104, 'กรวิชญ์', 'มินทะนา', 'เฟริส', '0888070084', '2538-12-06', '10 ม.2 หมู่บ้านหนองสองห้อง ต.เม็งราย อ.พญาเม็งราย จ.เชียงราย', 'img_5b503f87ee102.jpg', 'img_5b503f87ee904.jpg', 'ไม่มี', '3', 'โสด', 'ผม นาย กรวิชญ์ มินทะนา นักศึกษ', '2018-05-21', '2018-07-20', 'มหาลัยราชภัฏเชียงราย', '2.21', 'โรงเรียนพญาเม็งราย', '3.05', '', '', 'โรงเรียนสันสะลีกวิทยา', '2.8', 'การออกแบบเว็บไซต์ และพัฒนาเว็บไซต์', 'ภาษา C#, php , html , java script', '0888070084', 'korawit.mint@crru.ac.th', 'Korawit Mintana', 'korawit084', 'พี่', 'พัชรินทร์ มินทะนา', '0845132900', 'web design', 1, 2018, 2018),
(105, 'นายณรงค์ฤทธิ์', 'กองอินทร์', 'เบิ้ล', '0994383310', '1996-08-07', '52 หมู่ 19 ต.หงาว อ.เทิง จ.เชียงราย 57160', 'img_5b50412856188.jpg', 'img_5b50412856566.pdf', '-', 'ไม่มี', 'โสด', 'ชื่อเบิ้ลครับ เป็นคนเงียบๆขี้อ', '2018-05-21', '2018-07-21', 'มหาวิทยาลัยราชภัฏเชียงราย', '2.26', 'เทิงวิทยาคม', '2.30', '-', '-', 'บ้านป่าจี้', '3.50', 'สนในด้านเขียนโปรแกรม ออกแบบเว็บไซต์', 'เขียนโปรแกรม ออกแบบเว็บไซต์', '0994383310', 'ble1258_ble@hotmail.com', 'Narongrid Kongin', '0994383310', 'เพื่อน', 'แพท', '0979437177', 'web programming', 1, 2018, 2018),
(106, 'นายพชระ', 'นาชัยเวียง', 'ดิว', '096-709347', '1992-09-28', '127 ม.2 ต.หาดแพง อ.ศรีสงคราม จ.นครพนม 48150', 'img_5bac7cf7c55ab.jpg', 'img_5bac7cf7cf9b8.png', 'รักแมว', '3', 'โสด', 'มุ่งมั่นในงานที่ได้รับมอบหมาย ', '2019-01-07', '2019-04-10', 'มหาวิทยาลัยราชภัฎสกลนคร', '2.75', 'โรงเรียนสกลราชวิทยานุกูล', '2.50', '-', '-', 'โรงเรียนเซนต์ยอเซฟสกลนคร', '-', 'ภาษา PHP , HTML5 , C# , C++ , Javascript\r\nพัฒนาโปรแกรมเจค , เรียนรู้การทำงานจากผู้เชี่ยวชาญ , โปรเจค', 'ภาษา PHP , HTML5 , C# , C++ , C , Javascript\r\nโปรแกรมที่ถนัด Visual Studio , Github , Adobe Photosho', '096-709347', 'pachara.na@snru.ac.th', 'www.facebook.com/pacharaaa', 'dewyslam', 'ตัวเอง', 'นายพชระ นาชัยเวียง', '096-709347', 'web programming', 1, 2019, 2019),
(107, 'นาย ธนากร', 'พฤกจันทร์', 'ป๊อป', '081-050520', '1995-10-22', '77 ม.1 ซอยพิกุลพัฒนา ต.กุสุมาลย์ อ.กุสุมาลย์ จ.สกลนคร 47210', 'img_5bac8340890da.png', 'img_5bac8340894ae.png', '-', '3', 'โสด', 'โปรเจคที่เคยผ่านมา เคยทำระบบจั', '2019-01-07', '2019-04-10', 'มหาวิทยาลัยราชภัฎสกลนคร', '3.06', 'โรงเรียนสกลราชวิทยานุกูล', '2.96', '-', '-', 'อนุบาลกุสุมาลย์', '-', 'สนใจเรียนรู้เพิ่มเติมเกียวกับ ภาษา PHP HTML การทำเว็ปไซต์', 'ใช้โปรแกรม Visual studio ออกแบบหน้าตาระบบ', '081-050520', 'thanakon.pl58@snru.ac.th', 'Thanakon Plerkchan', 'paloptwotwo', 'Buddy', 'นายพชระ นาชัยเวียง', '096-709347', 'web design', 1, 2019, 2019),
(108, 'นายภราเดช ', 'สุจริต', 'ฟลุ๊ค', '0849588273', '1996-11-02', '584 หมู่4  ตำบลดงมะไฟ อำเภอเมืองสกลนคร จังหวัดสกลนคร 47000', 'img_5bc8051e95b1f.JPG', 'img_5bc8051e9c0ac.pdf', '-', '2', 'โสด', 'ขอแนะนำตัวเองนะครับ สวัสดีครับ', '2019-01-07', '2019-04-19', 'มหาวิทยาลัยราชภัฏสกลนคร', '2.81', 'โรงเรียนศรีรัตนะวิทยา', '2.11', '-', '-', 'โรงเรียนวัดป่าสุทธิมงคล', '3.56', 'สนใจในด้านการเขียนเว็บไซต์และออกแบบเว็บไซต์', '- PHP Level  Medium   \r\n- Css Level  Medium \r\n- Bootstrap 3,4  Level  Medium  \r\n- Html Level  Medium', '0849588273', 'paradach.su58@snru.ac.th', 'ฟลุ๊ค''สลิ๊คค', 'fluk_arnal', 'วิจิตรา', 'วิจิตรา', '0801867199', 'web programming', 1, 2019, 2019),
(109, 'นาย วินัย', 'เก่งธัญการ', 'เก่ง', '0979925028', '1996-03-30', '11/2 หมู่ 6 ตำบล ห้วยน้ำหอม อำเภอ ลาดยาว จังหวัด นครสวรรค์ 60150', 'img_5bdfc96c32c73.jpg', 'img_5bdfc96c3a1a3.rar', '', '2', 'โสด', 'สวัสดีครับ ผมชื่อนาย วินัย เก่', '2018-12-11', '2019-03-29', 'มหาวิทยาลัยนเรศวร', '2.19', 'โรงเรียนลาดยาววิทยาคม', '3.26', '', '', '', '', 'สนใจทางกีฬา ออกกำลังกาย ', 'เขียน PHP My SQL ', '0979925028', 'winaik58@nu.ac.th', 'Winai Kengthunyakarn', 'scolddown009', 'อาจารย์ที่ปรึกษา', 'ดร. สุธาสินี จิตต์อนันต์', '089-707999', 'web programming', 1, 2018, 2019),
(110, 'ธีรกานต์', 'จีนด้วง', 'เต้', '0947196046', '2539-08-04', '213 หมู่11 ตำบลบ้านกร่าง อำเภอเมือง จังหวัดพิษณุโลก 65000', 'img_5bdfea5ccc304.jpg', 'img_5bdfea5ccc8df.pdf', '', '1', 'โสด', 'ผมนายธีรกานต์ จีนด้วง เรียนอยู', '2018-12-01', '2018-12-31', 'มหาวิทยาลัยนเรศวร', '2.06', 'โรงเรียนบ้านกร่างวิทยาคม', '3.10', '', '', 'โรงเรียนบ้านกร่างพระขาวชัยสิทธิ์', '', '- รับผิดชอบและทำหน้าที่ ที่ได้รับมอบหมายอย่างเต็มความสามารถ\r\n- พร้อมเรียนรู้ประสบการณ์หรือความรู้ใหม', 'ความสามารถของผมเข้ากับคนง่ายครับ \r\n- ทักษะการพูด การอ่าน การเขียน การฟัง ภาษาอังกฤษในระดับ ปานกลาง\r\n', '0947196046', 'thirakanj58@email.nu.ac.th', 'ธีรกานต์ จีนด้วง', 'TAEEXO', 'แม่', 'สำรวย จีนด้วง', '0813249446', 'web programming', 1, 2018, 2018),
(111, 'นางสาวภัทริศา', 'มณีวรรณ', 'ข้าวปุ้น', '086-401869', '1998-04-07', 'ที่อยู่ปัจจุบัน: 394 หมู่ 6 ตำบลป่าไผ่ อำเภอสันทราย เชียงใหม่ 50210\r\nที่อยู่ตามบัตรประชาชน: 4/91 ซอย', 'img_5c0f40c46846d.jpg', 'img_5c0f40c47093c.jpg', '', 'ไม่มี', 'โสด', 'สวัสดีค่ะ ข้าวปุ้นค่ะ อุปนิสัย', '2019-07-01', '2019-11-04', 'มหาวิทยาลัยแม่โจ้', '3.19', 'โรงเรียนสตรีวัดระฆัง', '2.74', '', '', 'โรงเรียนเขมะสิริอนุสสรณ์', '2.40', 'Artificial Intelligence, IT Security, Unity 5, Languages, Python, Front-Back End Website, Programmin', 'ภาษาอังกฤษและภาษาอิตาเลียน สามารถใช้โปรแกรม Visual Code,Sublime Text 3, MySQL Server, Microsoft Visi', '0864018698', 'phatarisa1998@gmail.com', 'Phatarisa Maneewan', 'sheriden.s', 'มารดา', 'นางอาภัสสร มณีวรรณ', '081-318790', 'web programming', 0, 2019, 2019),
(114, 'นางสาวชไมพร', 'ศิริมิตรอำนวย', 'หยก', '0632210090', '1998-02-10', '181/247 หมู่10 ต.ป่าไผ่ อ.สันทราย เชียงใหม่ 50290 บ้านอยู่สบาย ห้อง 701', 'img_5c0f7e0b807bf.jpeg', 'img_5c0f7e0b80f8e.jpeg', '', '2', 'โสด', 'มีมารยาทรู้จักวางตัวต่อผู้ใหญ่', '2019-07-01', '2019-11-04', 'มหาวิทยาลัยแม่โจ้', '3.40', 'โรงเรียนสายน้ำผึ้ง ในพระอุปถัมภ์ฯ', '3.08', '-', '-', 'โรงเรียนพระแม่มารีพระโขนง', '3.56', 'Web and App Programmer/Developer\r\nGraphic Design\r\n', 'สามารถใช้โปรแกรม\r\n- Visual Code\r\n- Sublime Text3\r\n- My SQL Server\r\n- Microsoft Visio\r\n- Microsoft Vi', '0632210090', 'yokkie322@gmail.com', 'Chamaiporn Sirimit-amnaue', 'Chmpyok.(มีจุดด้วยนะคะ)', 'พี่สาว', 'นางสาวพัชรีย์ สองเมือง', '099-619-19', 'web programming', 1, 2019, 2019);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
