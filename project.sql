-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2023 at 05:50 PM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('huwwaris@gmail.com', 'hu55');

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `product_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_image` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_descr` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`product_id`, `product_name`, `product_image`, `product_descr`, `product_price`) VALUES
('1', 'Jacket', 'jacket.jpg', 'New model of jackets brand Zara', '640.00'),
('2', 'Shirt', 'shirt.jpg', 'New model of shirts brand Max', '500.00');

-- --------------------------------------------------------

--
-- Table structure for table `clothitems`
--

CREATE TABLE `clothitems` (
  `ItemID` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `MinValue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `clothitems`
--

INSERT INTO `clothitems` (`ItemID`, `Name`, `Price`, `Quantity`, `MinValue`) VALUES
('1', 'Jacket', 400, 40, 10),
('2', 'Shirt', 320, 80, 10);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerid` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `city` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `zip_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `country` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerid`, `name`, `email`, `password`, `address`, `city`, `zip_code`, `country`) VALUES
(1, 'Saba', 'huwwaris@gmail.com', 'ssss', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(2, 'Ahmed', '', '0', 'Burqa', 'Nablus', '401', 'Palestine'),
(3, 'Tala', '', '0', 'Beit Furik', 'Nablus', '401', 'Palestine'),
(4, 'Amjad', '', '0', 'Nablus', 'Nablus', '401', 'Palestine');

-- --------------------------------------------------------

--
-- Table structure for table `elecitems`
--

CREATE TABLE `elecitems` (
  `ItemID` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `MinValue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `elecitems`
--

INSERT INTO `elecitems` (`ItemID`, `Name`, `Price`, `Quantity`, `MinValue`) VALUES
('1', 'Laptop', 400, 40, 10),
('2', 'Mobile', 320, 80, 10),
('3', 'IPad', 250, 100, 10);

-- --------------------------------------------------------

--
-- Table structure for table `electronics`
--

CREATE TABLE `electronics` (
  `product_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_image` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_descr` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `electronics`
--

INSERT INTO `electronics` (`product_id`, `product_name`, `product_image`, `product_descr`, `product_price`) VALUES
('1', 'Laptop', 'laptop.jpg', 'New model of laptops', '400.00'),
('2', 'Mobile', 'mobile.jpg', 'New model of mobiles', '320.00'),
('3', 'IPad', 'ipad.jpg', 'New model of Ipads', '250.00');

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE `grocery` (
  `product_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_image` varchar(40) COLLATE latin1_general_ci NOT NULL,
  `product_descr` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`product_id`, `product_name`, `product_image`, `product_descr`, `product_price`) VALUES
('1', 'Tomato', 'tt.jpg', 'Fresh tomato from farm', '30.00'),
('2', 'Cucumber', 'cc.jpg', 'Fresh cucumber from farm', '60.00'),
('3', 'Brocoli', 'bb.jpg', 'Fresh brocoli from farm', '60.00'),
('4', 'Carrot', 'ca.jpg', 'Fresh carrot from farm', '40.00'),
('5', 'Onion', 'oo.jpg', 'Fresh onion from farm', '20.00'),
('6', 'Potato', 'pp.jpg', 'Fresh potato from farm', '40.00');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `product_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `product_name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_image` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `product_descr` text CHARACTER SET latin1 COLLATE latin1_general_ci,
  `product_price` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`product_id`, `product_name`, `product_image`, `product_descr`, `product_price`) VALUES
('1', 'Vase', 'vase.jpg', 'New collection of vases', '270.00'),
('2', 'Clock', 'clock.jpg', 'New model of modern clocks', '150.00');

-- --------------------------------------------------------

--
-- Table structure for table `homitems`
--

