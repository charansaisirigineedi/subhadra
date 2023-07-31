-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Table structure for table `doctor details`
--

CREATE TABLE `doctor details` (
  `did` varchar(100) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `existing_op_record`
--

CREATE TABLE `existing_op_record` (
  `id` varchar(20) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `dname` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fee_charges`
--

CREATE TABLE `fee_charges` (
  `charge_id` varchar(5) NOT NULL,
  `charge_name` varchar(50) NOT NULL,
  `charge_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pastrecords`
--

CREATE TABLE `pastrecords` (
  `patient_id` varchar(15) NOT NULL,
  `g` int(10) NOT NULL,
  `l` int(10) NOT NULL,
  `p` int(10) NOT NULL,
  `a` int(10) NOT NULL,
  `d` int(10) NOT NULL,
  `high_risk_pregnancy` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_discharge_form`
--

CREATE TABLE `patient_discharge_form` (
  `id` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `admitting_diagnosis` varchar(500) NOT NULL,
  `treatment_given` varchar(500) NOT NULL,
  `condition_at_discharge` varchar(500) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `pr` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `h/l` varchar(50) NOT NULL,
  `breasts` varchar(500) NOT NULL,
  `p/a` varchar(500) NOT NULL,
  `p/v` varchar(500) NOT NULL,
  `lochia` varchar(500) NOT NULL,
  `advice_on_discharge` varchar(500) NOT NULL,
  `diet` varchar(500) NOT NULL,
  `activity` varchar(1000) NOT NULL,
  `medications_and_follow_up` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_inpatient_form`
--

CREATE TABLE `patient_inpatient_form` (
  `token_id` varchar(20) NOT NULL,
  `patient_id` varchar(20) NOT NULL,
  `registration_date` date NOT NULL,
  `type_of_inpatient` varchar(100) NOT NULL,
  `reason_for_admission` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `no.of.weeks` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `weight` double NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_primary_information`
--

CREATE TABLE `patient_primary_information` (
  `id` varchar(10) NOT NULL,
  `name` varchar(500) NOT NULL,
  `dob` date NOT NULL,
  `p_age` int(3) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `patient_phone_number` varchar(10) NOT NULL,
  `patient_aadhaar` varchar(12) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `present_address` varchar(150) NOT NULL,
  `permanent_address` varchar(150) NOT NULL,
  `patient_qualification` varchar(30) NOT NULL,
  `patient_occupation` varchar(30) NOT NULL,
  `spouse_name` varchar(100) NOT NULL,
  `spouse_contact` varchar(10) NOT NULL,
  `spose_dob` date NOT NULL,
  `spouse_age` int(3) NOT NULL,
  `spouse_gender` varchar(5) NOT NULL,
  `spouse_occupation` varchar(20) NOT NULL,
  `spouse_qualification` varchar(20) NOT NULL,
  `lmp` date NOT NULL,
  `edd` date NOT NULL,
  `pog` varchar(25) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `socio_economic_status` varchar(20) NOT NULL,
  `spouse_aadhaar` varchar(12) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_sdischarge_form`
--

CREATE TABLE `patient_sdischarge_form` (
  `id` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `admitting_diagnosis` varchar(500) NOT NULL,
  `treatment_given` varchar(500) NOT NULL,
  `condition_at_discharge` varchar(500) NOT NULL,
  `advice_on_discharge` varchar(500) NOT NULL,
  `diet` varchar(500) NOT NULL,
  `activity` varchar(1000) NOT NULL,
  `medications_and_follow_up` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_surgery_form`
--

CREATE TABLE `patient_surgery_form` (
  `id` varchar(10) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `date_of_admission` date NOT NULL,
  `time_of_admisssion` time NOT NULL,
  `date_of_procedure` date NOT NULL,
  `date_of_discharge` date NOT NULL,
  `time_of_discharge` time NOT NULL,
  `admission_room_type` varchar(10) NOT NULL,
  `no_of_days_of_stay` int(3) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `anesthetist_name` varchar(50) NOT NULL,
  `tod` varchar(40) NOT NULL,
  `nursing_staff` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prebooking`
--

CREATE TABLE `prebooking` (
  `Name` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL,
  `Mobile` varchar(10) NOT NULL,
  `Reason` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(10) NOT NULL,
  `spw` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `spw`, `name`) VALUES
('doctor', 'test@1', 'Doctor'),
('admin', 'test@2', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor details`
--
ALTER TABLE `doctor details`
  ADD PRIMARY KEY (`did`);

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
-- Indexes for table `pastrecords`
--
ALTER TABLE `pastrecords`
  ADD PRIMARY KEY (`patient_id`,`date`);

--
-- Indexes for table `patient_billing_details`
--
ALTER TABLE `patient_billing_details`
  ADD PRIMARY KEY (`patient_id`,`charge_id`,`token_id`,`time`),
  ADD KEY `charge_id_key` (`charge_id`);

--
-- Indexes for table `patient_discharge_form`
--
ALTER TABLE `patient_discharge_form`
  ADD PRIMARY KEY (`id`,`tid`);

--
-- Indexes for table `patient_inpatient_form`
--
ALTER TABLE `patient_inpatient_form`
  ADD PRIMARY KEY (`token_id`,`patient_id`);

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
-- Indexes for table `patient_sdischarge_form`
--
ALTER TABLE `patient_sdischarge_form`
  ADD PRIMARY KEY (`id`,`tid`);

--
-- Indexes for table `patient_surgery_form`
--
ALTER TABLE `patient_surgery_form`
  ADD PRIMARY KEY (`id`,`token_id`);

--
-- Indexes for table `prebooking`
--
ALTER TABLE `prebooking`
  ADD PRIMARY KEY (`Name`,`Date`,`time`);

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
