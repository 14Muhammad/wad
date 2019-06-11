-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2019 at 01:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech_box_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Apple'),
(2, 'Dell'),
(3, 'Samsung'),
(4, 'Toshiba'),
(6, 'Oppo'),
(7, 'Sony'),
(8, 'Swatch');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Laptops'),
(2, 'Computers'),
(5, 'Tablets'),
(6, 'Watches'),
(7, 'Cameras'),
(8, 'iPads'),
(9, 'Projectors'),
(10, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(10) NOT NULL,
  `pro_cat` int(10) NOT NULL,
  `pro_brand` int(10) NOT NULL,
  `pro_title` varchar(200) NOT NULL,
  `pro_price` int(10) NOT NULL,
  `pro_desc` varchar(2000) NOT NULL,
  `pro_image` varchar(300) NOT NULL,
  `pro_keywords` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_cat`, `pro_brand`, `pro_title`, `pro_price`, `pro_desc`, `pro_image`, `pro_keywords`) VALUES
(5, 2, 1, 'apple Mac Book', 323000, '                        i9 , 16 GB RAM                                           ', '71KyjhnQY4L._SY355_.jpg', '321000'),
(6, 1, 2, 'dell inpiron', 50000, 'dell is good laptop', 'dell1.jpg', 'dell, inspiron'),
(10, 10, 1, 'iPhone 7', 90000, 'Apple product', '71x3e0x+M2L._SX569_.jpg', 'apple phone, iphone 7'),
(11, 7, 7, 'Sony Alpha a58', 59900, 'Sony is Good Company', 'song1.jpg', 'sony , camera, DSLR'),
(12, 6, 3, 'Samsung Gear S3', 20000, 'Samsung product', 'samsung2 (2).jpg', 'samsung, watch'),
(13, 10, 6, 'oppo f1s', 25000, 'Oppo phone', 'QMobile-Noir-i8i-Techjuice.jpg', 'oppo'),
(14, 6, 8, 'SUOK709 Mens Watch Vent Brulant', 7000, 'Swiss Made wrist watch semi-transparent plastic case back with screw-in battery case', 'Screenshot_60.png', 'watch, swiss, wrist'),
(16, 5, 3, 'Samsung Galaxy Tab S3', 61000, 'Android OS, v7.0 (Nougat)\r\nChipset\r\nQualcomm MSM8996 Snapdragon 820\r\nCPU\r\nQuad-core (2x2.15 GHz Kryo & 2x1.6 GHz Kryo)', 'Screenshot_61.png', 'tab, samsung, pen'),
(17, 8, 1, 'Apple iPad Pro 12.9-inch', 140000, '12.9-inch Liquid Retina display ProMotion technology and True Tone display\r\nFace ID\r\nA12X Bionic chip with Neural Engine', 'Screenshot_62.png', 'ipad, apple'),
(18, 9, 7, 'Sony VPL-DX221 2800 Lumens', 64000, '\r\nDisplay System\r\n3 LCD system\r\nSize of effective display area\r\n0.63\"(16mm) x 3, Aspect ratio: 4:3\r\nNumber of pixels\r\n2,359,296 (1024x768 x 3)\r\nFocus\r\nManual', 'Screenshot_63.png', 'projector, sony, Mini D-sub');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
