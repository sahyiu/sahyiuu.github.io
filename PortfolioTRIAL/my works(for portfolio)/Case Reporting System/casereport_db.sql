-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jan 22, 2024 at 11:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casereport_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `complainant`
--

CREATE TABLE `complainant` (
  `case_id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `relationshiptovictim` text NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_contactnumber` int(11) NOT NULL,
  `c_case` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complainant`
--

INSERT INTO `complainant` (`case_id`, `c_name`, `relationshiptovictim`, `c_address`, `c_contactnumber`, `c_case`) VALUES
(2, 'Kevyn Avery', 'friend', '487-9853 Magna St.', 334776677, 'fsdfsf'),
(3, 'Zeus Burris', 'none', 'P.O. Box 310, 2532 Suspendisse Avenue', 1485363738, 'vxsdfsdf'),
(4, 'Idola Guerra', 'classmate', 'P.O. Box 892, 2314 Massa Ave', 265478699, 'gdfgd'),
(14, '', '', '', 0, 'ponyems');

-- --------------------------------------------------------

--
-- Table structure for table `offender`
--

CREATE TABLE `offender` (
  `case_id` int(11) NOT NULL,
  `o_name` text NOT NULL,
  `o_id` int(9) NOT NULL,
  `o_date_of_birth` date NOT NULL,
  `o_age` int(2) NOT NULL,
  `o_sex` text NOT NULL,
  `o_yearandsection` varchar(255) NOT NULL,
  `o_adviser` text NOT NULL,
  `o_case` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offender`
--

INSERT INTO `offender` (`case_id`, `o_name`, `o_id`, `o_date_of_birth`, `o_age`, `o_sex`, `o_yearandsection`, `o_adviser`, `o_case`) VALUES
(1, 'Hanna Gomez', 202254621, '2002-11-10', 21, 'F', '2-1', 'Mariel Castillo', 'Maldita'),
(2, 'Ned Campbell', 372332670, '2004-12-01', 19, 'M', '3-5', 'Mariel Castillo', 'Maldita'),
(3, 'Deanna Andrews', 483035570, '2002-11-15', 21, 'F', '4-2', 'Maria Clark', 'Maldita'),
(4, 'Adrianna Tucker', 372332670, '2002-06-20', 21, 'F', '1-5', 'Spike Grant', 'Maldita');

-- --------------------------------------------------------

--
-- Table structure for table `respondent_school_personnel`
--

CREATE TABLE `respondent_school_personnel` (
  `case_id` int(11) NOT NULL,
  `spr_name` text NOT NULL,
  `spr_date_of_birth` date NOT NULL,
  `spr_age` int(11) NOT NULL,
  `spr_sex` text NOT NULL,
  `position` varchar(255) NOT NULL,
  `spr_address` varchar(255) NOT NULL,
  `spr_contactnumber` int(11) NOT NULL,
  `spr_case` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `respondent_school_personnel`
--

INSERT INTO `respondent_school_personnel` (`case_id`, `spr_name`, `spr_date_of_birth`, `spr_age`, `spr_sex`, `position`, `spr_address`, `spr_contactnumber`, `spr_case`) VALUES
(1, 'jerico', '1999-12-08', 25, 'M', 'som', 'bhy', 1234567891, 'b@stos'),
(2, 'Joyce Hunt', '1995-11-10', 28, 'F', 'Guidance Counselor', 'P.O. Box 604, 7545 Arcu. St.', 2147483647, 'sdfsfs'),
(3, 'Alexander Mitchell', '1989-08-10', 34, 'M', 'Janitor', '947-5008 Erat Rd.', 2147483647, 'fsfsdf'),
(4, 'Sam Payne', '1990-12-05', 33, 'F', 'Professor', '9856 Auctor, St.', 2147483647, 'dfsdsf');

-- --------------------------------------------------------

--
-- Table structure for table `respondent_student`
--

CREATE TABLE `respondent_student` (
  `case_id` int(11) NOT NULL,
  `sr_name` text NOT NULL,
  `sr_id` int(9) NOT NULL,
  `sr_date_of_birth` date NOT NULL,
  `sr_age` int(2) NOT NULL,
  `sr_sex` text NOT NULL,
  `sr_yearandsection` varchar(255) NOT NULL,
  `sr_adviser` text NOT NULL,
  `sr_contactnumber` int(11) NOT NULL,
  `sr_case` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `respondent_student`
--

INSERT INTO `respondent_student` (`case_id`, `sr_name`, `sr_id`, `sr_date_of_birth`, `sr_age`, `sr_sex`, `sr_yearandsection`, `sr_adviser`, `sr_contactnumber`, `sr_case`) VALUES
(1, 'Engelbertus', 202215647, '2020-10-12', 15, 'M', '2-3', 'Xerc', 1234567890, 'b@stos'),
(2, 'Alice Johnson', 202245698, '2002-08-15', 19, 'Female', '2-3', 'Ms. Anderson', 2147483647, ''),
(3, 'Bob Smith', 202212365, '2003-03-22', 18, 'Male', '2-4', 'Mr. Davis', 2147483647, ''),
(4, 'Eva Davis', 202246985, '2001-11-10', 20, 'Female', '2-2', 'Mrs. Wilson', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `students_cases`
--

CREATE TABLE `students_cases` (
  `case_id` int(11) NOT NULL,
  `victims_name` text NOT NULL,
  `offenders_name` text NOT NULL,
  `date` datetime NOT NULL,
  `status` enum('warning','suspension','expulsion') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_cases`
--

INSERT INTO `students_cases` (`case_id`, `victims_name`, `offenders_name`, `date`, `status`) VALUES
(1, 'Krishan Avellano', 'Hanna Gomez', '2023-09-25 00:00:00', 'warning'),
(2, 'John Doe', 'Ned Campbell', '2023-11-05 00:00:00', 'expulsion'),
(3, 'Jane Smith', 'Deanna Andrews', '2023-12-08 00:00:00', 'expulsion'),
(4, 'Bob Johnson', 'Adrianna Tucker', '2024-01-12 00:00:00', 'suspension');

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `case_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `id` int(9) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` text NOT NULL,
  `yearandsection` varchar(255) NOT NULL,
  `adviser` text NOT NULL,
  `case` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `victim`
--

INSERT INTO `victim` (`case_id`, `name`, `id`, `date_of_birth`, `age`, `sex`, `yearandsection`, `adviser`, `case`) VALUES
(1, 'Krishan Avellano', 202211670, '2004-02-04', 19, 'female', '2-7', 'Edan Belgica', 'eme'),
(2, 'John Doe', 202245687, '1990-05-15', 32, 'Male', 'Grade 10/A', 'Mr. Smith', ''),
(3, 'Jane Smith', 202215468, '1988-09-20', 34, 'Female', 'Grade 11/B', 'Ms. Johnson', ''),
(4, 'Bob Johnson', 202233651, '1995-03-08', 27, 'Male', 'Grade 12/C', 'Mrs. Brown', '');

-- --------------------------------------------------------

--
-- Table structure for table `victims_father`
--

CREATE TABLE `victims_father` (
  `case_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `f_age` int(11) NOT NULL,
  `f_occupation` varchar(255) NOT NULL,
  `f_address` varchar(255) NOT NULL,
  `f_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `victims_father`
--

INSERT INTO `victims_father` (`case_id`, `f_name`, `f_age`, `f_occupation`, `f_address`, `f_contact`) VALUES
(1, 'Christopher Avellano', 45, 'Call center agent ', 'B3 L55 greentown village', 2147483647),
(2, 'John Doe', 60, 'Engineer', '456 Oak St, Townsville', 1234567890),
(3, 'Bob Smith', 55, 'Architect', '789 Pine St, Hamletsville', 2147483647),
(4, 'David Johnson', 50, 'Accountant', '654 Birch St, Ruralville', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `victims_mother`
--

CREATE TABLE `victims_mother` (
  `case_id` int(11) NOT NULL,
  `m_name` text NOT NULL,
  `m_age` int(11) NOT NULL,
  `m_occupation` varchar(255) NOT NULL,
  `m_address` varchar(255) NOT NULL,
  `m_contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `victims_mother`
--

INSERT INTO `victims_mother` (`case_id`, `m_name`, `m_age`, `m_occupation`, `m_address`, `m_contact`) VALUES
(1, 'Cherry Avellano', 47, 'Branch officer', 'Mambog2', 2147483647),
(2, 'Mary Doe', 55, 'Teacher', '123 Main St, Cityville', 2147483647),
(3, 'Alice Smith', 50, 'Doctor', '789 Elm St, Villagetown', 2147483647),
(4, 'Eva Johnson', 45, 'Nurse', '456 Maple St, Countryside', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complainant`
--
ALTER TABLE `complainant`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `offender`
--
ALTER TABLE `offender`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `respondent_school_personnel`
--
ALTER TABLE `respondent_school_personnel`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `respondent_student`
--
ALTER TABLE `respondent_student`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `students_cases`
--
ALTER TABLE `students_cases`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `victims_father`
--
ALTER TABLE `victims_father`
  ADD PRIMARY KEY (`case_id`);

--
-- Indexes for table `victims_mother`
--
ALTER TABLE `victims_mother`
  ADD PRIMARY KEY (`case_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complainant`
--
ALTER TABLE `complainant`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `offender`
--
ALTER TABLE `offender`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `respondent_school_personnel`
--
ALTER TABLE `respondent_school_personnel`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `respondent_student`
--
ALTER TABLE `respondent_student`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_cases`
--
ALTER TABLE `students_cases`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `victims_father`
--
ALTER TABLE `victims_father`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `victims_mother`
--
ALTER TABLE `victims_mother`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
