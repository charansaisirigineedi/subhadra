-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 07:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor details`
--

INSERT INTO `doctor details` (`did`, `dname`, `designation`, `regno`) VALUES
('D001', 'Dr.Sree Ramya Amulya.V', 'M.S.(OB/GYN),F.MAS,D.MAS', 'Obstetrician/Gynecologist,Reg.No:68984'),
('D002', 'Dr.Subhashini.V', 'M.B.B.S.', 'Reg.No :10111,Consultant  \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_visit`
--

CREATE TABLE `doctor_visit` (
  `did` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `existing_op_record`
--

INSERT INTO `existing_op_record` (`id`, `token_id`, `date`, `time`) VALUES
('P202209181', '2210083', '2022-10-08', '2022-10-08 11:45:57'),
('P202209181', '2210084', '2022-10-08', '2022-10-08 12:41:42');

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

--
-- Dumping data for table `out_patient_billing_details`
--

INSERT INTO `out_patient_billing_details` (`patient_id`, `charge_id`, `charge_name`, `token_id`, `quantity`, `price`, `date`, `time`) VALUES
('P202209181', 'CH004', 'Repeat Consultation', '2210083', 1, 300, '2022-10-08', '2022-10-08 11:48:41');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastrecords`
--

INSERT INTO `pastrecords` (`patient_id`, `g`, `l`, `p`, `a`, `d`, `high_risk_pregnancy`, `date`) VALUES
('P202209142', 5, 5, 5, 5, 5, '', '2022-09-20 12:01:58'),
('P202209181', 5, 5, 5, 5, 2, 'Sugar', '2022-09-19 13:57:11'),
('P202209191', 8, 8, 8, 8, 5, 'Sugar', '2022-09-19 13:57:20'),
('P202209192', 55, 55, 5, 5, 5, 'Sugar', '2022-09-20 11:49:35');

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

--
-- Dumping data for table `patient_billing_details`
--

INSERT INTO `patient_billing_details` (`patient_id`, `charge_id`, `charge_name`, `token_id`, `quantity`, `price`, `date`, `time`) VALUES
('P202209181', 'CH003', 'Emergency Consultation Charges', '0610222', 1, 1000, '2022-10-08', '2022-10-08 07:40:17'),
('P202209181', 'CH004', 'Repeat Consultation', '0610222', 1, 300, '2022-10-08', '2022-10-08 07:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `patient_discharge_form`
--

CREATE TABLE `patient_discharge_form` (
  `id` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `admitting_diagnosis` varchar(50) NOT NULL,
  `treatment_given` varchar(50) NOT NULL,
  `condition_at_discharge` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `pr` varchar(50) NOT NULL,
  `bp` varchar(50) NOT NULL,
  `h/l` varchar(50) NOT NULL,
  `breasts` varchar(50) NOT NULL,
  `p/a` varchar(50) NOT NULL,
  `p/v` varchar(50) NOT NULL,
  `lochia` varchar(50) NOT NULL,
  `advice_on_discharge` varchar(50) NOT NULL,
  `diet` varchar(50) NOT NULL,
  `activity` varchar(1000) NOT NULL,
  `medications_and_follow_up` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_discharge_form`
--

INSERT INTO `patient_discharge_form` (`id`, `tid`, `admitting_diagnosis`, `treatment_given`, `condition_at_discharge`, `temp`, `pr`, `bp`, `h/l`, `breasts`, `p/a`, `p/v`, `lochia`, `advice_on_discharge`, `diet`, `activity`, `medications_and_follow_up`) VALUES
('P202209181', '0610222', 'IT CAN BE CURED', 'THIS IS THE TREATMENT GIVEN TO THE PATIENT.', 'THIS IS THE TREATMENT GIVEN TO THE PATIENT.', '8', '8', '8', '8', '8', '8', '8', '8', 'FEVER', 'ADVANCE', ' Pelvic rest for 6 weeks i.e.,no sex, no heavy lifting,', 'AS PER Dr.Subhashini.V');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_inpatient_form`
--

INSERT INTO `patient_inpatient_form` (`token_id`, `patient_id`, `registration_date`, `type_of_inpatient`, `reason_for_admission`, `time`) VALUES
('0610222', 'P202209181', '2022-10-06', 'Pregnancy', 'ip', '2022-10-06 07:45:41'),
('1510223', 'P202209181', '2022-10-15', 'Surgery', 'op', '2022-10-15 17:36:26'),
('1510224', 'P202209181', '2022-10-15', 'Pregnancy', 'op', '2022-10-15 17:37:20');

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
  `weight` int(5) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_primary_information`
--

INSERT INTO `patient_primary_information` (`id`, `name`, `dob`, `p_age`, `gender`, `patient_phone_number`, `patient_aadhaar`, `caste`, `religion`, `present_address`, `permanent_address`, `patient_qualification`, `patient_occupation`, `spouse_name`, `spouse_contact`, `spose_dob`, `spouse_age`, `spouse_gender`, `spouse_occupation`, `spouse_qualification`, `lmp`, `edd`, `pog`, `cardtype`, `socio_economic_status`, `spouse_aadhaar`, `date`) VALUES
('P202209181', 'PRIYA', '2003-01-19', 19, 'F', '9555555555', '333333333333', 'OC', 'HINDU', '2-150', '2-150', 'BTECH', 'JOB', 'SAI', '8888888888', '2001-02-15', 21, 'F', 'JOB', 'BTECH', '2019-04-05', '2020-01-12', '179 WEEKS', 'PINK', 'SES', '555555555555', '2022-10-06 06:44:50');

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
  `tod` varchar(40) NOT NULL,
  `nursing_staff` varchar(60) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_surgery_form`
--

INSERT INTO `patient_surgery_form` (`id`, `token_id`, `date_of_admission`, `time_of_admisssion`, `date_of_discharge`, `time_of_discharge`, `admission_room_type`, `no_of_days_of_stay`, `doctor_name`, `anesthetist_name`, `tod`, `nursing_staff`, `time`) VALUES
('P202209181', '1510224', '0055-04-05', '05:05:00', '0066-05-05', '06:06:00', '1', 2, 'Dr.Subhashini.V', 'Dr.Anil', 'Normal', '555', '2022-10-15 17:37:47');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prebooking`
--

INSERT INTO `prebooking` (`Name`, `Date`, `time`, `Mobile`, `Reason`) VALUES
(' patient2', '2022-10-08', '16:53:00', '9555555555', 'op'),
('uday', '2022-10-08', '05:05:00', '8888888888', 'op');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` varchar(10) NOT NULL,
  `spw` varchar(10) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `spw`, `name`) VALUES
('doctor', 'doctor', 'Doctor'),
('subhadra', 'subhadra', 'Gowtham');

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
-- Indexes for table `patient_surgery_form`
--
ALTER TABLE `patient_surgery_form`
  ADD PRIMARY KEY (`id`,`token_id`);

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
