-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2016 at 03:55 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbill`
--

CREATE TABLE IF NOT EXISTS `tblbill` (
  `billID` int(11) NOT NULL AUTO_INCREMENT,
  `billName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `billDate` datetime NOT NULL,
  `deskID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `unit` int(11) NOT NULL,
  `Total` float NOT NULL,
  PRIMARY KEY (`billID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE IF NOT EXISTS `tblcategory` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `catName` varchar(500) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `catDescription` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`catID`, `catName`, `catDescription`) VALUES
(1, 'Nước giải khát', 'Các loại nước đóng chai, nước ép hoa quả'),
(2, 'Cà phê', 'Các loại cà phê, đen, nâu, pha sẵn, pha phin'),
(3, 'Bánh kẹo', ''),
(4, 'Thuốc lá', ''),
(5, 'Hoa quả', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldesktop`
--

CREATE TABLE IF NOT EXISTS `tbldesktop` (
  `deskID` int(11) NOT NULL AUTO_INCREMENT,
  `deskName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deskPosition` int(11) NOT NULL,
  `deskSeats` int(11) NOT NULL,
  `deskStartTime` datetime NOT NULL,
  `destStopTime` datetime NOT NULL,
  `deskStatus` int(5) NOT NULL,
  `deskNotes` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`deskID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbldesktop`
--

INSERT INTO `tbldesktop` (`deskID`, `deskName`, `deskPosition`, `deskSeats`, `deskStartTime`, `destStopTime`, `deskStatus`, `deskNotes`) VALUES
(1, 'Bàn tình yêu tầng 2', 211, 2, '2016-06-26 13:00:00', '0000-00-00 00:00:00', 1, 'Khách quen'),
(2, 'Bàn góc view hồ', 1001, 4, '2016-06-26 11:00:00', '0000-00-00 00:00:00', 1, '3 khách quen');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `pcatID` int(11) NOT NULL,
  `productName` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productPrice` float(10,0) NOT NULL,
  `productImage` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `productDescription` text NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`productID`, `pcatID`, `productName`, `productPrice`, `productImage`, `productDescription`) VALUES
(1, 2, 'Cà phê nâu nóng', 30000, '0', '0'),
(2, 2, 'Cà phê nâu đá', 30000, '', '0'),
(3, 1, 'Nước hoa quả dầm', 45000, '0', '0'),
(4, 0, 'd', 0, '', ''),
(5, 0, 'Nước cam', 0, '', ''),
(6, 0, 'Nước chanh', 0, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
