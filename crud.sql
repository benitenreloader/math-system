-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2013 at 09:33 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_deleted` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `modified`, `is_deleted`) VALUES
(28, 'John', 'Dalisay', 'john', 'john123', '2011-09-23 21:36:19', '0'),
(39, 'aaa', 'aaa', 'aaa', 'aaa', '2013-04-02 19:06:10', '1'),
(40, 'bbb', 'bbb', 'bbb', 'bbb', '2013-04-02 19:06:09', '1'),
(41, 'ccc', 'ccc', 'ccc', 'ccc', '2013-04-02 19:06:07', '1'),
(46, 'XXXDDD', 'asf', '', '', '2013-04-02 18:57:51', '1'),
(47, 'www', 'www', 'www', 'www', '2013-04-02 18:54:47', '1'),
(48, 'HEHEHEHEHE', '', '', '', '2013-04-02 18:54:13', '1'),
(54, 'safas', 'agasg', 'gasgas', 'asgasgsag', '2013-04-02 19:06:19', '0'),
(55, 'iban', 'molino', 'ibanmolino', 'ibanmolino', '2013-04-02 21:24:20', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
