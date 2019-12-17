-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2019 at 04:25 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaustubh`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(20) NOT NULL,
  `prod_desc` varchar(255) NOT NULL,
  `img_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `prod_desc`, `img_url`) VALUES
(1, 'San Disk Pen Drive(16 GB)', '250', 'Ultra-compact and portable USB flash drive\r\nShare your photos, videos, songs and other files between computers with ease\r\nProtect your private files with included SanDisk SecureAccess software', 'https://images-na.ssl-images-amazon.com/images/I/61pHXsALAOL._SL1206_.jpg'),
(2, 'SanDisk Ultra Dual 64GB USB 3.0 OTG Pen Drive', '749', 'High-speed USB 3.0 performance with up to 130mbps file transfer from drive', 'https://images-na.ssl-images-amazon.com/images/I/51-pb2hDPAL._SL1120_.jpg'),
(3, 'Strontium Ammo 32GB 2.0 USB Pen Drive (Silver)', '349', 'High Speed Data Transfer Performance\r\nUltra-Thin and Sleek Form Factor\r\nHighest Quality Flash Memory Component for Maximum Reliability', 'https://images-na.ssl-images-amazon.com/images/I/51-8hRfZcDL._SL1000_.jpg'),
(4, 'SanDisk 64GB Extreme PRO SDXC UHS-I Card', '1720', 'Shot speeds up to 60MB/s*, transfer speeds up to 150MB/s* and other factors. 1Mb=1, 000, 000 bytes. X = 150Kb/sec.', 'https://images-na.ssl-images-amazon.com/images/I/61GzuP0aGcL._SL1000_.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
