-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 01:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `la`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `type`) VALUES
(1, 'xavier', 'udai456@gmail.com', '123', '111', '1');

-- --------------------------------------------------------

--
-- Table structure for table `carousal`
--

CREATE TABLE IF NOT EXISTS `carousal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `carousal`
--

INSERT INTO `carousal` (`id`, `image`, `date`) VALUES
(1, '1.jpg', '2019-04-06'),
(2, '2.jpg', '2019-04-06'),
(3, '3.jpg', '2019-04-06'),
(4, '4.jpg', '2019-04-06');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `class`, `city`, `date`) VALUES
(1, 'udai', 'udai456@gmail.com', '8799009009', 'mca', 'kanpur', '2020/02/19');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `link` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `link`, `date`) VALUES
(1, 'Fa Icons', 'https://fontawesome.com/v4.7.0/icons/', 'aa', '2020-02-21'),
(5, 'Uploading image and adding link to mysql', 'When I fill in all the fileds and select an image using IMAGE URL and hit add article, it works fine and my form is saved to my database and is then displayed on my site.\n\nWhen I fill in all the fileds and select an image using UPLOAD IMAGE and hit add article, it adds the image to my selected folder in my cpanel but DOES NOT ADD TO DATABASE.', 'https://stackoverflow.com/questions/18539573/uploading-image-and-adding-link-to-mysql', '2020-02-21'),
(6, 'Happy Valentine Day 2020', 'Happy Valentine Day 2020 - New Hindi Love Songs 2020 February - Top Bollywood Songs Romantic 2020', 'https://www.youtube.com/watch?v=rLifRZjGzCQ', '2020-02-21'),
(7, 'Youtube', 'Weâ€™ll stop supporting this browser soon. For the best experience please update your browser.', 'https://www.youtube.com/', '2020-02-21'),
(8, 'Hindi Romantic Love songs', 'Hindi Romantic Love songs - Top 20 Bollywood Songs - SWeet HiNdi SonGS - Armaan Malik Atif Aslam', 'https://www.youtube.com/watch?v=WM19b1Dt_Bc', '2020-02-21'),
(9, 'Uploading image and adding link to mysql', 'When I fill in all the fileds and select an image using IMAGE URL and hit add article, it works fine and my form is saved to my database and is then displayed on my site.\r\n\r\nWhen I fill in all the fileds and select an image using UPLOAD IMAGE and hit add article, it adds the image to my selected folder in my cpanel but DOES NOT ADD TO DATABASE.', 'https://stackoverflow.com/questions/18539573/uploading-image-and-adding-link-to-mysql', '2020-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `smobile` varchar(255) DEFAULT NULL,
  `marital` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `address` longtext,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `address1` longtext,
  `district1` varchar(255) DEFAULT NULL,
  `state1` varchar(255) DEFAULT NULL,
  `pincode1` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `weight` varchar(255) DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL,
  `pmobile` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `pgyear` varchar(255) DEFAULT NULL,
  `pgsubject` varchar(255) DEFAULT NULL,
  `pgmarks` varchar(255) DEFAULT NULL,
  `pgcollege` varchar(255) DEFAULT NULL,
  `pguniversity` varchar(255) DEFAULT NULL,
  `gyear` varchar(255) DEFAULT NULL,
  `gsubject` varchar(255) DEFAULT NULL,
  `gmarks` varchar(255) DEFAULT NULL,
  `gcollege` varchar(255) DEFAULT NULL,
  `guniversity` varchar(255) DEFAULT NULL,
  `iyear` varchar(255) DEFAULT NULL,
  `isubject` varchar(255) DEFAULT NULL,
  `imarks` varchar(255) DEFAULT NULL,
  `icollege` varchar(255) DEFAULT NULL,
  `iuniversity` varchar(255) DEFAULT NULL,
  `hyear` varchar(255) DEFAULT NULL,
  `hsubject` varchar(255) DEFAULT NULL,
  `hmarks` varchar(255) DEFAULT NULL,
  `hcollege` varchar(255) DEFAULT NULL,
  `huniversity` varchar(255) DEFAULT NULL,
  `oyear` varchar(255) DEFAULT NULL,
  `osubject` varchar(255) DEFAULT NULL,
  `omarks` varchar(255) DEFAULT NULL,
  `ocollege` varchar(255) DEFAULT NULL,
  `ouniversity` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sign` varchar(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `dob`, `gender`, `country`, `smobile`, `marital`, `category`, `email`, `fname`, `aadhar`, `address`, `district`, `state`, `pincode`, `address1`, `district1`, `state1`, `pincode1`, `height`, `weight`, `mark`, `pmobile`, `course`, `pgyear`, `pgsubject`, `pgmarks`, `pgcollege`, `pguniversity`, `gyear`, `gsubject`, `gmarks`, `gcollege`, `guniversity`, `iyear`, `isubject`, `imarks`, `icollege`, `iuniversity`, `hyear`, `hsubject`, `hmarks`, `hcollege`, `huniversity`, `oyear`, `osubject`, `omarks`, `ocollege`, `ouniversity`, `password`, `amount`, `image`, `sign`, `payment`, `otp`, `date`) VALUES
