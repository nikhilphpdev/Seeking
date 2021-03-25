-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2016 at 06:37 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `seeking`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_job`
--

CREATE TABLE IF NOT EXISTS `applied_job` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `applied_by` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `applied_job`
--

INSERT INTO `applied_job` (`id`, `job_id`, `title`, `description`, `salary`, `skill`, `location`, `type`, `experience`, `company`, `applied_by`) VALUES
(1, 1, 'web developer', 'To handle backend with php and javascript', '300000-40000', 'php', 'Lucknow', 'Full-time', 'fresher', 'Codingbrains', 'ritu');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `post_by` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `salary`, `skill`, `location`, `type`, `experience`, `company`, `post_by`) VALUES
(1, 'web developer', 'To handle backend with php and javascript', '300000-40000', 'php', 'Lucknow', 'Full-time', 'fresher', 'Codingbrains', 'raghu123');

-- --------------------------------------------------------

--
-- Table structure for table `recruiters`
--

CREATE TABLE IF NOT EXISTS `recruiters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` bigint(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `company` varchar(200) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `recruiters`
--

INSERT INTO `recruiters` (`id`, `name`, `username`, `password`, `email`, `contact_no`, `gender`, `company`, `img_path`) VALUES
(1, 'Raghvendra Pratap Singh', 'raghu123', '123456', 'raghu@gmail.com', 123456783456, 'Male', 'Codingbrains', 'profile/Fotor_145493248373722.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `contact_no` bigint(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `intererested_area` varchar(100) NOT NULL,
  `salary_expected` bigint(100) NOT NULL,
  `resume_path` varchar(100) NOT NULL,
  `access_code` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `dob`, `contact_no`, `address`, `gender`, `qualification`, `skills`, `img_path`, `intererested_area`, `salary_expected`, `resume_path`, `access_code`) VALUES
(1, 'Shishir', 'shishir123', '123456', 'shishir@gmail.com', '0000-00-00', 12345678, 'india', 'on', 'BTech', '', 'profile/9199304.JPG', '', 300000, 'resume/Raghvendra _resume (1).pdf', NULL),
(2, 'Ritu Agrahari', 'ritu', '123456', 'ritu@gmail.com', '0000-00-00', 123456789, 'india', 'on', '', '', 'profile/213408328.JPG', '', 0, '', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
