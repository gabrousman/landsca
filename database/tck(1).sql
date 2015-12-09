-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 02:32 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE IF NOT EXISTS `card` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card` varchar(2000) NOT NULL,
  `expiry` varchar(2000) NOT NULL,
  `cvCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
`id` int(11) NOT NULL,
  `name` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`) VALUES
(1, 'John Doe Company'),
(2, 'Alstom Company');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subs_type` varchar(255) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '''0''=>Unpaid,''1''=>Paid',
  `date` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `subscripition_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `user_id`, `subs_type`, `status`, `date`, `due_date`, `subscripition_id`) VALUES
(1, 19, '', '0', '2015-04-12 00:00:00', '2015-04-15 00:00:00', 4),
(2, 19, '', '0', '2015-04-13 00:00:00', '2015-04-15 00:00:00', 8),
(3, 19, '', '0', '2015-04-06 00:00:00', '2015-04-10 00:00:00', 8),
(4, 19, '', '0', '2015-04-09 00:00:00', '2015-04-13 00:00:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE IF NOT EXISTS `meetings` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('0','1','2') NOT NULL DEFAULT '0' COMMENT '0:by default,1:accept,2:reject',
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `user_id`, `date`, `status`, `description`) VALUES
(1, 4, '2014-07-23 10:12:36', '1', 'hiiiiiiiiiiiiiiiiiiiiiiiii'),
(2, 16, '2015-01-22 10:12:36', '2', 'hiiiiiiiiiiiiiiiiiiiiiiiii'),
(3, 15, '2015-04-17 12:15:00', '1', 'fgf'),
(4, 5, '2015-02-18 10:49:00', '0', 'fgf'),
(5, 5, '2015-02-18 23:32:00', '0', 'fgf'),
(6, 5, '2015-02-18 23:32:00', '0', 'fgf'),
(7, 14, '2015-02-10 11:31:00', '1', ''),
(8, 14, '2015-02-12 12:09:00', '1', 'Yyyyyyyyyyyy '),
(9, 14, '2015-02-11 12:10:00', '1', 'Arrive on time'),
(10, 5, '2015-02-12 09:14:00', '0', 'fgf'),
(11, 4, '2015-05-14 10:43:00', '1', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(12, 4, '2015-02-26 11:45:00', '1', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(13, 5, '2015-02-11 10:30:00', '0', 'fgf'),
(14, 24, '2015-02-21 03:39:00', '1', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(15, 4, '2015-09-10 12:11:00', '1', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(16, 29, '2014-03-03 20:00:00', '1', 'test'),
(17, 29, '2015-03-03 20:00:00', '1', 'test'),
(18, 29, '2015-03-03 20:00:00', '1', 'test'),
(19, 29, '2015-03-03 20:00:00', '1', 'test'),
(20, 4, '2015-02-24 09:02:00', '1', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(21, 27, '2015-03-10 12:53:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(22, 0, '1969-12-31 17:00:00', '0', ''),
(23, 0, '1969-12-31 17:00:00', '0', ''),
(24, 16, '2015-02-12 13:15:00', '2', 'sdsdgsgs'),
(25, 16, '2015-02-26 16:25:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(26, 16, '2015-02-28 16:11:00', '2', 'sdsd'),
(27, 16, '2015-02-25 16:18:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(28, 16, '2015-02-27 16:16:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(29, 16, '2015-03-03 16:27:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(30, 16, '2015-04-08 20:56:00', '2', 'gg'),
(31, 16, '2015-03-04 18:58:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(32, 16, '2015-03-05 18:07:00', '2', 'Lorem ipsum dolor sit er elit lamet, consectetaur cillium adipisicing pecu, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Nam liber te conscient to factor tum poen legum odioque civiuda.'),
(33, 16, '2015-03-12 19:13:00', '2', 'xcg'),
(34, 16, '2015-02-12 20:02:00', '2', 'bbzb'),
(35, 16, '2015-02-26 20:24:00', '2', 'asfadsfdsfdsfdsfdsfds'),
(36, 16, '2015-02-26 16:18:00', '2', 'Hshdhdj'),
(37, 16, '2015-02-18 21:20:00', '2', 'bzbbz'),
(38, 16, '2015-02-18 21:20:00', '2', 'bzbbzbxbx'),
(39, 16, '2015-02-18 21:21:00', '2', 'cvb'),
(40, 16, '2015-02-19 21:24:00', '2', ' z z'),
(41, 16, '2015-02-19 21:31:00', '2', 'xcvb'),
(42, 16, '2015-02-11 21:46:00', '2', 'vvv'),
(43, 16, '2015-02-11 21:46:00', '2', 'vvv'),
(44, 16, '2015-03-12 23:26:00', '2', 'Add Description   '),
(45, 16, '2015-02-01 19:52:00', '2', 'trim hedges'),
(46, 16, '2015-02-01 19:52:00', '2', 'trim hedges'),
(47, 16, '2015-02-28 11:16:00', '0', 'c b'),
(48, 0, '1969-12-31 17:00:00', '0', ''),
(49, 16, '2015-02-28 11:35:00', '0', 'vvb'),
(50, 16, '2015-02-28 12:07:00', '0', 'vbb'),
(51, 16, '2015-02-28 13:54:00', '0', 'bzbbzbz'),
(52, 16, '2015-02-28 14:48:00', '0', 'cvv'),
(53, 16, '2015-02-26 03:28:00', '0', ''),
(54, 16, '2015-02-26 03:28:00', '0', 'vxbxb'),
(55, 16, '2015-02-27 03:33:00', '0', ''),
(56, 16, '2015-02-27 03:33:00', '0', ''),
(57, 16, '2015-02-27 03:33:00', '0', ''),
(58, 16, '2015-02-27 03:33:00', '0', ''),
(59, 16, '2015-02-27 17:20:00', '0', 'bzbxb');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recurring_status` enum('0','1') NOT NULL COMMENT '1=yes,0=no',
  `token` varchar(255) NOT NULL,
  `pay_status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '''0''=>Unpaid,''1''=>Paid',
  `invoice_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `recurring_status`, `token`, `pay_status`, `invoice_id`) VALUES
(1, 19, '1', 'tok_15ZarCE6lGAdTrgmqUHlNEZ7', '0', 1),
(2, 19, '1', 'tok_15ZarCE6lGAdTrgmqUHlNEZ7', '0', 2),
(3, 19, '0', 'fdfXDFDF2344442czdg', '0', 3),
(4, 19, '1', 'fdfXDFDF2344442czdg', '0', 4);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE IF NOT EXISTS `subscription` (
`id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `type`, `description`, `price`, `company_id`) VALUES
(4, 'Monthly', 'Trimmed Hedges/Mowed Lawn', '32', 1),
(8, 'Yearly', 'mowed lawn', '120', 1),
(10, 'Weekly', 'mowed lawn', '20', 1),
(11, 'Monthly ', 'Trimmed Hedges/Mowed Lawn', '30', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`id` int(11) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_date` datetime NOT NULL,
  `status` enum('1','2') NOT NULL COMMENT '''1''=>success,''2''=>unsucess',
  `amount` int(11) NOT NULL,
  `subscription_id` varchar(255) NOT NULL,
  `customer_id` varchar(255) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `transaction_id`, `user_id`, `payment_date`, `status`, `amount`, `subscription_id`, `customer_id`) VALUES
(39, 1654, 16, '2015-02-25 08:10:25', '1', 3200, 'sub_5le63Ze1a7caZ8', 'cus_5le6BdlhAevuIB'),
(4, 1654, 16, '2015-02-25 05:10:40', '1', 3200, 'sub_5lbCMN6aZ1eGQf', 'cus_5lbCSOLqYJWpz5'),
(12, 1654, 16, '2015-02-25 05:50:10', '1', 3200, 'sub_5lbpvzN2oiO9bH', 'cus_5lbplXh4mcjVE5'),
(8, 1654, 16, '2015-02-25 05:29:49', '1', 3200, 'sub_5lbVP4ioME7tdE', 'cus_5lbVghMRIaT9JT'),
(9, 1654, 16, '2015-02-25 05:35:21', '1', 3200, 'sub_5lbbxpTZR42QXf', 'cus_5lbbHySOz3yufw'),
(14, 1654, 16, '2015-02-25 05:50:58', '1', 3200, 'sub_5lbq2PVaeSNJtR', 'cus_5lbqt0bmYebGoz'),
(15, 1654, 16, '2015-02-25 05:51:00', '1', 3200, 'sub_5lbq32LDyEOkg8', 'cus_5lbqsxmJKlrA8n'),
(17, 1654, 16, '2015-02-25 05:52:40', '1', 3200, 'sub_5lbsz9NyJsIEOj', 'cus_5lbsqbnQF1corG'),
(19, 1654, 16, '2015-02-25 05:52:46', '1', 3200, 'sub_5lbs45qrYzUZ8x', 'cus_5lbsSSQBD0702P'),
(22, 1654, 16, '2015-02-25 05:53:23', '1', 3200, 'sub_5lbt979zHaSs8y', 'cus_5lbtswERLDNa9J'),
(24, 1654, 16, '2015-02-25 05:54:04', '1', 3200, 'sub_5lbt0Vqc3V8BjI', 'cus_5lbtaOcAWQIZPP'),
(30, 1654, 16, '2015-02-25 06:44:01', '1', 3200, 'sub_5lchWYayi0IJ0X', 'cus_5lch6nHMYeqjbA'),
(43, 1654, 16, '2015-02-25 08:20:39', '1', 3200, 'sub_5leG2A1ho0zdPw', 'cus_5leG5RMyULfI0N'),
(44, 1654, 16, '2015-02-25 08:20:42', '1', 3200, 'sub_5leGybliuH05Q9', 'cus_5leGznr2ubbAfl'),
(45, 1654, 16, '2015-02-25 08:57:37', '1', 3200, 'sub_5ler3EL11Fxnal', 'cus_5lerFtiK2umCFd'),
(46, 1654, 16, '2015-02-25 09:14:18', '1', 3200, 'sub_5lf8StLiMT7Sfx', 'cus_5lf83zPN0YIAem'),
(47, 1654, 16, '2015-02-25 10:44:04', '1', 3200, 'sub_5lsB9OfQ3rKAlx', 'cus_5lsBgXDeQLyprJ'),
(48, 1654, 16, '2015-02-25 10:47:00', '1', 3200, 'sub_5lsEXZ3lkpgYlq', 'cus_5lsETJdgxEdLMY'),
(50, 1654, 16, '2015-02-25 10:48:23', '1', 3200, 'sub_5lsGQgw153l7Bu', 'cus_5lsGYOeYPm4qSL'),
(51, 1654, 16, '2015-02-25 11:40:02', '1', 3200, 'sub_5lt5Jo79WJg1We', 'cus_5lt5cCRod0eDXg'),
(54, 1654, 16, '2015-02-26 12:30:20', '1', 3200, 'sub_5ltupC5UCwcDCR', 'cus_5ltuRazmvcbPlw'),
(58, 1654, 16, '2015-02-26 12:41:53', '1', 3200, 'sub_5lu5xtorSRHrjJ', 'cus_5lu5UUaznYy2SM'),
(63, 1654, 16, '2015-02-26 02:20:13', '1', 3200, 'sub_5lvfu0ipHPv8Qu', 'cus_5lvfPJUdQ8m57n'),
(64, 1654, 16, '2015-02-26 02:36:50', '1', 3200, 'sub_5lvwlFRvYStw6D', 'cus_5lvw3ouc65ciNt');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE IF NOT EXISTS `user1` (
`id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(2000) NOT NULL,
  `password` varchar(2000) NOT NULL,
  `address` text NOT NULL,
  `zip_code` varchar(2000) NOT NULL,
  `user_type` enum('customer','landscaper') NOT NULL DEFAULT 'customer',
  `date_of_birth` date NOT NULL,
  `companyid` varchar(2000) NOT NULL,
  `city` varchar(2000) NOT NULL,
  `company_name` varchar(2000) NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `Invitation_code` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `zip_code`, `user_type`, `date_of_birth`, `companyid`, `city`, `company_name`, `phone_number`, `Invitation_code`) VALUES
