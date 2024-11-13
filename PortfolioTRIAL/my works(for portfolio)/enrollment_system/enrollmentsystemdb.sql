-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 07, 2024 at 12:00 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentsystemdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `contact_details_id` int(11) NOT NULL,
  `student_info_id` int(11) DEFAULT NULL,
  `contact_email` varchar(50) NOT NULL,
  `mobile_number_1` varchar(50) NOT NULL,
  `mobile_number_2` varchar(50) DEFAULT NULL,
  `student_address` varchar(100) NOT NULL,
  `contact_person_name` varchar(50) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `contact_person_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_details`
--

CREATE TABLE `enrollment_details` (
  `enrollment_details_id` int(11) NOT NULL,
  `student_info_id` int(11) DEFAULT NULL,
  `grade_level` enum('Grade 11','Grade 12') NOT NULL,
  `payment_schedule` enum('Full Cash Basic','Semi-Annual','Quarterly','Monthly Basis','Other') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents_information`
--

CREATE TABLE `parents_information` (
  `parents_info_id` int(11) NOT NULL,
  `student_info_id` int(11) DEFAULT NULL,
  `mothers_maiden_name` varchar(50) NOT NULL,
  `fathers_name` varchar(50) NOT NULL,
  `reason_for_not_specifying_maidens_name` varchar(200) DEFAULT NULL,
  `guardian_name` varchar(50) NOT NULL,
  `guardian_contact_no` varchar(50) NOT NULL,
  `guardian_address` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `ethnicity` varchar(50) DEFAULT NULL,
  `mother_tongue` varchar(50) DEFAULT NULL,
  `other_spoken_languages` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `previous_school_details`
--

CREATE TABLE `previous_school_details` (
  `previous_school_id` int(11) NOT NULL,
  `student_info_id` int(11) DEFAULT NULL,
  `school_name` varchar(100) NOT NULL,
  `school_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `student_info_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) NOT NULL,
  `extension_name` varchar(50) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `lrn_number` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `religion` varchar(50) NOT NULL,
  `place_of_birth` varchar(100) NOT NULL,
  `have_been_hospitalized` tinyint(1) DEFAULT NULL,
  `reason` varchar(200) DEFAULT NULL,
  `medical_history` varchar(100) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`contact_details_id`),
  ADD UNIQUE KEY `contact_email` (`contact_email`),
  ADD UNIQUE KEY `mobile_number_1` (`mobile_number_1`),
  ADD KEY `student_info_id` (`student_info_id`);

--
-- Indexes for table `enrollment_details`
--
ALTER TABLE `enrollment_details`
  ADD PRIMARY KEY (`enrollment_details_id`),
  ADD KEY `student_info_id` (`student_info_id`);

--
-- Indexes for table `parents_information`
--
ALTER TABLE `parents_information`
  ADD PRIMARY KEY (`parents_info_id`),
  ADD KEY `student_info_id` (`student_info_id`);

--
-- Indexes for table `previous_school_details`
--
ALTER TABLE `previous_school_details`
  ADD PRIMARY KEY (`previous_school_id`),
  ADD KEY `student_info_id` (`student_info_id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`student_info_id`),
  ADD UNIQUE KEY `lrn_number` (`lrn_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `contact_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrollment_details`
--
ALTER TABLE `enrollment_details`
  MODIFY `enrollment_details_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parents_information`
--
ALTER TABLE `parents_information`
  MODIFY `parents_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `previous_school_details`
--
ALTER TABLE `previous_school_details`
  MODIFY `previous_school_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `student_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD CONSTRAINT `contact_details_ibfk_1` FOREIGN KEY (`student_info_id`) REFERENCES `student_information` (`student_info_id`);

--
-- Constraints for table `enrollment_details`
--
ALTER TABLE `enrollment_details`
  ADD CONSTRAINT `enrollment_details_ibfk_1` FOREIGN KEY (`student_info_id`) REFERENCES `student_information` (`student_info_id`);

--
-- Constraints for table `parents_information`
--
ALTER TABLE `parents_information`
  ADD CONSTRAINT `parents_information_ibfk_1` FOREIGN KEY (`student_info_id`) REFERENCES `student_information` (`student_info_id`);

--
-- Constraints for table `previous_school_details`
--
ALTER TABLE `previous_school_details`
  ADD CONSTRAINT `previous_school_details_ibfk_1` FOREIGN KEY (`student_info_id`) REFERENCES `student_information` (`student_info_id`);

--
-- Constraints for table `student_information`
--
ALTER TABLE `student_information`
  ADD CONSTRAINT `student_information_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
