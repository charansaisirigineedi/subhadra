-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 15, 2022 at 06:03 AM
-- Server version: 5.7.39-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subhadradb`
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
('D001', 'Dr.Sree Ramya Amulya.V', 'M.S.(OB/GYN),F.MAS,D.MAS', 'Reg.No:68984'),
('D002', 'Dr.Subhashini.V', 'M.B.B.S.', 'Reg.No :10111\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `existing_op_record`
--

CREATE TABLE `existing_op_record` (
  `id` varchar(20) NOT NULL,
  `token_id` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `dname` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `existing_op_record`
--

INSERT INTO `existing_op_record` (`id`, `token_id`, `date`, `dname`, `time`) VALUES
('P202211011', '2211011', '2022-11-01', 'Dr.Subhashini.V', '2022-11-01 14:32:06'),
('P202211021', '2211021', '2022-11-02', 'Dr.Subhashini.V', '2022-11-02 17:55:08'),
('P202211021', '2211031', '2022-11-03', 'Dr.Subhashini.V', '2022-11-03 12:27:35'),
('P202211041', '2211041', '2022-11-04', 'Dr.Subhashini.V', '2022-11-04 14:46:57'),
('P202211042', '2211042', '2022-11-04', 'Dr.Subhashini.V', '2022-11-04 14:49:20'),
('P202211042', '2211044', '2022-11-04', 'Dr.Subhashini.V', '2022-11-04 15:01:46'),
('P202211043', '2211043', '2022-11-04', 'Dr.Subhashini.V', '2022-11-04 15:00:55'),
('P202211044', '2211045', '2022-11-04', 'Dr.Subhashini.V', '2022-11-04 15:04:49'),
('P202211051', '2211051', '2022-11-05', 'Dr.Subhashini.V', '2022-11-05 08:37:54'),
('P202211052', '2211052', '2022-11-05', 'Dr.Subhashini.V', '2022-11-05 12:34:07'),
('P202211053', '2211053', '2022-11-05', 'Dr.Subhashini.V', '2022-11-05 12:41:45'),
('P202211053', '2211054', '2022-11-05', 'Dr.Subhashini.V', '2022-11-05 12:46:12'),
('P202211071', '2211071', '2022-11-07', 'Dr.Subhashini.V', '2022-11-07 05:19:51'),
('P202211072', '2211071', '2022-11-07', 'Dr.Subhashini.V', '2022-11-07 05:27:27'),
('P202211073', '2211071', '2022-11-07', 'Dr.Subhashini.V', '2022-11-07 05:34:56'),
('P202211081', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 05:33:01'),
('P202211082', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 05:41:38'),
('P202211083', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 05:47:03'),
('P202211084', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 05:51:35'),
('P202211085', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 05:56:19'),
('P202211086', '2211081', '2022-11-08', 'Dr.Subhashini.V', '2022-11-08 06:02:49'),
('P202211091', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 03:56:02'),
('P2022110910', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 05:47:14'),
('P202211092', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 04:02:24'),
('P202211093', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 04:20:41'),
('P202211094', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 04:27:06'),
('P202211095', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 04:53:02'),
('P202211096', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 05:01:48'),
('P202211097', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 05:15:18'),
('P202211098', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 05:20:02'),
('P202211099', '2211091', '2022-11-09', 'Dr.Subhashini.V', '2022-11-09 05:26:18'),
('P202211101', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 04:14:37'),
('P202211102', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:20:04'),
('P202211103', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:24:19'),
('P202211104', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:32:20'),
('P202211105', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:41:54'),
('P202211106', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:46:06'),
('P202211107', '2211101', '2022-11-10', 'Dr.Subhashini.V', '2022-11-10 05:58:47'),
('P202211121', '2211121', '2022-11-12', 'Dr.Subhashini.V', '2022-11-12 07:13:39'),
('P202211122', '2211122', '2022-11-12', 'Dr.Subhashini.V', '2022-11-12 09:45:50'),
('P202211123', '2211123', '2022-11-12', 'Dr.Subhashini.V', '2022-11-12 09:59:15'),
('P202211124', '2211124', '2022-11-12', 'Dr.Subhashini.V', '2022-11-12 10:13:19'),
('P202211125', '2211125', '2022-11-12', 'Dr.Subhashini.V', '2022-11-12 10:27:37'),
('P202211151', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 05:06:42'),
('P202211152', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 05:14:50'),
('P202211153', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 05:19:34'),
('P202211154', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 05:30:11'),
('P202211155', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 05:43:44'),
('P202211156', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 06:09:12'),
('P202211157', '2211151', '2022-11-15', 'Dr.Subhashini.V', '2022-11-15 06:14:41');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `out_patient_billing_details`
--

INSERT INTO `out_patient_billing_details` (`patient_id`, `charge_id`, `charge_name`, `token_id`, `quantity`, `price`, `date`, `time`) VALUES
('P202211011', 'CH003', 'Emergency Consultation Charges', '2211011', 1, 1000, '2022-11-01', '2022-11-01 14:32:15'),
('P202211021', 'CH005', 'Admission Charges', '2211021', 1, 1000, '2022-11-02', '2022-11-02 17:55:13'),
('P202211122', 'CH001', 'Consultation Charges', '2211122', 1, 400, '2022-11-12', '2022-11-12 09:46:02'),
('P202211123', 'CH001', 'Consultation Charges', '2211123', 1, 400, '2022-11-12', '2022-11-12 09:59:22');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pastrecords`
--

INSERT INTO `pastrecords` (`patient_id`, `g`, `l`, `p`, `a`, `d`, `high_risk_pregnancy`, `date`) VALUES
('P202211011', 5, 5, 55, 5, 5, 'BP, Diabetes,', '2022-11-03 10:09:21'),
('P202211021', 44, 444, 44, 44, 44, 'BP', '2022-11-02 21:19:04'),
('P202211042', 0, 0, 1, 0, 0, 'BP', '2022-11-05 08:12:22');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_billing_details`
--

INSERT INTO `patient_billing_details` (`patient_id`, `charge_id`, `charge_name`, `token_id`, `quantity`, `price`, `date`, `time`) VALUES
('P202211021', 'CH003', 'Emergency Consultation Charges', '0311221', 1, 1000, '2022-11-03', '2022-11-03 11:59:49'),
('P202211042', 'CH007', 'Anaesthesia Doctor Charges', '0411223', 1, 3000, '2022-11-03', '2022-11-04 15:00:04'),
('P202211042', 'CH013', 'Operation Theatre Charges', '0411223', 1, 10000, '2022-11-03', '2022-11-04 14:59:32'),
('P202211042', 'CH020', 'Doctor/ Surgeon Charges', '0411223', 1, 10000, '2022-11-03', '2022-11-04 15:00:22'),
('P202211051', 'CH007', 'Anaesthesia Doctor Charges', '0511221', 1, 4000, '2022-10-14', '2022-11-05 08:44:15'),
('P202211051', 'CH009', 'Doctors Visiting Charges', '0511221', 5, 4000, '2022-10-14', '2022-11-05 08:44:50'),
('P202211051', 'CH012', 'Nursing Charges', '0511221', 1, 1000, '2022-10-14', '2022-11-05 08:45:19'),
('P202211051', 'CH013', 'Operation Theatre Charges', '0511221', 1, 15000, '2022-10-14', '2022-11-05 08:42:55'),
('P202211051', 'CH016', 'Pediatrician Charges', '0511221', 1, 1000, '2022-10-14', '2022-11-05 08:46:17'),
('P202211051', 'CH018', 'Special Room Rent', '0511221', 5, 6000, '2022-10-14', '2022-11-05 08:45:43'),
('P202211051', 'CH020', 'Doctor/ Surgeon Charges', '0511221', 1, 15000, '2022-10-14', '2022-11-05 08:43:33'),
('P202211051', 'CH021', 'Assistant Surgeon Charges', '0511221', 1, 8000, '2022-10-14', '2022-11-05 08:43:53'),
('P202211124', 'CH005', 'Admission Charges', '1511221', 1, 1000, '2022-11-12', '2022-11-15 07:21:25'),
('P202211124', 'CH009', 'Doctors Visiting Charges', '1511221', 2, 2000, '2022-11-14', '2022-11-15 07:24:44'),
('P202211124', 'CH012', 'Nursing Charges', '1511221', 2, 1100, '2022-11-12', '2022-11-15 07:23:04'),
('P202211124', 'CH015', 'Labour Rooms Charges', '1511221', 1, 6000, '2022-11-12', '2022-11-15 07:26:34'),
('P202211124', 'CH016', 'Pediatrician Charges', '1511221', 1, 1500, '2022-11-12', '2022-11-15 07:20:09'),
('P202211124', 'CH018', 'Special Room Rent', '1511221', 2, 2400, '2022-11-12', '2022-11-15 07:19:35'),
('P202211124', 'CH020', 'Doctor/ Surgeon Charges', '1511221', 1, 10000, '2022-11-12', '2022-11-15 07:20:47');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_discharge_form`
--

