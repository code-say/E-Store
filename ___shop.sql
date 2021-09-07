-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 02, 2021 at 01:11 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `___shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(255) NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(6, 'Asus'),
(5, 'HP'),
(7, 'Dell'),
(8, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  `category_status` tinyint(3) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_status`) VALUES
(73, 'Watch', 1),
(72, 'Laptop', 1),
(71, 'Mobile', 1),
(74, 'Monitor', 1),
(75, 'Mouse', 1),
(76, 'PC', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(25) NOT NULL,
  `contact_email` varchar(32) NOT NULL,
  `contact_subject` varchar(32) NOT NULL,
  `contact_message` text NOT NULL,
  `contact_status` tinyint(2) NOT NULL,
  `contact_date` date NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `cus_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `cus_mobile` varchar(14) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(55) NOT NULL,
  `cus_country` varchar(55) NOT NULL,
  `cus_zip` varchar(5) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`) VALUES
(48, 'Sm shuvo', 'sumonsarker080@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'Bangladesh', '2220'),
(47, 'Trailer', 'Traileralltimesu@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1611606484', 'Sylhet City', 'Mymensingh', 'UK', '2220'),
(49, 'saikatsir', 'saikat@gmail.com', 'fe707ddd5858aec84832a6c39aca75aa', '741258963', 'kolkata', 'kolkata', '-- Country --', '70009'),
(50, 'joymondal', 'joy@gmail.com', '8616cc57814827a9dceff51d15175cea', '741258963', 'kolkata', 'kolkata', 'India', '70009');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` float NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'pending',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=103 ;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `cus_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `order_date`) VALUES
(100, 47, 78, 102, 107, 'pending', '2017-12-31 17:20:20'),
(97, 48, 76, 99, 107, 'pending', '2017-12-31 17:01:39'),
(101, 49, 79, 103, 158, 'pending', '2021-08-31 11:23:49'),
(102, 50, 80, 104, 107, 'pending', '2021-08-31 13:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` int(12) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` float NOT NULL,
  `sales_quantity` int(3) NOT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=129 ;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `sales_quantity`) VALUES
(125, 100, 53, 'Samsung j7', 100, 1),
(119, 97, 53, 'Samsung j7', 100, 1),
(126, 101, 59, 'Latest Men Watch', 50, 1),
(127, 101, 53, 'Samsung j7', 100, 1),
(128, 102, 53, 'Samsung j7', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending',
  `payment_type` varchar(20) NOT NULL,
  `payment_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_message` text NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_status`, `payment_type`, `payment_date_time`, `payment_message`) VALUES
(102, 'pending', 'cash_on_delivery', '2017-12-31 17:20:20', ''),
(98, 'pending', 'cash_on_delivery', '2017-12-30 23:45:17', ''),
(97, 'pending', 'cash_on_delivery', '2017-12-30 23:36:17', ''),
(96, 'pending', 'cash_on_delivery', '2017-12-30 23:17:07', ''),
(103, 'pending', 'cash_on_delivery', '2021-08-31 11:23:49', ''),
(104, 'pending', 'cash_on_delivery', '2021-08-31 13:48:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE IF NOT EXISTS `tbl_product` (
  `pro_id` int(11) NOT NULL AUTO_INCREMENT,
  `pro_title` varchar(255) NOT NULL,
  `pro_desc` text NOT NULL,
  `pro_cat` tinyint(4) NOT NULL,
  `pro_sub_cat` tinyint(4) NOT NULL,
  `pro_brand` tinyint(4) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_quantity` tinyint(4) NOT NULL,
  `pro_availability` tinyint(4) NOT NULL COMMENT 'status 1=instock, 2=outof stock, 3= up coming',
  `pro_status` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'status=1 enable status=2 disable',
  `pro_image` text,
  `top_product` tinyint(1) DEFAULT '0' COMMENT 'show top value=1 other wise value=0',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `pro_title`, `pro_desc`, `pro_cat`, `pro_sub_cat`, `pro_brand`, `pro_price`, `pro_quantity`, `pro_availability`, `pro_status`, `pro_image`, `top_product`) VALUES
