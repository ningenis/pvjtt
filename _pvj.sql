-- phpMyAdmin SQL Dump
-- version 4.0.10.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 03:21 AM
-- Server version: 5.1.73
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_pvj`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `id_address` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(300) NOT NULL,
  `street_1` varchar(300) DEFAULT NULL,
  `street_2` varchar(300) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id_administrator` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `id_address` int(11) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_administrator`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE IF NOT EXISTS `car` (
  `id_car` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `departure` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `quota` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_car`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id_car`, `name`, `id_destination`, `departure`, `type`, `quota`, `price`, `status`, `_enabled`, `_date`, `_note`) VALUES
(1, 'Minibus 1', 1, 'Bandung', 'Minibus', 30, 300000, 0, 1, '2015-12-21 01:28:33', NULL),
(2, 'Minibus 2', 1, 'Bandung', 'Minibus', 25, 300000, 0, 1, '2015-12-21 01:28:33', NULL),
(3, 'Minibus 3', 1, 'Bandung', 'Minibus', 35, 300000, 0, 1, '2015-12-21 01:28:33', NULL),
(4, 'Minibus 4', 2, 'Jakarta', 'Minibus', 35, 300000, 0, 1, '2015-12-21 01:28:33', NULL),
(5, 'Minibus 5', 2, 'Jakarta', 'Minibus', 20, 300000, 0, 1, '2015-12-21 01:28:33', NULL),
(6, 'Sedan 1', 2, 'Jakarta', 'Sedan', 3, 100000, 0, 1, '2015-12-21 01:28:33', NULL),
(7, 'Sedan 2', 1, 'Bandung', 'Sedan', 3, 100000, 0, 1, '2015-12-21 01:28:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id_city` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(100) NOT NULL,
  `region` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text NOT NULL,
  PRIMARY KEY (`id_city`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `name`, `email`, `message`, `_enabled`, `_date`, `_note`) VALUES
(1, 'andre', 'asdhua@jsadh.com', 'ausgdhjasdasf', 1, '2015-12-20 22:01:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id_customer` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `credential` varchar(200) NOT NULL,
  `id_address` int(11) DEFAULT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `_token` varchar(300) DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_customer`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `id_profile`, `email`, `credential`, `id_address`, `activated`, `_token`, `_enabled`, `_date`, `_note`) VALUES
(2, 5, 'asd@asd.com', 'f9a7c6df341325822e3ea264cfe39e5ef8c73aa4', NULL, 0, 'UITAWE7IW3TUDHWEUIDHSADIHAUIJ', 1, '2015-11-26 01:32:28', NULL),
(10, 13, 'toyotatrue.friends@gmail.com', 'f9a7c6df341325822e3ea264cfe39e5ef8c73aa4', NULL, 0, 'UITAWE7IW3TUDHWEUIDHSADIHAUIJ', 1, '2015-11-26 01:50:01', NULL),
(11, 19, 'a@a.com', 'd164b39e9ec43f65376629da9ccf41780775f656', NULL, 1, 'UITAWE7IW3TUDHWEUIDHSADIHAUIJ', 1, '2015-11-26 10:15:27', NULL),
(12, 20, 'toyotatrue.friend@gmail.com', 'd164b39e9ec43f65376629da9ccf41780775f656', NULL, 1, 'UITAWE7IW3TUDHWEUIDHSADIHAUIJ', 1, '2015-12-20 22:10:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE IF NOT EXISTS `destination` (
  `id_destination` int(11) NOT NULL AUTO_INCREMENT,
  `destination` varchar(100) NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `price_tourguide` int(11) NOT NULL DEFAULT '0',
  `price_lunch` int(11) NOT NULL DEFAULT '0',
  `price_diner` int(11) NOT NULL DEFAULT '0',
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text NOT NULL,
  PRIMARY KEY (`id_destination`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id_destination`, `destination`, `price`, `price_tourguide`, `price_lunch`, `price_diner`, `_enabled`, `_date`, `_note`) VALUES
