-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 10, 2020 at 06:01 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restra`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(500) NOT NULL,
  `gen_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`, `gen_date`) VALUES
(1, 'GUJRATI', '2020-08-10 14:18:51'),
(1, 'Chinese', '2020-08-10 14:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` bigint(255) NOT NULL,
  `reg_date` datetime NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `email`, `password`, `mobile`, `reg_date`, `id`) VALUES
('rahul ', 'katre@254', '123', 9755908334, '2020-08-10 16:17:48', 1),
('Navi ', 'navisalam786@gmail.com', '12345', 975590833, '2020-08-14 19:25:44', 2),
('Navi ', 'navisalam786@gmail.com', '12345', 975590833, '2020-08-14 19:25:44', 3),
('priti', 'katre@254', '', 9755908334, '2020-09-10 21:08:20', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(255) NOT NULL,
  `qt` int(10) DEFAULT NULL,
  `user_id` int(255) NOT NULL,
  `order_time` datetime NOT NULL,
  `order_status` varchar(500) NOT NULL DEFAULT 'added',
  `amount` int(100) DEFAULT NULL,
  `foood_id` int(11) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `mobile` bigint(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `qt`, `user_id`, `order_time`, `order_status`, `amount`, `foood_id`, `address`, `name`, `mobile`) VALUES
(2, 71320, 4, 1, '2020-09-10 23:16:30', 'Order Delivered', 800, 2, 'pakhara seoni madhyapradesh', 'rahul katre', 9787865),
(3, 96194, NULL, 2, '2020-08-14 19:26:48', 'Order Delivered', NULL, 4, NULL, NULL, NULL),
(5, 11178, NULL, 1, '2020-09-10 23:25:18', 'added', NULL, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `ship_details` varchar(500) NOT NULL,
  `products` int(100) NOT NULL,
  `status` varchar(255) NOT NULL,
  `times` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recipy`
--

DROP TABLE IF EXISTS `recipy`;
CREATE TABLE IF NOT EXISTS `recipy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `rec_about` varchar(255) NOT NULL,
  `rec_cat` varchar(500) NOT NULL,
  `rec_image` varchar(255) NOT NULL,
  `gen_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipy`
--

INSERT INTO `recipy` (`id`, `rec_name`, `price`, `rec_about`, `rec_cat`, `rec_image`, `gen_date`) VALUES
(1, 'Uthappizza', 149, 'A unique combination of Indian Uthappam (pancake) and Italian pizza, topped with Cerignola olives, ripe vine cherry tomatoes,', 'GUJRATI', 'uthappizza.png', '2020-08-10 14:32:19'),
(2, 'Zucchipakoda', 200, 'Deep fried Zucchini coated with mildly spiced Chickpea flour batter accompanied with a sweet-tangy tamarind ', 'GUJRATI', 'zucchipakoda.png', '2020-08-10 14:33:47'),
(3, 'Vadonut', 199, 'A quintessential ConFusion experience, is it a vada or is it a donut', 'GUJRATI', 'vadonut.png', '2020-08-10 14:34:25'),
(4, 'ElaiCheese Cake', 259, 'A delectable, semi-sweet New York Style Cheese Cake', 'GUJRATI', 'elaicheesecake.png', '2020-08-10 14:35:08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
