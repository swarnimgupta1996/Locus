-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2017 at 07:23 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `locusdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `address` varchar(3000) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(20) NOT NULL,
  `lat` double NOT NULL,
  `lng` double NOT NULL,
  `category` varchar(30) NOT NULL,
  `thumbnail` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `description`, `address`, `phone`, `lat`, `lng`, `category`, `thumbnail`) VALUES
(1, 'Ciclo Cafe', 'Opening Hours : 11 am to 11 pm.\r\nTable booking recommended.\r\nHome Delivery available.\r\n\r\n', '47, Gandhi Mandapam Road, Kotturpuram, Chennai', '0443085380', 0, 0, 'c', 'assets/images/foodpics/cafe/ciclo/ciclocafecover.png'),
(2, 'Sandy''s chocolate laboratory', 'OPening hours 8am to.......................................................................', '2/15, Ganapathy Colony, 2nd Main Road, Near Mainland China, Cenotaph Road, Teynampet, Chennai', '044 42303853', 0, 0, 'd', 'assets/images/foodpics/desserts/sandys/sandyscover.png'),
(3, 'The ThickShake Factory', 'opening hours:11 AM to 12 Midnight\r\nIt''s Vegetarian Only\r\n', 'Shop 3, Old 28, New 10, Khader Nawaz Khan Road, Thousand Lights West, Nungambakkam, Chennai', '044 30853524', 0, 0, 'b', 'assets/images/foodpics/beverages/thickshakes/thickshakescover.png'),
(4, 'Chili''s', 'Known For:Signature Margaritas, American portions and music\r\nOpening Hours:  12 Noon to 11 PM\r\n', '49 & 50 L, Express Avenue Mall, White''s Road, Royapettah, Chennai', '044 30853672', 0, 0, 'r', 'assets/images/foodpics/restaurant/chili/chilicover.png'),
(5, 'Chai Nasta', '..', '..', '044 31234511', 0, 0, 'c', 'assets/images/foodpics/cafe/chainasta/chainastacover.png'),
(6, 'kiplingcafe', '..', '..', '044 30853610', 0, 0, 'c', 'assets/images/foodpics/cafe/kiplingcafe/kiplingcafecover.png'),
(7, 'Writer''s Cafe', '..', '..', '044 48611604', 0, 0, 'c', 'assets/images/foodpics/cafe/writers/writerscafecover.png'),
(8, 'Crisp Cafe', 'Opening Hours:10 AM to 10 PM\r\n..', '...', '044 30205586', 0, 0, 'c', 'assets/images/foodpics/cafe/crisp/crispcafecover.png'),
(9, 'Club House - Taj Club House', 'Opening hours : 24 hours Featured in Collection\r\nLuxury dining', 'Taj Club House Hotel, 2, Club House Road, Anna Salai, Thousand Lights, Chennai', '044 30925995', 0, 0, 'r', 'assets/images/foodpics/restaurant/tajclubhouse/tajclubhousecover.png'),
(10, 'Southern Spice - Taj Coromandel', 'Wheelchair Accessible\r\nFull Bar Available\r\nValet Parking Available\r\nLuxury Dining', 'Taj Coromandel, 37, Mahatma Gandhi Road, Nungambakkam, Chennai', '044 66002827', 0, 0, 'r', 'assets/images/foodpics/restaurant/tajcoromandal/tajcoromandalcover.png'),
(11, 'Basil With A Twist', 'Opening hours:12 Noon to 11 PM (Mon-Fri),11 AM to 11 PM (Sat-Sun)', '58-A, Habibullah Road, T. Nagar, Chennai', '044 30257954', 0, 0, 'c', 'assets/images/foodpics/cafe/basilwithatwist/basilwithatwistcover.png'),
(12, 'Double Roti', 'Opening hours: 12:30 PM to 10:30 PM\r\nknown for Burger and quick bites', '4/27, Cenotaph, 1st Street, Teynampet, Chennai', '044 30853732', 0, 0, 'c', 'assets/images/foodpics/cafe/doubleroti/doubleroticover.png'),
(13, 'Pantry D''or', 'Opening hours: 10 AM to 11 PM\r\nPrivate dining area Available', '21/11, J Block, 6th Avenue Main Road, Anna Nagar East, Chennai', '044 30257980', 0, 0, 'c', 'assets/images/foodpics/cafe/pantryd''or/pantryd''orcover.png'),
(14, 'Amethyst Cafe', 'Opening hours: 10 AM to 11:30 PM\r\nOutdoor seating', 'Whites Road, Next To Corporation Bank, Royapettah, Chennai', '044 45991634', 0, 0, 'c', 'assets/images/foodpics/cafe/amethyst/amethystcover.png'),
(15, 'Cleo''s Grill & Cafe ', 'Opening hours:12 Noon to 3:30 PM, 6:30 PM to 11 PM', '115, 4th Avenue, Indra Nagar, Adyar, Chennai', '044 30853769', 0, 0, 'c', 'assets/images/foodpics/cafe/cleo/cleocover.png'),
(16, 'The Good Spot', 'Opening hours 11 AM to 11 PM\r\nLive Music\r\nFree Parking\r\nOutdoor Seating\r\nSmoking Area', '3A, Second Main Road, Kasturibai Nagar, Adyar, Chennai', '044 33011436', 0, 0, 'c', 'assets/images/foodpics/cafe/goodspot/goodspotcover.png'),
(17, 'The Chef''s Story', 'Opening hours:12 Noon to 11 PM\r\nVegetarian Friendly', '23/5, Alagappa Road, Near Ewart School, Purasavakkam, Chennai', '044 43042111', 0, 0, 'c', 'assets/images/foodpics/cafe/chefstory/chefstorycover.png'),
(18, 'That Madras Place', 'Opening hours 12 Noon to 9:30 PM\r\nHome Delivery\r\nWheelchair Accessible\r\nSmoking Area\r\nWifi', '34/29, 2nd Main Road, Kasturibai Nagar, Adyar, Chennai', '044 30853819', 0, 0, 'r', 'assets/images/foodpics/restaurant/thatmadrasplace/thatmadrasplacecover.png'),
(19, 'AB''s - Absolute Barbecues', 'Opening hours 12 Noon to 2:45 PM, 6:30 PM to 10 PM\r\nServes Non Veg\r\nValet Parking Available\r\nBuffet', '45, GN Chetty Road, T. Nagar, Chennai', '044 33720501', 0, 0, 'r', 'assets/images/foodpics/restaurant/absolutebarbecues/absolutebarbecuescover.png'),
(20, 'Haunted ', 'Opening hours: Today  12 Noon to 3:30 PM, 6:30 PM to 2 AM\r\nHome Delivery\r\nServes Non Veg\r\nOutdoor Seating\r\nKid Friendly\r\nBuffet\r\nValet Parking Available\r\nSmoking Area\r\n', '273, F13, New Number 71, 2nd Main Road, Anna Nagar East, Chennai', '044 33011452', 0, 0, 'r', 'assets/images/foodpics/restaurant/haunted/hauntedcover.png'),
(21, 'Sigree', 'Opening hours: 12:15 PM to 3 PM, 7:15 PM to 11 PM\r\nHome Delivery\r\nValet Parking Available\r\nBuffet', '15, 1st Floor, Sardar Patel Road, Near Ramkay TVS Showroom, Adyar, Chennai', '044 24412442', 0, 0, 'r', 'assets/images/foodpics/restaurant/sigree/sigreecover.png'),
(22, 'Cream Centre', 'Opening hours- 11 AM to 3 PM, 7 PM to 11 PM\r\nVegetarian Friendly', '55, 2nd Main Road, Between Kaliappa Hospital and Park Sheraton, RA Puram, Chennai', '044 42815777', 0, 0, 'r', 'assets/images/foodpics/restaurant/cream/creamcover.png'),
(23, 'Palm Shore', 'Opening hours: 11:30 AM to 11:30 PM\r\nHome Delivery\r\nServes Halal  \r\nOutdoor Seating\r\nValet Parking Available\r\n', '111/108, Santhome High Road, Foreshore Estate, Santhome, Chennai', ' 044 30853577', 0, 0, 'r', 'assets/images/foodpics/restaurant/palm/palmcover.png'),
(24, 'JalPaan', 'Opening hours: 12 Noon to 3 PM, 7 PM to 10:30 PM\r\nVegetarian Only\r\nWifi\r\nBuffet\r\nServes Jain Food\r\n\r\n', '17/18, Sardar Patel Road, Above GRT Jewellery, Adyar, Chennai', '044 33011518', 0, 0, 'r', 'assets/images/foodpics/restaurant/jalpaan/jalpaancover.png'),
(25, 'Hamsa', '\r\nOpening hours: 12 Noon to 3 PM, 7 PM to 11 PM\r\nWheelchair Accessible\r\nVegetarian Only\r\nValet Parking Available\r\nVegetarian Friendly\r\nBuffet\r\nFree Parking\r\nPrivate Dining Area Available\r\nServes Jain Food', 'New No. 40, Old No. 71A, B. Ramachandra Adithanar Road, 4th Main Road, Gandhi Nagar, Adyar, Chennai', '044 30853831', 0, 0, 'r', 'assets/images/foodpics/restaurant/hamsa/hamsacover.png'),
(26, 'Little Italy', 'Opening hours :11:30 AM to 3 PM, 6:30 PM to 11 PM\r\nHome Delivery\r\nWheelchair Accessible\r\nVegetarian Only\r\nValet Parking\r\nServes Jain Food\r\nOutdoor Seating\r\nBuffet', 'E-50, 17th Cross Street, Near Spencers Daily, Besant Nagar, Chennai', '044 30853624', 0, 0, 'r', 'assets/images/foodpics/restaurant/li/licover.png'),
(27, 'Molten Delight', 'Opening Hours :  10 AM to 11 PM', '64, Pillaiyar Koil Street, SRM Back Gate, Potheri, Chennai', '9543055544', 0, 0, 'd', 'assets/images/foodpics/desserts/moltendelight.png'),
(28, 'illusions', '..', '105, 1st Floor, Dr. Radhakrishnan Salai, Mylapore, Chennai', '+91 9884498806', 0, 0, 'b', 'assets/images/foodpics/beverages/illusions.png'),
(29, 'The Flying Elephant', ',', 'Park Hyatt, 39, Velachery Road, Guindy, Chennai', '044 71771655', 0, 0, 'b', 'assets/images/foodpics/beverages/flyingelephant.png'),
(30, 'Big Bang Theory', '..', 'Brown Star Boutique Hotel, 2/25, Dr. Ambedkar Road, Kodambakkam, Chennai', '044 33011422', 0, 0, 'b', '	\r\nassets/images/foodpics/beverages/bbt.png'),
(31, 'Juice World', 's', '2, Deju Plaza, G4, South Avenue Srinagar Colony, Saidapet, Chennai', '+91 9941545454', 0, 0, 'b', 'assets/images/foodpics/beverages/juiceworld.png'),
(32, 'Evoke Bistro', '.', '5/360, 2nd Floor, Rajiv Gandhi Salai, OMR, Okkiyam, Thuraipakkam, Chennai', '044 30205603', 0, 0, 'b', 'assets/images/foodpics/beverages/bistro.png'),
(33, 'The French Loaf ', ',', '12/13, Spm Complex, Anna Street, Potheri, Chennai', '044 37410000', 0, 0, 'd', 'assets/images/foodpics/desserts/frenchloaf.png'),
(34, 'Cream Stone', '.', '253, Next to Narada Ghana Sabha, TTK Road, Alwarpet, Chennai', '044 30205510', 0, 0, 'd', 'assets/images/foodpics/desserts/creamstone.png'),
(35, 'Kulfi House', '..', 'K-26, 1st Avenue, Near United Brother Laminations, Anna Nagar East, Chennai', '044 30205504', 0, 0, 'd', 'assets/images/foodpics/desserts/kulfihouse.png'),
(36, 'The Cupcake Company', '..', '187, St Mary''s Road, Alwarpet, Chennai', '+91 9176808806', 0, 0, '', 'assets/images/foodpics/desserts/cc.png'),
(37, 'Ibaco', '', '249, RK Mutt Road, Mandaveli, Chennai', '18004253355', 0, 0, 'd', 'assets/images/foodpics/desserts/ibaco.png'),
(38, 'Mom''s Dining', '.', '61, Pillayar Koil Street, SRM Back Gate, Potheri, Kanchipuram District, Chennai', '+91 9952949230', 0, 0, 'r', 'assets/images/foodpics/restaurant/momsdining.png'),
(39, 'Cafe De Paris', '.', '24, Cenotaph Road, Opposite Lanson Toyota, Teynampet, Chennai', '044 33011692', 0, 0, 'd', 'assets/images/foodpics/desserts/cafedeparis.png'),
(40, 'Delhi-6', '...', 'PIllaiyar Koil Street, SRM Back Gate, Potheri, Kanchipuram District, Chennai', '+91 9940524515', 0, 0, 'r', 'assets/images/foodpics/restaurant/delhi6.png'),
(41, '196 Degree Below', '', '14, Ananda Road, Alwarpet, Chennai', '044 30205625', 0, 0, 'b', 'assets/images/foodpics/beverages/196deg.png'),
(42, 'Hoppipola', '', 'The Spring Hotel, Kodambakkam High Road, Nungambakkam, Chennai', '044 33011638', 0, 0, 'd', 'assets/images/foodpics/beverages/hoppipola.png'),
(43, 'CK''s Bakery', '', '145, Eldams Road, Teynampet, Chennai', '+91 7823948883', 0, 0, 'b', 'assets/images/foodpics/desserts/cksbakery.png');

-- --------------------------------------------------------

--
-- Table structure for table `food_photos`
--

CREATE TABLE IF NOT EXISTS `food_photos` (
  `id` int(11) NOT NULL,
  `food_id` int(100) NOT NULL,
  `purpose` varchar(10) NOT NULL,
  `url` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_photos`