INSERT INTO `patient_discharge_form` (`id`, `tid`, `admitting_diagnosis`, `treatment_given`, `condition_at_discharge`, `temp`, `pr`, `bp`, `h/l`, `breasts`, `p/a`, `p/v`, `lochia`, `advice_on_discharge`, `diet`, `activity`, `medications_and_follow_up`, `date`) VALUES
('P202211021', '0311221', 'admit', 'treat', 'cond', '5', '5', '5', '5', '5', '5', '5', '5', 'advice', 'diet', 'activity', 'AS PER Dr.Sree Ramys Amulya.V', '2022-11-03 11:41:29'),
('P202211051', '0511221', 'PRIMIGRAVIDA (1ST PREGNANCY) WITH TERM GESTATION WITH OLIGOHYDRAMNIOS AND UNENGAGED HEAD.', 'Caesarean section', 'NORMAL', '98', '80', '110/80', 'NORMAL', 'NORMAL', 'NO ABNORMALITY DETECTED', 'NO ABNORMALITY DETECTED', 'LIGHT', 'REVIEW IN TWO WEEKS OR WITH SIGNS OF SEVERE PAIN, HEAVY BLEEDING,FEVER OR OTHER PROBLEMS. ', 'NORMAL', 'AVOID LIFTING AND STRAINING.', 'USE THE PRESCRIBED ANTIBIOTICS AND PAIN KILLERS FOR A PERIOD OF 5 DAY', '2022-11-05 13:49:43');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_inpatient_form`
--

INSERT INTO `patient_inpatient_form` (`token_id`, `patient_id`, `registration_date`, `type_of_inpatient`, `reason_for_admission`, `time`) VALUES
('0311221', 'P202211021', '2022-11-03', 'Pregnancy', 'Hello', '2022-11-03 10:29:18'),
('0311222', 'P202211021', '2022-11-03', 'Surgery', 'op', '2022-11-03 11:20:06'),
('0411221', 'P202211021', '2022-11-04', 'Surgery', 'Hello', '2022-11-04 04:19:08'),
('0411221', 'P202211041', '2022-11-04', 'Pregnancy', 'Lscs', '2022-11-04 14:47:21'),
('0411222', 'P202211041', '2022-11-04', 'Pregnancy', 'Lscs', '2022-11-04 14:47:47'),
('0411223', 'P202211042', '2022-11-03', 'Pregnancy', 'PREGNANCY', '2022-11-04 14:50:46'),
('0411224', 'P202211044', '2022-11-04', 'Pregnancy', 'Lscs', '2022-11-04 15:05:17'),
('0511221', 'P202211051', '2022-11-05', 'Pregnancy', 'PREGNANCY', '2022-11-05 08:38:49'),
('1211221', 'P202211122', '2022-11-12', 'Pregnancy', 'Lscs', '2022-11-12 09:46:35'),
('1211222', 'P202211123', '2022-11-12', 'Pregnancy', 'Lscs', '2022-11-12 10:00:07'),
('1211223', 'P202211124', '2022-11-12', 'Pregnancy', 'Nvd', '2022-11-12 10:13:52'),
('1211224', 'P202211125', '2022-11-12', 'Pregnancy', 'Normal ', '2022-11-12 10:28:05'),
('1511221', 'P202211124', '2022-11-12', 'Pregnancy', 'normal', '2022-11-15 07:14:40');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_pregnancy_information`
--

