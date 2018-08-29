-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 05:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christmasdraw`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminid`, `adminname`, `password`) VALUES
(1, 'admin', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(50) NOT NULL,
  `categoryname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Luxury Hamper'),
(2, 'Essential Hamper'),
(3, 'Childrens Hamper'),
(4, 'Pamper Hamper');

-- --------------------------------------------------------

--
-- Table structure for table `hamper`
--

CREATE TABLE `hamper` (
  `hamperid` int(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `hampertype` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `categoryid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hamper`
--

INSERT INTO `hamper` (`hamperid`, `image`, `hampertype`, `description`, `categoryid`) VALUES
(1, 'images/luxury_hamper.jpeg', 'Luxury Christmas Hamper', 'A luxury hamper including wines & chocolates', 1),
(2, 'images/essential_hamper.jpeg', 'Essential Christmas Hamper', 'A hamper with all your larder favourites', 2),
(3, 'images/childrens_hamper.jpeg', 'Children\'s Christmas Eve Hamper', 'A treat for the kids for Christmas Eve', 3),
(4, 'images/pamper_hamper.jpeg', 'Pamper Hamper', 'A treat for the adults with all these goodies', 4);

-- --------------------------------------------------------

--
-- Table structure for table `hamperitem`
--

CREATE TABLE `hamperitem` (
  `hamperid` int(10) NOT NULL,
  `Itemid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hamperitem`
--

INSERT INTO `hamperitem` (`hamperid`, `Itemid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 23),
(1, 45),
(1, 56),
(1, 63),
(1, 64),
(1, 65),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 23),
(1, 45),
(1, 56),
(1, 63),
(1, 64),
(1, 65),
(2, 16),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 31),
(2, 32),
(2, 33),
(2, 34),
(2, 35),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 3),
(2, 8),
(3, 51),
(3, 52),
(3, 53),
(3, 54),
(3, 55),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 14),
(4, 61),
(4, 62),
(2, 36),
(2, 37),
(2, 38),
(2, 39),
(2, 40),
(2, 41),
(2, 42),
(2, 43),
(2, 44),
(2, 46),
(2, 47),
(2, 48),
(2, 49),
(2, 50),
(2, 3),
(2, 8),
(3, 51),
(3, 52),
(3, 53),
(3, 54),
(3, 55),
(3, 57),
(3, 58),
(3, 59),
(3, 60),
(3, 14),
(4, 61),
(4, 62);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `itemid` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `itemdescription` text NOT NULL,
  `categoryid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`itemid`, `image`, `itemdescription`, `categoryid`) VALUES
(1, 'images/christmas_cake.jpg', 'Iced Christmas Cake', 1),
(2, 'images/shloer.jpg', 'Bottle Shloer', 1),
(4, 'images/christmas_cracker.jpg', 'Luxury Christmas Crackers', 1),
(5, 'images/crisps.jpg', 'Fancy Crisps', 1),
(6, 'images/peanuts.jpg', 'Peanuts', 1),
(7, '', 'Chutney\'s', 1),
(8, 'images/cranberry_sauce.jpg', 'Cranberry Sauce', 1),
(9, 'images/luxury_chocolate.jpg', 'Luxury Chocolates', 1),
(10, 'images/chocolate_santa.jpg', 'Chocolate Santa', 1),
(11, 'images/chocolate_santa.jpg', 'Chocolate Snowman', 1),
(12, '', 'Box Biscuits', 1),
(13, 'images/christmas_napkin.jpg', 'Christmas Napkins', 1),
(14, '', 'Selection Box', 1),
(15, 'images/candle.jpg', 'Candle', 1),
(16, 'images/teabags.jpg', 'Box Teabags', 2),
(17, 'images/coffee.jpg', 'Jar Coffee', 2),
(18, '', 'Stuffing Mix', 2),
(19, 'images/jam.jpg', 'Jar Jam', 2),
(20, '', 'Tin Fruit', 2),
(21, '', 'Trifle Sponges', 2),
(22, '', 'Flan Case', 2),
(23, '', 'Tin Sweets', 1),
(24, 'images/crisps.jpg', 'Crisps', 2),
(25, '', 'Dips', 2),
(26, '', 'Mustard', 2),
(27, 'images/red_sauce.jpg', 'Red Sauce', 2),
(28, '', 'Brown Sauce', 2),
(29, '', 'Mayonnaise', 2),
(30, '', 'Jar Mixed herbs', 2),
(31, 'images/salt.jpg', 'Salt', 2),
(32, 'images/pepper.jpg', 'Pepper', 2),
(33, '', 'Tin Foil', 2),
(34, 'images/shortbread.jpg', 'Box Shortbread', 1),
(35, '', 'Cling Film', 2),
(36, '', 'Greaseproof Paper', 2),
(37, '', 'Bird\'s Trifle', 2),
(38, '', 'Bottle Mineral', 2),
(39, '', 'Custard', 2),
(40, '', 'Jelly', 2),
(41, '', 'Peas', 2),
(42, '', 'Beans', 2),
(43, '', 'Sugar', 2),
(44, '', 'Spaghetti', 2),
(45, '', 'Christmas Pudding', 1),
(46, '', 'Dry Soup Mix', 2),
(47, 'images//soup.jpg', 'Soup', 2),
(48, '', 'Bisto', 2),
(49, '', 'Tins Rice', 2),
(50, '', 'Vinegar', 2),
(51, 'images/hot_chocolate.jpg', 'Hot Chocolate', 3),
(52, 'images/marshmallow.jpg', 'Marshmallows', 3),
(53, 'images/santas_cup.jpg', 'Tube Sweets', 3),
(54, 'images/santas_cup.jpg', 'Santa\'s Milk Cup', 3),
(55, 'images/santa\'scup&plate.jpg', 'Santa\'s Cookie Plate', 3),
(56, 'images/red_wine.jpg', 'Red Wine', 1),
(57, '', 'Reindeer Food', 3),
(58, '', 'Colouring Book', 3),
(59, 'images/crayons.jpg', 'Crayons', 3),
(60, '', 'Christmas DVD', 3),
(61, 'images/aftershave.jpg', 'Mans gift set', 4),
(62, 'images/perfume.jpg', 'Womans Gift Set', 4),
(63, 'images/white_wine.jpg', 'White Wine', 1),
(64, 'images/rose_wine.jpg', 'Rose Wine', 1),
(65, 'images/sparkling_wine.jpg', 'Sparkling Wine', 1),
(66, 'images/mince_pies.jpg', 'Mince pies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pledger`
--

