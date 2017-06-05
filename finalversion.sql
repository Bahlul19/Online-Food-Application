-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 07:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `finalversion`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
`areaID` int(10) unsigned NOT NULL,
  `areaName` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaID`, `areaName`, `created_at`, `updated_at`) VALUES
(2, 'Subidbazar', '2017-03-21 04:28:16', '2017-03-21 04:28:16'),
(3, 'Noyashorok', '2017-03-21 04:28:16', '2017-03-21 04:28:16'),
(4, 'Kazitula', '2017-03-21 04:28:16', '2017-03-21 04:28:16'),
(5, 'Bondor Bazar', '2017-03-21 04:28:16', '2017-03-21 04:28:16'),
(6, 'Kumarpara', '2017-03-21 04:28:16', '2017-03-21 04:28:16'),
(7, 'Sheikghat', '2017-05-17 23:50:10', '2017-05-17 23:50:10'),
(8, 'Mirermoydan', '2017-05-18 09:42:53', '2017-05-18 09:42:53'),
(9, 'Tikorapara', '2017-05-18 10:06:00', '2017-05-18 10:06:00'),
(10, 'Zindabazar', '2017-05-19 02:12:12', '2017-05-19 02:12:12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
`customerID` int(10) unsigned NOT NULL,
  `customerName` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `customerEmail` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `customerNumber` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `customerAddress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `customerEmail`, `customerNumber`, `customerAddress`, `created_at`, `updated_at`) VALUES
