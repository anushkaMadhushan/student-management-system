-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 09:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practical_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `batches_courses`
--

CREATE TABLE `batches_courses` (
  `ID` int(255) NOT NULL,
  `Batch_id` int(255) NOT NULL,
  `Course_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `master_batches`
--

CREATE TABLE `master_batches` (
  `ID` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_batches`
--

INSERT INTO `master_batches` (`ID`, `code`, `name`) VALUES
(1, 'B001', 'Batch One'),
(2, 'B002', 'Batch Two'),
(4, 'B003', 'Batch Three');

-- --------------------------------------------------------

--
-- Table structure for table `master_courses`
--

CREATE TABLE `master_courses` (
  `ID` int(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_courses`
--

INSERT INTO `master_courses` (`ID`, `code`, `name`) VALUES
(1, 'C001', 'Computer Science'),
(2, 'C002', 'Diploma in English'),
(3, 'C003', 'Health Science'),
(4, 'C004', 'Agriculture'),
(5, 'C005', 'Accounting'),
(6, 'C006', 'Arts');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(11) NOT NULL,
  `Batch_id` int(11) NOT NULL,
  `Course_id` int(11) NOT NULL,
  `Student_name` varchar(255) NOT NULL,
  `Student_id` varchar(255) NOT NULL,
  `Student_nic` varchar(255) NOT NULL,
  `Student_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `Batch_id`, `Course_id`, `Student_name`, `Student_id`, `Student_nic`, `Student_phone`) VALUES
(1, 1, 1, 'Anushka', '1', '971057845V', '0778541256'),
(2, 2, 2, 'Sandeepa', '2', '97568745623', '0715874569');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `batches_courses`
--
ALTER TABLE `batches_courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Batch_id` (`Batch_id`),
  ADD KEY `Course_id` (`Course_id`);

--
-- Indexes for table `master_batches`
--
ALTER TABLE `master_batches`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `master_courses`
--
ALTER TABLE `master_courses`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`,`Batch_id`,`Course_id`),
  ADD KEY `Batch_id` (`Batch_id`),
  ADD KEY `Course_id` (`Course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batches_courses`
--
ALTER TABLE `batches_courses`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_batches`
--
ALTER TABLE `master_batches`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_courses`
--
ALTER TABLE `master_courses`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `batches_courses`
--
ALTER TABLE `batches_courses`
  ADD CONSTRAINT `batches_courses_ibfk_1` FOREIGN KEY (`Batch_id`) REFERENCES `master_batches` (`ID`),
  ADD CONSTRAINT `batches_courses_ibfk_2` FOREIGN KEY (`Course_id`) REFERENCES `master_courses` (`ID`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`Batch_id`) REFERENCES `master_batches` (`ID`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`Course_id`) REFERENCES `master_courses` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
