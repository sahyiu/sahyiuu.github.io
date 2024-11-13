-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 23, 2024 at 04:50 AM
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
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `firstyr_firstsem`
--

CREATE TABLE `firstyr_firstsem` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_title` varchar(99) DEFAULT NULL,
  `course_code` varchar(99) DEFAULT NULL,
  `credit_unit` int(11) DEFAULT NULL,
  `grade` varchar(99) DEFAULT NULL,
  `instructor` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstyr_firstsem`
--

INSERT INTO `firstyr_firstsem` (`id`, `student_id`, `course_title`, `course_code`, `credit_unit`, `grade`, `instructor`) VALUES
(1, 202211670, 'Ethics', 'GNED02', 3, '1.50', 'Agunod'),
(2, 202211670, 'Purposive Communication', 'GNED05', 3, '1.25', 'Torres'),
(3, 202211670, 'Kontesktwalisadong Komunikasyon sa Filipino', 'GNED11', 3, '1.75', 'Castillo'),
(4, 202211670, 'Discrete Structures I', 'COSC50', 3, '2.25', 'Penson'),
(5, 202211670, 'Introduction to Computing', 'DCIT21', 3, '1.00', 'Rosal'),
(6, 202211670, 'Computer Programming I', 'DCIT22', 3, '2.00', 'Belgica'),
(7, 202211670, 'Movement Enhancement', 'FITT1', 2, '1.75', 'Jamito'),
(8, 202211670, 'National Service Training Program 1', 'NSTP1', 3, '1.75', 'Valdepena');

-- --------------------------------------------------------

--
-- Table structure for table `firstyr_secondsem`
--

CREATE TABLE `firstyr_secondsem` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_title` varchar(99) DEFAULT NULL,
  `course_code` varchar(99) DEFAULT NULL,
  `credit_unit` int(11) DEFAULT NULL,
  `grade` varchar(99) DEFAULT NULL,
  `instructor` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `firstyr_secondsem`
--

INSERT INTO `firstyr_secondsem` (`id`, `student_id`, `course_title`, `course_code`, `credit_unit`, `grade`, `instructor`) VALUES
(1, 202211670, 'Art Appreciation', 'GNED01', 3, '1.75', 'Perlado'),
(2, 202211670, 'Science, Technology and Society', 'GNED016', 3, '1.75', 'Montejar'),
(3, 202211670, 'Dalumat ng/sa Filipino', 'GNED12', 3, '1.25', 'Castillo'),
(4, 202211670, 'Computer Programming II', 'DCIT23', 3, '1.75', 'Roy'),
(5, 202211670, 'Fitness Exercises', 'FITT2', 2, '1.50', 'Tatad'),
(6, 202211670, 'National Service Training Program 2', 'NSTP2', 3, 'S', 'Gamuyao');

-- --------------------------------------------------------

--
-- Table structure for table `secondyr_firstsem`
--

CREATE TABLE `secondyr_firstsem` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_title` varchar(99) DEFAULT NULL,
  `course_code` varchar(99) DEFAULT NULL,
  `credit_unit` int(11) DEFAULT NULL,
  `grade` varchar(99) DEFAULT NULL,
  `instructor` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondyr_firstsem`
--

INSERT INTO `secondyr_firstsem` (`id`, `student_id`, `course_title`, `course_code`, `credit_unit`, `grade`, `instructor`) VALUES
(1, 202211670, 'Mga Babasahin Hinggil sa Kasaysayan ng Pilipino', 'GNED04', 3, '1.50', 'Sambrano'),
(2, 202211670, 'Analytic Geometry', 'MATH1', 3, '2.00', 'Castillo'),
(3, 202211670, 'Discrete Structure II', 'COSC55', 3, '2.00', 'Manozo'),
(4, 202211670, 'Digital Logic Design', 'COSC55', 3, '1.50', 'Nati'),
(5, 202211670, 'Object Oriented Programming', 'DCIT50', 3, '2.50', 'Belgica'),
(6, 202211670, 'Information Management', 'DCIT24', 3, '1.75', 'Decipulo'),
(7, 202211670, 'Fundamentals of Information Systems', 'INSY50', 3, '1.75', 'Rosete'),
(8, 202211670, 'Physical Activities towards Health and Fitness 1', 'FITT3', 2, '1.75', 'Jamito');

-- --------------------------------------------------------

--
-- Table structure for table `secondyr_secondsem`
--

CREATE TABLE `secondyr_secondsem` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_title` varchar(99) DEFAULT NULL,
  `course_code` varchar(99) DEFAULT NULL,
  `credit_unit` int(11) DEFAULT NULL,
  `grade` varchar(99) DEFAULT NULL,
  `instructor` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secondyr_secondsem`
--

INSERT INTO `secondyr_secondsem` (`id`, `student_id`, `course_title`, `course_code`, `credit_unit`, `grade`, `instructor`) VALUES
(1, 202211670, 'Understanding The Self', 'GNED08', 3, '1.50', 'Castillo'),
(2, 202211670, 'Panitikang Panlipunan', 'GNED14', 3, '1.75', 'Ramallosa'),
(3, 202211670, 'Calculus', 'MATH2', 3, '2.00', 'Castillo'),
(4, 202211670, 'Architecture and Organization', 'COSC65', 3, '2.00', 'Sir Ketch'),
(5, 202211670, 'Software Engineering I', 'COSC70', 3, '2.00', 'Catalo'),
(6, 202211670, 'Data Structures and Algorithm', 'DCIT25', 3, '1.50', 'DelaCruz'),
(7, 202211670, 'Advanced Data Management System', 'DCIT55', 3, '2.50', 'Belgica'),
(8, 202211670, 'Physical Activities towards Health and Fitness 2', 'FITT4', 2, '1.75', 'Gabionza');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `student_name` varchar(99) DEFAULT NULL,
  `contact_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `student_name`, `contact_number`) VALUES
