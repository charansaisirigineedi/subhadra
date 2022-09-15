-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 06:22 AM
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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `existing_op_record`
--

CREATE TABLE `existing_op_record` (
  `id` varchar(20) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fee_charges`
--

CREATE TABLE `fee_charges` (
  `charge_id` varchar(5) NOT NULL,
  `charge_name` varchar(50) NOT NULL,
  `charge_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee_charges`
--

INSERT INTO `fee_charges` (`charge_id`, `charge_name`, `charge_amount`) VALUES
('CH001', 'Consultation Charges', 400),
('CH002', 'Special Consultation Charges', 600),
('CH003', 'Emergency Consultation Charges', 1000),
('CH004', 'Repeat Consultation', 300),
('CH005', 'Admission Charges', 1000),
('CH006', 'Casuality Charges', 1000),
('CH007', 'Anaesthesia Doctor Charges', 4000),
('CH008', 'Duty Doctor Charges', 500),
('CH009', 'Doctors Visiting Charges', 1000),
('CH010', 'Dressing Charges', 500),
('CH011', 'Housekeeping Charges', 500),
('CH012', 'Nursing Charges', 500),
('CH013', 'Operation Theatre Charges', 10000),
('CH014', 'Induction Charges', 5000),
('CH015', 'Labour Rooms Charges', 5000),
('CH016', 'Pediatrician Charges', 1500),
('CH017', 'General Room Rent', 500),
('CH018', 'Special Room Rent', 1200),
('CH019', 'AC Room Rent', 3000),
('CH020', 'Doctor/ Surgeon Charges', 10000),
('CH021', 'Assistant Surgeon Charges', 6000),
('CH026', 'Major Surgery Charges', 0),
('CH027', 'IUCD Charges', 0),
('CH028', 'PAP Smear Charges', 0),
('CH029', 'Others', 0);

-- --------------------------------------------------------

--
-- Table structure for table `out_patient_billing_details`
--

CREATE TABLE `out_patient_billing_details` (
  `patient_id` varchar(10) NOT NULL,
  `charge_id` varchar(5) NOT NULL,
  `charge_name` varchar(100) NOT NULL,
  `token_id` varchar(100) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_billing_details`
--

CREATE TABLE `patient_billing_details` (
  `patient_id` varchar(10) NOT NULL,
  `charge_id` varchar(5) NOT NULL,
  `charge_name` varchar(100) NOT NULL,
  `token_id` varchar(100) NOT NULL,
  `quantity` int(3) NOT NULL,
  `price` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_pregnancy_information`
--

CREATE TABLE `patient_pregnancy_information` (
  `id` varchar(10) NOT NULL,
  `token_id` varchar(100) NOT NULL,
  `mother_age_at_time_of_marriage` int(3) NOT NULL,
  `mother_age_at_time_of_delivery` int(3) NOT NULL,
  `type_of_delivery` varchar(50) NOT NULL,
  `number_of_kids_including_this` int(2) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_primary_information`
--

CREATE TABLE `patient_primary_information` (
  `id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `patient_phone_number` varchar(10) NOT NULL,
  `patient_aadhaar` varchar(12) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `present_address` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `patient_qualification` varchar(30) NOT NULL,
  `emergency_contact_person` varchar(30) NOT NULL,
  `emergency_contact_number` varchar(10) NOT NULL,
  `spouse_name` varchar(100) NOT NULL,
  `spouse_contact` varchar(10) NOT NULL,
  `spouse_age` int(3) NOT NULL,
  `spouse_occupation` varchar(20) NOT NULL,
  `spouse_qualification` varchar(20) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient_surgery_form`
--

CREATE TABLE `patient_surgery_form` (
  `id` varchar(10) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `date_of_admission` date NOT NULL,
  `time_of_admisssion` time NOT NULL,
  `date_of_discharge` date NOT NULL,
  `time_of_discharge` time NOT NULL,
  `admission_room_type` varchar(10) NOT NULL,
  `no_of_days_of_stay` int(3) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `anesthetist_name` varchar(20) NOT NULL,
  `nursing_staff` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(5) NOT NULL,
  `spw` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `spw`, `name`) VALUES
('SF001', 'SF001', 'PRANEETH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `existing_op_record`
--
ALTER TABLE `existing_op_record`
  ADD PRIMARY KEY (`id`,`token_id`);

--
-- Indexes for table `fee_charges`
--
ALTER TABLE `fee_charges`
  ADD PRIMARY KEY (`charge_id`);

--
-- Indexes for table `out_patient_billing_details`
--
ALTER TABLE `out_patient_billing_details`
  ADD PRIMARY KEY (`patient_id`,`charge_id`,`token_id`,`time`),
  ADD KEY `charge_id_key` (`charge_id`);

--
-- Indexes for table `patient_billing_details`
--
ALTER TABLE `patient_billing_details`
  ADD PRIMARY KEY (`patient_id`,`charge_id`,`token_id`,`time`),
  ADD KEY `charge_id_key` (`charge_id`);

--
-- Indexes for table `patient_pregnancy_information`
--
ALTER TABLE `patient_pregnancy_information`
  ADD PRIMARY KEY (`id`,`token_id`);

--
-- Indexes for table `patient_primary_information`
--
ALTER TABLE `patient_primary_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_billing_details`
--
ALTER TABLE `patient_billing_details`
  ADD CONSTRAINT `patient_id_key` FOREIGN KEY (`patient_id`) REFERENCES `patient_primary_information` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