(1, 'Nazmul Hossain', 'wall.mate@gmail.com', '01675870047', 'Zinda Bazar Sylhet', '2017-05-16 15:05:33', '2017-05-16 15:05:33'),
(2, 'Nazmul Hossain2', 'wall.mate@gmail.com', '01675870088', 'Zinda Bazar Sylhet', '2017-05-16 15:11:12', '2017-05-16 15:11:12'),
(3, 'Nazmul Hossain', 'wall.mate@gmail.com', '01675870047', 'Zinda Bazar Sylhet', '2017-05-16 15:19:01', '2017-05-16 15:19:01'),
(4, 'Tausif', 'tausif@gmail.com', '01731691994', 'Tikorpara', '2017-05-17 23:52:23', '2017-05-17 23:52:23'),
(5, 'Hello', 'hello@gmail.com', '123456789', 'shiekghat', '2017-05-17 23:54:05', '2017-05-17 23:54:05'),
(6, 'Tanzim', 'tanzmi@gmail.com', '01731691994', 'Amborkhana', '2017-05-18 02:31:53', '2017-05-18 02:31:53'),
(7, 'aaa', 'aaa@gmail.com', '0174', 'Ran', '2017-05-18 09:41:44', '2017-05-18 09:41:44'),
(8, 'aaaa', 'aaaa@gmail.com', '789632541', 'moyda', '2017-05-18 09:44:20', '2017-05-18 09:44:20'),
(9, 'aaa', 'aaaaa@gmail.com', '556555', 'wweee', '2017-05-18 10:03:28', '2017-05-18 10:03:28'),
(10, 'aaaass', 'aaa@gmail.com', '55225', 'fjefhhufvfhhifv', '2017-05-18 12:06:45', '2017-05-18 12:06:45'),
(11, 'Amma', 'amma@gmail.com', '01731621505', 'Tikorpara', '2017-05-18 12:08:38', '2017-05-18 12:08:38'),
(12, 'Fahmi', 'fahmi@gmail.com', '01705239677', 'Kororpara', '2017-05-19 02:03:59', '2017-05-19 02:03:59'),
(13, 'tuntun', 'tausif@gmail.com', '01731691994', 'subidbazar', '2017-05-19 02:09:36', '2017-05-19 02:09:36'),
(14, 'TAUAUIAIIS', 'JJS@gmail.com', '1233455555', 'aaaaaadue', '2017-05-19 02:14:48', '2017-05-19 02:14:48'),
(15, 'gggg', 'hhh@.com', '7889', 'hjkl', '2017-05-19 02:27:14', '2017-05-19 02:27:14'),
(16, 'tttt', 'tttt@gmail.com', '741258963', 'thdvijdnd', '2017-05-19 02:34:13', '2017-05-19 02:34:13'),
(17, 'Maruf', 'maruf@hotmail.com', '7896325410', 'Tilaghor', '2017-05-19 03:47:41', '2017-05-19 03:47:41'),
(18, 'jony', 'jony@gmail.com', '1234567890', 'vataliya', '2017-05-19 03:53:50', '2017-05-19 03:53:50'),
(19, 'Hello', 'hello@gmail.com', '122333', 'Tikorapara', '2017-05-19 03:56:31', '2017-05-19 03:56:31'),
(20, 'Bahlul', 'bahlul@hotmail.com', '852369741', 'Sheikghat', '2017-05-19 09:32:19', '2017-05-19 09:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `fooditem`
--

CREATE TABLE IF NOT EXISTS `fooditem` (
`foodItemID` int(10) unsigned NOT NULL,
  `foodName` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `foodDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `foodTag` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `restaurantID` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fooditem`
--

INSERT INTO `fooditem` (`foodItemID`, `foodName`, `foodDescription`, `price`, `foodTag`, `restaurantID`, `created_at`, `updated_at`) VALUES
(3, 'Naga Burger', 'Best burger in Sylhet', 100, 'burger', 2, '2017-05-17 23:51:02', '2017-05-17 23:51:02'),
(4, 'Moyda', 'Made with moyda', 80, 'moyda', 3, '2017-05-18 09:43:40', '2017-05-18 09:43:40'),
(5, 'Hash Korai', 'Home made food', 220, 'korai', 4, '2017-05-18 10:06:39', '2017-05-18 12:05:43'),
(6, 'Chicken Chowmin', 'Best in Sylhet', 80, 'chowmin', 5, '2017-05-19 02:13:50', '2017-05-19 09:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_03_11_043233_create_area_table', 1),
('2017_03_11_043523_create_restaurant_table', 1),
('2017_03_11_043709_create_foodItem_table', 1),
('2017_03_11_044129_create_customer_table', 1),
('2017_03_11_044204_create_order_table', 1),
('2017_03_11_044234_create_orderItem_table', 1),
('2017_03_11_044309_create_review_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`orderID` int(10) unsigned NOT NULL,
  `customerMessage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `orderStatus` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'pending',
  `payment` int(11) DEFAULT '0',
  `payment_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'On Delivery',
  `customerID` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderID`, `customerMessage`, `orderStatus`, `payment`, `payment_type`, `customerID`, `created_at`, `updated_at`) VALUES
(1, 'Well Food', 'Approve', 299, 'bikash', 1, '2017-05-16 15:05:33', '2017-05-16 16:16:54'),
(8, 'Mojar Khani oito', 'Approve', 200, 'bikash', 9, '2017-05-18 10:03:28', '2017-05-18 10:03:44'),
(9, 'dhhdhd', 'Cancel', 0, 'bikash', 10, '2017-05-18 12:06:45', '2017-05-19 11:10:43'),
(12, 'khani gorom takbe', 'Cancel', 0, 'cash', 13, '2017-05-19 02:09:36', '2017-05-19 11:11:01'),
(13, 'bahhaha', 'Approve', 0, 'cash', 14, '2017-05-19 02:14:49', '2017-05-19 02:15:09'),
(15, 'aassss', 'Cancel', 0, 'cash', 16, '2017-05-19 02:34:13', '2017-05-19 03:13:40'),
(16, 'sss', 'Approve', 0, 'bikash', 17, '2017-05-19 03:47:41', '2017-05-19 11:10:04'),
(18, 'Hello', 'pending', 0, 'bikash', 19, '2017-05-19 03:56:31', '2017-05-19 03:56:31'),
(19, 'Bala oito khani', 'pending', 0, 'bikash', 20, '2017-05-19 09:32:19', '2017-05-19 09:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `orderitem`
--

CREATE TABLE IF NOT EXISTS `orderitem` (
`orderItemID` int(10) unsigned NOT NULL,
  `foodItemID` int(10) unsigned NOT NULL,
  `orderID` int(10) unsigned NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `orderitem`
--

INSERT INTO `orderitem` (`orderItemID`, `foodItemID`, `orderID`, `quantity`, `created_at`, `updated_at`) VALUES
(11, 3, 8, 1, '2017-05-18 10:03:28', '2017-05-18 10:03:28'),
(12, 5, 9, 3, '2017-05-18 12:06:45', '2017-05-18 12:06:45'),
(20, 4, 12, 1, '2017-05-19 02:09:36', '2017-05-19 02:09:36'),
(21, 5, 12, 1, '2017-05-19 02:09:36', '2017-05-19 02:09:36'),
(22, 6, 13, 1, '2017-05-19 02:14:49', '2017-05-19 02:14:49'),
(24, 6, 15, 1, '2017-05-19 02:34:13', '2017-05-19 02:34:13'),
(25, 5, 16, 1, '2017-05-19 03:47:41', '2017-05-19 03:47:41'),
(26, 6, 16, 2, '2017-05-19 03:47:41', '2017-05-19 03:47:41'),
(28, 6, 18, 1, '2017-05-19 03:56:31', '2017-05-19 03:56:31'),
(29, 6, 19, 1, '2017-05-19 09:32:20', '2017-05-19 09:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE IF NOT EXISTS `restaurant` (
`restaurantID` int(10) unsigned NOT NULL,
  `restaurantName` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `areaID` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantID`, `restaurantName`, `areaID`, `created_at`, `updated_at`) VALUES
(2, 'Burger King', 7, '2017-05-17 23:50:26', '2017-05-17 23:50:26'),
(3, 'Chaku', 8, '2017-05-18 09:43:06', '2017-05-18 09:43:06'),
(4, 'Abacd', 9, '2017-05-18 10:06:11', '2017-05-18 10:06:11'),
(5, 'Food Launge', 10, '2017-05-19 02:12:32', '2017-05-19 02:12:32');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`reviewID` int(10) unsigned NOT NULL,
  `customerID` int(10) unsigned NOT NULL,
  `foodItemID` int(10) unsigned NOT NULL,
  `rating` int(11) NOT NULL DEFAULT '1',
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tamptable`
--

CREATE TABLE IF NOT EXISTS `tamptable` (
`tampID` int(11) NOT NULL,
  `foodItemID` int(11) NOT NULL,
  `foodName` varchar(160) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `price` double NOT NULL DEFAULT '0',
  `sessionUniq` varchar(160) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
 ADD PRIMARY KEY (`areaID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `fooditem`
--
ALTER TABLE `fooditem`
 ADD PRIMARY KEY (`foodItemID`), ADD KEY `fooditem_restaurantid_index` (`restaurantID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`orderID`), ADD KEY `order_customerid_index` (`customerID`);

--
-- Indexes for table `orderitem`
--
ALTER TABLE `orderitem`
 ADD PRIMARY KEY (`orderItemID`), ADD KEY `orderitem_fooditemid_index` (`foodItemID`), ADD KEY `orderitem_orderid_index` (`orderID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
 ADD PRIMARY KEY (`restaurantID`), ADD KEY `restaurant_areaid_index` (`areaID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`reviewID`), ADD KEY `review_customerid_index` (`customerID`), ADD KEY `review_fooditemid_index` (`foodItemID`);

--
-- Indexes for table `tamptable`
--
ALTER TABLE `tamptable`
 ADD PRIMARY KEY (`tampID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
MODIFY `areaID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
MODIFY `customerID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `fooditem`
--
ALTER TABLE `fooditem`
MODIFY `foodItemID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `orderID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `orderitem`
--
ALTER TABLE `orderitem`
MODIFY `orderItemID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
MODIFY `restaurantID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
MODIFY `reviewID` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tamptable`
--
ALTER TABLE `tamptable`
MODIFY `tampID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fooditem`
--
ALTER TABLE `fooditem`
ADD CONSTRAINT `fooditem_restaurantid_foreign` FOREIGN KEY (`restaurantID`) REFERENCES `restaurant` (`restaurantID`) ON DELETE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
ADD CONSTRAINT `order_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE;

--
-- Constraints for table `orderitem`
--
ALTER TABLE `orderitem`
ADD CONSTRAINT `orderitem_fooditemid_foreign` FOREIGN KEY (`foodItemID`) REFERENCES `fooditem` (`foodItemID`) ON DELETE CASCADE,
ADD CONSTRAINT `orderitem_orderid_foreign` FOREIGN KEY (`orderID`) REFERENCES `order` (`orderID`) ON DELETE CASCADE;

--
-- Constraints for table `restaurant`
--
ALTER TABLE `restaurant`
ADD CONSTRAINT `restaurant_areaid_foreign` FOREIGN KEY (`areaID`) REFERENCES `area` (`areaID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
ADD CONSTRAINT `review_customerid_foreign` FOREIGN KEY (`customerID`) REFERENCES `customer` (`customerID`) ON DELETE CASCADE,
ADD CONSTRAINT `review_fooditemid_foreign` FOREIGN KEY (`foodItemID`) REFERENCES `fooditem` (`foodItemID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