INSERT INTO `patient_pregnancy_information` (`id`, `token_id`, `mother_age_at_time_of_marriage`, `mother_age_at_time_of_delivery`, `type_of_delivery`, `number_of_kids_including_this`, `no.of.weeks`, `gender`, `weight`, `time`) VALUES
('P202211021', '0311221', 45, 45, 'Normal', 5, 3, 'M', 45.02588884546547, '2022-11-02 10:35:53'),
('P202211041', '0411222', 21, 30, 'LSCS', 2, 40, 'M', 3, '2022-11-04 14:49:51'),
('P202211042', '0411223', 23, 26, 'LSCS', 2, 37, 'F', 3, '2022-11-04 14:57:18'),
('P202211044', '0411224', 20, 25, 'LSCS', 2, 37, 'F', 3, '2022-11-04 15:07:55'),
('P202211051', '0511221', 23, 28, 'LSCS', 1, 37, 'M', 3, '2022-11-05 08:42:06'),
('P202211122', '1211221', 23, 30, 'LSCS', 2, 36, 'F', 2.5, '2022-11-12 09:48:50'),
('P202211123', '1211222', 23, 24, 'LSCS', 1, 41, 'M', 3.7, '2022-11-12 10:02:05'),
('P202211124', '1211223', 19, 23, 'Normal', 2, 40, 'F', 3, '2022-11-12 10:16:04'),
('P202211124', '1511221', 19, 23, 'Normal', 2, 40, 'F', 3, '2022-11-15 07:17:18'),
('P202211125', '1211224', 24, 30, 'Normal', 2, 40, 'M', 3, '2022-11-12 10:32:00');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_primary_information`
--

INSERT INTO `patient_primary_information` (`id`, `name`, `dob`, `p_age`, `gender`, `patient_phone_number`, `patient_aadhaar`, `caste`, `religion`, `present_address`, `permanent_address`, `patient_qualification`, `patient_occupation`, `spouse_name`, `spouse_contact`, `spose_dob`, `spouse_age`, `spouse_gender`, `spouse_occupation`, `spouse_qualification`, `lmp`, `edd`, `pog`, `cardtype`, `socio_economic_status`, `spouse_aadhaar`, `date`) VALUES
('P202211011', 'UNIX', '2000-02-10', 22, 'F', '9992922999', '292922222222', 'OC', 'HINDU', '2-150\r\nkovvuru road', '2-150', 'JOB', 'BTECH', 'LINUX', '8888888888', '2003-02-20', 19, 'M', 'BTECH', 'JOB', '2022-05-04', '2023-02-11', '25 WEEKS', 'WHITE', 'MIDDLE CLASS', '666666666666', '2022-11-01 14:32:06'),
('P202211021', 'SAI', '2003-01-22', 19, 'F', '9825555555', '555565464546', 'OC', 'HINDU', '2-150', '2-150', 'BTECH', 'JOB', 'HHB', '9333333333', '2003-02-22', 19, 'F', 'JOB ', 'BTECH', '2003-01-21', '2003-10-28', '1032 WEEKS', '98555555AJ', 'MIDDLE CLASS', '666666666666', '2022-11-02 18:04:32'),
('P202211041', 'JOGI HANUMAD RATNAM ', '1993-01-01', 29, 'F', '8688261167', '326714430062', 'BCB ', 'SETTIBAJJILU ', '5-55kattavaripalem yanamadurru bhimavaram mandalam losari gutlapadu West Godavari dirusumarru Andhra Pradesh 534239', '5-55 kattarvari palem yanamadurru bhimavaram mandalam losari gutlapadu West Godavari dirusumarru Andhra Pradesh 534239', '10TH', 'HOUSEWIFE ', 'JOGI RAMANJANEYULU ', '9642883258', '1984-01-01', 38, 'M', 'FORMER ', '10TH', '2022-01-26', '2022-11-02', '40 WEEKS', '000000', 'MIDDLE CLASS ', '304433508284', '2022-11-04 14:46:57'),
('P202211042', 'KANAKA DEVI PALLI', '1996-08-20', 26, 'F', '8985182972', '560867636794', 'BC-D(KOPPULA VELAMA)', 'HINDU', 'D.NO-10-5-122/2\r\nCHINA RANGANI PALAM,\r\nNEAR OLD SAIBABA TEMPLE \r\nHOUSING BOARD COLONY\r\nBHIMAVARAM-534201', 'D.NO-1-120\r\nSALIPETA VILLAGE\r\nGAJAPATHI NAGARAM \r\nMANDAL,VIZIANAGARAM\r\nAP', 'B S E', 'HOUSE WIFE', 'MAHESH PALLI', '8985182972', '1989-03-07', 33, 'F', 'RAILWAY JOB', 'B-TECH', '0000-00-00', '0000-00-00', '', 'NA', 'NA', '408098226879', '2022-11-04 15:02:26'),
('P202211043', 'SUNKARA SURYAKALA ', '1997-01-11', 25, 'F', '9063273488', '431007399630', 'OC', 'KAPULU ', '13-10-30yarram setti vari Street gunupudi bhimavaram bhimavaram West Godavari Andhra Pradesh 534201', '13-10-30yarramsetti vari Street gunupudi bhimavaram bhimavaram West Godavari Andhra Pradesh 534201', 'DEGREE ', 'HOUSEWIFE ', 'MOGANTI POSI RAVI KUMAR ', '9985584555', '1987-06-26', 35, 'M', 'BANK EMPLOYEE ', 'MCA ', '2022-02-14', '2022-11-21', '37 WEEKS', '000000', '30000', '311277909155', '2022-11-04 15:00:54'),
('P202211044', 'SUNKARA SURYAKALA ', '1997-01-11', 25, 'F', '9063273488', '431007399630', 'OC', 'KAPULU ', '13-10-30yarram setti vari Street gunupudi bhimavaram bhimavaram West Godavari Andhra Pradesh 534201', '13-10-30yarramsetti vari Street gunupudi bhimavaram bhimavaram West Godavari Andhra Pradesh 534201', 'DEGREE ', 'HOUSEWIFE ', 'MOGANTI POSI RAVI KUMAR ', '9985584555', '1987-06-26', 35, 'M', 'BANK EMPLOYEE ', 'MCA ', '2022-02-14', '2022-11-21', '37 WEEKS', '000000', 'MIDDLE CLASS ', '311277909155', '2022-11-04 15:04:49'),
('P202211051', 'GANTA MANJULA', '1993-02-07', 29, 'F', '8186913139', '519101427177', 'KAPU', 'HINDU', 'FLAT G4, B-BLOCK\r\nSREE MAYI APPARTMENT,\r\nPALAKOLLU ROAD \r\nVISSAKODERU', 'FLAT -201,SREE NIDHI APARTMENT\r\nOPPOSITE RMC CHURCH,\r\nPALAKOLLU ROAD ,BHIMAVARAM', 'B-TECH', 'HOUSE WIFE', 'GANTA HARI DURGA SATYA SURYA SANDEEP', '8978267124', '1989-07-14', 33, 'M', 'SOFTWARE JOB', 'B-TECH', '0000-00-00', '0000-00-00', '', 'NA', 'NA', '917430556758', '2022-11-05 08:37:54'),
('P202211052', 'CHEKURI SUJATHA ', '1987-11-03', 35, 'F', '9121335334', '204328830996', 'OC', '', 'Kovada pontha bhimavaram mandalam West Godavari Andhra Pradesh ', 'Kovada pontha bhimavaram mandalam West Godavari Andhra Pradesh', '10 CLASS ', 'HOME WORK ', 'CHEKURI PRASADA RAJU ', '9550565671', '1950-08-15', 72, 'M', 'FISH WORK.', '10 CLASS ', '2022-11-17', '2023-08-24', '1 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-05 12:34:07'),
('P202211053', 'PATARAPALLI JAGADEESWARI ', '1991-05-10', 31, 'F', '8307543554', '82265664977', 'BCA ', '', '1-29 Gandhi peta palakoderu mandala near ramalayam Vissakoderu West Godavari Andhra Pradesh -534244', '1-29 Gandhi peta palakoderu mandala near ramalayam Vissakoderu West Godavari Andhra Pradesh -534244', 'BED', 'TEACHER ', 'PATARAPALLI VENKATA SAI BABU', '9505056067', '1983-10-10', 39, 'M', 'PHOTOGRAPHER ', 'DEGREE ', '2022-10-26', '2023-08-02', '1 WEEKS', 'NA', 'MIDDLE CLASS ', '0', '2022-11-05 12:49:45'),
('P202211071', 'CHODAVARAPU DURGA LASHMI ', '1996-05-05', 26, 'M', '9849578287', '0', 'BC', 'HINDU ', 'Nallam varithota, gunupudi Bhimavaram mandalam West Godavari Andhra Pradesh -534201', 'Nallam varithota, gunupudi Bhimavaram mandalam West Godavari Andhra Pradesh -534201', 'DEGREE ', 'HOME WORK ', 'CHODAVARAPU NAGESWARAO ', '9849578287', '1994-07-07', 28, 'F', 'HIMALAYA QUAA TECNIT', 'DEGREE', '2022-09-05', '2023-06-12', '9 WEEKS', 'NA', 'MEDDLE CLASS ', '628206700392', '2022-11-07 05:19:50'),
('P202211072', 'KORASIKA SATYA VATHI ', '1982-01-03', 40, 'M', '9581497447', '864965964090', 'BC', 'HINDU ', 'Ganapathi raju Nagar bhimavaram mandalam West Godavari Andhra Pradesh -534202', 'Ganapathi raju Nagar bhimavaram mandalam West Godavari Andhra Pradesh -534202', '7 CLASS ', 'HOME WORK ', 'KORASIKA SRINIVAS ', '9581497447', '1976-01-08', 46, 'F', 'DRIVING ', '7 CLASS ', '2022-10-12', '2023-07-19', '3 WEEKS', 'NA', 'MEDDLE CLASS ', '436328419614', '2022-11-07 05:27:26'),
('P202211073', 'THOTA MAMATHA', '1996-05-30', 26, 'F', '9492953177', '934769898222', 'BCC', 'CHRISTIAN ', 'Sodadasi vari veedhi bhimavaram mandalam West Godavari Andhra Pradesh -534201', 'Sodadasi vari veedhi bhimavaram mandalam West Godavari Andhra Pradesh -534201', 'B.TECH ', 'SOFTWARE ENGINEERING ', 'SODADASI KAMAL SUNDAR ', '9492953177', '1994-04-12', 28, 'M', 'SOFTWARE ENGINEERING', 'B.TECH', '2023-05-25', '2024-03-03', '28 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-07 05:34:55'),
('P202211081', 'BOKKA KRANTHI ', '2000-05-05', 22, 'F', '9494400559', '640128822121', 'OBC ', 'HINDU ', 'Shivalayam  street rayalam bhimavaram mandalam West Godavari Andhra Pradesh -534208', 'Shivalayam  street rayalam bhimavaram mandalam West Godava', 'DEGREE ', 'HOME WORK ', 'BOKKA GOWTHAM ', '9494498699', '1988-02-11', 34, 'M', 'FISH WORK ', 'POLYETINCE ', '2022-10-18', '2023-07-25', '3 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 05:33:01'),
('P202211082', 'KANKIPATI VENKATA NARASIMHA UMA DEVI ', '1968-06-20', 54, 'F', '9573935289', '629767987426', 'OC', 'HINDU ', 'Bhimavaram gari Street near bhimavaram gari temple bhimavaram mandalam rayalam West Godavari Andhra Pradesh -534208', 'Bhimavaram gari Street near bhimavaram gari temple bhimavaram mandalam rayalam West Godavari Andhra Pradesh -534208', 'BA B.E.D', 'TEACHER ', 'KANKIPATI PRASAD RAJU', '9573935289', '1965-08-15', 57, 'M', 'NA ', '10 CLASS ', '2017-11-08', '2018-08-15', '260 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 05:41:37'),
('P202211083', 'NAGIDI YAMUNA ', '1998-10-30', 24, 'F', '9849172567', '0', 'BC', 'HINDU ', 'Venkata thippa bhimavaram mandalam West Godavari Andhra Pradesh ', 'Venkata thippa bhimavaram mandalam West Godavari Andhra Pradesh ', 'INTER ', 'HOME WORK ', 'NAGIDI SUBHARAYUDU ', '9704755667', '1988-01-05', 34, 'M', 'FARMEAR ', 'MCA ', '2022-11-03', '2023-08-10', '0 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 05:47:02'),
('P202211084', 'GANGULA NAGA LAKSHMI ', '1979-10-20', 43, 'F', '9705411668', '0', 'BCD ', 'HINDU ', 'Bondada ramayam Kalla mandalam West Godavari Andhra Pradesh ', 'Bondada ramayam Kalla mandalam West Godavari Andhra Pradesh ', '10 CLASS ', 'HOME WORK ', 'GANGULA VENKATESWARA RAO ', '9705411668', '1965-01-01', 57, 'M', 'FARMEAR ', '10 CLASS ', '2022-11-04', '2023-08-11', '0 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 05:51:35'),
('P202211085', 'KOPPARTHI NAGASHWINI ', '2005-05-06', 17, 'F', '9133461565', '0', 'OC', 'HINDU ', 'Lakshmi purma bhimavaram mandalam West Godavari Andhra Pradesh ', 'Lakshmi purma bhimavaram mandalam West Godavari Andhra Pradesh ', 'INTER ', 'INTER ', 'KOPPARTHI RAJU ', '9133461565', '1988-12-01', 33, 'M', 'FARMEAR ', '7 CLASS ', '2022-11-04', '2023-08-11', '0 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 05:56:19'),
('P202211086', 'VEERAVALLI DURGA SRAVANI ', '2001-09-19', 21, 'F', '8688918617', '0', 'BCB ', 'HINDU ', 'Ganapavarm mandalam West Godavari Andhra Pradesh ', 'Ganapavarm mandalam West Godavari And', 'INTER ', 'HOME WORK ', 'VEERAVALLI SATHISH KUMAR ', '8688918617', '2000-08-04', 22, 'M', 'FISH WORK ', 'IT', '2022-11-03', '2023-08-10', '0 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-08 06:02:49'),
('P202211091', 'NADUKUDITHI NAGA MAHALAKSHMI ', '1998-04-07', 24, 'F', '9390055588', '0', 'BCA ', 'HINDU ', 'Kalavapudi Kalla mandalam West Godavari Andhra Pradesh ', 'Kalavapudi Kalla mandalam West Godavari Andhra Pradesh ', 'DEGREE', 'HOME WORK ', 'NADUKUDITHI VIJAY ', '9390055588', '1996-10-17', 26, 'M', 'PHOTOGRAPHER ', 'DEGREE ', '2022-03-09', '2022-12-16', '35 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 03:56:02'),
('P202211092', 'MOKA DURGA BHAVANI ', '2000-10-13', 22, 'F', '9666189282', '472459653072', 'BC. ', 'HINDU ', 'Gandhi Nagar Kalla mandalam West Godavari Andhra Pradesh -534237', 'Gandhi Nagar Kalla mandalam West Godavari Andhra Pradesh -534237', '10 CLASS ', 'HOME WORK ', 'MOKA LEELA NAGARJUNA ', '9666189282', '1997-07-07', 25, 'M', 'FISH WORK ', 'MBA ', '2022-08-05', '2023-05-12', '13 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 04:02:24'),
('P202211093', 'KADALLI TEJAWI ', '2009-08-22', 13, 'F', '7382331687', '0', 'BC ', 'HINDU ', 'Goragala pudi palakoderu mandala West Godavari Andhra Pradesh', 'Goragala pudi palakoderu mandala West Godavari Andhra Pradesh ', '8 CLASS ', '8 CLASS ', 'KADALLI NARENDRA KUMAR ', '7382331687', '1979-12-10', 42, 'M', 'FISH WORK ', '', '2022-08-22', '2023-05-29', '11 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 04:20:41'),
('P202211094', 'KOLLI AMURUTHA ', '2022-08-24', 0, 'F', '8500813216', '436665312860', 'BCD ', 'HINDU ', 'Kovvada annavaram bhimavaram mandalam West Godavari Andhra Pradesh -534202', 'Kovvada annavaram bhimavaram mandalam West Godavari Andhra Pradesh -534202', 'DEGREE ', 'STUDY ', 'KOALLI SURY NARAYANA ', '8500813216', '1981-06-16', 41, 'M', ' AGRICULTURE DEPARTM', 'ITI ', '2022-09-15', '2023-06-22', '7 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 04:27:06'),
('P202211095', 'KADALLI SRI KALA', '1998-09-22', 24, 'F', '9391427032', '0', 'BCB ', 'HINDU ', 'Gaganada puram viravasara mandala West Godavari Andhra Pradesh -534247', 'Gaganada puram viravasara mandala West Godavari Andhra Pradesh -534247', 'DAEGREE ', 'HOME WORK ', 'KADALLI SATHISH BABU ', '9391427032', '1992-02-16', 30, 'M', 'HOMEGUARD ', 'HOMEGUARD ', '2022-10-20', '2023-07-27', '2 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 04:53:02'),
('P202211096', 'BASWANI MAVULAMMA ', '1998-10-06', 24, 'F', '8282821143', '0', 'BCA ', 'HINDU ', 'Podi kuthiveni mandala Krishna Jilla ', 'Podi kuthiveni mandala Krishna Jilla ', 'M COM ', 'HOME WORK ', 'BASWANI SUBHAR MANYAM ', '8282821143', '1998-07-05', 24, 'M', 'WORK ', 'MBA ', '0000-00-00', '0000-00-00', '', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 05:01:48'),
('P202211097', 'CHAVALLI ANJALI ', '1989-07-23', 33, 'F', '9346092466', '0', 'OC', 'HINDU ', 'Thadderu bhimavaram mandalam West Godavari Andhra Pradesh -534202', 'Thadderu bhimavaram mandalam West Godavari Andhra Pradesh -534202', 'DAEGREE ', 'HOME WORK ', 'CHAVALLI SIVA', '9346092246', '1977-12-04', 44, 'M', 'ARCHAKA ', '10 CLASS ', '2022-05-23', '2023-03-02', '24 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 05:15:18'),
('P202211098', 'KAITE PALLI SANDAY ', '1996-06-17', 26, 'F', '9177441223', '0', 'OC', 'HINDU ', 'Gandhi nagaram Bhimavaram mandalam West Godavari Andhra Pradesh ', 'Bhimavaram mandalam West Godavari Andhra Pradesh', '10 CLASS H', 'HOME WORK ', 'KAITE PALLI RAMA KUMAR ', '9177441223', '1986-10-03', 36, 'M', 'ARCHAKA ', 'MBA ', '2022-09-07', '2023-06-14', '9 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 05:20:02'),
('P202211099', 'YERRAMSETTI DEVI RAMAN ', '2003-05-27', 19, 'F', '8688082143', '0', 'OC', 'HINDU ', 'Kamudu gunta Kalla mandalam West Godavari Andhra Pradesh -534237', 'Kamudu gunta Kalla mandalam West Godavari Andhra Pradesh -534237', 'INTER ', 'HOME WORK ', 'YERRAMSETTI RAMA KRISHNA ', '8688082143', '1993-04-14', 29, 'M', 'KARONEI ', 'DAEGREE ', '2022-10-19', '2023-07-26', '3 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-09 05:26:17'),
('P202211101', 'BOKKA KALYANI ', '1999-07-25', 23, 'F', '9980731718', '445923933391', 'BCD ', 'HINDU ', 'Seetarampuram adabala vari thora seetarampuram West Godavari Andhra Pradesh -534280\r\n\r\n', 'Seetarampuram adabala vari thora seetarampuram West Godavari Andhra Pradesh -534280', 'INTER ', 'HOME WORK ', 'BOKKA VENKATA MUTHYALA RAO ', '9980731718', '1993-10-10', 29, 'F', 'FISH WORK ', 'B COM ', '2022-05-08', '2023-02-15', '26 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 04:14:37'),
('P202211102', 'THOTA MADHURI ', '2003-07-31', 19, 'F', '9866253248', '0', 'OC', 'HINDU ', 'Kamudu gunta kalla mandala West Godavari Andhra Pradesh ', 'Kamudu gunta kalla mandala West Godavari Andhra Pradesh ', 'INTER ', 'HOME WORK ', 'THOTA SRINU BABU ', '9866253248', '1999-04-10', 23, 'M', 'FISH WORK ', 'INTER ', '2022-06-28', '2023-04-04', '19 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 05:20:03'),
('P202211103', 'KOLATI SUDHA RANI ', '2003-03-11', 19, 'F', '9573178452', '0', 'BCA ', 'HINDU ', 'Gutalapadu bhimavaram mandalam West Godavari Andhra Pradesh ', 'Gutalapadu bhimavaram mandalam West Godavari Andhra Pradesh ', '10 CLASS ', 'HOME WORK ', 'KOLATI SAI KUMAR ', '9573178452', '1983-09-05', 39, 'M', 'FISH WORK ', 'INTER ', '2022-06-25', '2023-04-01', '19 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 05:24:19'),
('P202211104', 'PUUNANI UMA MAHESHWARI ', '2000-01-01', 22, 'F', '8712354566', '97621563630', 'BC ', 'HINDU ', 'Pathapeta bhimavaram mandalam chinnamiram West Godavari Andhra Pradesh -534204', '\r\nPathapeta bhimavaram mandalam chinnamiram West Godavari Andhra Pradesh -534204\r\n', '10 CLASS ', 'HOME WORK ', 'PUUNANI VENKATESWARA ', '8712354566', '1999-07-11', 23, 'M', 'CAR DRIVING ', '10 CLASS ', '2022-03-23', '2022-12-30', '33 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 05:32:20'),
('P202211105', 'ODUGU LAKSHMI ISHWARYA ', '2003-03-08', 19, 'F', '9949423725', '954969810784', 'BC', 'HINDU ', 'Padamata ramalayam back side pedamaina Vani Lanka thurputallu West Godavari Andhra Pradesh -534280', 'Padamata ramalayam back side pedamaina Vani Lanka thurputallu West Godavari Andhra Pradesh -534', '10 CLASS ', 'HOME WORK ', 'ODUGU JAGADEESH ', '9949423722', '1996-12-11', 25, 'M', 'DAYLI WORKING ', '10 CLASS ', '2022-03-09', '2022-12-16', '35 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 05:41:54'),
('P202211106', 'JALA PARLAMMA ', '1999-04-02', 23, 'F', '9014764379', '0', 'BC AND ', 'HINDU ', 'Podu Krishna Jilla kuthiveni mandala West Godavari Andhra ', 'Podu Krishna Jilla kuthiveni mandala West Godavari Andhra ', '9 CLASS ', 'HOME WORK ', 'JALLA BALARAJU ', '9014764379', '1992-08-08', 30, 'M', 'FISH WORK ', 'INTER ', '2022-04-18', '2023-01-25', '29 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 05:46:06'),
('P202211107', 'KOPAVARAPU VASAVI SIRISHA', '2001-07-17', 21, 'F', '9154421152', '0', 'OC', 'HINDU ', 'Konalapalli kalla mandala West Godavari Andhra Pradesh ', 'Konalapalli kalla mandala West Godavari Andhra Pradesh ', 'INTER ', 'HOME WORK ', 'KOPAVARAPU VENKATESWARLU', '9154421152', '1993-12-16', 28, 'F', 'FISH WORK ', 'ITI ', '2022-08-31', '2023-06-07', '10 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-10 06:59:11'),
('P202211121', 'AMARA SATYA LAVANYA', '1995-01-11', 27, 'F', '8985727473', '240352700559', 'OC', 'HINDU', '7-71/2 kovvadapuntha kovvada annavaram bhimavaram ', '7-71/2 kovvadapuntha kovvada annavaram bhimavaram ', 'MCA', 'SOFTWARE', 'U V PRAVEEN KUMAR', '9603113119', '1991-04-26', 31, 'M', 'SOTTWARE', 'B.TECH', '2022-08-17', '2023-05-24', '12 WEEKS', 'DEFPA4663K', 'MIDDLE CLASS', '803011780080', '2022-11-12 07:13:39'),
('P202211122', 'CHALLA CHANDRA LAKSHMI ', '1992-08-29', 30, 'F', '8106549081', '493571700373', 'BCD', 'COPULA VELAMAS', '1-16sundarayya colony ganapavarm mandalam appanna peta jallikinada jallikinada ganapavarm West Godavari Andhra Pradesh 534186', '1-16sundarayya colony ganapavarm mandalam appanna peta jallikinada jallikinada ganapavarm West Godavari Andhra Pradesh 534186', 'DEGREE ', 'HOUSEWIFE ', 'CHALLA DURGA PRASAD', '8106549081', '1990-08-10', 32, 'M', 'PRIVATE JOB ', 'DEGREE ', '2022-03-01', '2022-12-08', '36 WEEKS', 'BYIPC3076R', 'MIDDLE CLASS ', '736675177718', '2022-11-12 09:45:50'),
('P202211123', 'SURAGANI LAKSHMI SOUMYA ', '1997-08-21', 25, 'F', '8247005136', '981725539907', 'BCB', 'GOWDAS', '7-63/a janakipuram chinna gollapalem kruthivennu mandalam chinnagollapalem krishna Andhra Pradesh 534281', '7-63/a janakipuram chinna gollapalem kruthivennu mandalam chinnagollapalem krishna Andhra Pradesh 534281', '10TH', 'HOUSEWIFE ', 'SURAGANI MURALI KRISHNA', '8247005136', '1995-01-01', 27, 'M', 'AQUA FEED ', '10TH', '2022-01-29', '2022-11-05', '41 WEEKS', '0', 'MIDDLE CLASS ', '313456929364', '2022-11-12 09:59:15'),
('P202211124', 'MANNE ESWARI', '2000-06-20', 22, 'F', '8977171271', '219110019726', 'BCD YADAVA', 'HINDU ', '5-244 bondada peta Kalla mandalam West Godavari district Andhra Pradesh 534206', '5-244bondadapeta kalla mandalam West Godavari district Andhra Pradesh 534206', 'DEGREE ', 'HOUSEWIFE ', 'RAMESH TANUKONDA ', '8977171271', '1989-05-18', 33, 'M', 'GOVERNMENT JOB', 'DEGREE ', '2022-02-05', '2022-11-12', '40 WEEKS', '0000000', 'MIDDLE CLASS ', '860662448451', '2022-11-12 10:13:19'),
('P202211125', 'GADHIRAJU VINEETHA DEVI', '1992-08-05', 30, 'F', '9701706528', '515793395334', 'OC', 'HINDU ', '2-5/1 sivalayam street palakoderu mandalam garagaparru garagaparru palakoderu West Godavari Andhra Pradesh 534186', '2-5/1 sivalayam street palakoderu mandalam garagaparru garagaparru palakoderu West Godavari Andhra Pradesh 534186', 'B TECH ', 'HOUSEWIFE ', 'S M RAJU GADIRAJU', '9701706528', '1989-09-21', 33, 'M', ' BUSINESS ', 'B TECH ', '2022-02-10', '2022-11-17', '39 WEEKS', '000000', 'MIDDLE CLASS ', '870333912324', '2022-11-12 10:27:37'),
('P202211151', 'SARIPELLA RESHMA SAI GAYATHRI ', '1995-08-31', 27, 'F', '9346169869', '0', 'OC', 'HINDU ', 'Mandhalaparru  nidamaru West Godavari Andhra Pradesh ', 'Mandhalaparru  nidamaru West Godavari Andhra Pradesh ', 'B.TCH', 'HOME WORK ', 'SARIPELLA BHANU VARMA ', '9346169869', '1991-01-13', 31, 'M', 'ENGINEERING ', 'M.TCH ', '2022-07-31', '2023-05-08', '15 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 05:06:42'),
('P202211152', 'POTRURAMYA ', '2001-11-15', 21, 'F', '9100735598', '331165643713', 'BCD ', '', 'Kalidindi kalidindi mandalam Krish West Godavari Andhra Pradesh ', 'Kalidindi kalidindi mandalam Krish West GodavariAndhra Pradesh  ', 'INTER ', 'HOME WORK ', 'POTRU  VENKATA DAMODAR ', '9100735598', '1996-08-30', 26, 'M', 'FISH WORK ', 'DEGREE ', '2022-08-31', '2023-06-07', '10 WEEKS', 'NA', 'MEDDLE CLASS ', '810838678986', '2022-11-15 05:14:50'),
('P202211153', 'BONTHU LAKSHMI ', '1994-06-15', 28, 'F', '7731961452', '0', 'BCD ', 'HINDU ', 'Main Street voppangi Andhra Pradesh -532122', 'Main Street voppangi Andhra Pradesh -532122', 'DERGEE ', 'HOME WORK ', 'BONTHU CHANDRINAIDU ', '7731961452', '1991-06-10', 31, 'M', 'BDO ', 'MC ', '2022-05-17', '2023-02-24', '26 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 05:19:34'),
('P202211154', 'SATHI OOHA SRI ', '1996-11-25', 25, 'F', '9888522223', '0', 'OC', 'HINDU ', 'Bhimavaram mandalam West Godavari Andhra Pradesh ', 'Bhimavaram mandalam West Godavari Andhra Pradesh', 'BSC', 'HOME WORK ', 'SATHI RAMACHANDR ', '9951583330', '1995-02-19', 27, 'M', 'ENGINEERING ', 'B.TCH ', '2022-07-24', '2023-05-01', '16 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 05:30:11'),
('P202211155', 'KODI BHAVANI ', '1999-10-05', 23, 'F', '7032814326', '0', 'BCB ', 'HINDU ', 'Konithavada viravasara mandala West Godavari Andhra Pradesh ', 'Konithavada viravasara mandala West Godavari Andhra Pradesh ', 'INTER ', 'HOME WORK ', 'KODI RAJAKUMARI ', '7032143216', '1993-11-15', 29, 'M', 'GALPFI ', 'INTER ', '2022-04-10', '2023-01-17', '31 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 05:43:43'),
('P202211156', 'PADALA KALYANI ', '2000-05-09', 22, 'F', '9394325255', '0', 'OC', 'HINDU ', 'Kusuma Priya milayam bhimavaram bhimavaram mandalam West Godavari Andhra Pradesh ', 'Kusuma Priya milayam bhimavaram bhimavaram mandalam West Godavari And', 'DERGEE ', 'HOME WORK ', 'PADALA SAI NETHAR ', '9394325255', '1996-06-09', 26, 'M', 'BANK EMPLOYEE ', 'PJ ', '2022-02-27', '2022-12-04', '37 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 06:09:12'),
('P202211157', 'KATTA ARUNA KUMARI ', '1998-07-03', 24, 'F', '9949995008', '0', 'BC ', 'HINDU ', 'Kallakuru kalla mandala West Godavari Andhra Pradesh ', 'Kallakuru kalla mandala West Godavari Andhra Pradesh', 'DEGREE ', 'HOME WORK ', 'KATTA DINESH KUMAR ', '9949995008', '1995-05-25', 27, 'M', 'ENGINEERING ', 'DERGEE ', '2022-09-25', '2023-07-02', '7 WEEKS', 'NA', 'MEDDLE CLASS ', '0', '2022-11-15 06:14:40');

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
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_sdischarge_form`
--

