-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 08:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_visit`
--

CREATE TABLE `tbl_book_visit` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `date` datetime NOT NULL,
  `start_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_book_visit`
--

INSERT INTO `tbl_book_visit` (`auth_id`, `action_type`, `action_date`, `date`, `start_time`, `end_time`, `remarks`, `email`, `property_id`) VALUES
('joy@gmail.com', 'insert', '2023-04-26 16:36:55', '2023-04-26 16:36:55', '2023-04-29T17:31', '2023-04-29T21:31', 'make me coffee', 'joy@gmail.com', '1'),
('joy@gmail.com', 'insert', '2023-04-30 10:47:15', '2023-04-30 10:47:15', '2023-05-01T10:46', '2023-05-01T00:46', 'keep a cup of coffee ready.', 'joy@gmail.com', '13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_careers`
--

CREATE TABLE `tbl_careers` (
  `maker_id` int(11) NOT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `career_id` int(11) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `job_description` varchar(500) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_company_profile`
--

CREATE TABLE `tbl_company_profile` (
  `maker_id` varchar(100) NOT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `company_vision` varchar(300) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `privecy_policy` varchar(500) NOT NULL,
  `terms_and_condition` varchar(500) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_company_profile`
--

INSERT INTO `tbl_company_profile` (`maker_id`, `auth_id`, `action_type`, `action_date`, `company_name`, `company_vision`, `company_address`, `company_email`, `privecy_policy`, `terms_and_condition`, `company_id`) VALUES
('1730020@iub.edu.bd', '', 'update', '2023-04-02 10:28:13', 'PRISM', 'vision....text', 'address....text', 'email@company.com', 'privacy policy....file link', 'terms and condition....file', 1),
('1730020@iub.edu.bd', NULL, 'insert', '2023-04-11 14:07:35', 'PRISM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', '815 East Mall Drive ,South Dakota 57701 United States', 'inquery@prism.com', 'pp', 'term n condition', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_favourites`
--

CREATE TABLE `tbl_favourites` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `creation_date` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_favourites`
--

INSERT INTO `tbl_favourites` (`auth_id`, `action_type`, `action_date`, `creation_date`, `email`, `property_id`) VALUES
('joy@gmail.com', 'insert', '2023-04-30 11:44:44', '2023-04-30 11:44:44', 'joy@gmail.com', '1'),
('joy@gmail.com', 'insert', '2023-04-30 10:40:07', '2023-04-30 10:40:07', 'joy@gmail.com', '10'),
('joy@gmail.com', 'insert', '2023-04-30 12:13:12', '2023-04-30 12:13:12', 'joy@gmail.com', '11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_homeloan`
--

CREATE TABLE `tbl_homeloan` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inquery`
--

CREATE TABLE `tbl_inquery` (
  `maker_id` varchar(100) DEFAULT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `inquery_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(100) NOT NULL,
  `query` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_inquery`
--

INSERT INTO `tbl_inquery` (`maker_id`, `auth_id`, `action_type`, `action_date`, `inquery_id`, `customer_name`, `phone`, `address`, `query`) VALUES
('shovon@gmail.com', 'NULL', 'update', '2023-04-02 11:07:00', 1, 'Shamiul', '01723568944', 'address......text', 'query.....text');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_legal_services`
--

CREATE TABLE `tbl_legal_services` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `service_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_legal_services`
--

INSERT INTO `tbl_legal_services` (`auth_id`, `action_type`, `action_date`, `name`, `phone_number`, `email`, `service_code`) VALUES
(NULL, 'insert', '2023-04-26 12:36:00', 'Shovon ', '01245678933', 'joy@gmail.com', 16),
(NULL, 'insert', '2023-04-26 12:36:00', 'Shovon ', '01245678933', 'joy@gmail.com', 17),
(NULL, 'insert', '2023-04-26 12:36:00', 'Shovon ', '01245678933', 'joy@gmail.com', 18),
(NULL, 'insert', '2023-04-26 12:44:17', 'joy', '01245678933', 'shovon@gmail.com', 16),
(NULL, 'insert', '2023-04-26 12:44:17', 'joy', '01245678933', 'shovon@gmail.com', 17);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_look_type`
--

CREATE TABLE `tbl_look_type` (
  `maker_id` varchar(100) NOT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `look_type_id` int(11) NOT NULL,
  `look_type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_look_type`
--

INSERT INTO `tbl_look_type` (`maker_id`, `auth_id`, `action_type`, `action_date`, `look_type_id`, `look_type_name`) VALUES
('1730020@iub.edu.bd', '1', 'update', '2023-04-12 12:31:32', 1, 'PropertyType'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 2, 'PropertySubType'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 3, 'Amenities'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 4, 'RenovationType'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 5, 'Services'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 6, 'FollowUs'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 7, 'PropertyStatus'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-03-21 00:00:00', 8, 'DescriptiveStatus'),
('1730020@iub.edu.bd', NULL, 'insert', '2023-04-11 13:00:21', 9, 'Purpose');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_look_up`
--

CREATE TABLE `tbl_look_up` (
  `maker_id` varchar(100) NOT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `look_up_id` int(11) NOT NULL,
  `look_up_name` varchar(50) NOT NULL,
  `short_name` varchar(10) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `look_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_look_up`
--

INSERT INTO `tbl_look_up` (`maker_id`, `auth_id`, `action_type`, `action_date`, `look_up_id`, `look_up_name`, `short_name`, `sort_order`, `look_type_id`) VALUES
('1730020@iub.edu.bd', '1730020@iub.edu.bd', 'update', '2023-04-12 12:01:46', 1, 'Comercial', 'com', 1, 1),
('1730020@iub.edu.bd', '1730020@iub.edu.bd', 'update', '2023-04-30 12:28:43', 2, 'CCTV', 'cctv', 1, 3),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 12:37:25', 3, 'Residential', 'res', 2, 1),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 12:44:02', 4, 'Industrial', 'ind', 3, 1),
('1730020@iub.edu.bd', '1730020@iub.edu.bd', 'update', '2023-04-30 12:28:20', 5, 'Lift', 'lift', 2, 3),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:00:41', 6, 'Rent', 'rnt', 1, 9),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:01:07', 7, 'Sell', 'sll', 2, 9),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:06:12', 8, 'Newly Published', 'nwp', 1, 7),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:06:33', 9, 'Popular', 'plr', 2, 7),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:06:49', 10, 'Sold', 'sld', 3, 7),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:07:18', 11, 'Inactive', 'inctv', 4, 7),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:07:51', 12, 'Deleted', 'dltd', 5, 7),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:08:40', 13, 'Fully Furnished', 'flfrnsd', 1, 8),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:09:36', 14, 'Under Construction', 'ndrcns', 2, 8),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:09:51', 15, 'Ready', 'rdy', 3, 8),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:30:16', 16, ' AC Land Mutation', 'mutation', 1, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:31:01', 17, 'Deed Withdrawal', 'deed', 2, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:31:41', 18, 'Hiba-Bil-Iwaz Deed', 'hiba deed', 3, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:32:12', 19, 'Title Deed', 'ttl dd', 4, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:33:31', 20, 'Power of Attorney', 'pwr of att', 5, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 09:34:04', 21, 'Deed of agreement', 'agrmnt dd', 6, 5),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 14:54:05', 22, 'Interior Painting', 'int pnt', 1, 4),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 14:54:27', 23, 'Exterior Painting', 'ex pnt', 2, 4),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 14:55:25', 24, 'Plaster Work', 'pltr wrk', 3, 4),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 14:55:52', 25, 'Kitchen Remodel ', 'ktchn rmdl', 4, 4),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-30 12:29:08', 26, 'Generator', 'gnrtr', 3, 3),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-30 12:29:34', 27, 'Garage', 'grg', 4, 3),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-30 12:30:15', 28, 'Intercom', 'intrcm', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_property_info`
--

