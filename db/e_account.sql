-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 01 พ.ค. 2020  12:49น.
-- รุ่นของเซิร์ฟเวอร์: 5.0.95
-- รุ่นของ PHP: 5.3.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `e_account`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `cutfield`
--

CREATE TABLE IF NOT EXISTS `cutfield` (
  `cutfieldid` int(11) NOT NULL auto_increment,
  `f1` text,
  `f2` text,
  `f3` text,
  PRIMARY KEY  (`cutfieldid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- dump ตาราง `cutfield`
--

INSERT INTO `cutfield` (`cutfieldid`, `f1`, `f2`, `f3`) VALUES
(1, 'ที่', '', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `m2`
--

CREATE TABLE IF NOT EXISTS `m2` (
  `pos` text NOT NULL,
  `suborg` text NOT NULL,
  `username` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- dump ตาราง `m2`
--

INSERT INTO `m2` (`pos`, `suborg`, `username`) VALUES
('ครู กศน.ตำบล', 'เชียงคาน', '3420300516780'),
('ครู กศน.ตำบล', 'เชียงคาน', '1450900002942'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300185716'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300150769'),
('ครู กศน.ตำบล', 'เชียงคาน', '1420300036251'),
('ครู กศน.ตำบล', 'เชียงคาน', '1420390000692'),
('ครู กศน.ตำบล', 'เชียงคาน', '1420800005834'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300432578'),
('ครู กศน.ตำบล', 'เชียงคาน', '1420300002542'),
('ครู กศน.ตำบล', 'เชียงคาน', '1420300006521'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300317884'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300423323'),
('ครู กศน.ตำบล', 'เชียงคาน', '3429900107293'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300412950'),
('ครู กศน.ตำบล', 'เชียงคาน', '3420300001224'),
('ครูอาสาสมัคร', 'เชียงคาน', '3420300185724'),
('ครูอาสาสมัคร', 'เชียงคาน', '3420100713671'),
('ครูอาสาสมัคร', 'เชียงคาน', '3420300205245'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '1420300020109'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3670700212883'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500261963'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420100746242'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420100683232'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500140333'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500194298'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500276511'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500217166'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500016934'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '1420500036718'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500238651'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '1420500040553'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500301591'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500232718'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3361200533072'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500411973'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500049361'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '1420100028394'),
('ครู กศน.ตำบล', 'ด่านซ้าย', '3420500030651'),
('ครูอาสาสมัคร', 'ด่านซ้าย', '3420100573577'),
('ครูอาสาสมัคร', 'ด่านซ้าย', '3420500391832'),
('ครูอาสาสมัคร', 'ด่านซ้าย', '3420100093125'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420800039743'),
('ครู กศน.ตำบล', 'ท่าลี่', '1420300010138'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420800094353'),
('ครู กศน.ตำบล', 'ท่าลี่', '1420800006580'),
('ครู กศน.ตำบล', 'ท่าลี่', '3421100037625'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420100031430'),
('ครู กศน.ตำบล', 'ท่าลี่', '1420800008647'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420800178743'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420800031696'),
('ครูอาสาสมัคร', 'ท่าลี่', '3420800058861'),
('ครูอาสาสมัคร', 'ท่าลี่', '3420800211350'),
('ครู กศน.ตำบล', 'ท่าลี่', '3420800004249'),
('ครู กศน.ตำบล', 'นาด้วง', '1420900031195'),
('ครู กศน.ตำบล', 'นาด้วง', '3420200075986'),
('ครู กศน.ตำบล', 'นาด้วง', '3420200003853'),
('ครู กศน.ตำบล', 'นาด้วง', '3420200016921'),
('ครู กศน.ตำบล', 'นาด้วง', '3409900079567'),
('ครู กศน.ตำบล', 'นาด้วง', '1420200037701'),
('ครู กศน.ตำบล', 'นาด้วง', '1102000315701'),
('ครู กศน.ตำบล', 'นาด้วง', '3420200156102'),
('ครูอาสาสมัคร', 'นาด้วง', '3429900175191'),
('ครูอาสาสมัคร', 'นาด้วง', '3420700014374'),
('ครู กศน.ตำบล', 'นาแห้ว', '1420300012246'),
('ครู กศน.ตำบล', 'นาแห้ว', '1420600004281'),
('ครู กศน.ตำบล', 'นาแห้ว', '3420600046274'),
('ครู กศน.ตำบล', 'นาแห้ว', '3429900197411'),
('ครู กศน.ตำบล', 'นาแห้ว', '3420600018432'),
('ครู กศน.ตำบล', 'นาแห้ว', '1420600003846'),
('ครู กศน.ตำบล', 'นาแห้ว', '3420600008364'),
('ครู กศน.ตำบล', 'นาแห้ว', '1420600001614'),
('ครูอาสาสมัคร', 'นาแห้ว', '3430700369687'),
('ครูอาสาสมัคร', 'นาแห้ว', '3420800004788'),
('ครู กศน.ตำบล', 'นาแห้ว', '3461100071262'),
('ครู กศน.ตำบล', 'นาแห้ว', '3420600017568'),
('ครู กศน.ตำบล', 'นาแห้ว', '3420600021271'),
('ครู กศน.ตำบล', 'ปากชม', '1420400045961'),
('ครู กศน.ตำบล', 'ปากชม', '3420400115329'),
('ครูอาสาสมัคร', 'ปากชม', '3411600211403'),
('ครู กศน.ตำบล', 'ปากชม', '1420400004164'),
('ครู กศน.ตำบล', 'ปากชม', '3420901236030'),
('ครูอาสาสมัคร', 'ปากชม', '3420300033487'),
('ครู กศน.ตำบล', 'ปากชม', '1420400006248'),
('ครู กศน.ตำบล', 'ปากชม', '1420400012931'),
('ครู กศน.ตำบล', 'ปากชม', '3401600219374'),
('ครู กศน.ตำบล', 'ปากชม', '3420300525461'),
('ครู กศน.ตำบล', 'ปากชม', '3420400004306'),
('ครู กศน.ตำบล', 'ปากชม', '3420400114624'),
('ครู กศน.ตำบล', 'ปากชม', '3430700348191'),
('ครู กศน.ตำบล', 'ปากชม', '3420400002125'),
('ครู กศน.ตำบล', 'ผาขาว', '3421000109501'),
('ครู กศน.ตำบล', 'ผาขาว', '3421000354602'),
('ครู กศน.ตำบล', 'ผาขาว', '3421000442811'),
('ครู กศน.ตำบล', 'ผาขาว', '3421000615546'),
('ครู กศน.ตำบล', 'ผาขาว', '1411300024806'),
('ครู กศน.ตำบล', 'ผาขาว', '3421100164597'),
('ครู กศน.ตำบล', 'ผาขาว', '1429900006679'),
('ครู กศน.ตำบล', 'ผาขาว', '5421200007228'),
('ครู กศน.ตำบล', 'ผาขาว', '5421000009537'),
('ครู กศน.ตำบล', 'ผาขาว', '3421000429769'),
('ครูอาสาสมัครฯ', 'ผาขาว', '3401600592385'),
('เจ้าหน้าที่บริหารงานทั่วไป', 'ผาขาว', '3420100059512'),
('ครู กศน.ตำบล', 'ภูกระดึง', '1421000018215'),
('ครู กศน.ตำบล', 'ภูกระดึง', '3421000002595'),
('ครู กศน.ตำบล', 'ภูกระดึง', '5169900016858'),
('ครู กศน.ตำบล', 'ภูกระดึง', '3421000110908'),
('ครูอาสาสมัคร', 'ภูกระดึง', '3420100065652'),
('ครู กศน.ตำบล', 'ภูกระดึง', '1409900279543'),
('ครู กศน.ตำบล', 'ภูกระดึง', '3411500083985'),
('ครู กศน.ตำบล', 'ภูกระดึง', '5421000029899'),
('ครู กศน.ตำบล', 'ภูกระดึง', '1429900070326'),
('ครูอาสาสมัคร', 'ภูกระดึง', '3420900517001'),
('ครู กศน.ตำบล', 'ภูเรือ', '3220500053203'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700016598'),
('ครู กศน.ตำบล', 'ภูเรือ', '3429900162022'),
('ครู กศน.ตำบล', 'ภูเรือ', '1420100062665'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700001063'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700086821'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700022776'),
('ครูอาสาสมัคร', 'ภูเรือ', '3420700115308'),
('ครูอาสาสมัคร', 'ภูเรือ', '3420700141287'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700080717'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420800207832'),
('ครู กศน.ตำบล', 'ภูเรือ', '3429900203691'),
('ครู กศน.ตำบล', 'ภูเรือ', '3420700037633'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100078992'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100131982'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100006452'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100128671'),
('ครู กศน.ตำบล', 'ภูหลวง', '3420900532662'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100108565'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421100170708'),
('ครู กศน.ตำบล', 'ภูหลวง', '3420900180731'),
('ครู กศน.ตำบล', 'ภูหลวง', '3421000705251'),
('ครูอาสาสมัคร', 'ภูหลวง', '3400500101176'),
('ครูอาสาสมัคร', 'ภูหลวง', '3420100233679'),
('ครู กศน.ตำบล', 'เมืองเลย', '5420100014655'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100170537'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100601082'),
('ครู กศน.ตำบล', 'เมืองเลย', '3429900147201'),
('ครู กศน.ตำบล', 'เมืองเลย', '3429900195826'),
('ครู กศน.ตำบล', 'เมืองเลย', '3350200167016'),
('ครู กศน.ตำบล', 'เมืองเลย', '1421100036151'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100237160'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420300408537'),
('ครูอาสาสมัคร', 'เมืองเลย', '3420200119126'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100725172'),
('ครู กศน.ตำบล', 'เมืองเลย', '1429900077207'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100500901'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100663711'),
('ครู กศน.ตำบล', 'เมืองเลย', '1429900063559'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100150404'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100170511'),
('ครู กศน.ตำบล', 'เมืองเลย', '1420100021527'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100206825'),
('ครู กศน.ตำบล', 'เมืองเลย', '1420100007583'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100015141'),
('ครูอาสาสมัคร', 'เมืองเลย', '3429900181116'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100195114'),
('ครู กศน.ตำบล', 'เมืองเลย', '3410300164913'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100547339'),
('ครู กศน.ตำบล', 'เมืองเลย', '1429900062714'),
('ครู กศน.ตำบล', 'เมืองเลย', '3100500040773'),
('ครู กศน.ตำบล', 'เมืองเลย', '3219900295806'),
('ครู กศน.ตำบล', 'เมืองเลย', '3420100079572'),
('ครูอาสาสมัคร', 'เมืองเลย', '3420300359536'),
('ครูอาสาสมัคร', 'เมืองเลย', '3310500505812'),
('ครู กศน.ตำบล', 'เมืองเลย', '3429900202750'),
('ครู กศน.ตำบล', 'วังสะพุง', '1429900001596'),
('ครู กศน.ตำบล', 'วังสะพุง', '1420900031039'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420901228151'),
('ครู กศน.ตำบล', 'วังสะพุง', '3100904953657'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420600038174'),
('ครูอาสาสมัคร', 'วังสะพุง', '3420900782952'),
('ครูอาสาสมัคร', 'วังสะพุง', '3420100278940'),
('ครูอาสาสมัคร', 'วังสะพุง', '3420100713913'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900249863'),
('ครู กศน.ตำบล', 'วังสะพุง', '2450900019312'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900228181'),
('ครู กศน.ตำบล', 'วังสะพุง', '3421000525369'),
('ครู กศน.ตำบล', 'วังสะพุง', '1429900007705'),
('ครู กศน.ตำบล', 'วังสะพุง', '1420900004775'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900238128'),
('ครู กศน.ตำบล', 'วังสะพุง', '1420900026370'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900705729'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900365120'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900792109'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900880521'),
('ครู กศน.ตำบล', 'วังสะพุง', '3469900088183'),
('ครูอาสาสมัคร', 'วังสะพุง', '3420900913500'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900556057'),
('ครู กศน.ตำบล', 'วังสะพุง', '3420900055376'),
('ครู กศน.ตำบล', 'หนองหิน', '5421000008981'),
('ครู กศน.ตำบล', 'หนองหิน', '3421000466541'),
('ครู กศน.ตำบล', 'หนองหิน', '1420800006024'),
('ครู กศน.ตำบล', 'หนองหิน', '3421000386385'),
('ครูอาสาสมัคร', 'หนองหิน', '3420100377093'),
('ครู กศน.ตำบล', 'หนองหิน', '3421000137881'),
('ครู กศน.ตำบล', 'หนองหิน', '3421000281834'),
('ครูอาสาสมัคร', 'หนองหิน', '3420300444312'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420200064925'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420100207147'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420901000681'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420100244778'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420901262227'),
('ครู กศน.ตำบล', 'เอราวัณ', '1429900062480'),
('ครู กศน.ตำบล', 'เอราวัณ', '3420900938405'),
('ครู กศน.ตำบล', 'เอราวัณ', '3429900019700'),
('ครูอาสาสมัคร', 'เอราวัณ', '3400400706319'),
('ครูอาสาสมัคร', 'เอราวัณ', '3300101094886'),
('นักวิชาการคอมพิวเตอร์', '', '3429900060211'),
('นักวิชาการศึกษา', '', '1471500039211'),
('นักวิชาการศึกษา', '', '3420901199975'),
('นักวิเคราะห์นโยบายและแผน', '', '1471100020823'),
('นักวิชาการเงินและบัญชี', '', '1420100008890'),
('นักวิชาการพัสดุ', '', '3410101597780'),
('นักจัดการงานทั่วไป', '', '3420800211431'),
('นักวิชาการเงินและบัญชี', '', '1410900013863'),
('นักวิชาการเงินและบัญชี', '', '1429900013535'),
('นักวิชาการศึกษา', '', '3420400018069'),
('ครู กศน.ตำบล', 'เอราวัณ', '1420990000031');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memberid` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `org` text,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `cardid` text,
  `permit` text,
  `f1` text,
  `bank` varchar(20) NOT NULL,
  `duration` text,
  PRIMARY KEY  (`memberid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;

--
-- dump ตาราง `member`
--

INSERT INTO `member` (`memberid`, `name`, `org`, `username`, `password`, `cardid`, `permit`, `f1`, `bank`, `duration`) VALUES
(1, 'นายสุริยะ วิไลวงศ์', '', 'sayuri', '241124', '', 'zzz', 'พนักงานราชการ', '403-0-34233-7', ''),
(2, 'นายวัชระ  สอนขาว', '', '1420300010138', 'lnfe', NULL, NULL, 'พนักงานราชการ', '403-0-45355-4', NULL),
(3, 'นางสาวรัตนาพร  ทองคำ', '', 'rattanaporn', 'lnfe', NULL, 'accounting', 'พนักงานราชการ', '881-0-05274-9', NULL),
(4, 'นางสาวสุรีวัลย์ แก้วไชยะ', NULL, 'sureesuree', 'lnfe', NULL, NULL, 'พนักงานราชการ', '', NULL);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `membertemp`
--

CREATE TABLE IF NOT EXISTS `membertemp` (
  `memberid` int(11) NOT NULL auto_increment,
  `name` text NOT NULL,
  `org` text,
  `suborg` text,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `cardid` text,
  `permit` text,
  `f2` text,
  `f3` text,
  PRIMARY KEY  (`memberid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;

--
-- dump ตาราง `membertemp`
--

INSERT INTO `membertemp` (`memberid`, `name`, `org`, `suborg`, `username`, `password`, `cardid`, `permit`, `f2`, `f3`) VALUES
(1, 'นายสุริยะ วิไลวงศ์', '', '', 'sayuri', 'zzz', '', 'admin', '', ''),
(2, 'นายวัชระ  สอนขาว', '', NULL, '1420300010138', 'lnfe', NULL, NULL, NULL, NULL),
(3, 'นางสาวรัตนาพร  ทองคำ', '', NULL, 'rattanaporn', 'lnfe', NULL, 'accounting', NULL, NULL),
(4, 'นายพีรพล ประลอบพันธุ์', NULL, NULL, '1471100020823', '21318421', NULL, NULL, NULL, NULL),
(462, 'นายอาทิตย์ บุญคง', '', '', '1420900000000', 'lnfe', '', '', '', '');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `orgtxt`
--

CREATE TABLE IF NOT EXISTS `orgtxt` (
  `orgid` int(11) NOT NULL,
  `name` text NOT NULL,
  `add` text NOT NULL,
  `plus` int(11) NOT NULL,
  `cutfield` int(11) NOT NULL,
  `cutfield2` int(11) NOT NULL,
  PRIMARY KEY  (`orgid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- dump ตาราง `orgtxt`
--

INSERT INTO `orgtxt` (`orgid`, `name`, `add`, `plus`, `cutfield`, `cutfield2`) VALUES
(0, 'สำนักงาน กศน. จังหวัดเลย', '90 ถ.สถลเชียงคาน ต.กุดป่อง อ.เมือง จ.เลย โทร.0-4281-2657', 0, 10, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `slip`
--

CREATE TABLE IF NOT EXISTS `slip` (
  `typeid` int(11) NOT NULL,
  `cutontext` text NOT NULL,
  `cutonhead` text NOT NULL,
  `f2` text NOT NULL,
  `f3` text NOT NULL,
  PRIMARY KEY  (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- dump ตาราง `slip`
--

INSERT INTO `slip` (`typeid`, `cutontext`, `cutonhead`, `f2`, `f3`) VALUES
(1, 'รวมเงิน', 'เลขที่บัญชี', '', '');
