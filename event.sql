-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2015 at 09:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE IF NOT EXISTS `catering` (
  `caterid` int(11) NOT NULL AUTO_INCREMENT,
  `cateringname` varchar(50) NOT NULL,
  `contactperson` varchar(50) NOT NULL,
  `contactid` int(11) NOT NULL,
  PRIMARY KEY (`caterid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`caterid`, `cateringname`, `contactperson`, `contactid`) VALUES
(1, 'srinu catering services', 'Srinu', 1),
(2, 'ravi catering service', 'ravi', 2),
(3, 'Naidu Catering Service', 'Naidu', 3);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `City_id` int(11) NOT NULL AUTO_INCREMENT,
  `City_code` varchar(4) NOT NULL,
  `City` varchar(25) NOT NULL,
  `City_map` varchar(200) NOT NULL,
  `State_Id` int(11) NOT NULL,
  `Country_Id` int(11) NOT NULL,
  PRIMARY KEY (`City_id`),
  UNIQUE KEY `City_code` (`City_code`,`City`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`City_id`, `City_code`, `City`, `City_map`, `State_Id`, `Country_Id`) VALUES
(1, 'VSKP', 'Vishakapatnam', 'e0c14ddc3a950e6538296698c5ea8758norway.jpg', 1, 2),
(2, 'VZM', 'Vizianagaram', '95fbdae06083402e3039beea5af4c0e6HAVASU_FALLS_IS_A_WATERFALL_OF_HAVASU_CREEK,_LOCATED_IN_THE_GRAND_CANYON,_ARIZONA..jpg', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `caddress` varchar(250) NOT NULL,
  `phno1` varchar(12) NOT NULL,
  `phno2` varchar(12) NOT NULL,
  `cityid` int(11) NOT NULL,
  `landline` varchar(15) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `caddress`, `phno1`, `phno2`, `cityid`, `landline`, `emailid`, `pincode`) VALUES
(1, 'srinu', '9874563210', '9874563210', 1, '91250140', 'srinu@gmail.com', 530017),
(2, 'mvp colony, vskp', '987543210', '9876543210', 1, '', 'ravi@gmail.com', 530017),
(3, 'MVP Colony, VSKP', '9876543210', '9876543210', 2, '08912500140', 'naidu@gmail.com', 530017);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `Country_id` int(11) NOT NULL AUTO_INCREMENT,
  `Country_code_2` varchar(4) NOT NULL,
  `Country_code_3` varchar(4) NOT NULL,
  `Country` varchar(25) NOT NULL,
  `Flag` varchar(200) NOT NULL,
  PRIMARY KEY (`Country_id`),
  UNIQUE KEY `Country_code_2` (`Country_code_2`,`Country_code_3`,`Country`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`Country_id`, `Country_code_2`, `Country_code_3`, `Country`, `Flag`) VALUES
(2, 'IN', 'IND', 'India', 'ae15334cc733ad593a2e6faa0b57bc7aIndia.png'),
(3, 'AU', 'AUS', 'Australia', '15b8e865750faeaa43aadfc58d3c5847Australia.png'),
(5, 'CN', 'CHN', 'China', 'a1f69df3da1d205f09f8a416ba5f3ec2China.png'),
(6, 'GB', 'GBR', 'United Kingdom', 'c9d073494acc60909b29ed84dd8212c0United-Kingdom.png'),
(7, 'US', 'USA', 'United States', '39cded0ec6cfb3a121f2de1690b54667United-States-of-America.png');

-- --------------------------------------------------------

--
-- Table structure for table `decoratorplan`
--

CREATE TABLE IF NOT EXISTS `decoratorplan` (
  `decoratorplanid` int(11) NOT NULL AUTO_INCREMENT,
  `planname` varchar(50) NOT NULL,
  `descripation` varchar(250) NOT NULL,
  `decoratorid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`decoratorplanid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `decrator`
--

CREATE TABLE IF NOT EXISTS `decrator` (
  `decoratorid` int(11) NOT NULL,
  `decoratorname` varchar(50) NOT NULL,
  `contactid` int(11) NOT NULL,
  `ratingid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventid` int(11) NOT NULL AUTO_INCREMENT,
  `eventname` varchar(100) NOT NULL,
  `eventicon` varchar(150) NOT NULL,
  `eventdec` text NOT NULL,
  PRIMARY KEY (`eventid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventid`, `eventname`, `eventicon`, `eventdec`) VALUES
(1, 'Anniversary', '', ''),
(2, 'Baby Shower', '', ''),
(3, 'Bachelor party', '', ''),
(4, 'Wedding', '', ''),
(5, 'Birthday Party', '', ''),
(6, 'Engagement', '', ''),
(7, 'Get together', '', ''),
(8, 'Social gathering', '', ''),
(9, 'Board Meeting', '', ''),
(10, 'Corporate Events', '', ''),
(11, 'Death Cermony', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `eventservices`
--

CREATE TABLE IF NOT EXISTS `eventservices` (
  `esid` int(11) NOT NULL AUTO_INCREMENT,
  `esname` varchar(150) NOT NULL,
  PRIMARY KEY (`esid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `eventservices`
--

INSERT INTO `eventservices` (`esid`, `esname`) VALUES
(1, 'Function Hall'),
(2, 'Catering'),
(3, 'Pandit'),
(4, 'Lighting'),
(5, 'Floweriest'),
(6, 'Decorators'),
(7, 'Photo / Video grapher'),
(8, 'Band Party'),
(9, 'Beauty & Grooming'),
(10, 'DJ');

-- --------------------------------------------------------

--
-- Table structure for table `e_es`
--

CREATE TABLE IF NOT EXISTS `e_es` (
  `eesid` int(11) NOT NULL AUTO_INCREMENT,
  `eid` int(11) NOT NULL,
  `esid` int(11) NOT NULL,
  PRIMARY KEY (`eesid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `e_es`
--

INSERT INTO `e_es` (`eesid`, `eid`, `esid`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 4),
(4, 1, 5),
(5, 1, 6),
(6, 1, 7),
(7, 2, 1),
(8, 2, 2),
(9, 2, 3),
(10, 3, 1),
(11, 3, 2),
(12, 3, 7),
(13, 3, 10),
(14, 4, 1),
(15, 4, 2),
(16, 4, 3),
(17, 4, 4),
(18, 4, 5),
(19, 4, 6),
(20, 4, 7),
(21, 4, 9),
(22, 5, 1),
(23, 5, 2),
(24, 5, 6),
(25, 5, 7),
(26, 6, 1),
(27, 6, 2),
(28, 6, 5),
(29, 6, 7),
(30, 6, 3),
(31, 7, 1),
(32, 7, 2),
(33, 7, 7),
(34, 7, 10),
(35, 8, 1),
(36, 8, 2),
(37, 8, 7),
(38, 9, 1),
(39, 9, 2);

-- --------------------------------------------------------

--
-- Table structure for table `flourist`
--

CREATE TABLE IF NOT EXISTS `flourist` (
  `flouristid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `contactid` int(11) NOT NULL,
  `ratingid` int(11) NOT NULL,
  PRIMARY KEY (`flouristid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `flouristmenu`
--

CREATE TABLE IF NOT EXISTS `flouristmenu` (
  `flouristmenuid` int(11) NOT NULL AUTO_INCREMENT,
  `flouristid` int(11) NOT NULL,
  `flowertype` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pimage` varchar(150) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`flouristmenuid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `foodmenu`
--

CREATE TABLE IF NOT EXISTS `foodmenu` (
  `fmid` int(11) NOT NULL AUTO_INCREMENT,
  `fmname` varchar(50) NOT NULL,
  `fmprice` double NOT NULL,
  `menutype` varchar(15) NOT NULL,
  `cateringid` int(11) NOT NULL,
  PRIMARY KEY (`fmid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `foodmenu`
--

INSERT INTO `foodmenu` (`fmid`, `fmname`, `fmprice`, `menutype`, `cateringid`) VALUES
(1, '12 Items', 180, 'VEG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lighting`
--

CREATE TABLE IF NOT EXISTS `lighting` (
  `lightingid` int(11) NOT NULL AUTO_INCREMENT,
  `servicename` varchar(50) NOT NULL,
  `contactid` int(11) NOT NULL,
  `ratingid` int(11) NOT NULL,
  PRIMARY KEY (`lightingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `lightingplan`
--

CREATE TABLE IF NOT EXISTS `lightingplan` (
  `lightplanid` int(11) NOT NULL AUTO_INCREMENT,
  `lightid` int(11) NOT NULL,
  `planname` varchar(50) NOT NULL,
  `descripation` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`lightplanid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pandit`
--

CREATE TABLE IF NOT EXISTS `pandit` (
  `panditid` int(11) NOT NULL AUTO_INCREMENT,
  `panditname` varchar(50) NOT NULL,
  `contactid` int(11) NOT NULL,
  `descripation` varchar(250) NOT NULL,
  `panditspe` varchar(300) NOT NULL,
  `pimage` varchar(100) NOT NULL,
  PRIMARY KEY (`panditid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `ratingid` int(11) NOT NULL AUTO_INCREMENT,
  `ratingpoints` int(11) NOT NULL,
  `ratingdescripation` varchar(100) NOT NULL,
  PRIMARY KEY (`ratingid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `State_id` int(11) NOT NULL AUTO_INCREMENT,
  `State_code` varchar(5) NOT NULL,
  `State` varchar(25) NOT NULL,
  `State_map` varchar(200) NOT NULL,
  `Country_Id` int(11) NOT NULL,
  PRIMARY KEY (`State_id`),
  UNIQUE KEY `State_code` (`State_code`,`State`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`State_id`, `State_code`, `State`, `State_map`, `Country_Id`) VALUES
(1, 'IN-AP', 'Andhra Pradesh', '6d189d356a5c8267419a6513572e656cAndhra-Pradesh-NEW_DC_7_1.jpg', 2),
(2, 'IN-AR', 'Arunachal Pradesh', '6fa647f7a309713e53ac6b3a351a3173state_map.jpg', 2),
(4, 'IN-AS', 'ASSAM', '5c523c56c28ba439a17ae382ed9d1390assam-political-map.jpg', 2),
(5, 'IN-BR', 'BIHAR', '7b5081a6365d3a065f258105fd7896fcbihar-map.gif', 2),
(6, 'IN-CT', 'CHHATTISGARH', 'c15079330afe66e0b91c107c5a9c77bc', 2),
(7, 'IN-GA', 'GOA', 'f8ef978659f4b4023a340af6152a005b', 2),
(8, 'IN-GJ', 'GUJARAT', 'e5112bc2701a55fb0a7cf7a482d31a54', 2),
(9, 'IN-HR', 'HARYANA', '5595d7e7a2bac363bf63e438558906b7', 2),
(10, 'IN-HP', 'HIMACHAL PRADESH', 'c6b12d649038e277fc78ea184ea910c7', 2),
(11, 'IN-JK', 'JAMMU AND KASHMIR', 'b371a42c4602404a43fffb5d69d6fa67', 2),
(12, 'IN-JH', 'JHARKHAND', '104ba909b7592a507ef2891f8b96b025', 2),
(13, 'IN-KA', 'KARNATAKA', '6388fae4c72f1cbb5468686cd7ed1ef3', 2),
(14, 'IN-KL', 'KERALA', '317cce4e14ff503cb22306c19891d1ad', 2),
(15, 'IN-MP', 'MADHYA PRADESH', '9ab916fa0540e2d13ab99906603c37be', 2),
(16, 'IN-MH', 'MAHARASHTRA', 'c3d931bc0e6c0e562d72f0ba3cbe0ec6', 2),
(17, 'IN-MN', 'MANIPUR', '6f94aa858b256f7efc935b8cb08e363c', 2),
(18, 'IN-ML', 'MEGHALAYA', '083af6bd4dc36633d225f4c19b8f79ad', 2),
(19, 'IN-MZ', 'MIZORAM', '38256aa382f24315fadc731f34a01cff', 2),
(20, 'IN-NL', 'NAGALAND', '99c3536f0eae5bb25ad65cb687863199', 2),
(21, 'IN-OR', 'ORISSA', '5a396e1d71bcefe4f2204d33b0c23e01', 2),
(22, 'IN-PB', 'PUNJAB', 'da1560b3b38211b2453118c31d5c927d', 2),
(23, 'IN-RJ', 'RAJASTHAN', 'cbb5bb07decea3fef41f7d7898d22606', 2),
(24, 'IN-SK', 'SIKKIM', '39b0c287f4bfd4a854ac279d9105ad36', 2),
(25, 'IN-TN', 'TAMIL NADU', '50573437030c0131fd2db765712487f8', 2),
(26, 'IN-TR', 'TRIPURA', 'e3e4f7f8b162f34f185e7a0519103451', 2),
(27, 'IN-UT', 'UTTARAKHAND', '7b0d644113c8124d9caac2aa915cf9cd', 2),
(28, 'IN-UP', 'UTTAR PRADESH', '1ac798fbec44cd40eb10133258edf723', 2),
(29, 'IN-WB', 'WEST BENGAL', '312650e4b2f13a545dcb91ea9c2831a5', 2),
(30, 'IN-AN', 'ANDAMAN AND NICOBAR', '7312fd3d2d8e5a9c0215c646bbd41f62', 2),
(31, 'IN-CH', 'CHANDIGARH', '57e99a0bb3c4024e6150a8f0de1a36ae', 2),
(32, 'IN-DN', 'DADRA AND NAGAR HAVELI', 'ef3a6164045baa5814fdd2fec6518d88', 2),
(33, 'IN-DD', 'DAMAN AND DIU', '9666dd8016b55b6a001464a552db9f4a', 2),
(34, 'IN-DL', 'DELHI', 'e0c60d0435651e147acc424447e68c25', 2),
(35, 'IN-LD', 'LAKSHADWEEP', 'ebe931e83bb2af52d8793fb76540079a', 2),
(36, 'IN-PY', 'PUDUCHERRY', '465a47e4dbc1a3fff2c9aac664c6b8d8', 2),
(37, 'IN-TS', 'TELANGANA', '0d0050d331c11a8b58752d43a1960e62telangana-map.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE IF NOT EXISTS `tblproduct` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `menu` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `product_code` (`code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `menu`, `name`, `code`, `image`, `price`) VALUES
(1, 'Basic', 'SS Catering', 'SSC1237', 'images\\images\\c1.jpg', 250.00),
(2, 'Premium', 'PP Catering', 'PPC4382', 'images\\images\\c2.jpg', 180.00),
(3, 'Basic', 'KK Catering', 'KKC2938', 'images\\images\\c3.jpg', 250.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `phoneno` varchar(12) NOT NULL,
  `cityid` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `emailid`, `phoneno`, `cityid`) VALUES
(1, 'root', 'sadf', 'srinu@gmail.com', '', 0),
(2, 'ravi', 'asdf', 'ravi@gmail.com', '9654657451', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
