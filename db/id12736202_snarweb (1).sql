-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2020 at 05:13 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `phone`, `type`) VALUES
(1, 'xavier', 'udai456@gmail.com', '123', '111', '1'),
(2, 'anuj', 'anuj@gmail.com', 'anuj', '123456789', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE `ans` (
  `id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`id`, `test_name`, `quesNo`, `rightAns`, `ans`) VALUES
(1, 'test01', 1, 0, 'cbnbnnbmn'),
(2, 'test01', 1, 1, 'dghjhbmn'),
(3, 'test01', 1, 0, 'cvnbm'),
(4, 'test01', 1, 0, 'dfvjhbm'),
(5, 'test01', 2, 0, 'cvhgvnbnmb'),
(6, 'test01', 2, 0, 'jhbmnn'),
(7, 'test01', 2, 1, 'jhbnbj'),
(8, 'test01', 2, 0, 'vjhknhbb'),
(9, 'test1', 1, 0, '44'),
(10, 'test1', 1, 0, '4'),
(11, 'test1', 1, 0, '5'),
(12, 'test1', 1, 1, '66'),
(13, 'test1', 1, 0, '44'),
(14, 'test1', 1, 0, '4'),
(15, 'test1', 1, 0, '5'),
(16, 'test1', 1, 1, '66'),
(17, 'test1', 1, 0, '44'),
(18, 'test1', 1, 0, '4'),
(19, 'test1', 1, 0, '5'),
(20, 'test1', 1, 1, '66');

-- --------------------------------------------------------

--
-- Table structure for table `carousal`
--

CREATE TABLE `carousal` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `email`, `mobile`, `class`, `city`, `date`) VALUES
(1, 'udai', 'udai456@gmail.com', '8799009009', 'mca', 'kanpur', '2020/02/19'),
(3, 'arun shukla', 'arun@gmail.com', '9336225520', '12', 'kanpur', '2020-03-05'),
(4, 'arun shukla', 'arun@gmail.com', '9336225520', '12', 'kanpur', '2020-03-05'),
(5, 'arun shukla', 'arun@gmail.com', '9336225520', '12', 'kanpur', '2020-03-05'),
(6, 'arun shukla', 'arun@gmail.com', '9336225520', '12', 'kanpur', '2020-03-05'),
(7, 'arun shukla', 'arun@gmail.com', '9336225520', '12', 'kanpur', '2020-03-05'),
(8, 'x', 'x@c.c', '123', 'd', 'c', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `link` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL,
  `quesno` int(11) NOT NULL,
  `ques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `test_name`, `quesno`, `ques`) VALUES
(1, 'test01', 1, 'gffhgfhgf'),
(2, 'test01', 2, 'chgvvh'),
(3, 'test1', 1, '2223'),
(4, 'test1', 1, '2223'),
(5, 'test1', 1, '2223');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
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
  `address` longtext DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `address1` longtext DEFAULT NULL,
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
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `dob`, `gender`, `country`, `smobile`, `marital`, `category`, `email`, `fname`, `aadhar`, `address`, `district`, `state`, `pincode`, `address1`, `district1`, `state1`, `pincode1`, `height`, `weight`, `mark`, `pmobile`, `course`, `pgyear`, `pgsubject`, `pgmarks`, `pgcollege`, `pguniversity`, `gyear`, `gsubject`, `gmarks`, `gcollege`, `guniversity`, `iyear`, `isubject`, `imarks`, `icollege`, `iuniversity`, `hyear`, `hsubject`, `hmarks`, `hcollege`, `huniversity`, `oyear`, `osubject`, `omarks`, `ocollege`, `ouniversity`, `password`, `amount`, `image`, `sign`, `payment`, `otp`, `date`) VALUES
(3, 'xavier1', '2020-02-01', 'Male', 'qqq', '11', 'Married', 'SC/ST', 'udai456@gmail.com', 'qssss', 'ddddddddddddddddd', 'sssssssssssss', 'ssssssssss', 'dddddddddddd', 'sssssssssssss', 'sssssssssssss', 'ssssssssss', 'dddddddddddd', 'sssssssssssss', 'd', 'ssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'NDA + NA', 's', 'sssssssss', 'dddddddddd', 'ddddddddddddd', 'ssssssssssssss', 'sssssssssssss', 'dddddddddddddd', 'sssssssssssssss', 'sssssssssssss', 'sssssssss', 'ssssssssss', 'sssssssssss', 'dddddddddd', 'ssssssssss', 'sssssssssssss', 'ddddddddddd', 'ssssssssssss', 'ssssssssssssss', 'ddddddddddd', 'sssssssssss', 'ssssssssss', 'ssssssssss', 'ssssssssssss', 'ssssssssss', 'sssssssssssss', '', '', 'WhatsApp Image 2019-11-18 at 4.04.14 PM.jpeg', '', NULL, '221145', '2020-02-20'),
(4, 'arun', '2017-12-31', 'Male', 'india', '9122334455', 'Unmarried', 'General', 'arun@gmail.com', 's m shukla', '23542562356', 'k block kidwai nagar ', 'kapur', 'uttar pradesh', '208011', 'k block kidwai nagar ', 'kapur', 'uttar pradesh', '208011', '170', '68', 'cut mark', '9122445522', 'NDA + NA', '2018', 'phy', '66', 'ppn degree', 'kanpur university', '2016', 'phy chem maths', '65', 'ppn degree', 'kanpur university', '2013', 'phy chem mths eng hindi', '62', 'st thomas', 'icse', '2011', 'phy chem mths eng hindi', '66', 'st thomas', 'icse', '', '', '', '', '', '2122', '1200', 'LMA Sticker.png', 'PDFCreator.exe', NULL, '848010', '2020-03-05'),
(5, 'abc', '1998-12-06', 'Male', 'India', '08989898989', 'Unmarried', 'OBC', 'anujarya@gmail.com', 'abc', '688787878787878', 'saharanpur', 'saharanpur', 'uttar pradesh', '247001', 'saharanpur', 'saharanpur', 'uttar pradesh', '247001', '6', '78', 'dsdklfj', '08989898989', 'AFCAT', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2014', 'asdf', '87', 'adsf', 'asdf', '', '', '', '', '', 'anuj', '1200', 'logo.png', 'admin.jpg', NULL, '989870', '2020-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `nda` varchar(255) NOT NULL,
  `na` varchar(255) NOT NULL,
  `afcat` varchar(255) NOT NULL,
  `cds` varchar(255) NOT NULL,
  `navy` varchar(255) NOT NULL,
  `ssb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `nda`, `na`, `afcat`, `cds`, `navy`, `ssb`) VALUES
(1, '200', '100', '121', '142', '165', '111');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `test_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `test_name`) VALUES
(1, 'test01'),
(2, 'test02'),
(3, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `image`, `description`, `date`) VALUES
(6, 'Anand S. Awasthi ', '1584422214.jpg', 'â€œ La militaire academy\'s Dr. Arun kumar Shukla sir ( bhaiya ) holds a great place in my heart , from the days of my career perusal, as  a guide , as a friend and as a mentor he did his needful to direct me discover my potentials and now when La Militaire Academy completes three decades I express my heartfelt gratitude to him and the patrons Col. K.K. Singh sir and Col. S.M.Shukla sir too .I congratulate them for guiding many success stories and I wish them great success in times ahead.', '2020-02-22'),
(8, 'Ashish Tiwari', '1584424773.jpg', 'â€œ La militaire Academyâ€™s mentor & Faculty captain ,Dr Arun Kumar Shukla sir gave me an insight into not only to the test procedures but also how aptly I must let my expressions flow in the interview. I completely agree to what he often says - â€œ We all have it all ( qualities ) yet fail to express it all .â€- these words and his encouraging company helped me to express my stored potential ( abilities ) and the almighty god blessed me to become an officer in the coast guards â€œ', '2020-03-17'),
(9, 'Harshit Chahar', '1584426502.jpg', 'â€œ I vividly remember my interaction with La militaire Academyâ€™s Faculty captain, Dr. Arun Kumar Shukla as an eye opener , as I was clouded with illusions thanks to many but the interaction with him opened my mind & confidence in my self as I discovered that I was myself complete & all I had to do ,was to honestly express what I felt . I recommend his classes to many as he guides with simple examples & rejuvenates self confidence which is the basis of the selection.For the thirty years of completion â€œCongratulations to the La militaire Academyâ€™s team .â€', '2020-03-17'),
(10, 'Prashant Tiwari', '1584428458.jpg', 'â€œ I congratulate La militaire Academy for completion of successful thirty years & respected Faculty captain , Dr. Arun kumar Shukla sir for personally guiding candidates to success.I also had the privilege & found the exchanges encouraging.The mentoring classes helped us to evolve ourselves to a complete personality as theâ€“â€œone to oneâ€-focus helped us to unchain our officer like qualities. â€œ', '2020-03-17'),
(11, 'Gaurav Singh ', '1584428538.jpg', 'â€œI take this opportunity to thank La Militaire Academy & itâ€™s Faculty Captain, Dr . Arun Sir for giving those personal sessions & group classes & guide me to be selected as an officer & my elder brother who too was a student of the academy . Three decades of academic history reflects consistent efforts by the entire team under the guardianship of the ex-officers- Congratulations - La militaire Academy .â€œ', '2020-03-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ans`
--
ALTER TABLE `ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousal`
--
ALTER TABLE `carousal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ans`
--
ALTER TABLE `ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `carousal`
--
ALTER TABLE `carousal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