(53, 'Samsung j7', '<p>Samsung j5</p>\r\n', 71, 0, 8, 100, -83, 1, 1, 'uploads/j7.jpeg', 1),
(56, 'Asus Monitor', '<p>Asus Monitor</p>\r\n', 74, 0, 8, 20, -67, 1, 1, 'uploads/asus.jpg', 1),
(57, 'Samsung Laptop', '<p>Samsung Laptop</p>\r\n', 76, 0, 8, 200, 7, 1, 1, 'uploads/Notebook9-PCD.jpg', 1),
(58, 'Latest Watch', '', 73, 0, 6, 20, 7, 1, 1, 'uploads/asus_watch.png', NULL),
(59, 'Latest Men Watch', '<p>Latest Men Watch</p>\r\n', 73, 0, 6, 50, 0, 1, 1, 'uploads/watch.jpg', 1),
(60, 'Asus Mouse', '<p>Asus Mouse</p>\r\n', 75, 26, 6, 30, 12, 1, 1, 'uploads/asus1.jpg', 1),
(74, 'Latest Watch', '<p>Latest Watch</p>\r\n', 73, 28, 8, 400, 4, 1, 1, 'uploads/women_watch.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(11) NOT NULL AUTO_INCREMENT,
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(55) NOT NULL,
  `cus_email` varchar(55) NOT NULL,
  `cus_password` varchar(32) NOT NULL,
  `cus_mobile` varchar(14) NOT NULL,
  `cus_address` text NOT NULL,
  `cus_city` varchar(55) NOT NULL,
  `cus_country` varchar(55) NOT NULL,
  `cus_zip` varchar(5) NOT NULL,
  `cus_fax` varchar(50) NOT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `cus_id`, `cus_name`, `cus_email`, `cus_password`, `cus_mobile`, `cus_address`, `cus_city`, `cus_country`, `cus_zip`, `cus_fax`) VALUES
(80, 50, 'joymondal', 'joy@gmail.com', '', '741258963', 'kolkata', 'kolkata', 'India', '70009', ''),
(79, 49, 'saikatsir', 'saikat@gmail.com', '', '741258963', 'kolkata', 'kolkata', '-- Country --', '70009', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_category`
--

CREATE TABLE IF NOT EXISTS `tbl_sub_category` (
  `sub_cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_category_name` varchar(255) NOT NULL,
  `category_sub_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `tbl_sub_category`
--

INSERT INTO `tbl_sub_category` (`sub_cat_id`, `sub_category_name`, `category_sub_id`) VALUES
(29, 'ASUS', 76),
(30, 'Symphony', 71),
(28, 'Women Watches', 73),
(26, 'Hp 22er', 74),
(27, 'Men watch', 73),
(25, 'Bloody', 75),
(33, 'Asus', 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_role` tinyint(3) NOT NULL,
  `user_status` tinyint(3) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `username`, `user_email`, `user_password`, `user_role`, `user_status`) VALUES
(1, 'sayanmandal', 'admin@gmail.com', '$2y$10$jC5vMlVtrPNSZNZr4cpJ.O4x.pvMMhRMkLV/NuOthbiVlttTHmsTi', 1, 1),
(2, 'abir', 'abir@gmail.com', '$2y$10$jC5vMlVtrPNSZNZr4cpJ.O4x.pvMMhRMkLV/NuOthbiVlttTHmsTi', 0, 1),
(3, 'Author', 'admin@gmail.com', 'admin', 3, 1),
(17, 'joy', 'joy123@gmail.com', '$2y$10$1Hn33y.DzOLj7mAV/5tNWuU2BCGOzC/59WYvWZM7o7LoeYSO17oeW', 1, 1),
(16, 'sayan', 'sayancse@hotmail.com', '$2y$10$CRBhl9Xe3QQ1hUQWS.z2yuAVTtM4y7gNv0c4Np7vqu.8VjGD1Kzmq', 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