(19, 'test', 'test', 'testland@test.com', '123456', '', '123456', 'customer', '0000-00-00', 'khhj', 'kjhkjhkj', '', 123456, ''),
(21, 'khkhkjh', 'jhkjhkjh', 'testlandhkjhkj@test.com', 'khuittyutuyt', '', '', 'landscaper', '0000-00-00', '', '', '', 0, 'jhhkjhk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `subscriptiontype` varchar(255) NOT NULL,
  `device_id` text NOT NULL,
  `device_type` varchar(255) NOT NULL,
  `badge` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0="active",1="Inactive"',
  `noti_status` enum('1','0') NOT NULL COMMENT '''0''=>no,''1''=>yes',
  `dateto` date NOT NULL,
  `datefrom` date NOT NULL,
  `subscriptioninterval` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `age`, `address`, `gender`, `Image`, `subscriptiontype`, `device_id`, `device_type`, `badge`, `status`, `noti_status`, `dateto`, `datefrom`, `subscriptioninterval`, `customer_id`) VALUES
(4, 'Gaurav', 'gaurav@gmail.com', 'patiala', 22, 'Mohali', 'Male', '', 'Yearly', '0', '0', 1, '0', '1', '0000-00-00', '0000-00-00', 0, ''),
(13, 'chitresh', '', 'chinku', 24, 'Mohali', '0', '', 'Monthly', '', '', 0, '0', '1', '2015-01-15', '0000-00-00', 0, ''),
(14, 'gaurav', 'gaurav.bhatia56@gmail.com', '123456', 22, 'United Kingdom', '0', '', 'Weekly', '0', '0', 0, '0', '1', '2015-01-30', '2014-12-04', 0, ''),
(15, 'Sujan', 'p', 'sujan', 19, 'california', 'Female', 'Confidence-compressed.jpg', 'Yearly', '0', '0', 1, '0', '0', '0000-00-00', '0000-00-00', 0, 'cus_5lIUDkSM3BOQFf'),
(16, 'romy@gmail.com', 'romy@gmail.com', '12345', 23, 'california', 'male', 'Vegan_Marinated_Vegetable_-compressed.jpg', 'Monthly', '', 'Android', 2, '0', '1', '2015-01-02', '0000-00-00', 5, 'cus_5ly6JoCxG9OJeA'),
(20, 'jay', '', 'neon', 26, 'patiala', 'Male', 'http://php.net/images/logo.php', 'YEARLY', '', '', 0, '0', '1', '0000-00-00', '2015-01-01', 0, ''),
(22, 'harish verma', 'harish@gmail.com', '123456', 25, 'vvevevevevev', 'Male', '', 'Monthly', '0', '0', 0, '0', '1', '2015-01-17', '0000-00-00', 0, ''),
(23, 'klhkj', 'nbvnbvmnjv', '12345678', 40, 'ikguilugtliuguil', 'Female', '', 'Monthly', '0', '0', 0, '0', '1', '2015-01-30', '0000-00-00', 0, ''),
(24, 'anoop', 'anoop@gmail.com', 'anoop12345', 26, 'fsadfasdfsdf', 'Male', 'Latte.jpg', 'Weekly', '0', '0', 0, '0', '1', '2015-01-02', '2015-01-04', 0, ''),
(25, 'romy', 'admin', 'admin321', 23, 'gsdfgsdfg', 'Male', '', 'Weekly', '0', '0', 0, '0', '1', '2015-01-19', '2015-01-08', 0, ''),
(26, 'gauravsadasd', 'anoop@gmail.com', 'pass', 22, 'Chandigarh', 'Male', 'fergie.jpg', 'Monthly', '0', '0', 0, '0', '1', '2015-01-31', '2015-01-10', 0, ''),
(27, 'masonm', 'masonmahaffey00@gmail.com', 'recrem12131', 23, '1090 Dials Mill Spur', 'Male', '', 'Weekly', '0', '0', 1, '0', '1', '2015-03-31', '2015-02-05', 0, ''),
(28, 'Gaurav', 'gaurav@gaur.com', '123456789', 22, 'Patiala,Punjab,India', 'Male', 'Guru-Within.jpg', 'Yearly', '0', '0', 7, '0', '1', '2017-02-21', '2015-02-21', 2, ''),
(29, 'aayu', 'ayush@ramola.com', '827ccb0eea8a706c4c34a16891f84e7b', 24, 'Jannat ', 'Male', 'team.jpeg', 'Weekly', '0', '0', 7, '0', '1', '2017-02-21', '2015-02-24', 4, ''),
(30, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdpeEVWN5WSs'),
(31, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdfSszLfbnIu'),
(32, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdKN13c5gf4c'),
(33, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdd6wWR5FRRl'),
(34, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdWOYNrIw5R0'),
(35, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdbtodryXnD0'),
(36, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdwJmSoulAlf'),
(37, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdAyXWHb1TJY'),
(38, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdDiOgEUOBwh'),
(39, '', '', '', 0, '', '', '', '', '', '', 0, '0', '1', '0000-00-00', '0000-00-00', 0, 'cus_5lGdEH1ONyHybV'),
(40, 'joebloe', 'joebloe@gmail.com', '328dbccb6cad5be095f6596d8c1126e4', 20, '1090 Dials Mill', 'Male', '', 'Weekly', '0', '0', 0, '0', '1', '2015-03-18', '2015-03-04', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