CREATE TABLE `homitems` (
  `ItemID` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Name` varchar(60) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Price` int(10) DEFAULT NULL,
  `Quantity` int(10) DEFAULT NULL,
  `MinValue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `homitems`
--

INSERT INTO `homitems` (`ItemID`, `Name`, `Price`, `Quantity`, `MinValue`) VALUES
('1', 'Vase', 400, 40, 10),
('2', 'Clock', 320, 80, 10);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ItemID` bigint(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Price` int(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `MinValue` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `Name`, `Price`, `Quantity`, `MinValue`) VALUES
(1, 'Tomato', 30, 50, 40),
(2, 'Cucumber', 60, 100, 20),
(3, 'Borocoli', 60, 40, 150),
(4, 'Carrot', 40, 70, 20),
(5, 'Onion', 20, 100, 20),
(6, 'Potato', 40, 10, 20),
(7, 'Zucchini', 60, 8, 20),
(8, 'Beans', 55, 16, 20);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `name` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `message` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`name`, `email`, `message`) VALUES
('saba', 'huwwaris@gmail.com', 'Hello'),
('Saba', 'lujainatoo@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `address` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`name`, `email`, `password`, `address`) VALUES
('saba', 'huwwaris@gmail.com', 'ssss', 'sebastiya');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `customerid` int(10) UNSIGNED NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ship_name` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ship_address` char(80) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ship_city` char(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ship_zip_code` char(10) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `ship_country` char(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `amount`, `date`, `ship_name`, `ship_address`, `ship_city`, `ship_zip_code`, `ship_country`) VALUES
(1, 1, '60.00', '2015-12-03 11:30:12', 'a', 'a', 'a', 'a', 'a'),
(2, 2, '60.00', '2015-12-03 11:31:12', 'b', 'b', 'b', 'b', 'b'),
(3, 3, '20.00', '2015-12-03 17:34:21', 'test', '123 test', '12121', 'test', 'test'),
(4, 1, '20.00', '2015-12-04 08:19:14', 'a', 'a', 'a', 'a', 'a'),
(5, 4, '80.00', '2020-10-22 21:28:15', 'janobe sourcecode', 'kab', 'kabankalan', '61211', 'Philippines'),
(0, 1, '90.00', '2022-12-15 15:27:52', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(0, 1, '30.00', '2022-12-16 03:40:43', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(0, 1, '60.00', '2022-12-16 03:58:18', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(0, 1, '30.00', '2023-01-04 19:09:49', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(0, 1, '150.00', '2023-01-05 07:08:45', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine'),
(0, 1, '120.00', '2023-01-05 09:26:26', 'Saba', 'Sebastiya', 'Nablus', '401', 'Palestine');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `orderid` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`orderid`, `product_id`, `item_price`, `quantity`) VALUES
(1, '978-1-118-94924-5', '20.00', 1),
(1, '978-1-44937-019-0', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(2, '978-1-118-94924-5', '20.00', 1),
(2, '978-1-44937-019-0', '20.00', 1),
(2, '978-1-49192-706-9', '20.00', 1),
(3, '978-0-321-94786-4', '20.00', 1),
(1, '978-1-49192-706-9', '20.00', 1),
(5, '978-1-484217-26-9', '20.00', 4),
(5, '978-1-118-94924-5', '20.00', 1),
(1, '1', '30.00', 2),
(1, '1', '30.00', 1),
(1, '1', '30.00', 5),
(1, '1', '30.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `SectionID` bigint(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `MinPeople` int(10) NOT NULL,
  `MaxHum` int(10) NOT NULL,
  `MaxGa` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`SectionID`, `Name`, `MinPeople`, `MaxHum`, `MaxGa`) VALUES
(1, 'Grocery', 10, 70, 200),
(2, 'Electronics', 10, 70, 200),
(3, 'Clothes', 10, 70, 200),
(4, 'Home', 10, 70, 200);

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `SensorID` bigint(10) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Value` varchar(100) NOT NULL,
  `Date` timestamp(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`SensorID`, `Type`, `Value`, `Date`) VALUES
(1, 'PIR', 'Motion Detected\r\n', '0000-00-00 00:00:00.000'),
(2, 'Humidity', '', '0000-00-00 00:00:00.000'),
(3, 'Gas', '160', '0000-00-00 00:00:00.000'),
(4, 'Ultrasonic', '100', '0000-00-00 00:00:00.000');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `humidity` float DEFAULT NULL,
  `temperature` float NOT NULL,
  `ultrasonic` float DEFAULT NULL,
  `gas` int(11) DEFAULT NULL,
  `pir` varchar(100) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`humidity`, `temperature`, `ultrasonic`, `gas`, `pir`, `date`) VALUES
(36, 20.8, 0, 14, 'Stopped!', '2023-01-02 09:07:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ItemID`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`SectionID`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`SensorID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
