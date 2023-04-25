-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 01:03 PM
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
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `remarks` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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

--
-- Dumping data for table `tbl_careers`
--

INSERT INTO `tbl_careers` (`maker_id`, `auth_id`, `action_type`, `action_date`, `career_id`, `job_title`, `job_description`, `phone`, `email`) VALUES
(1, NULL, 'insert', '2023-04-11 11:33:49', 7, 'Job 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '01245678933', 'prism-hr@prism.com');

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
('NULL', 'update', '2023-04-02 11:51:58', 'shovon rahman', '02345678999', 'shovon@gmail.com', 2);

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
('1730020@iub.edu.bd', 'NULL', 'update', '2023-04-02 09:09:15', 2, 'Amenity 1', 'Amn', 2, 3),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 12:37:25', 3, 'Residential', 'res', 2, 1),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 12:44:02', 4, 'Industrial', 'ind', 3, 1),
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-11 13:00:00', 5, 'Amenity 2', 'amn', 2, 3),
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
('1730020@iub.edu.bd', 'NULL', 'insert', '2023-04-25 14:55:52', 25, 'Kitchen Remodel ', 'ktchn rmdl', 4, 4);

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
  `amenities_code` int(11) NOT NULL,
  `property_status_code` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_renovation`
--

CREATE TABLE `tbl_renovation` (
  `auth_id` varchar(100) DEFAULT NULL,
  `action_type` enum('insert','update','delete') NOT NULL,
  `action_date` datetime NOT NULL,
  `property_size` decimal(5,2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `property_id` varchar(30) NOT NULL,
  `renovation_type_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
  ADD KEY `tbl_propertyinfo_lookup_amenitiescode_fk` (`amenities_code`),
  ADD KEY `tbl_propertyinfo_lookup_propertystscd_fk` (`property_status_code`);

--
-- Indexes for table `tbl_renovation`
--
ALTER TABLE `tbl_renovation`
  ADD PRIMARY KEY (`email`,`property_id`,`renovation_type_code`),
  ADD KEY `tbl_renovation_propertyinfo_fk` (`property_id`),
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
  ADD CONSTRAINT `tbl_propertyinfo_lookup_amenitiescode_fk` FOREIGN KEY (`amenities_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_descriptivstscd_fk` FOREIGN KEY (`descriptive_status_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_propertystscd_fk` FOREIGN KEY (`property_status_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_propertytypcd_fk` FOREIGN KEY (`property_type_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_propertyinfo_lookup_purposecode_fk` FOREIGN KEY (`purpose_code`) REFERENCES `tbl_look_up` (`look_up_id`);

--
-- Constraints for table `tbl_renovation`
--
ALTER TABLE `tbl_renovation`
  ADD CONSTRAINT `tbl_renovation_lookup_fk` FOREIGN KEY (`renovation_type_code`) REFERENCES `tbl_look_up` (`look_up_id`),
  ADD CONSTRAINT `tbl_renovation_propertyinfo_fk` FOREIGN KEY (`property_id`) REFERENCES `tbl_property_info` (`property_id`),
  ADD CONSTRAINT `tbl_renovation_userinfo_fk` FOREIGN KEY (`email`) REFERENCES `tbl_user_info` (`email`);

--
-- Constraints for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD CONSTRAINT `tbl_slider_companyprofile_fk` FOREIGN KEY (`company_id`) REFERENCES `tbl_company_profile` (`company_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
