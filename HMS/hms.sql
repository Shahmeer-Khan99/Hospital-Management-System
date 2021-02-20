-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 12:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`id`, `username`, `password`) VALUES
(1, 'bashir34', '32a3a8815a3a12a3f8f225a6cfd0d01a'),
(2, 'salman45', '3b5eabeea0353848638685f58b2b33a9');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `ap_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ap_date` varchar(255) DEFAULT NULL,
  `ap_time` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`ap_id`, `name`, `ap_date`, `ap_time`, `branch_id`, `doctor_id`) VALUES
(1, 'Saleem Malik', 'Februaury 3 , 2021', '6:00 PM', 1, 1),
(2, 'Hammad Saeed', '4 February 2021', '4:00 PM', 1, 2),
(4, 'Ali Hayan', 'February , 1 , 2021', '3:00 PM', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `Name`, `Location`) VALUES
(1, 'Islamabad Branch', 'I-8 Park , Blue Area , Islamabad'),
(2, 'The Mall Branch', 'Saddar , Church Road , Rawalpindi ');

-- --------------------------------------------------------

--
-- Table structure for table `branchcure`
--

CREATE TABLE `branchcure` (
  `cure_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branchcure`
--

INSERT INTO `branchcure` (`cure_id`, `branch_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cure`
--

CREATE TABLE `cure` (
  `cure_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cure`
--

INSERT INTO `cure` (`cure_id`, `name`) VALUES
(1, 'Heart'),
(2, 'Bones'),
(3, 'Brain'),
(4, 'Covid-19'),
(21, 'Stomach');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doctor_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `specialization` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `cure_id` int(11) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `Contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doctor_id`, `name`, `qualification`, `experience`, `specialization`, `branch_id`, `cure_id`, `fee`, `Contact`) VALUES
(1, 'Ahmad Haq', 'MBBS', '5 years', 'Heart', 1, 1, 'PKR `1000', '(817) 533-1692'),
(2, 'Shah Salman', 'MBBS', '10 years', 'Brain', 1, 3, 'PKR 1500', '(338) 643-6865'),
(3, 'Tabraiz Shams', 'MBBS', '3 years', 'Brain', 1, 3, '1250', '(699) 238-8514'),
(4, 'Tahir Mehmood', 'MBBS', '4 years', 'General', 1, 4, 'PKR 700', '(900) 651-3798'),
(5, 'Ahmad Jahangir', 'MBBS', '6 years', 'Internal medicine', 1, 21, 'PKR 1100', '(302) 857-1275');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `equip_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`equip_id`, `name`, `quantity`, `branch_id`) VALUES
(1, 'Wheel Chairs', 10, 1),
(2, 'Stretchers ', 25, 1),
(3, 'Ventilators', 8, 1),
(4, 'Blood Bags', 34, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospusers`
--

CREATE TABLE `hospusers` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospusers`
--

INSERT INTO `hospusers` (`id`, `username`, `password`) VALUES
(1, 'yasir12', '9811fa4a5043dab9a912c2bca1353758'),
(3, 'tina87', '0e97bd8ba457c1185fae3e7f511e2906');

-- --------------------------------------------------------

--
-- Table structure for table `opercharges`
--

CREATE TABLE `opercharges` (
  `type` varchar(255) DEFAULT NULL,
  `charges` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opercharges`
--

INSERT INTO `opercharges` (`type`, `charges`) VALUES
('Cardic Arrest', 'PKR 20,000'),
('Hamstring operation', 'PKR 10,000');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pat_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`pat_id`, `name`, `Age`, `branch_id`, `contact`) VALUES
(1, 'Manzoor Khan', 65, 1, '(925) 631-9804'),
(2, 'Yaqoob Hussain', 45, 1, '(378) 751-6252'),
(3, 'Umer Khan', 34, 1, '(762) 886-8405'),
(4, 'Musa Khan', 50, 1, '(536) 381-5303'),
(5, 'Umer Jamshaid', 78, 1, '(811) 863-4704');

-- --------------------------------------------------------

--
-- Table structure for table `practitioner`
--

CREATE TABLE `practitioner` (
  `prac_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `practitioner`
--

INSERT INTO `practitioner` (`prac_id`, `name`, `area`, `branch_id`) VALUES
(1, 'Jawad', 'brain', 1),
(2, 'Zafar', 'eye', 1),
(3, 'Kaleem', 'clinical', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `pres_id` int(11) DEFAULT NULL,
  `pat_id` int(11) DEFAULT NULL,
  `treatment` varchar(255) DEFAULT NULL,
  `pres_date` varchar(255) DEFAULT NULL,
  `charges` varchar(255) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`pres_id`, `pat_id`, `treatment`, `pres_date`, `charges`, `doctor_id`) VALUES
(1, 1, 'Checkup', 'January , 04 , 2021', 'PKR 1200', 1),
(1, 2, 'Surgery', 'January , 12, 2021', 'PKR 20,000', 1),
(1, 3, 'Checkup', 'February , 1 , 2021', 'PKR 1000', 1),
(2, 3, 'Checkup', 'February , 4 , 2021', 'PKR 1200', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `used_for` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `charges` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `used_for`, `branch_id`, `charges`) VALUES
(1, 'Operation Theatre', 1, '-'),
(23, 'ICU', 1, 'PKR 3000/Day'),
(34, 'General Ward', 1, 'PKR 1200/Day');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `branch_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `type`, `branch_id`) VALUES
(1, 'Jaleel', 'receptionist', 1),
(2, 'Esha', 'Nurse', 1),
(3, 'Ali', 'Janitor', 1),
(4, 'hassan', 'PA', 1),
(5, 'Sania', 'Nurse', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suffer`
--

CREATE TABLE `suffer` (
  `pat_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `cure_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suffer`
--

INSERT INTO `suffer` (`pat_id`, `doctor_id`, `cure_id`) VALUES
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(3, 2, 3),
(4, 3, 3),
(5, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `FirstName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `FirstName`, `LastName`, `email`, `password`) VALUES
(1, 'Shahmeer', 'Shahmeer', 'Khan', 'Shahmeer@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(9, 'ahmad', 'Sckl', 'Kscnsdjk', 'Kncsks@asckhas.com', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`ap_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `branchcure`
--
ALTER TABLE `branchcure`
  ADD KEY `cure_id` (`cure_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `cure`
--
ALTER TABLE `cure`
  ADD PRIMARY KEY (`cure_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD KEY `branch_id` (`branch_id`),
  ADD KEY `cure_id` (`cure_id`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`equip_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `hospusers`
--
ALTER TABLE `hospusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pat_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `practitioner`
--
ALTER TABLE `practitioner`
  ADD PRIMARY KEY (`prac_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD KEY `pat_id` (`pat_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`),
  ADD KEY `branch_id` (`branch_id`);

--
-- Indexes for table `suffer`
--
ALTER TABLE `suffer`
  ADD KEY `pat_id` (`pat_id`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `cure_id` (`cure_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hospusers`
--
ALTER TABLE `hospusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `branchcure`
--
ALTER TABLE `branchcure`
  ADD CONSTRAINT `branchcure_ibfk_1` FOREIGN KEY (`cure_id`) REFERENCES `cure` (`cure_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `branchcure_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`cure_id`) REFERENCES `cure` (`cure_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `equipments`
--
ALTER TABLE `equipments`
  ADD CONSTRAINT `equipments_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `patient_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `practitioner`
--
ALTER TABLE `practitioner`
  ADD CONSTRAINT `practitioner_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`pat_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `prescriptions_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `suffer`
--
ALTER TABLE `suffer`
  ADD CONSTRAINT `suffer_ibfk_1` FOREIGN KEY (`pat_id`) REFERENCES `patient` (`pat_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `suffer_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `suffer_ibfk_3` FOREIGN KEY (`cure_id`) REFERENCES `cure` (`cure_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