CREATE TABLE `pledger` (
  `pledgerid` int(50) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phoneno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledger`
--

INSERT INTO `pledger` (`pledgerid`, `firstname`, `lastname`, `email`, `phoneno`) VALUES
(1, 'Anne-Marie', 'Foy', 'annemariefoy1974@gmail.com', 879975707),
(2, 'test', 'test', 'test@gmail.com', 875931564),
(3, 'test1', 'test1', 'test1@gmail.com', 861931681),
(4, 'test4', 'test4', 'test4@gmail.com', 853216549),
(5, 'test5', 'test5', 'test5@gmail.com', 876325992),
(7, 'slash', 'hudson', 'snakepit@gmail.com', 873246943),
(8, 'test 6', 'test', 'test6@gmail.com', 0),
(9, 'Paul ', 'Doherty', 'paul.doherty@optum.com', 749115039),
(10, 'a', 'b', 'c@gmail.com', 842635463),
(11, 'a', 'b', 'c@gmail.com', 842635463),
(12, 'a', 'b', 'c@gmail.com', 842635463);

-- --------------------------------------------------------

--
-- Table structure for table `quantity`
--

CREATE TABLE `quantity` (
  `pledgeditemid` int(50) NOT NULL,
  `hamperid` int(50) NOT NULL,
  `Itemid` int(10) NOT NULL,
  `pledgerid` int(50) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `author_email` varchar(100) NOT NULL,
  `author_name` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('pending','planned','','') NOT NULL DEFAULT 'pending',
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `author_email`, `author_name`, `content`, `created_at`, `status`, `title`) VALUES
(1, 'amf@gmail.com', 'anne-amir', 'f v vlvnps gel vls glsv  lsvwlv s, ldg wlb dslb w,b slb wlgsl', '2018-08-07 15:17:35', 'planned', 'nwlgbwolgbv ls '),
(2, 'amf@gmail.com', 'sf gnwgnv;mleg#', 'c cmfsv wmnpv; lgWG LSVN LWT MT SLMGEl glslk', '2018-08-07 15:18:42', 'planned', 'mfmwofnl f'),
(4, 'md@gmail.com', 'mdmsn ', 'fmmpwnf f ofnolw lfw lw ', '2018-08-19 19:58:03', 'pending', 'hfdbw f'),
(5, 'paul.doherty@optum.com', 'Paul Doherty', 'lkjsdfhsohfkwjfkwj', '2018-08-23 11:11:17', 'planned', 'kjhsfkj'),
(6, 'amf@gmail.com', 'amf', 'tjd of wog olwg ', '2018-08-26 19:45:18', 'pending', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `hamper`
--
ALTER TABLE `hamper`
  ADD PRIMARY KEY (`hamperid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `pledger`
--
ALTER TABLE `pledger`
  ADD PRIMARY KEY (`pledgerid`);

--
-- Indexes for table `quantity`
--
ALTER TABLE `quantity`
  ADD PRIMARY KEY (`pledgeditemid`),
  ADD KEY `hamperid` (`hamperid`),
  ADD KEY `Itemid` (`Itemid`),
  ADD KEY `pledgerid` (`pledgerid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hamper`
--
ALTER TABLE `hamper`
  MODIFY `hamperid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `pledger`
--
ALTER TABLE `pledger`
  MODIFY `pledgerid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quantity`
--
ALTER TABLE `quantity`
  MODIFY `pledgeditemid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `hamper` (`categoryid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
