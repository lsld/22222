-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2016 at 10:15 AM
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
(33, 'lecture12', 'ssdsd', 'D:Walllpaperswallhaven-365180.jpg', 'Database Management Systems II', 'Lecture', '2016-08-30 15:34:01', 'lecturer1', 'lecturer');

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
(1, 'Database Management Systems II', 'IT202', '202cb962ac59075b964b07152d234b70', 'lecturer'),
(2, 'Database Management Systems  II', 'IT202', 'bcbe3365e6ac95ea2c0343a2395834dd', 'student'),
(3, 'Software Engineering  II', 'IT203', '202cb962ac59075b964b07152d234b70', 'lecturer'),
(4, 'Software Engineering  II', 'IT203', '310dcbbf4cce62f762a2aaa148d556bd', 'student'),
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
-- AUTO_INCREMENT for table `subjectitems`
--
ALTER TABLE `subjectitems`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