(1, 'Bandung', 500000, 0, 0, 0, 1, '2015-12-21 01:26:27', ''),
(2, 'Jakarta', 400000, 0, 0, 0, 1, '2015-12-21 01:26:27', '');

-- --------------------------------------------------------

--
-- Table structure for table `destination_itinerary`
--

CREATE TABLE IF NOT EXISTS `destination_itinerary` (
  `id_itinerary` int(11) NOT NULL AUTO_INCREMENT,
  `id_destination` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_itinerary`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `destination_itinerary`
--

INSERT INTO `destination_itinerary` (`id_itinerary`, `id_destination`, `name`, `price`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, 'Kawah Putih', 100000, 1, '2015-12-21 02:34:20', NULL),
(2, 1, 'Cibaduyut', 100000, 1, '2015-12-21 02:34:20', NULL),
(3, 2, 'Monas', 150000, 1, '2015-12-21 02:36:11', NULL),
(4, 2, 'Pasar Glodok', 50000, 1, '2015-12-21 02:36:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE IF NOT EXISTS `driver` (
  `id_driver` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `latitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '0',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_driver`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `environment`
--

CREATE TABLE IF NOT EXISTS `environment` (
  `id_environment` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `value` text,
  `id_image` int(11) DEFAULT NULL,
  `language` varchar(10) DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT '0',
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_environment`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `environment`
--

INSERT INTO `environment` (`id_environment`, `name`, `value`, `id_image`, `language`, `type`, `_enabled`, `_date`, `_note`) VALUES
(1, 'company_profile', 'Paris van Java Tour & Travel is .....', NULL, 'EN', 0, 1, '2015-11-08 22:02:27', NULL),
(2, 'company_profile', 'Paris van Java Tour & Travel is .....', NULL, 'ID', 0, 1, '2015-11-08 22:02:27', NULL),
(3, 'company_vision', 'Paris van Java Tour & Travel is .....\r\n', NULL, 'EN', 0, 1, '2015-11-18 18:43:50', NULL),
(4, 'company_vision', 'Paris van Java Tour & Travel is .....\r\n', NULL, 'ID', 0, 1, '2015-11-18 18:43:50', NULL),
(5, 'award', NULL, NULL, 'EN', 0, 1, '2015-11-18 18:59:01', NULL),
(6, 'award', NULL, NULL, 'ID', 0, 1, '2015-11-18 18:59:01', NULL),
(7, 'latitude', '-6.889089', NULL, NULL, 0, 1, '2015-11-26 03:47:11', NULL),
(8, 'longitude', '107.59614', NULL, NULL, 0, 1, '2015-11-26 03:47:11', NULL),
(9, 'office_location', 'Paris van Java Tour & Travel<br>Jalan Setrasari Kulon No. 3x<br>Sukasari, West Java<br>40152<br>', NULL, NULL, 0, 1, '2015-11-26 03:48:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `question_en` text NOT NULL,
  `question_id` text NOT NULL,
  `answer_en` text NOT NULL,
  `answer_id` text NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id_hotel` int(11) NOT NULL AUTO_INCREMENT,
  `id_destination` varchar(100) NOT NULL,
  `id_address` int(11) DEFAULT NULL,
  `class` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pax` int(11) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_hotel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id_image` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) NOT NULL,
  `mime_type` varchar(200) DEFAULT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_note` text,
  PRIMARY KEY (`id_image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id_image`, `filename`, `mime_type`, `_date`, `_enabled`, `_note`) VALUES
(1, 'Cities(40).jpg', NULL, '2015-11-25 21:07:32', 1, NULL),
(2, 'Cities(42).jpg', NULL, '2015-11-25 21:07:32', 1, NULL),
(3, 'Cities(43).jpg', NULL, '2015-11-25 21:08:51', 1, NULL),
(4, 'Cities(44).jpg', NULL, '2015-11-25 21:08:51', 1, NULL),
(5, 'Cities(48).jpg', NULL, '2015-11-25 21:09:42', 1, NULL),
(6, 'Cities(50).jpg', NULL, '2015-11-25 21:09:42', 1, NULL),
(7, 'Cities(46).jpg', NULL, '2015-11-25 21:10:03', 1, NULL),
(8, 'Cities(47).jpg', NULL, '2015-11-25 21:10:03', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itenerary`
--

CREATE TABLE IF NOT EXISTS `itenerary` (
  `id_itenerary` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `title_en` varchar(200) NOT NULL,
  `description_en` text NOT NULL,
  `title_id` varchar(200) NOT NULL,
  `descripiton_id` text NOT NULL,
  `id_image` int(11) DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_itenerary`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `itenerary`
--

INSERT INTO `itenerary` (`id_itenerary`, `id_product`, `title_en`, `description_en`, `title_id`, `descripiton_id`, `id_image`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, 'Day 1', 'Arrival Bandung Meet our greet representative, Bandung city tour, Hotel Check-in.', 'Day 1', 'Arrival Bandung Meet our greet representative, Bandung city tour, Hotel Check-in.', NULL, 1, '2015-11-26 03:13:39', NULL),
(2, 1, 'Day 2', 'Bandung Volcano Tour and Shopping Visit Tangkuban Perahu, Cihideung Flower Village, Shopping in Bandung', 'Day 2', 'Bandung Volcano Tour and Shopping Visit Tangkuban Perahu, Cihideung Flower Village, Shopping in Bandung', NULL, 1, '2015-11-26 03:13:39', NULL),
(3, 1, 'Day 3', 'Shopping Day Pasar Baru, Dago Factory Outlets, and Riau Factory Outlets.', 'Day 3', 'Shopping Day Pasar Baru, Dago Factory Outlets, and Riau Factory Outlets.', NULL, 1, '2015-11-26 03:15:25', NULL),
(4, 1, 'Day 4', 'Bandung Tour and Art Culture Paris van Java, Visit Saung Angklung Udjo Performance', 'Day 4', 'Bandung Tour and Art Culture Paris van Java, Visit Saung Angklung Udjo Performance', NULL, 1, '2015-11-26 03:15:25', NULL),
(5, 1, 'Day 5', 'Bandung &amp; Theme Park Tour Visit Trans Studio and Bandung Tour', 'Day 5', 'Bandung &amp; Theme Park Tour Visit Trans Studio and Bandung Tour', NULL, 1, '2015-11-26 03:16:23', NULL),
(6, 1, 'Day 6', 'Departure from Bandung Free tour, and departure at Bandung airport.', 'Day 6', 'Departure from Bandung Free tour, and departure at Bandung airport.', NULL, 1, '2015-11-26 03:16:23', NULL),
(7, 2, 'Day 1', 'Arrival Bandung Meet our greet representative, Bandung city tour, Hotel Check-in.', 'Day 1', 'Arrival Bandung Meet our greet representative, Bandung city tour, Hotel Check-in.', NULL, 1, '2015-11-26 03:13:39', NULL),
(8, 2, 'Day 2', 'Bandung Volcano Tour and Shopping Visit Tangkuban Perahu, Cihideung Flower Village, Shopping in Bandung', 'Day 2', 'Bandung Volcano Tour and Shopping Visit Tangkuban Perahu, Cihideung Flower Village, Shopping in Bandung', NULL, 1, '2015-11-26 03:13:39', NULL),
(9, 2, 'Day 3', 'Shopping Day Pasar Baru, Dago Factory Outlets, and Riau Factory Outlets.', 'Day 3', 'Shopping Day Pasar Baru, Dago Factory Outlets, and Riau Factory Outlets.', NULL, 1, '2015-11-26 03:15:25', NULL),
(10, 2, 'Day 4', 'Bandung Tour and Art Culture Paris van Java, Visit Saung Angklung Udjo Performance', 'Day 4', 'Bandung Tour and Art Culture Paris van Java, Visit Saung Angklung Udjo Performance', NULL, 1, '2015-11-26 03:15:25', NULL),
(11, 2, 'Day 5', 'Bandung &amp; Theme Park Tour Visit Trans Studio and Bandung Tour', 'Day 5', 'Bandung &amp; Theme Park Tour Visit Trans Studio and Bandung Tour', NULL, 1, '2015-11-26 03:16:23', NULL),
(12, 2, 'Day 6', 'Departure from Bandung Free tour, and departure at Bandung airport.', 'Day 6', 'Departure from Bandung Free tour, and departure at Bandung airport.', NULL, 1, '2015-11-26 03:16:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_destination` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pax` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `id_hotel` int(11) DEFAULT NULL,
  `id_car` int(11) NOT NULL,
  `tourguide` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_order`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_destination`, `email`, `phone`, `pax`, `duration`, `id_hotel`, `id_car`, `tourguide`, `status`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, 'a@a.com', '08236423742', 1, 1, 0, 3, 1, 0, 1, '2015-12-21 04:33:01', NULL),
(2, 1, 'a@a.com', '08236423742', 1, 1, 0, 1, 0, 0, 1, '2015-12-21 05:05:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_itinerary`
--

CREATE TABLE IF NOT EXISTS `order_itinerary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_order` int(11) NOT NULL,
  `id_itinerary` int(11) NOT NULL,
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `order_itinerary`
--

INSERT INTO `order_itinerary` (`id`, `id_order`, `id_itinerary`, `_date`) VALUES
(1, 1, 1, '2015-12-21 04:33:01'),
(2, 1, 2, '2015-12-21 04:33:01'),
(3, 2, 1, '2015-12-21 05:05:51'),
(4, 2, 2, '2015-12-21 05:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE IF NOT EXISTS `price` (
  `id_price` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `price_usd` decimal(10,0) DEFAULT NULL,
  `price_idr` decimal(10,0) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  `description` varchar(200) DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_price`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id_price`, `id_product`, `price_usd`, `price_idr`, `type`, `discount`, `description`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, '233', '3068334', '6 seater van', 0, NULL, 1, '2015-11-26 02:12:10', NULL),
(2, 1, '238', '3136667', '12 Seater ELF', 0, NULL, 1, '2015-11-26 02:12:10', NULL),
(3, 2, '233', '3068334', '6 seater van', 0, NULL, 1, '2015-11-26 02:12:10', NULL),
(4, 2, '238', '3136667', '12 Seater ELF', 0, NULL, 1, '2015-11-26 02:12:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `id_image_thumbnail` int(11) DEFAULT NULL,
  `code` varchar(100) NOT NULL,
  `name_en` varchar(100) NOT NULL,
  `description_en` text NOT NULL,
  `name_id` varchar(100) NOT NULL,
  `description_id` text NOT NULL,
  `departure` varchar(100) NOT NULL,
  `destination` varchar(100) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_image_thumbnail`, `code`, `name_en`, `description_en`, `name_id`, `description_id`, `departure`, `destination`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, 'BTP6D5N', 'Bandung Tour Package (6D5N)', 'Shopping in Bandung is quite an affair and there are many markets around the city to fulfill your shopping needs. Discover your 5Days 4 Nites in Bandung. Bandung is one of the best place in entire Indonesia to have inexpensive but quality food. Make sure that you have not missed on getting experience of the city life that goes on in Bandung before leaving.', 'Bandung Tour Package (6D5N)', 'Shopping in Bandung is quite an affair and there are many markets around the city to fulfill your shopping needs. Discover your 5Days 4 Nites in Bandung. Bandung is one of the best place in entire Indonesia to have inexpensive but quality food. Make sure that you have not missed on getting experience of the city life that goes on in Bandung before leaving.', 'Bandung', 'Bandung', 1, '2015-11-25 20:50:42', NULL),
(2, 2, 'BTP6D5M', 'Jakarta Tour Package (6D5N)', 'Shopping in Jakarta is quite an affair and there are many markets around the city to fulfill your shopping needs. Discover your 5Days 4 Nites in Jakarta. Jakarta is one of the best place in entire Indonesia to have inexpensive but quality food. Make sure that you have not missed on getting experience of the city life that goes on in Jakarta before leaving.', 'Jakarta Tour Package (6D5N)', 'Shopping in Jakarta is quite an affair and there are many markets around the city to fulfill your shopping needs. Discover your 5Days 4 Nites in Jakarta. Jakarta is one of the best place in entire Indonesia to have inexpensive but quality food. Make sure that you have not missed on getting experience of the city life that goes on in Jakarta before leaving.', 'Jakarta', 'Jakarta', 1, '2015-11-26 02:04:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_image` int(11) NOT NULL,
  `thumbnail` tinyint(1) NOT NULL DEFAULT '0',
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `id_product`, `id_image`, `thumbnail`, `_enabled`, `_date`, `_note`) VALUES
(1, 1, 1, 1, 1, '2015-11-25 21:10:37', NULL),
(2, 1, 2, 0, 1, '2015-11-25 21:10:37', NULL),
(3, 1, 3, 0, 1, '2015-11-25 21:10:55', NULL),
(4, 1, 4, 0, 1, '2015-11-25 21:10:55', NULL),
(5, 1, 5, 0, 1, '2015-11-25 21:11:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(300) DEFAULT NULL,
  `first_name` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `birthday` date DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `last_name`, `first_name`, `phone`, `birthday`, `_enabled`, `_date`, `_note`) VALUES
(5, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:32:28', NULL),
(6, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:32:49', NULL),
(7, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:34:22', NULL),
(8, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:34:35', NULL),
(9, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:39:36', NULL),
(10, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:39:49', NULL),
(11, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:49:41', NULL),
(12, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:49:54', NULL),
(13, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 01:50:01', NULL),
(14, 'Putro Basuki', 'Dwi', '+622130050690', NULL, 1, '2015-11-26 07:14:54', NULL),
(15, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 07:16:15', NULL),
(16, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 07:16:41', NULL),
(17, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 07:17:37', NULL),
(18, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-11-26 07:19:31', NULL),
(19, 'Smith', 'John', '08236423742', '0000-00-00', 1, '2015-11-26 10:15:27', NULL),
(20, 'Putro Basuki', 'Dwi', '+622130050690', '0000-00-00', 1, '2015-12-20 22:10:06', NULL),
(21, 'pratama', 'andre', '0892374263', NULL, 1, '2015-12-20 23:27:33', NULL),
(22, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 00:38:09', NULL),
(23, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 00:39:07', NULL),
(24, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 00:44:48', NULL),
(25, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 00:45:41', NULL),
(26, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 00:47:00', NULL),
(27, 'Rahayu', 'Intan', '08236423742', '0000-00-00', 1, '2015-12-21 05:22:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id_reservation` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `id_address` int(11) DEFAULT NULL,
  `id_driver` int(11) DEFAULT NULL,
  `id_car` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `code` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `activated` int(11) NOT NULL DEFAULT '0',
  `special_inquiry` text,
  `reservation_adult` int(11) NOT NULL DEFAULT '0',
  `reservation_children` int(11) NOT NULL DEFAULT '0',
  `date` datetime DEFAULT NULL,
  `_token` varchar(200) DEFAULT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text NOT NULL,
  PRIMARY KEY (`id_reservation`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `id_product`, `id_profile`, `id_address`, `id_driver`, `id_car`, `status`, `code`, `email`, `activated`, `special_inquiry`, `reservation_adult`, `reservation_children`, `date`, `_token`, `_enabled`, `_date`, `_note`) VALUES
(5, 1, 26, NULL, NULL, NULL, 0, 'XVGQAGKSRF', 'a@a.com', 0, '', 1, 0, NULL, NULL, 1, '2015-12-21 00:47:00', ''),
(6, 1, 27, NULL, NULL, NULL, 0, 'NKKXYSRAQC', 'a@a.com', 0, '', 1, 0, NULL, NULL, 1, '2015-12-21 05:22:43', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `id_administrator` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `_enabled` tinyint(1) NOT NULL DEFAULT '1',
  `_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `_note` text,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