(1, 'xavier', '2020-01-28', 'Male', 'qqq', 'qqqqqqqqqqqqqqqqqqqqqqqqqq', 'Unmarried', 'SC/ST', 'udai456@gmail.com', 'qssss', 'ddddddddddddddddd', 'sssssssssssss', 'ssssssssss', 'sssssssssss', 'sssssssssssss', 'sssssssssssss', 'ssssssssss', 'sssssssssss', 'sssssssssssss', 'ssssssss', 'ssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'CDS', 's', 'sssssssss', 'dddddddddd', 'sssssssssss', 'ssssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'sssssssssssssss', 'sssssssssssss', 'sssssssss', 'ssssssssss', 'sssssssssss', 'sssssssssss', 'ssssssssss', 'sssssssssssss', 'ddddddddddd', 'ssssssssssss', 'ssssssssssssss', 'sssssssssssss', 'sssssssssss', 'ssssssssss', 'ssssssssss', 'ssssssssssss', 'ssssssssss', 'sssssssssssss', '111', '', 'WhatsApp Image 2019-11-18 at 4.04.14 PM.jpeg', 'WhatsApp Image 2019-11-18 at 4.04.14 PM.jpeg', NULL, NULL, '2020-02-20'),
(3, 'xavier1', '2020-02-01', 'Male', 'qqq', '11', 'Married', 'SC/ST', 'udai456@gmail.com', 'qssss', 'ddddddddddddddddd', 'sssssssssssss', 'ssssssssss', 'dddddddddddd', 'sssssssssssss', 'sssssssssssss', 'ssssssssss', 'dddddddddddd', 'sssssssssssss', 'd', 'ssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'NDA + NA', 's', 'sssssssss', 'dddddddddd', 'ddddddddddddd', 'ssssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'sssssssssssssss', 'sssssssssssss', 'sssssssss', 'ssssssssss', 'sssssssssss', 'dddddddddd', 'ssssssssss', 'sssssssssssss', 'ddddddddddd', 'ssssssssssss', 'ssssssssssssss', 'ddddddddddd', 'sssssssssss', 'ssssssssss', 'ssssssssss', 'ssssssssssss', 'ssssssssss', 'sssssssssssss', '', '', 'WhatsApp Image 2019-11-18 at 4.04.14 PM.jpeg', '', NULL, '221145', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nda` varchar(255) NOT NULL,
  `na` varchar(255) NOT NULL,
  `afcat` varchar(255) NOT NULL,
  `cds` varchar(255) NOT NULL,
  `navy` varchar(255) NOT NULL,
  `ssb` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `nda`, `na`, `afcat`, `cds`, `navy`, `ssb`) VALUES
(1, '200', '100', '121', '142', '165', '111');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `description`, `date`) VALUES
(1, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(2, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(3, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(4, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(5, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(6, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22'),
(7, 'xavier', 'a.png', 'I owe my success to faculties at Aakash who always motivated me during my preparation. They provided me with all the basic and advanced concepts. The study material and tests like AIATS helped me check my preparation level.', '2020-02-22');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
