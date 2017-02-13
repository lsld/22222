-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2016 at 12:17 PM
-- Server version: 10.1.10-MariaDB
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
  `enrolller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_start`, `event_end`, `event_place`, `enrolller`) VALUES
(1, 'Lecturer for ITA', '2016-09-21 08:30:21', '2016-09-21 10:30:39', '12floor Hall 01', 'lecturer1'),
(2, 'Tutorial for ITA', '2016-09-21 10:30:00', '2016-09-21 12:30:00', '12floor Hall 01', 'lecturer1'),
(3, 'Lab for ITA', '2016-09-21 13:30:00', '2016-09-21 15:30:00', '12floor Lab 02', 'lecturer1'),
(4, 'Lab for ITA', '2016-09-21 15:30:00', '2016-09-21 17:30:00', '12floor Lab 02', 'lecturer1'),
(5, 'Lab for ITA Weekend', '2016-09-21 17:30:07', '2016-09-21 19:30:07', '15th Lab 2', 'lecturer1'),
(6, 'event1', '2016-09-07 08:25:07', '2016-09-01 09:25:07', 'dddd', 'lecturer1');

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
(1, 'Lec01', 'sddsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-29 17:19:28', 'lecturer1', 'lecturer'),
(2, 'Lec02', 'sdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-29 17:19:47', 'lecturer1', 'lecturer'),
(3, 'Assignment1', 'sdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Assignment', '2016-08-29 17:20:18', 'lecturer1', 'lecturer'),
(4, 'Lab1', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lab', '2016-08-29 17:20:36', 'lecturer1', 'lecturer'),
(5, 'Tutorial01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Tutorial', '2016-08-29 17:20:58', 'lecturer1', 'lecturer'),
(6, 'Lec01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-29 17:21:13', 'lecturer1', 'lecturer'),
(7, 'Lec02', 'sdsdsds', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-29 17:22:34', 'lecturer1', 'lecturer'),
(8, 'Lec03', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-29 17:23:30', 'lecturer1', 'lecturer'),
(9, 'Lec04', 'dsdsdsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-29 17:24:01', 'lecturer1', 'lecturer'),
(10, 'Lec01', 'fffdfdf', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-29 17:24:32', 'lecturer1', 'lecturer'),
(11, 'Lec01', 'sdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering Tools And Metrices', 'Lecture', '2016-08-29 17:29:33', 'lecturer1', 'lecturer'),
(12, 'Lec01', 'ddsdd', 'D:Walllpaperswallhaven-365180.jpg', 'Design And Analysis Of Agorithms', 'Assignment', '2016-08-29 17:29:59', 'lecturer1', 'lecturer'),
(13, 'Lec05', 'assas', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-29 17:50:38', 'lecturer1', 'lecturer'),
(14, 'Lec01', 'dsdsds', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-30 07:12:13', 'lecturer1', 'lecturer'),
(15, 'Lec08', 'assas', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Assignment', '2016-08-30 07:30:46', 'lecturer1', 'lecturer'),
(16, 'Lec06', 'sdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-30 07:43:29', 'lecturer1', 'lecturer'),
(17, 'Lec01', 'sddsds', 'D:Walllpaperswallhaven-365180.jpg', 'Design And Analysis Of Agorithms', 'Lecture', '2016-08-30 12:10:01', 'lecturer1', 'lecturer'),
(18, 'Lec04', 'dddd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering Tools And Metrices', 'Lecture', '2016-08-30 12:10:24', 'lecturer1', 'lecturer'),
(19, 'Lec06', 'wdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering Tools And Metrices', 'Lecture', '2016-08-30 12:10:35', 'lecturer1', 'lecturer'),
(20, 'lecture01', 'dsdsds', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-30 13:20:34', 'student1', 'student'),
(21, 'lecture01', 'asasas', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-30 13:25:58', 'student1', 'student'),
(22, 'lecture01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-30 13:29:15', 'student1', 'student'),
(23, 'lecture01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-30 13:29:33', 'student1', 'student'),
(24, 'lecture01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-30 13:30:07', 'student1', 'student'),
(25, 'lecture01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-30 13:30:34', 'student1', 'student'),
(27, 'lecture01', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Lecture', '2016-08-30 13:33:20', 'student1', 'student'),
(29, 'lecture01', 'dsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems  II', 'Lecture', '2016-08-30 13:36:32', 'student1', 'student'),
(30, 'lecture01', 'dssdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering  II', 'Assignment', '2016-08-30 13:37:31', 'student1', 'student'),
(31, 'Assignment111', 'first assignment for SETM', 'D:Walllpaperswallhaven-365180.jpg', 'Software Engineering Tools And Metrices', 'Assignment', '2016-08-30 14:42:39', 'student1', 'student'),
(32, 'lecture11', 'dsdsdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-30 15:09:38', 'lecturer1', 'lecturer'),
(33, 'lecture12', 'ssdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-30 15:34:01', 'lecturer1', 'lecturer'),
(34, 'Lecture233', 'lecture final one', '12411-', 'Database Management Systems II', 'Lecture', '2016-09-21 18:28:23', 'lecturer1', 'lecturer'),
(35, 'Lecture234', 'one before end', '73018-', 'Database Management Systems II', 'Lecture', '2016-09-21 18:29:57', 'lecturer1', 'lecturer'),
(36, 'Lecture233', 'final', '34699-', 'Software Engineering  II', 'Lecture', '2016-09-21 18:31:56', 'lecturer1', 'lecturer'),
(37, 'Lecture233', 'final', 'C:xampp	mpphp33B4.tmp', 'Design And Analysis Of Agorithms', 'Lecture', '2016-09-21 18:46:00', 'lecturer1', 'lecturer'),
(38, 'Lecture666', 'ssss', 'C:xampp	mpphpD6A7.tmp', 'Design And Analysis Of Agorithms', 'Lecture', '2016-09-21 18:47:47', 'lecturer1', 'lecturer'),
(39, 'Lecture777', 'dsdsd', 'C:xampp	mpphp5970.tmp', 'Design And Analysis Of Agorithms', 'Lecture', '2016-09-21 18:49:26', 'lecturer1', 'lecturer'),
(40, 'Lecture999', 'dsdsd', 'C:xampp	mpphpED2C.tmp', 'Design And Analysis Of Agorithms', 'Lecture', '2016-09-21 18:52:15', 'lecturer1', 'lecturer'),
(41, 'Lecture999', 'dsdsdsd', 'uploaded_files/58670-New Text Document.txt', 'Software Engineering Tools And Metrices', 'Lecture', '2016-09-21 18:53:38', 'lecturer1', 'lecturer'),
(42, 'Lecture888', 'dddd', 'uploaded_files/62516-Lakitha_CV.pdf', 'Software Engineering Tools And Metrices', 'Lecture', '2016-09-21 18:55:18', 'lecturer1', 'lecturer'),
(43, 'assignment', 'dsdsd', 'uploaded_files/97399-assignment1.txt', 'Computer Graphics And Mulltimedia', 'Assignment', '2016-09-21 19:12:36', 'student1', 'student'),
(44, 'Lecture999', 'ssss', 'uploaded_files/27140-java.txt', 'Database Management Systems II', 'Lecture', '2016-09-22 06:45:45', 'lecturer1', 'lecturer'),
(45, 'Lecture999', 'dsdsdsd', 'uploaded_files/55449-bookmarks (3).txt', 'Computer Graphics And Mulltimedia', 'Lecture', '2016-09-22 09:58:30', 'lecturer1', 'lecturer');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_enrollment` varchar(100) NOT NULL,
  `enroller` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `subject_enrollment`, `enroller`) VALUES
(5, 'Design And Analysis Of Agorithms', 'IT204', '202cb962ac59075b964b07152d234b70', 'lecturer'),
(6, 'Design And Analysis Of Agorithms', 'IT204', '550a141f12de6341fba65b0ad0433500', 'student'),
(7, 'Software Engineering Tools And Metrices', 'IT205', '202cb962ac59075b964b07152d234b70', 'lecturer'),
(8, 'Software Engineering Tools And Metrices', 'IT205', '15de21c670ae7c3f6f3f1f37029303c9', 'student'),
(9, 'Computer Graphics And Mulltimedia', 'IT207', '202cb962ac59075b964b07152d234b70', 'lecturer'),
(10, 'Computer Graphics And Mulltimedia', 'IT207', 'f1c1592588411002af340cbaedd6fc33', 'student');

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
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subjectitems`
--
ALTER TABLE `subjectitems`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
