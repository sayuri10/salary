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
('ครู กศน.ตำบล', 'เชียงคาน', '9999999999999'),
('ครู กศน.ตำบล', 'เอราวัณ', '9999999999998');

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
(1, 'นายสุริยะ วิไลวงศ์', '', 'admin', 'admin', '', 'admin', 'พนักงานราชการ', '999-9-99999-9', ''),
(2, 'นายวัชระ  สอนขาว', '', '9999999999999', 'xxx', NULL, NULL, 'พนักงานราชการ', '999-9-99999-9', NULL),
(3, 'นางสาวรัตนาพร  ทองคำ', '', 'admin2', 'yyy', NULL, 'accounting', 'พนักงานราชการ', '999-9-99999-9', NULL),
(4, 'นางสาวสุรีวัลย์ แก้วไชยะ', NULL, 'admin3', 'zzz', NULL, NULL, 'พนักงานราชการ', '', NULL);

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
