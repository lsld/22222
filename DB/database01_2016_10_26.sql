-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2016 at 01:24 PM
-- Server version: 5.7.12-log
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database01`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) NOT NULL,
  `event_start` varchar(100) NOT NULL,
  `event_end` varchar(100) NOT NULL,
  `event_place` varchar(100) NOT NULL,
  `enrolller` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_start`, `event_end`, `event_place`, `enrolller`, `subject`) VALUES
(1, 'Lecturer for ITA', '2016-09-21 08:30:21', '2016-09-21 10:30:39', '12floor Hall 01', 'lecturer1', ''),
(2, 'Tutorial for ITA', '2016-09-21 10:30:00', '2016-09-21 12:30:00', '12floor Hall 01', 'lecturer1', ''),
(3, 'Lab for ITA', '2016-09-21 13:30:00', '2016-09-21 15:30:00', '12floor Lab 02', 'lecturer1', ''),
(4, 'Lab for ITA', '2016-09-21 15:30:00', '2016-09-21 17:30:00', '12floor Lab 02', 'lecturer1', ''),
(5, 'Lab for ITA Weekend', '2016-09-21 17:30:07', '2016-09-21 19:30:07', '15th Lab 2', 'lecturer1', ''),
(6, 'event1', '2016-09-07 08:25:07', '2016-09-01 09:25:07', 'dddd', 'lecturer1', ''),
(8, 'CNDI Assignment', '2016-09-08 08:30:07', '2016-09-08 12:30:07', 'Hall01', 'lecturer1', 'Research');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notification_id` int(11) NOT NULL,
  `notification_title` varchar(100) NOT NULL,
  `notification_description` varchar(100) NOT NULL,
  `enroller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`notification_id`, `notification_title`, `notification_description`, `enroller`) VALUES
(1, 'workshop', '12th floor main hall , java meetup will be there!                        ', 'lecturer1'),
(2, 'cricket match ', '27th November at SLIIT play ground       ', 'lecturer1'),
(3, 'SLIIT Open Day', '23th November SLIIT auditorium', 'lecturer1'),
(4, 'workshop2', 'CISCO routing workshop at 9th flooor CISCO Lab                       ', 'lecturer1'),
(5, 'workshop3', 'C# Fundamentals', 'lecturer1'),
(6, 'workshop3', 'About Database Concepts ', 'lecturer1'),
(7, 'workshop5', 'Python Programming            ', 'lecturer1');

-- --------------------------------------------------------

--
-- Table structure for table `subjectitems`
--

CREATE TABLE `subjectitems` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `item_url` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_added_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  `enroller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjectitems`
--

INSERT INTO `subjectitems` (`item_id`, `item_name`, `item_description`, `item_url`, `subject_name`, `item_type`, `item_added_date_time`, `username`, `enroller`) VALUES
(1, 'lect19', 'project', 'uploaded_files/53947-PDM.docx', 'Project Design And Managment', 'Assignment', '2016-10-26 11:15:41', 'student1', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_enrollment` varchar(100) NOT NULL,
  `enroller` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `subject_enrollment`, `enroller`, `year`, `semester`) VALUES
(1, 'Introduction To Programming Envirements', 'IPE', '202cb962ac59075b964b07152d234b70', 'lecturer', 1, 1),
(2, 'Introduction To Programming Envirements', 'IPE', '202cb962ac59075b964b07152d234b70', 'student', 1, 1),
(3, 'Mathematics For Information Technogy ', 'MIT', '202cb962ac59075b964b07152d234b70', 'lecturer', 1, 1),
(4, 'Software Technology 1', 'ST1', '202cb962ac59075b964b07152d234b70', 'lecturer', 1, 2),
(5, 'Software Technology 1', 'ST1', '202cb962ac59075b964b07152d234b70', 'student', 1, 2),
(6, 'Foundations Of Computer Science', 'FCS', '202cb962ac59075b964b07152d234b70', 'lecturer', 1, 2),
(7, 'Foundations Of Computer Science', 'FCS', '202cb962ac59075b964b07152d234b70', 'student', 1, 2),
(8, 'Software Technology 2', 'ST2', '202cb962ac59075b964b07152d234b70', 'lecturer', 2, 1),
(9, 'Software Technology 2', 'ST2', '202cb962ac59075b964b07152d234b70', 'student', 2, 1),
(10, 'Database Management Systems 2', 'DB2', '202cb962ac59075b964b07152d234b70', 'lecturer', 2, 1),
(11, 'Database Management Systems 2', 'DB2', '202cb962ac59075b964b07152d234b70', 'student', 2, 1),
(12, 'Design And Analysis Of Algorithm  ', 'DAA', '202cb962ac59075b964b07152d234b70', 'lecturer', 2, 2),
(13, 'Design And Analysis Of Algorithm  ', 'DAA', '202cb962ac59075b964b07152d234b70', 'student', 2, 2),
(14, 'Software Engineering 2', 'SE2', '202cb962ac59075b964b07152d234b70', 'lecturer', 2, 2),
(15, 'Software Engineering 2 ', 'SE2', '202cb962ac59075b964b07152d234b70', 'student', 2, 2),
(18, 'Project Design And Managment', 'PDM', '202cb962ac59075b964b07152d234b70', 'lecturer', 3, 1),
(19, 'Project Design And Managment', 'PDM', '202cb962ac59075b964b07152d234b70', 'student', 3, 1),
(20, 'Software Quality Assurance  ', 'SQA', '202cb962ac59075b964b07152d234b70', 'lecturer', 3, 2),
(21, 'Software Quality Assurance  ', 'SQA', '202cb962ac59075b964b07152d234b70', 'student', 3, 2),
(22, 'Marketing And Business Law', 'MBL', '202cb962ac59075b964b07152d234b70', 'lecturer', 3, 2),
(23, 'Marketing And Business Law', 'MBL', '202cb962ac59075b964b07152d234b70', 'student', 3, 2),
(24, 'Mathematics For Information Technogy ', 'MIT', '202cb962ac59075b964b07152d234b70', 'student', 1, 1),
(25, 'Research', 'CDAP', '202cb962ac59075b964b07152d234b70', 'lecturer', 3, 2),
(26, 'Research', 'CDAP', '202cb962ac59075b964b07152d234b70', 'student', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `email`, `level`) VALUES
(2, 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'Dosen', 'dosen@gmail.com', 2),
(3, 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 'Mahasiswa', 'mahasiswa@gmail.com', 3),
(4, 'Thomas', '123', 'Administrator', 'thomas@t.com', 1),
(5, 'Raja', '202cb962ac59075b964b07152d234b70', 'Lecturer', 'raja@r.com', 2),
(7, 'lecturer01', '202cb962ac59075b964b07152d234b70', 'Lecturer', 'lecturer1@l.com', 2),
(9, 'admin3', '202cb962ac59075b964b07152d234b70', 'Administrator', 'admin3@a.com', 1),
(10, 'lecturer1', '202cb962ac59075b964b07152d234b70', 'Lecturer', 'lecturer1@.com', 2),
(11, 'student1', '202cb962ac59075b964b07152d234b70', 'College student', 'student1.s@.com', 3),
(12, 'admin1', '202cb962ac59075b964b07152d234b70', 'Administrator', 'admin1@a.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `subjectitems`
--
ALTER TABLE `subjectitems`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subjectitems`
--
ALTER TABLE `subjectitems`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