--

INSERT INTO `food_photos` (`id`, `food_id`, `purpose`, `url`) VALUES
(1, 1, 'cover', 'assets/images/ciclocafecover.png'),
(2, 2, 'cover', 'assets/images/sandyscover.png'),
(6, 3, 'cover', 'assets/images/thickshakescover.png'),
(7, 4, 'cover', 'assets/images/chilicover.png'),
(8, 5, 'cover', 'assets/images/chainasta.png'),
(9, 6, 'cover', 'assets/images/kiplingcafe.png'),
(10, 7, 'cover', 'assets/images/writerscafe.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(35) CHARACTER SET utf8 NOT NULL,
  `password` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `city` varchar(20) NOT NULL,
  `address` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `radius` int(3) NOT NULL,
  `lat` double(20,10) NOT NULL,
  `lng` double(20,10) NOT NULL,
  `location_set` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_no`, `city`, `address`, `radius`, `lat`, `lng`, `location_set`) VALUES
(1, 'tanya', 'swar@gmail.com', 'password', '8124860694', 'Chennai', 'srm underground water tank, Potheri, SRM Nagar, Kattankulathur, Tamil Nadu 603203, India', 0, 12.8226564000, 80.0445776000, 1),
(7, 'uttkarsh', 'utrocks010@gmail.com', 'abcdef', '8939662593', 'Delhi', 'New Delhi Railway Station Reservation Counter, Chelmsford Road, Paharganj, New Delhi, Delhi, India', 0, 28.6398068000, 77.2191158000, 1),
(9, 'aryan gupta', 'aryan@gmail.com', '123456', '8124860694', 'Chennai', 'SRM Nagar, Tamil Nadu 603203, India', 0, 12.8247334000, 80.0465067000, 1),
(10, 'papa Gupta', 'vijay@gmail.com', '123456', '9176225016', 'Delhi', 'Max Hospital (Devki Devi Foundation), Saket, New Delhi, Delhi, India', 0, 28.5283401000, 77.2120180000, 1),
(11, 'hari sharma', 'sharma@sharma.com', '123456', '8939662593', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(12, 'hhhhhhh', 'mimi@gmail.com', '123456', '8939662593', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(13, 'monica', 'monica@gmail.com', '123456', '8124860694', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(14, 'shreya sharma', 'shreya@gmail.com', '123456', '8124860694', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(15, 'archie gupta', 'archie@gmail.com', '123456', '8124860694', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(16, 'abhinav', 'abhinav@gmail.com', '12345678', '8124860694', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(17, 'devang', 'devang@gmial.com', '123456', '8124860694', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(18, 'Uttkarsh Gupta', 'spawn@gmail.com', 'mypass', '8939662593', 'Chennai', 'Jeppiaar Engineering College, Semmancheri, Chennai, Tamil Nadu, India', 5, 0.9999999999, 0.9999999999, 1),
(19, 'aryan', 'aru@gmail.com', '123456', '8124860694', 'Delhi', 'JW Marriott Hotel New Delhi Aerocity, New Delhi, Delhi, India', 0, 28.5525540000, 77.1212340000, 1),
(20, 'kumkum', 'kk@gmail.com', '123456', '8124860694', '', '', 0, 0.0000000000, 0.0000000000, 0),
(21, 'ayushi', 'ayu@gmail.com', '123456', '8124860694', 'Chennai', 'Apollo Hospital, Chennai, Tamil Nadu, India', 3, 13.0705547000, 80.1505883000, 1),
(22, 'abhinav', 'aaa@gmail.com', '123456', '8124860694', '', '', 0, 0.0000000000, 0.0000000000, 0),
(23, 'swarnim Gupta', 'swarnim.g96@gmail.com', '123456', '8124860694', 'Chennai', 'SRM University, SRM Nagar, Tamil Nadu, India', 0, 12.8235241000, 80.0423581000, 1),
(24, 'Devang', 'upadhyaydevang004@gmail.com', 'dev@@@@hrr', '9003756008', '', '', 0, 0.0000000000, 0.0000000000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_photos`
--
ALTER TABLE `food_photos`
  ADD PRIMARY KEY (`id`), ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `food_photos`
--
ALTER TABLE `food_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_photos`
--
ALTER TABLE `food_photos`
ADD CONSTRAINT `const` FOREIGN KEY (`food_id`) REFERENCES `food` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