CREATE TABLE `tbl_property_info` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `property_id` varchar(30) NOT NULL,
  `property_name` varchar(30) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `city` varchar(30) NOT NULL,
  `property_area` varchar(30) NOT NULL,
  `property_size` varchar(100) NOT NULL,
  `beds` int(11) NOT NULL,
  `baths` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `is_occupied` int(1) NOT NULL,
  `floor_plan` varchar(500) NOT NULL,
  `phone_number` varchar(14) NOT NULL,
  `property_address` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `purpose_code` int(11) NOT NULL,
  `property_type_code` int(11) NOT NULL,
  `descriptive_status_code` int(11) NOT NULL,
  `amenities` varchar(500) NOT NULL,
  `property_status_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_property_info`
--

INSERT INTO `tbl_property_info` (`auth_id`, `action_type`, `action_date`, `property_id`, `property_name`, `description`, `city`, `property_area`, `property_size`, `beds`, `baths`, `price`, `is_occupied`, `floor_plan`, `phone_number`, `property_address`, `level`, `email`, `purpose_code`, `property_type_code`, `descriptive_status_code`, `amenities`, `property_status_code`) VALUES
('shovon@gmail.com', 'update', '2023-04-30 12:31:28', '1', 'Beautiful 4104 sqft Apartment ', 'If you are looking for a beautiful spacious apartment then this is the right choice for you. It\'s a spacious 4104 sft apartment with 2 car parking. Full of natural air and sunlight. This beautiful apartment comes up with spacious area. You will get all the extraordinary facilities you need to live a better life. There are multiple shopping malls and restaurants nearby. Schools and universities are also available nearby to assure that your child gets a better education. This apartment has big size balconies to spend some me time after a hectic day.\r\nPlease contact us to book a visit at this apartment.', 'Dhaka', 'Gulshan ', '4104', 4, 5, '72000000.00', 1, 'public/uploads/Beautiful 4104 sqft Apartment _20230430_123128.png', '01478965233', 'Gulshan', 4, 'shovon@gmail.com', 6, 1, 13, 'CCTV,Lift,Generator,Garage,Intercom', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:09:07', '10', 'Luxurious Apartment for Sale', 'Are you searching for a beautiful home to buy at one of the most upscale locations in the city?\r\n\r\nThis is exactly what you are looking for. With a 2745 square ft. area, it will definitely make home ownership a joyful experience for you. This excellent 4 bedrooms, 5 Bathrooms and 3 balcony apartment is located in Dhanmondi. All the rooms have ample space and will allow you to decorate your home according to your preference. Top-notch quality fittings and fixtures have been used for the three modernly designed bathrooms of this apartment. The apartment also allows the residents to have all the contemporary civic facilities such as cafes, restaurants etc. in the vicinity.\r\n\r\nSo, if you want to know more about this apartment or want to visit it firsthand, we are just one phone call away.', 'Dhaka', 'Dhanmondi', '4735 Sft', 4, 3, '50000000.00', 0, 'public/uploads/Luxurious Apartment for Sale_20230425_230907.png', '01245678933', 'Dhanmondi', 6, 'shovon@gmail.com', 7, 3, 15, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:04:51', '11', 'Residential Apartment Availabl', 'This residential apartment located in the heart of Dhanmondi is an excellent rental opportunity for anyone looking for a luxurious living experience. With 2585 square feet of space spread over the first floor, this apartment boasts of four bedrooms, four bathrooms, a spacious living room, a modern kitchen, and two balconys. It also comes with a dedicated parking space and access to a wide range of amenities, such as a children\'s play space and dual entry. The apartment is only a short distance away from the city\'s major shopping and entertainment hubs, and is conveniently connected to public transport. With its modern design, top-of-the-line fixtures, and its prime location, this apartment is an ideal choice for anyone who wants to enjoy the best of modern living.', 'Dhaka', 'Dhanmondi', '2585', 4, 4, '72000.00', 1, 'public/uploads/Residential Apartment Available For Rent_20230425_230451.png', '01478965233', 'Dhanmondi', 1, 'shovon@gmail.com', 6, 3, 15, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:27:38', '12', 'Beautiful 3300 sqft. Apartment', 'Are you searching for a beautiful home to buy at one of the most upscale locations in the city?\r\n\r\nThis is exactly what you are looking for. With a 3300 square ft. area, it will definitely make home ownership a joyful experience for you. This excellent 4 bedrooms, 4 Bathrooms and 3 balcony apartment is located in Dhanmondi. All the rooms have ample space and will allow you to decorate your home according to your preference. Top-notch quality fittings and fixtures have been used for the three modernly designed bathrooms of this apartment. The apartment also allows the residents to have all the contemporary civic facilities such as cafes, restaurants etc. in the vicinity.\r\n\r\nSo, if you want to know more about this apartment or want to visit it firsthand, we are just one phone call away.', 'Dhaka', 'Dhanmondi', '3300', 4, 4, '55000000.00', 1, 'public/uploads/Beautiful 3300 sqft. Apartment_20230425_232738.png', '01478965233', 'Dhanmondi', 1, 'shovon@gmail.com', 7, 3, 13, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:30:54', '13', 'A worthwhile 16800 SQ FT resid', 'This lucrative land with G+8 Building has a lot to offer. The plot has a content plan of making sure you get a life with every possible facility. So If you want to live in an environment which is absolutely secure and peaceful then it is the right time and the right place to invest your money. Grab this great opportunity to execute your dreams into reality.', 'Dhaka', 'Bashundhara', '16800', 4, 4, '99999999.99', 0, 'public/uploads/A worthwhile 16800 SQ FT residential_20230425_233054.png', '01245678933', 'Bashundhara', 7, 'shovon@gmail.com', 7, 3, 14, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:32:12', '14', '5163 sft Ready Flat Is Now For', 'This wonderful residence is nestled on a large level in the desirable location of Bashundhara R-A. The house comes complete with bed, a welcoming kitchen/dining area and bath. Moreover, the home retains the value of peaceful living while being conveniently close to shops, school and transport. Standing on a strong structure, the flat is spanning over in total. The asking price of this flat for sale surely comes within your affordability.\r\n\r\nProperty Features:\r\nNorth-East Corner\r\nProperty size: 5163 Sq. Ft\r\nNumber of bed & bath: 6,5\r\nElectricity Backup\r\nParking\r\nTerrace\r\nDedicated Security Guard\r\nTiled Floor\r\nBalconies\r\n\r\nContact us at your earliest to know more about this apartment.', 'Dhaka', 'Bashundhara', '5163', 6, 5, '99999999.99', 1, 'public/uploads/5163 sft Ready Flat Is Now For Sale_20230425_233212.png', '01245678933', 'Bashundhara', 4, 'shovon@gmail.com', 7, 3, 13, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:33:21', '15', '2200 Square Feet Apartment Is ', 'This is a great place to reside in, having an area with a good number of shopping places and schools. The apartment is cozy and all utility supplies are readily accessible. Serene and fortified living has become a must when it comes to securing a permanent address in a busy city like Dhaka. So we suggest you see this flat by yourself. We hope it will make sure you are gratified with the home that has always been pictured in your mind.\r\n\r\nService charge BDT 10000.\r\nSouth-West Facing with terrace Corner Plot\r\n\r\n\r\n2 months in advance.\r\n\r\nLet us help you to make up your mind and bring you here to experience what you have been imagining all these years for your future home.', 'Dhaka', 'Bashundhara', '2200', 4, 4, '75000.00', 0, 'public/uploads/2200 Square Feet Apartment Is Up For Rent_20230425_233321.png', '01245678933', 'Bashundhara', 6, 'shovon@gmail.com', 6, 3, 13, '2', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:34:32', '16', '2200 Square Feet Apartment Is ', 'This is a great place to reside in, having an area with a good number of shopping places and schools. The apartment is cozy and all utility supplies are readily accessible. Serene and fortified living has become a must when it comes to securing a permanent address in a busy city like Dhaka. So we suggest you see this flat by yourself. We hope it will make sure you are gratified with the home that has always been pictured in your mind.\r\n\r\nService charge BDT 10000.\r\nSouth-West Facing Corner Plot\r\n\r\n2 months in advance.\r\n\r\nLet us help you to make up your mind and bring you here to experience what you have been imagining all these years for your future home.', 'Dhaka', 'Bashundhara', '2000', 4, 2, '65000.00', 1, 'public/uploads/2200 Square Feet Apartment Is Up For Rent_20230425_233432.png', '01478965233', 'Bashundhara', 1, 'shovon@gmail.com', 6, 3, 13, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:38:27', '17', 'Beautiful 1200 sqft Apartment', '3 bedroom, 2 bathroom home in the Mirpur Area. This property offers a size of 1200 square feet. Your family and loved ones will enjoy the spacious windows & balconies, perfect for family gatherings! Come and take a look at this beauty…Don\'t miss out', 'Dhaka', 'Mirpur', '1200', 3, 2, '17000.00', 1, 'public/uploads/Beautiful 1200 sqft Apartment_20230425_233827.png', '01245678933', 'Mirpur', 1, 'shovon@gmail.com', 6, 3, 15, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 23:39:36', '18', 'A 1200 sqft used apartment for', '1200 Sft used apartment for sale in Mirpur\r\n\r\nBed 3, Bath 4, Parking 1\r\n\r\nLand size 4 katha\r\n\r\nBuilding G+6\r\n\r\nTotal Unit-12\r\n\r\nFacing- North\r\n\r\nGov Gas connection\r\n\r\nHand over 2012', 'Dhaka', 'Mirpur', '1200', 4, 3, '8500000.00', 0, 'public/uploads/A 1200 sqft used apartment for sale _20230425_233936.png', '01478523699', 'Mirpur', 6, 'shovon@gmail.com', 7, 3, 13, '2', 8),
('joy@gmail.com', 'insert', '2023-04-25 23:41:24', '19', '1220 sft A Used Apartment Sale', 'Property Feature:\r\nWest Face Building\r\nLand Area: 30 Katha\r\nRoad Size: 60 Feet\r\nGenerator\r\nElevator\r\n1 Car Parking\r\nReception Area\r\nDedicated Security Guard\r\nUnit Floor: 6th\r\nUnit Area: 1476 SFT\r\nTiles Floor\r\nUtilities (LPG Gas, Water & Electricity)', 'Dhaka', 'Mirpur', '1476', 3, 3, '11800000.00', 1, 'public/uploads/1220 sft A Used Apartment Sale_20230425_234124.png', '01478965233', 'Mirpur', 1, 'joy@gmail.com', 7, 3, 13, '5', 7),
('shovon@gmail.com', 'insert', '2023-04-25 20:55:38', '2', 'A Splendid 4735 sft Apartment ', 'This beautiful 4735 square feet apartment comes up with spacious area and stunning interior. If you are looking for something like this then this would be the best option for you. You will get all the extraordinary facilities you need to live a better life. There are multiple shopping malls and restaurants nearby. Schools and universities are also available nearby to assure that your child gets a better education. Since its a corner plot apartment it has got bedrooms with full of natural air and sunlight. You will also get a well equipped gymnasium and well arranged community hall to arrange your small parties. There is a playground also for kids. This apartment has big size balconies to spend some me time after a hectic day.\r\n\r\nWant to visit this stunning apartment? Please contact us to fix a visit and for more details. ', 'Dhaka', 'Gulshan ', '4735 Sft', 3, 2, '66000000.00', 1, 'public/uploads/A Splendid 4735 sft Apartment Is Up For Sale At Gulshan_20230425_205538.png', '01478965233', 'Gulshan', 4, 'shovon@gmail.com', 7, 3, 15, '2', 8),
('joy@gmail.com', 'insert', '2023-04-25 23:43:19', '20', 'A Nice Residential 3300 SFT Du', 'PRISM Property Ltd. is delighted to serve you this 3300 Sqft. beautiful duplex apartment for sale in Mirpur DOHS. This beautiful duplex will provide you a premium living and exclusive comforts. This flat has amazing rooms which are enough to get you swayed to seize the flat right away. Top-notch quality fittings and fixtures have been used for the three modernly designed bathrooms of this apartment. This apartment has balconies to refill the happy time with your family after a hectic day.\r\n\r\nSo, if you want to know more about this apartment or want to visit it firsthand, we are just one phone call away.', 'Dhaka', 'Mirpur', '3300', 5, 5, '37500000.00', 1, 'public/uploads/A Nice Residential 3300 SFT Duplex_20230425_234318.png', '01245678933', 'Mirpur', 6, 'joy@gmail.com', 7, 3, 13, '5', 7),
('shovon@gmail.com', 'insert', '2023-04-25 20:58:29', '3', 'Apartment for Sale in Gulshan ', 'Want a modern apartment within your budget? Then you must check out this 3300 Square Feet apartment in Gulshan. Featuring 4 beds and 4 baths, this apartment is perfect for newly wed couples or small families. As you enter the apartment, you would see a cozy living cum dining space. There is an attached bathroom with the master bedroom. There is a nice balcony with the master bedroom. The kitchen space has been done in a very organized way with modern fittings. However, the most interesting aspect of the apartment is its interior. A contrast of nice color combinations has been created in the living space.', 'Dhaka', 'Gulshan ', '3300 sft', 4, 2, '60000000.00', 1, 'public/uploads/Apartment for Sale in Gulshan 2_20230425_205829.png', '01478965233', 'Gulshan', 6, 'shovon@gmail.com', 7, 3, 13, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 21:01:46', '4', 'Beautiful 4383 Sq Ft Residenti', 'Gorgeous 4-bedroom, 5-bathroom home in the beautiful Gulshan Area. This property offers a size of 4383 square feet. Your family and loved ones will enjoy the spacious windows & balconies, perfect for family gatherings! Come and take a look at this beauty…Don\'t miss out!', 'Dhaka', 'Gulshan ', '4383 sqft', 4, 5, '250000.00', 1, 'public/uploads/Beautiful 4383 Sq Ft Residential Apartment For Rent in Gulshan._20230425_210146.png', '01245678933', 'Gulshan', 6, 'shovon@gmail.com', 6, 3, 15, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 21:15:36', '5', '3183 sft Lake View Residential', 'This 3183 sft Lake View Residential Apartment for sale in Banani offers an unparalleled lifestyle of luxury and comfort. The apartment is situated on the 8th floor of the building and offers a spacious and bright living area with three large bedrooms, four bathrooms, and a large balcony overlooking the lake. The apartment also includes a fully equipped kitchen, a separate laundry area and a private parking space. An ideal property for a family looking for a comfortable and luxurious living experience.', 'Dhaka', 'Banani', '3183 sqft', 3, 3, '65500000.00', 1, 'public/uploads/3183 sft Lake View Residential Apartment Sale at Banani_20230425_211536.png', '01478523699', 'Banani', 4, 'shovon@gmail.com', 7, 3, 15, '2', 8),
('shovon@gmail.com', 'update', '2023-04-25 21:22:38', '6', 'Luxurious Fully Furnished 3500', 'Gorgeous 3-bedroom, 2-bathroom home in beautiful in Banani Area. This property offers 3000 square feet of living space and a lot size of 3500 square feet. Your family and loved ones will enjoy the spacious windows & balconies, perfect for family gatherings! Come and take a look at this beauty…Don\'t miss out!\r\nLeasehold\r\nEntrance Hall\r\nSouth-Facing Living Room\r\nSeparate Kitchen\r\nThree Bedrooms\r\nModern Shower Room\r\nDouble-Glazing & Gas Available\r\nProperty would benefit from re-decoration', 'Dhaka', 'Banani', '3500', 3, 3, '65000000.00', 1, 'public/uploads/Luxurious Fully Furnished 3500_20230425_212238.png', '01478523699', 'Banani', 4, 'shovon@gmail.com', 7, 3, 15, '2', 8),
('shovon@gmail.com', 'insert', '2023-04-25 21:37:28', '7', 'Beautiful Semi-Furnished Apart', 'Banani is one of the most developed streets in Dhaka right now. It was planned for a middle-class family to live, but over time, and with the rapid development, it has become an elite city in Dhaka.', 'Dhaka', 'Banani', '3800', 4, 5, '220000.00', 1, 'public/uploads/Beautiful Semi-Furnished Apartment_20230425_213728.png', '01478965233', 'Banani', 4, 'shovon@gmail.com', 6, 3, 15, '5', 8),
('shovon@gmail.com', 'insert', '2023-04-25 21:38:45', '8', 'Apartment For Rent In Banani.', ' Furnished Gorgeous 3-bedroom, 3-bathroom home in the beautiful Banani Area. This property offers a size of 2000 square feet. Your family and loved ones will enjoy the spacious windows & balconies, perfect for family gatherings! Come and take a look at this beauty…Don\'t miss out', 'Dhaka', 'Banani', '2000', 3, 3, '170000.00', 0, 'public/uploads/Apartment For Rent In Banani._20230425_213845.png', '01245678933', 'Banani', 4, 'shovon@gmail.com', 6, 3, 15, '5', 8),
('shovon@gmail.com', 'update', '2023-04-27 14:12:42', '9', 'Sumptuous Full Furnished 4100 ', 'This is exactly what you are looking for with a 4100 square ft. area, it will definitely make home ownership a joyful experience for you there are excellent 5 bedrooms, 7 Bathrooms and 5 balcony, 3 Parking, prayer room with 300+ people capacity Community Hall apartment is located in Dhanmondi. All the rooms have ample space and will allow you to decorate your home according to your preference. Top-notch quality fittings and fixtures have been used for the three modernly designed bathrooms of this apartment. The apartment also allows the residents to have all the contemporary civic facilities such as cafes, restaurants etc. in the vicinity. So, if you want to know more about this apartment or want to visit it firsthand, we are just one phone call away.', 'Dhaka', 'Dhanmondi', '4100', 4, 5, '73500000.00', 1, 'public/uploads/Sumptuous Full Furnished 4100 _20230427_141242.png', '01245678933', 'Dhanmondi', 4, 'shovon@gmail.com', 6, 1, 13, 'Amenity 1,Amenity 2', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renovation`
--

CREATE TABLE `tbl_renovation` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `property_size` varchar(100) NOT NULL,
  `property_area` varchar(100) NOT NULL,
  `property_city` varchar(100) NOT NULL,
  `property_address` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `request_id` int(11) NOT NULL,
  `renovation_type_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_renovation`
--

INSERT INTO `tbl_renovation` (`auth_id`, `action_type`, `action_date`, `property_size`, `property_area`, `property_city`, `property_address`, `name`, `email`, `phone`, `request_id`, `renovation_type_code`) VALUES
('joy@gmail.com', 'insert', '2023-04-27 11:07:42', '1200', 'banani', 'Dhaka', '1296, west banani dhaka 1216', 'joy', 'joy@gmail.com', '01245678933', 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `slider_id` int(11) NOT NULL,
  `img_path` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `sub_title` varchar(10) NOT NULL,
  `priority` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`auth_id`, `action_type`, `action_date`, `slider_id`, `img_path`, `title`, `sub_title`, `priority`, `company_id`) VALUES
('NULL', 'update', '2023-04-02 10:48:05', 1, 'img....path2', 'title', 'sub title', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `maker_id` varchar(100) NOT NULL,
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(120) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_type` enum('administrator','customer') NOT NULL,
  `title` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_user_info`
--

INSERT INTO `tbl_user_info` (`maker_id`, `auth_id`, `action_type`, `action_date`, `name`, `password`, `phone`, `email`, `user_type`, `title`) VALUES
('1', '1730020@iub.edu.bd', 'update', '2023-04-17 11:13:32', 'System Admin', '$2y$10$ALj32R5akJ8yM/Fp6ui3UOaQ19BnGoTdecU7Ox7c5bd1dgh5lUanG', '0183949291', '1730020@iub.edu.bd', 'administrator', 'Mr'),
('joy@gmail.com', NULL, 'insert', '2023-04-05 16:35:39', 'joy', '$2y$10$rkhUFhAcAeRK7BRcBu19v.DPm4.waHt/hn2hnbJFp/YQuiH3ts7f.', '01478965233', 'joy@gmail.com', 'customer', 'Mr.'),
('moinctg@yahoo.com', NULL, 'insert', '2023-04-26 10:30:42', 'Moin', '$2y$10$fkx.45nCShm6RkKZiLLt/ep3ShJ32zjfMzROrwh38ijd86OXlXQNG', '01730341177', 'moinctg@yahoo.com', 'customer', 'MR.'),
('nidhi@gmail.com', 'nidhi@gmail.com', 'update', '2023-04-16 12:00:04', 'nidhi', '$2y$10$ZL3AhHiZjDFXdNRHIGpa1.KAHXyThGsgPuLV/T.NV2CDtw8Gw7wvW', '01245678933', 'nidhi@gmail.com', 'customer', 'Mrs'),
('shovon@gmail.com', 'shovon@gmail.com', 'update', '2023-04-17 11:58:06', 'Shovon Rahman', '$2y$10$w3a7IVXyjlEWGja2m6ynj.WN2Q5UrIyztbbbg76Sip4kLXgEAy2MW', '01312457896', 'shovon@gmail.com', 'customer', 'Mr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_book_visit`
--
ALTER TABLE `tbl_book_visit`
  ADD PRIMARY KEY (`date`,`property_id`),
  ADD KEY `tbl_bookvisit_userinfo_fk` (`email`),
  ADD KEY `tbl_bookvisit_propertyinfo_fk` (`property_id`);

--
-- Indexes for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD PRIMARY KEY (`career_id`),
  ADD KEY `tbl_careers_companyprofile_fk` (`maker_id`);

--
-- Indexes for table `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `tbl_companyprofile_userinfo_fk` (`maker_id`);

--
-- Indexes for table `tbl_favourites`
--
ALTER TABLE `tbl_favourites`
  ADD PRIMARY KEY (`email`,`property_id`),
  ADD KEY `tbl_favourites_propertyinfo_fk` (`property_id`);

--
-- Indexes for table `tbl_homeloan`
--
ALTER TABLE `tbl_homeloan`
  ADD PRIMARY KEY (`email`,`property_id`),
  ADD KEY `tbl_homeloan_propertyinfo_fk` (`property_id`);

--
-- Indexes for table `tbl_inquery`
--
ALTER TABLE `tbl_inquery`
  ADD PRIMARY KEY (`inquery_id`),
  ADD KEY `tbl_inquery_userinfo_fk` (`maker_id`);

--
-- Indexes for table `tbl_legal_services`
--
ALTER TABLE `tbl_legal_services`
  ADD PRIMARY KEY (`email`,`service_code`),
  ADD KEY `tbl_legalservices_lookup_fk` (`service_code`);

--
-- Indexes for table `tbl_look_type`
--
ALTER TABLE `tbl_look_type`
  ADD PRIMARY KEY (`look_type_id`),
  ADD KEY `tbl_looktype_userinfo_fk` (`maker_id`);

--
-- Indexes for table `tbl_look_up`
--
ALTER TABLE `tbl_look_up`
  ADD PRIMARY KEY (`look_up_id`),
  ADD KEY `tbl_lookup_looktype_fk` (`look_type_id`),
  ADD KEY `tbl_lookup_userinfo_fk` (`maker_id`);

--
-- Indexes for table `tbl_property_info`
--
ALTER TABLE `tbl_property_info`
  ADD PRIMARY KEY (`property_id`),
  ADD KEY `tbl_propertyinfo_lookup_fk` (`email`),
  ADD KEY `tbl_propertyinfo_lookup_purposecode_fk` (`purpose_code`),
  ADD KEY `tbl_propertyinfo_lookup_propertytypcd_fk` (`property_type_code`),
  ADD KEY `tbl_propertyinfo_lookup_descriptivstscd_fk` (`descriptive_status_code`),
  ADD KEY `tbl_propertyinfo_lookup_amenitiescode_fk` (`amenities`),
  ADD KEY `tbl_propertyinfo_lookup_propertystscd_fk` (`property_status_code`);

--
-- Indexes for table `tbl_renovation`
--
ALTER TABLE `tbl_renovation`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `tbl_renovation_lookup_fk` (`renovation_type_code`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `tbl_slider_companyprofile_fk` (`company_id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_inquery`
--
ALTER TABLE `tbl_inquery`
  MODIFY `inquery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_renovation`
--
ALTER TABLE `tbl_renovation`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_book_visit`
--
ALTER TABLE `tbl_book_visit`
  ADD CONSTRAINT `tbl_bookvisit_propertyinfo_fk` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_info` (`property_id`),
  ADD CONSTRAINT `tbl_bookvisit_userinfo_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_careers`
--
ALTER TABLE `tbl_careers`
  ADD CONSTRAINT `tbl_careers_companyprofile_fk` FOREIGN KEY (`maker_id`) REFERENCES `tbl_company_profile` (`company_id`);

--
-- Constraints for table `tbl_company_profile`
--
ALTER TABLE `tbl_company_profile`
  ADD CONSTRAINT `tbl_companyprofile_userinfo_fk` FOREIGN KEY (`maker_id`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_favourites`
--
ALTER TABLE `tbl_favourites`
  ADD CONSTRAINT `tbl_favourites_propertyinfo_fk` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_info` (`property_id`),
  ADD CONSTRAINT `tbl_favourites_userinfo_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_homeloan`
--
ALTER TABLE `tbl_homeloan`
  ADD CONSTRAINT `tbl_homeloan_propertyinfo_fk` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_info` (`property_id`),
  ADD CONSTRAINT `tbl_homeloan_userinfo_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_inquery`
--
ALTER TABLE `tbl_inquery`
  ADD CONSTRAINT `tbl_inquery_userinfo_fk` FOREIGN KEY (`maker_id`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_legal_services`
--
ALTER TABLE `tbl_legal_services`
  ADD CONSTRAINT `tbl_legalservices_lookup_fk` FOREIGN KEY (`service_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_legalservices_userinfo_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_look_type`
--
ALTER TABLE `tbl_look_type`
  ADD CONSTRAINT `tbl_looktype_userinfo_fk` FOREIGN KEY (`maker_id`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_look_up`
--
ALTER TABLE `tbl_look_up`
  ADD CONSTRAINT `tbl_lookup_looktype_fk` FOREIGN KEY (`look_type_id`) REFERENCES `tbl_look_type` (`look_type_id`),
  ADD CONSTRAINT `tbl_lookup_userinfo_fk` FOREIGN KEY (`maker_id`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_property_info`
--
ALTER TABLE `tbl_property_info`
  ADD CONSTRAINT `tbl_propertyinfo_lookup_descriptivstscd_fk` FOREIGN KEY (`descriptive_status_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_propertystscd_fk` FOREIGN KEY (`property_status_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_propertytypcd_fk` FOREIGN KEY (`property_type_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_purposecode_fk` FOREIGN KEY (`purpose_code`) REFERENCES `tbl_look_up` (`look_up_id`);

--
-- Constraints for table `tbl_renovation`
--
ALTER TABLE `tbl_renovation`
  ADD CONSTRAINT `tbl_renovation_lookup_fk` FOREIGN KEY (`renovation_type_code`) REFERENCES `tbl_look_up` (`look_up_id`);

--
-- Constraints for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD CONSTRAINT `tbl_slider_companyprofile_fk` FOREIGN KEY (`company_id`) REFERENCES `tbl_company_profile` (`company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
