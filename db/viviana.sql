-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2020 at 10:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viviana`
--

-- --------------------------------------------------------

--
-- Table structure for table `Appointment`
--

CREATE TABLE `Appointment` (
  `appointment_id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Appointment`
--

INSERT INTO `Appointment` (`appointment_id`, `full_name`, `gender`, `phone_number`, `date_of_birth`, `address`, `email`, `date`, `time`, `created_at`) VALUES
(1, 'Allarassem', 'Male', '0711898366', '2019-05-02', 'South C', 'a@gmail.com', '2020-08-23', '36:55:52', '2020-08-22 19:57:52'),
(2, 'Allarassem Maxime', 'Male', '09343434', '2017-01-16', 'South B', 'AA@gmail.com', '2020-08-23', '11:01:00', '2020-08-22 20:08:30'),
(3, 'Allarassem Maxime', 'Male', '09343434', '2017-01-16', 'South B', 'AA@gmail.com', '2020-08-23', '11:01:00', '2020-08-22 20:10:17');

-- --------------------------------------------------------

--
-- Table structure for table `ContactUs`
--

CREATE TABLE `ContactUs` (
  `contact_id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ContactUs`
--

INSERT INTO `ContactUs` (`contact_id`, `firstName`, `lastName`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'Allarassem', 'Maxime', 'a@gmail.com', 'Meeting', 'This is nothing than testing', '2020-08-22 12:03:01'),
(2, 'fghj', 'Solmem', 'victoria@gmail.com', 'meeting', 'We will use the tasks table in the sample database for the demonstration. Before going forward with this tutorial, you should follow the PHP MySQL create table tutorial to create the tasks table and insert sample data for practicing.\r\n\r\nSee the following tasks table', '2020-08-22 13:19:38'),
(3, 'Maxxx', 'Solmem', 'victoria@gmail.com', 'Meeting', 'WARNING!  Dropping tables in your database permanently deletes the table and all the data stored in that table.  Make sure that none of your applications or websites rely on information contained in the table(s) you are deleting.', '2020-08-22 13:21:10'),
(4, 'Maxxx', 'Solmem', 'victoria@gmail.com', 'Meetingggg', 'WARNING!  Dropping tables in your database permanently deletes the table and all the data stored in that table.  Make sure that none of your applications or websites rely on information contained in the table(s) you are deleting.', '2020-08-22 13:22:07'),
(5, 'Maxxx', 'Solmem', 'victoria@gmail.com', 'sdfg', 'WARNING!  Dropping tables in your database permanently deletes the table and all the data stored in that table.  Make sure that none of your applications or websites rely on information contained in the table(s) you are deleting.', '2020-08-22 13:23:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Appointment`
--
ALTER TABLE `Appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `ContactUs`
--
ALTER TABLE `ContactUs`
  ADD PRIMARY KEY (`contact_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Appointment`
--
ALTER TABLE `Appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ContactUs`
--
ALTER TABLE `ContactUs`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