(1, 202211670, 'Krishan Isabelle Avellano', 2147483647),
(2, 202212345, 'Jehn Alyssa Magaling', 1234567891),
(3, 202245322, 'Ma. Nicole Almonicar', 2147483647),
(4, 202278965, 'Trisha Joy Tachagon', 1238877995),
(5, 12345, 'Roden Diezmo', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `thirdyr_firstsem`
--

CREATE TABLE `thirdyr_firstsem` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `course_title` varchar(99) DEFAULT NULL,
  `course_code` varchar(99) DEFAULT NULL,
  `credit_unit` int(11) DEFAULT NULL,
  `grade` varchar(99) DEFAULT NULL,
  `instructor` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thirdyr_firstsem`
--

INSERT INTO `thirdyr_firstsem` (`id`, `student_id`, `course_title`, `course_code`, `credit_unit`, `grade`, `instructor`) VALUES
(1, 202211670, 'Linear Algebra', 'MATH3', 3, 'S', NULL),
(2, 202211670, 'Software Engineering II', 'COSC75', 3, 'S', NULL),
(3, 202211670, 'Operating Systems', 'COSC80', 3, 'S', NULL),
(4, 202211670, 'Networks and Communication', 'COSC85', 3, 'S', NULL),
(5, 202211670, 'CS Elective 1 (Computer Graphics and Visual Computing)', 'COSC101', 3, 'S', NULL),
(6, 202211670, 'Applications Dev\'t and Emerging Technologies', 'DCIT26', 3, 'S', NULL),
(7, 202211670, 'Social and Professional Issues', 'DCIT65', 3, 'S', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `firstyr_firstsem`
--
ALTER TABLE `firstyr_firstsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `firstyr_secondsem`
--
ALTER TABLE `firstyr_secondsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondyr_firstsem`
--
ALTER TABLE `secondyr_firstsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `secondyr_secondsem`
--
ALTER TABLE `secondyr_secondsem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thirdyr_firstsem`
--
ALTER TABLE `thirdyr_firstsem`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
