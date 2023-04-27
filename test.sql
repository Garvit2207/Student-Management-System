-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 08:28 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `class1_attendance`
--

CREATE TABLE `class1_attendance` (
  `st_email` varchar(40) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `attendance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class1_attendance`
--

INSERT INTO `class1_attendance` (`st_email`, `subject`, `attendance`) VALUES
('abc@gmail.com', 'DAA', 28),
('abc@gmail.com', 'PHYSICS', 8),
('arman@gmail.com', 'DAA', 17),
('arman@gmail.com', 'PHYSICS', 6),
('def@gmail.com', 'DAA', 11),
('def@gmail.com', 'PHYSICS', 5),
('garvitgarg1995@gmail.com', 'DAA', 22),
('garvitgarg1995@gmail.com', 'PHYSICS', 6);

-- --------------------------------------------------------

--
-- Table structure for table `class2_attendance`
--

CREATE TABLE `class2_attendance` (
  `st_email` varchar(40) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `attendance` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class2_attendance`
--

INSERT INTO `class2_attendance` (`st_email`, `subject`, `attendance`) VALUES
('ghi@gmail.com', 'DAA', 10),
('ghi@gmail.com', 'PHYSICS', 5),
('gurkamal@gmail.com', 'DAA', 10),
('gurkamal@gmail.com', 'PHYSICS', 20),
('s1@gmail.com', 'DAA', 8),
('s1@gmail.com', 'PHYSICS', 20),
('xyz@gmail.com', 'DAA', 8),
('xyz@gmail.com', 'PHYSICS', 25);

-- --------------------------------------------------------

--
-- Table structure for table `sem1info`
--

CREATE TABLE `sem1info` (
  `subject` varchar(20) NOT NULL,
  `examcode` varchar(20) NOT NULL,
  `marks` int(4) DEFAULT NULL,
  `maxmarks` int(4) NOT NULL,
  `grade` varchar(5) DEFAULT NULL,
  `student_email` varchar(40) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sem1info`
--

INSERT INTO `sem1info` (`subject`, `examcode`, `marks`, `maxmarks`, `grade`, `student_email`, `class`) VALUES
('DAA', 'UCS210', 30, 100, 'E', 'abc@gmail.com', 1),
('PHYSICS', 'UCS310', 20, 100, 'A', 'abc@gmail.com', 1),
('DAA', 'UCS210', 80, 100, 'A', 'arman@gmail.com', 1),
('PHYSICS', 'UCS310', 45, 100, 'A', 'arman@gmail.com', 1),
('DAA', 'UCS210', 80, 100, 'A', 'def@gmail.com', 1),
('PHYSICS', 'UCS310', 90, 100, 'C', 'def@gmail.com', 1),
('DAA', 'UCS210', 70, 100, 'B', 'garvitgarg1995@gmail.com', 1),
('PHYSICS', 'UCS310', 50, 100, 'A', 'garvitgarg1995@gmail.com', 1),
('DAA', 'UCS210', 80, 100, 'A', 'ghi@gmail.com', 2),
('PHYSICS', 'UCS210', 80, 100, 'A', 'ghi@gmail.com', 2),
('DAA', 'UCS210', 80, 100, 'A', 'gurkamal@gmail.com', 2),
('PHYSICS', 'UCS310', 10, 100, NULL, 'gurkamal@gmail.com', 2),
('DAA', 'UCS210', 35, 100, 'C', 's1@gmail.com', 2),
('PHYSICS', 'UCS310', 20, 100, 'C', 's1@gmail.com', 2),
('DAA', 'UCS210', 20, 100, 'E', 'xyz@gmail.com', 2),
('PHYSICS', 'UCS310', 45, 100, 'A', 'xyz@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`username`, `email`, `password`, `class`) VALUES
('Ehsaas', 'abc@gmail.com', 'abc', 1),
('Arman', 'arman@gmail.com', 'arman', 1),
('def', 'def@gmail.com', 'def', 1),
('Garvit Garg', 'garvitgarg1995@gmail.com', 'garvit', 1),
('GHI', 'ghi@gmail.com', 'ghi', 2),
('Gurkamal', 'gurkamal@gmail.com', 'gurkamal', 2),
('s1', 's1@gmail.com', 's1', 2),
('XYZ', 'xyz@gmail.com', 'xyz', 2);

--
-- Triggers `students`
--
DELIMITER $$
CREATE TRIGGER `insert_sem1info` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO sem1info(subject, examcode, marks, maxmarks, grade, student_email, class) VALUES('MATHEMATICS', 'UMA015', NULL, 100, NULL, NEW.email, new.class)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_sem1info1` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO sem1info(subject, examcode, marks, maxmarks, grade, student_email, class) VALUES('PHYSICS', 'UCS310', NULL, 100, NULL, NEW.email, new.class)
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insert_sem1info2` AFTER INSERT ON `students` FOR EACH ROW INSERT INTO sem1info(subject, examcode, marks, maxmarks, grade, student_email, class) VALUES('CHEMISTRY', 'UCS210', NULL, 100, NULL, NEW.email, new.class)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tagging`
--

CREATE TABLE `tagging` (
  `t_email` varchar(30) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `class_allot` int(11) NOT NULL,
  `total_lectures` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tagging`
--

INSERT INTO `tagging` (`t_email`, `subject`, `class_allot`, `total_lectures`) VALUES
('teacher1@gmail.com', 'DAA', 1, 66),
('teacher1@gmail.com', 'DAA', 2, 53),
('teacher2@gmail.com', 'PHYSICS', 1, 43),
('teacher2@gmail.com', 'PHYSICS', 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`name`, `email`, `password`) VALUES
('Shruti', 'teacher1@gmail.com', 't1'),
('teacher2', 'teacher2@gmail.com', 't2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class1_attendance`
--
ALTER TABLE `class1_attendance`
  ADD PRIMARY KEY (`st_email`,`subject`);

--
-- Indexes for table `class2_attendance`
--
ALTER TABLE `class2_attendance`
  ADD PRIMARY KEY (`st_email`,`subject`);

--
-- Indexes for table `sem1info`
--
ALTER TABLE `sem1info`
  ADD PRIMARY KEY (`student_email`,`subject`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tagging`
--
ALTER TABLE `tagging`
  ADD PRIMARY KEY (`t_email`,`subject`,`class_allot`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class1_attendance`
--
ALTER TABLE `class1_attendance`
  ADD CONSTRAINT `class1_attendance_ibfk_1` FOREIGN KEY (`st_email`) REFERENCES `students` (`email`);

--
-- Constraints for table `class2_attendance`
--
ALTER TABLE `class2_attendance`
  ADD CONSTRAINT `class2_attendance_ibfk_1` FOREIGN KEY (`st_email`) REFERENCES `students` (`email`);

--
-- Constraints for table `sem1info`
--
ALTER TABLE `sem1info`
  ADD CONSTRAINT `sem1info_ibfk_1` FOREIGN KEY (`student_email`) REFERENCES `students` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