INSERT INTO `patient_sdischarge_form` (`id`, `tid`, `admitting_diagnosis`, `treatment_given`, `condition_at_discharge`, `advice_on_discharge`, `diet`, `activity`, `medications_and_follow_up`, `date`) VALUES
('P202211021', '0311222', 'ed', 'mjjj', 'jjj', 'kkk', 'kkk', 'kk', 'AS PER Dr.Subhashini.V', '2022-11-03 11:48:07'),
('P202211021', '0411221', 'HELLO', 'Hello', 'Hello', 'Hello', 'Hello', 'Hello', 'AS PER Dr.Subhashini.V', '2022-11-04 04:20:23');

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
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_surgery_form`
--

INSERT INTO `patient_surgery_form` (`id`, `token_id`, `date_of_admission`, `time_of_admisssion`, `date_of_procedure`, `date_of_discharge`, `time_of_discharge`, `admission_room_type`, `no_of_days_of_stay`, `doctor_name`, `anesthetist_name`, `tod`, `nursing_staff`, `time`) VALUES
('P202211021', '0311221', '2022-11-01', '16:04:00', '2022-11-04', '2022-11-06', '16:04:00', 'AC ', 5, 'Dr.Sree Ramys Amulya.V', 'Dr.Rama Krishna', 'Normal', 'Praneetwejsdgbiho n', '2022-11-03 11:30:36'),
('P202211021', '0311222', '2022-11-26', '19:50:00', '2003-05-08', '2003-05-14', '05:25:00', 'AC ', 3, 'Dr.Subhashini.V', 'Dr.Bhanu', 'Tubectomy', 'op', '2022-11-03 11:26:36'),
('P202211021', '0411221', '2022-11-02', '03:49:00', '2022-11-03', '2022-11-05', '06:49:00', '1', 2, 'Dr.Subhashini.V', 'Dr.Bhanu', 'Ovarian Cystectomy', 'Hello', '2022-11-04 04:19:50'),
('P202211041', '0411222', '2022-10-30', '20:00:00', '2022-10-31', '2022-11-04', '18:30:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anil', 'LSCS', '2', '2022-11-04 14:49:22'),
('P202211042', '0411223', '2022-11-03', '06:00:00', '2022-11-03', '2022-11-07', '09:00:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anil', 'LSCS', 'SIRISHA', '2022-11-04 14:56:24'),
('P202211044', '0411224', '2022-11-02', '20:30:00', '2022-11-03', '2022-11-07', '16:00:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anil', 'LSCS', '2', '2022-11-04 15:07:33'),
('P202211051', '0511221', '2022-10-10', '15:00:00', '2022-10-10', '2022-10-14', '18:00:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anil', 'LSCS', 'SWATHI', '2022-11-05 08:41:07'),
('P202211122', '1211221', '2022-11-08', '13:00:00', '2022-11-08', '2022-11-12', '16:00:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anand', 'LSCS', '2', '2022-11-12 09:48:00'),
('P202211123', '1211222', '2022-11-10', '20:30:00', '2022-11-11', '2022-11-15', '16:00:00', '2', 5, 'Dr.Sree Ramya Amulya.V', 'Dr.Anil', 'LSCS', '2', '2022-11-12 10:01:31'),
('P202211124', '1211223', '2022-11-12', '19:00:00', '2022-11-12', '2022-11-14', '16:00:00', '2', 3, 'Dr.Sree Ramya Amulya.V', 'No', 'Normal', '2', '2022-11-12 10:15:00'),
('P202211124', '1511221', '2022-11-12', '07:00:00', '2022-11-12', '2022-11-14', '13:01:00', '2', 2, 'Dr.Sree Ramya Amulya.V', '', 'Normal', 'sirisha', '2022-11-15 07:16:38'),
('P202211125', '1211224', '2022-11-10', '05:00:00', '2022-11-10', '2022-11-14', '16:00:00', '1', 5, 'Dr.Sree Ramya Amulya.V', 'No', 'Normal', '2', '2022-11-12 10:30:56');

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
(' kukala Purandeswari ', '2022-11-14', '23:30:00', '9603931952', 'Gyn'),
(' patient2', '2022-11-03', '08:08:00', '6798477777', 'op'),
(' vipula Gowri ', '2022-11-09', '11:45:00', '9963446719', 'Obg'),
(' Vira dhurga bhavani', '2022-11-12', '23:35:00', '9000091429', 'Obg'),
('A Anjali ', '2022-11-15', '09:35:00', '8688722916', 'Obg'),
('Abhiredi Vani sai', '2022-11-10', '10:30:00', '7702278449', 'Obg'),
('Adhireddy lashmi ', '2022-11-15', '09:10:00', '9133910150', 'Obg'),
('Amara satya lavanya', '2022-11-12', '11:40:00', '8985727473', 'Gyn'),
('Ande parvathi', '2022-11-12', '23:50:00', '9959551872', 'Obg'),
('B. Kranthi ', '2022-11-08', '09:35:00', '9494400559', 'Obg'),
('B.Mercy ', '2022-11-08', '09:55:00', '9484881584', 'Obg'),
('Balle sravani ', '2022-11-09', '12:29:00', '9160797980', 'Obg'),
('Bangaru kanaka maha Lakshmi ', '2022-11-12', '10:30:00', '8919219239', 'Gyn'),
('Bari Dhana Lakshmi ', '2022-11-09', '11:10:00', '9030566077', 'Obg'),
('Baswani  Mavulamma ', '2022-11-09', '10:30:00', '8282821143', 'Obg'),
('Bhajiki Ramani ', '2022-11-14', '11:05:00', '6300971325', 'Obg'),
('Bhasavani Naga mani', '2022-11-14', '09:40:00', '7569147418', 'Obg'),
('Bokka Bhulashmi ', '2022-11-10', '09:55:00', '9676663135', 'Obg'),
('Bokka kalyani ', '2022-11-10', '09:00:00', '9980731718', 'Obg'),
('Bokka kranthi ', '2022-11-08', '08:30:00', '9494400559', 'Obg'),
('Bokka sirish ', '2022-11-07', '09:10:00', '6302341725', 'Obg'),
('Bolam Lashmi Durga ', '2022-11-10', '09:45:00', '8985522885', 'Gyn'),
('Chamakuri Divya lashmi ', '2022-11-15', '09:30:00', '7288098668', 'Gyn'),
('Chamana uday lashmi ', '2022-11-07', '09:25:00', '9392327278', 'Obg'),
('Chamarithi Jyothi ', '2022-11-10', '09:40:00', '9010793167', 'Gyn'),
('Chavalli Anjali ', '2022-11-09', '10:40:00', '9346092466', 'Obg'),
('Cheka Naga Lakshmi ', '2022-11-15', '08:30:00', '9133159963', 'Gyn'),
('Chekuri sujatha', '2022-11-05', '18:51:00', '9121335334', 'Obg'),
('Chodavarapu durga lashmi ', '2022-11-07', '09:40:00', '9849578287', 'Obg'),
('Daraparedi dhurga sai bavani ', '2022-11-12', '13:25:00', '9848004467', 'Obg'),
('Dasari madha', '2022-11-12', '10:30:00', '6309311756', 'Gyn'),
('Devuda Sonam ', '2022-11-14', '10:10:00', '9131033284', 'Obg'),
('Dhonga Lashmi parvathi ', '2022-11-14', '09:10:00', '7901449433', 'Gyn'),
('Dola neelaveni ', '2022-11-15', '09:20:00', '9010814344', 'Gyn'),
('Donga prasanna ', '2022-11-14', '11:00:00', '9640777403', 'Gyn'),
('Eani Anantha lashmi ', '2022-11-14', '10:25:00', '9490172967', 'Gyn'),
('Esari bhavani ', '2022-11-09', '10:00:00', '8099559001', 'Obg'),
('G. Sindhujia ', '2022-11-08', '09:25:00', '8125125325', 'Gyn'),
('Gangula Naga Laxmi ', '2022-11-08', '08:50:00', '9705411665', 'Gyn'),
('Gudala nagma', '2022-11-12', '23:40:00', '9603573146', 'Gyn'),
('Gudala sima ', '2022-11-15', '10:30:00', '9640868086', 'Obg'),
('Jalla parlamma ', '2022-11-10', '10:20:00', '9014764379', 'Obg'),
('Jareena Babi ', '2022-11-05', '18:35:00', '9502926982', 'Obg'),
('Javadhi Vijay lashmi ', '2022-11-09', '12:14:00', '9493336767', 'Obg'),
('Javadhi Vijay lashmi ', '2022-11-10', '11:20:00', '9493336767', 'Obg'),
('Javvadi Vijayva Lakshmi ', '2022-11-12', '13:05:00', '9493336767', 'Obg'),
('K. Naga aswini ', '2022-11-08', '09:15:00', '9133461565', 'Obg'),
('K. Satya vathi ', '2022-11-08', '23:30:00', '9581497447', 'Gyn'),
('K.sri Lakshmi ', '2022-11-08', '10:15:00', '7075848656', 'Obg'),
('Kadalli sri kalla', '2022-11-09', '10:09:00', '9391427032', 'Gyn'),
('Kadalli Tejawi ', '2022-11-09', '09:45:00', '7382331687', 'Gyn'),
('Kaitice palli sanday ', '2022-11-09', '10:54:00', '9177441223', 'Obg'),
('Kamidi rada kumari ', '2022-11-09', '12:18:00', '9515324456', 'Gyn'),
('Kamurupu pushapa Sai ', '2022-11-15', '10:40:00', '8885680002', 'Gyn'),
('Kanadhagadallata varsha', '2022-11-12', '13:40:00', '7382685941', 'Obg'),
('Kanakki pati venkata narasimha uma Devi  uma', '2022-11-08', '08:41:00', '9579335289', 'Gyn'),
('Kanchala ammji ', '2022-11-14', '09:20:00', '9989728475', 'Gyn'),
('Kandavali Vara lashmi ', '2022-11-15', '08:49:00', '9603778807', 'Gyn'),
('Kanuri hema ', '2022-11-14', '10:45:00', '9603911199', 'Obg'),
('Kara anitha ', '2022-11-07', '09:00:00', '9515701117', 'Gyn'),
('Kathula devi ', '2022-11-14', '12:15:00', '8186926912', 'Gyn'),
('Katta Aruna Kumari ', '2022-11-15', '10:45:00', '9949999500', 'Obg'),
('Kodi Anusha ', '2022-11-10', '10:25:00', '9505555689', 'Obg'),
('Kodi bhavani ', '2022-11-15', '10:45:00', '7032814326', 'Obg'),
('Koduri mavullu ', '2022-11-05', '19:20:00', '9502275175', 'Obg'),
('Kolati sudha rani ', '2022-11-10', '09:20:00', '9573178452', 'Obg'),
('Kollati durga bhavani', '2022-11-12', '23:10:00', '9110769579', 'Gyn'),
('Kolli amurutha ', '2022-11-09', '09:30:00', '8500813216', 'Gyn'),
('Koparthi chandhar kala ', '2022-11-14', '12:45:00', '9652434559', 'Gyn'),
('Koparthi niraja ', '2022-11-07', '08:45:00', '7671863303', 'Gyn'),
('Koparthi uma Maheshwari ', '2022-11-07', '09:15:00', '9705169199', 'Gyn'),
('Kopavarapu Vasavi shirish ', '2022-11-10', '11:10:00', '8121838384', 'Obg'),
('Korasika satya vathi ', '2022-11-07', '08:50:00', '9581497447', 'Gyn'),
('Korlapati sri durga', '2022-11-12', '23:50:00', '9701932883', 'Gyn'),
('Kupatala karuna kumari ', '2022-11-14', '09:29:00', '6305230731', 'Gyn'),
('Lankapalli kalyani devi', '2022-11-10', '10:40:00', '9703096155', 'Obg'),
('Lapudi Rajeswari ', '2022-11-14', '09:00:00', '8309666803', 'Gyn'),
('M. Durga bhavani ', '2022-11-09', '09:00:00', '9666189282', 'Obg'),
('Madasu mani', '2022-11-12', '23:50:00', '9398020487', 'Gyn'),
('Mardaani praneetha ', '2022-11-15', '08:40:00', '8309769508', 'Gyn'),
('Md munwara ', '2022-11-14', '12:25:00', '9493336767', ''),
('MD.Rafiya ', '2022-11-08', '10:30:00', '8977437237', 'Gyn'),
('Mokka Mavulamma ', '2022-11-09', '11:55:00', '9573780668', 'Obg'),
('Mondupulanka Vira Durga ', '2022-11-10', '11:40:00', '9515991697', 'Obg'),
('Muchi sravani ', '2022-11-09', '11:13:00', '9866954044', 'Gyn'),
('Mudedla Rupa devi ', '2022-11-12', '22:30:00', '9177957797', 'Gyn'),
('N Teja sri ', '2022-11-15', '10:00:00', '8688864715', 'Obg'),
('N.Maramma ', '2022-11-09', '09:50:00', '8897418989', 'Obg'),
('Nadukudithi Naga maha Lakshmi ', '2022-11-09', '08:45:00', '9390055588', 'Obg'),
('Nagidi Teja sri ', '2022-11-14', '23:55:00', '9949688562', 'Obg'),
('Nagiri Manasa ', '2022-11-14', '10:50:00', '7674881175', 'Gyn'),
('Nethala satya ', '2022-11-10', '10:50:00', '9866370615', 'Gyn'),
('Nilla devi Annapurna ', '2022-11-14', '23:40:00', '7993616208', 'Obg'),
('Odugu Lakshmi ayiswarya ', '2022-11-10', '10:15:00', '9949423725', 'Obg'),
('P.L.N. kalyani ', '2022-11-15', '10:30:00', '9394325255', 'Obg'),
('Palla Sanya ', '2022-11-07', '09:35:00', '9908756243', 'Obg'),
('Pantala Hemalata ', '2022-11-10', '11:50:00', '8555867737', 'Obg'),
('Parsangi kanaka durga ', '2022-11-10', '11:55:00', '9849708153', 'Gyn'),
('Patarapalli jagadeeswari ', '2022-11-05', '17:25:00', '8367543454', 'Pregnancy '),
('Patarapalli jagadeeswari ', '2022-11-05', '17:49:00', '8367543454', 'Obg'),
('Patarapalli jagadeeswari ', '2022-11-05', '18:29:00', '8367543454', 'Pregnancy '),
('Penumacha Purnajali ', '2022-11-10', '09:30:00', '7075790667', 'Gyn'),
('Pilli mariyamma', '2022-11-12', '20:15:00', '9010152501', 'Obg'),
('Pipallu sri kavya ', '2022-11-07', '08:40:00', '9701878721', 'Gyn'),
('Potnuru bhavani ', '2022-11-07', '08:30:00', '8247062559', 'Obg'),
('Pottu Ramya ', '2022-11-15', '08:55:00', '9100735598', 'Obg'),
('Potunuri bhavani ', '2022-11-05', '18:40:00', '8247062559', 'Obg'),
('Punali Uma Maheshwari ', '2022-11-10', '09:50:00', '8712354566', 'Obg'),
('Salla santhi ', '2022-11-14', '23:46:00', '6309355681', 'Obg'),
('Salla Sruthi Mahima ', '2022-11-14', '12:59:00', '9866963266', 'Obg'),
('Saripalli Reshma ', '2022-11-15', '09:45:00', '9346169869', 'Obg'),
('Sathi uha sree', '2022-11-15', '09:55:00', '9888522223', 'Obg'),
('Sirra Rahitha ', '2022-11-14', '09:55:00', '6303766366', 'Obg'),
('Sivakala haritha', '2022-11-12', '10:30:00', '9494774252', 'Obg'),
('Sk Munthaj Bibi ', '2022-11-10', '11:25:00', '8297982217', 'Gyn'),
('Sk sunaya', '2022-11-15', '10:55:00', '6305603215', 'Gyn'),
('Sk Tahoora ', '2022-11-10', '12:20:00', '8247634107', 'Gyn'),
('Suragami Lakshmi soumya ', '2022-11-09', '10:19:00', '9589494348', 'Obg'),
('T mahalakshmi ', '2022-11-12', '10:30:00', '7569331733', 'Gyn'),
('T Mary matha ', '2022-11-14', '12:34:00', '9581497447', 'Obg'),
('T.Gaayathri', '2022-11-15', '10:15:00', '9705785949', 'Obg'),
('Thirumani Raja nadhani ', '2022-11-14', '10:20:00', '9010390889', 'Obg'),
('Thirumani Vara lashmi ', '2022-11-15', '12:22:00', '8501065518', 'Gyn'),
('Thota Madhuri ', '2022-11-10', '11:05:00', '9866253248', 'Obg'),
('Thota venkata Gayatri', '2022-11-10', '10:25:00', '9704392958', 'Obg'),
('Umadi durga bhavani ', '2022-11-14', '10:55:00', '7661045549', 'Obg'),
('V. Durga ', '2022-11-08', '09:46:00', '9505661384', 'Obg'),
('V. Durga sravani ', '2022-11-08', '10:45:00', '8688918617', 'Obg'),
('V.indira devi ', '2022-11-08', '01:00:00', '9666617666', 'Obg'),
('v.vijay lashmi ', '2022-11-10', '11:25:00', '8500644855', 'Gyn'),
('Valavala Durga bhavani ', '2022-11-10', '10:45:00', '6305242274', 'Report '),
('Vallabhu ', '2022-11-10', '09:10:00', '6303559933', 'Obg'),
('Vallabhu Bhagya Lakshmi ', '2022-11-09', '11:20:00', '9849987681', 'Gyn'),
('Veeranki maha Lakshmi ', '2022-11-12', '10:40:00', '9908875577', 'Opg'),
('Vendar kumari ', '2022-11-10', '00:00:00', '9581565566', 'Obg'),
('Vinjarapu Jayasree ', '2022-11-14', '10:35:00', '8319255816', 'Gyn'),
('Vuchulla  sumatha', '2022-11-12', '14:10:00', '6300337854', 'Obg'),
('Vundhurthu Jyothi ', '2022-11-09', '11:45:00', '9989346236', 'Obg'),
('Yajjala Raja kumari', '2022-11-09', '12:10:00', '9133419893', 'Opg'),
('Yalam pudithi kumari ', '2022-11-14', '09:45:00', '7672087770', 'Obg'),
('Yerramsetti Devi Raman ', '2022-11-09', '10:55:00', '8688082143', 'Gyn');

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
('doctor', 'vishnu@12', 'Doctor'),
('subhadra', 'vishnu@10', 'Gowtham');

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
