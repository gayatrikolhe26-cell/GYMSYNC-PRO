-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2026 at 06:36 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymsync_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin One', 'admin1@gym.com', '123456'),
(2, 'Admin Two', 'admin2@gym.com', '123456'),
(3, 'Admin Three', 'admin3@gym.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `member_id`, `date`) VALUES
(1, 1, '2026-02-21'),
(2, 2, '2026-02-21'),
(3, 1, '2026-02-22'),
(4, 2, '2026-02-22'),
(5, 1, '2026-02-23'),
(6, 2, '2026-02-23'),
(7, 3, '2026-02-23'),
(8, 4, '2026-02-23'),
(9, 5, '2026-02-23'),
(10, 6, '2026-02-23'),
(11, 7, '2026-02-23'),
(12, 8, '2026-02-23'),
(13, 1, '2026-02-24'),
(14, 2, '2026-02-24'),
(15, 3, '2026-02-24'),
(16, 4, '2026-02-24'),
(17, 5, '2026-02-24'),
(18, 6, '2026-02-24'),
(19, 7, '2026-02-24'),
(20, 8, '2026-02-24'),
(21, 9, '2026-02-24'),
(23, 1, '2026-02-26'),
(24, 2, '2026-02-26'),
(25, 3, '2026-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `equipment_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `added_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `height` float DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `bmi` float DEFAULT NULL,
  `bmi_status` varchar(50) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `membership_plan` varchar(50) DEFAULT NULL,
  `duration_months` int(11) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT 'Active',
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `phone`, `email`, `age`, `gender`, `height`, `weight`, `bmi`, `bmi_status`, `join_date`, `membership_plan`, `duration_months`, `expiry_date`, `trainer_id`, `status`, `password`) VALUES
(1, 'test', '9960256874', 'test1@gmail.com', 20, 'Female', 154, 43, 18.1312, NULL, '2026-02-21', NULL, NULL, '2026-03-21', 2, 'Active', NULL),
(2, 'anna', '9896365472', 'anna@gmail.com', 21, 'Female', 152, 45, 19.5, NULL, '2026-02-21', '1', NULL, '2026-07-21', 1, 'Active', '123456'),
(3, 'Sharvari Sathe', '9985124578', 'sharvari@gmail.com', 21, 'Female', 161, 45, 17.4, NULL, '2026-02-23', '3', NULL, '2026-05-23', 2, 'Active', '123456'),
(4, 'Gayatri', '8554127896', 'gayatri@gmail.com', 21, 'Female', 152, 45, 19.5, NULL, '2026-02-23', '1', NULL, '2026-03-23', 3, 'Active', '123456'),
(5, 'Ketki', '7896547823', 'ketki@gmail.com', 35, 'Female', 159, 45, 17.8, NULL, '2026-02-23', '6', NULL, '2026-08-23', 3, 'Active', '123456'),
(6, 'Harshal', '7869895425', 'harshal@gmail.com', 22, 'Male', 169, 55, 19.3, NULL, '2026-02-23', '3', NULL, '2026-05-23', 2, 'Active', '123456'),
(7, 'Raj', '7895487625', 'raj@gmail.com', 23, 'Male', 185, 67, 19.6, NULL, '2026-02-23', '3', NULL, '2026-05-23', 1, 'Active', '123456'),
(8, 'aman', '7895487678', 'aman@gmail.com', 24, 'Male', 175, 60, 19.6, NULL, '2026-02-23', '3', NULL, '2026-05-23', 1, 'Active', '123456'),
(9, 'pratiksha', '9896587411', 'pratiksha@gmail.com', 23, 'Female', 160, 50, 19.5, NULL, '2026-02-24', '1', NULL, '2026-03-24', 1, 'Active', '123456'),
(10, 'Shreeram', '9890282782', 'kulatshreeram@gmail.om', 21, 'Male', 172, 53, 17.9, NULL, '2026-02-26', '1', NULL, '2026-03-26', NULL, 'Active', 'shreee@09'),
(11, 'jgfyiiuj', '123654789055', 'abc@123.com', 20, 'Female', 150, 89, 39.6, NULL, '2026-02-26', '1', NULL, '2026-03-26', NULL, 'Active', 'abcdef');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `member_id`, `type`, `amount`, `payment_date`, `status`, `due_date`) VALUES
(1, 1, 'pt', 4000, '2026-02-21', 'Paid', NULL),
(2, 1, 'pt', 4000, '2026-02-21', 'Paid', '2026-03-21'),
(3, 1, 'membership', 2000, '2026-02-21', 'Paid', '2026-03-21'),
(4, 1, '', 4000, '2026-02-21', 'Paid', '2026-03-21'),
(5, 1, 'Membership', 4000, '2026-02-21', 'Paid', '2026-03-21'),
(6, 2, 'Membership', 4000, '2026-02-21', 'Paid', '2026-03-21'),
(7, 2, 'Membership', 4000, '2026-02-22', 'Paid', '2026-03-22'),
(8, 2, 'Membership', 4000, '2026-02-22', 'Paid', '2026-03-22'),
(9, 3, 'Membership', 3500, '2026-02-23', 'Paid', '2026-03-23'),
(10, 4, 'Membership', 2000, '2026-02-23', 'Paid', '2026-03-23'),
(11, 5, 'Membership', 5000, '2026-02-23', 'Paid', '2026-03-23'),
(12, 6, 'Membership', 9000, '2026-02-23', 'Paid', '2026-03-23'),
(13, 7, 'Membership', 5000, '2026-02-23', 'Paid', '2026-03-23'),
(14, 8, 'Membership', 5000, '2026-02-23', 'Paid', '2026-03-23'),
(15, 9, 'Membership', 2000, '2026-02-24', 'Paid', '2026-03-24'),
(16, 1, 'Membership', 1000, '2026-02-24', 'Paid', '2026-03-24'),
(17, 9, 'Membership', 2000, '2026-02-25', 'Paid', '2026-03-25'),
(18, 1, 'Membership', 2000, '2026-02-26', 'Paid', '2026-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `bmi` float NOT NULL,
  `date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `member_id`, `weight`, `height`, `bmi`, `date`) VALUES
(1, 2, 49, 154, 20.66, '2026-02-23'),
(2, 2, 40, 154, 16.87, '2026-02-23'),
(3, 2, 49, 154, 20.66, '2026-02-23'),
(4, 2, 45, 154, 18.97, '2026-02-23'),
(5, 3, 47, 161, 18.13, '2026-02-23'),
(6, 3, 50, 161, 19.29, '2026-02-23'),
(7, 1, 60, 152, 25.97, '2026-02-23'),
(8, 1, 55, 152, 23.81, '2026-02-23'),
(9, 1, 65, 152, 28.13, '2026-02-23'),
(10, 4, 39, 152, 16.88, '2026-02-23'),
(11, 4, 43, 152, 18.61, '2026-02-23'),
(12, 4, 47, 152, 20.34, '2026-02-23'),
(13, 7, 66, 185, 19.28, '2026-02-23'),
(14, 7, 50, 185, 14.61, '2026-02-23'),
(15, 7, 68, 185, 19.87, '2026-02-23'),
(16, 7, 55, 185, 16.07, '2026-02-23'),
(17, 8, 55, 175, 17.96, '2026-02-23'),
(18, 8, 59, 175, 19.27, '2026-02-23'),
(19, 8, 60, 175, 19.59, '2026-02-23'),
(20, 9, 60, 160, 23.44, '2026-02-24'),
(21, 9, 60, 160, 23.44, '2026-02-24'),
(22, 7, 60, 185, 17.53, '2026-02-25'),
(23, 2, 0, 0, 0, '2026-02-26');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `member_id` int(11) DEFAULT NULL,
  `trainer_id` int(11) DEFAULT NULL,
  `class_date` date DEFAULT NULL,
  `class_time` time DEFAULT NULL,
  `workout` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `member_id`, `trainer_id`, `class_date`, `class_time`, `workout`) VALUES
(13, 2, 1, '2026-02-25', '09:00:00', 'biceps'),
(14, 1, 2, '2026-02-25', '06:00:00', 'abs'),
(15, 1, 2, '2026-02-25', '06:00:00', 'abs'),
(16, 1, 2, '2026-02-26', '06:00:00', 'biceps'),
(17, 3, 2, '2026-02-26', '06:00:00', 'biceps'),
(18, 3, 2, '2026-02-25', '06:00:00', 'biceps'),
(19, 4, 3, '2026-02-25', '09:00:00', 'yoga'),
(20, 4, 3, '2026-02-26', '09:00:00', 'yoga 2'),
(21, 7, 1, '2026-02-26', '09:00:00', 'abs'),
(22, 7, 1, '2026-02-25', '08:30:00', 'biceps'),
(23, 8, 1, '2026-02-25', '08:30:00', 'biceps'),
(25, 9, 1, '2026-02-25', '06:00:00', 'abs'),
(26, 9, 1, '2026-02-26', '06:00:00', 'abs'),
(27, 9, 1, '2026-02-27', '06:00:00', 'legs'),
(28, 9, 1, '2026-02-28', '06:30:00', 'zumba'),
(29, 8, 1, '2026-02-27', '01:30:00', 'yoga');

-- --------------------------------------------------------

--
-- Table structure for table `trainers`
--

CREATE TABLE `trainers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `experience` varchar(50) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `commission` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trainers`
--

INSERT INTO `trainers` (`id`, `name`, `phone`, `specialty`, `experience`, `salary`, `commission`, `email`, `password`) VALUES
(1, 'rohan Koli', '7038971188', 'strength and conditioning coatch', '', 15000, 3500, 'rohankoli@trainer.com', '123456'),
(2, 'shreeram kulat', '9890282782', 'functional training specialist', '', 15000, 3000, 'shreeramkulat@trainer.com', '123456'),
(3, 'Shreya Pawar', '9988776655', 'yoga', '7 years', 20000, 3500, 'shreyapawar@trainer.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainer_id` (`trainer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainers`
--
ALTER TABLE `trainers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `trainers`
--
ALTER TABLE `trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`trainer_id`) REFERENCES `trainers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
