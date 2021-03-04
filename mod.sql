-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 04:28 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mod`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjust`
--

CREATE TABLE `adjust` (
  `adj_id` int(11) NOT NULL,
  `fy_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `dept_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `adjustdetail`
--

CREATE TABLE `adjustdetail` (
  `d_id` int(11) NOT NULL,
  `adj_id` int(11) NOT NULL,
  `course_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `get_plan` int(11) NOT NULL,
  `univer` int(11) NOT NULL,
  `prov` int(11) NOT NULL,
  `intv` int(11) NOT NULL,
  `ad_test` int(11) NOT NULL,
  `emp` int(11) NOT NULL,
  `std_handi` int(11) NOT NULL,
  `std_lan` int(11) NOT NULL,
  `ssk` int(11) NOT NULL,
  `std` int(11) NOT NULL,
  `emp_gov` int(11) NOT NULL,
  `test` int(11) NOT NULL,
  `std_con` int(11) NOT NULL,
  `std_2lan` int(11) NOT NULL,
  `std_inter` int(11) NOT NULL,
  `emp_private` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `course_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fac_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_plan`
--

CREATE TABLE `create_plan` (
  `cre_id` int(11) NOT NULL,
  `adj_id` int(11) NOT NULL,
  `course_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `p_m_id` int(11) NOT NULL,
  `std_qty` int(11) NOT NULL,
  `emp_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `demand_user`
--

CREATE TABLE `demand_user` (
  `demand_id` int(11) NOT NULL,
  `demand_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `p_m_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dept_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_type`
--

CREATE TABLE `document_type` (
  `doc_id` int(11) NOT NULL,
  `doc_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_upload`
--

CREATE TABLE `document_upload` (
  `up_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `fy_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `up_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fac_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fac_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `uni_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fy`
--

CREATE TABLE `fy` (
  `fy_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `file_path` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hrd_user`
--

CREATE TABLE `hrd_user` (
  `hrd_id` int(11) NOT NULL,
  `hrd_name` int(50) NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `uni_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province_ministry`
--

CREATE TABLE `province_ministry` (
  `p_m_id` int(11) NOT NULL,
  `p_m_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quota_distribute`
--

CREATE TABLE `quota_distribute` (
  `id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `p_m_id` int(11) NOT NULL,
  `std_qty` int(11) NOT NULL,
  `emp_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supply_user`
--

CREATE TABLE `supply_user` (
  `sup_id` int(11) NOT NULL,
  `sup_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(24) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `uni_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `uni_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uni_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dept_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `stt_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

CREATE TABLE `user_status` (
  `stt_id` int(11) NOT NULL,
  `stt_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjust`
--
ALTER TABLE `adjust`
  ADD PRIMARY KEY (`adj_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `adjustdetail`
--
ALTER TABLE `adjustdetail`
  ADD PRIMARY KEY (`d_id`),
  ADD KEY `adj_id` (`adj_id`),
  ADD KEY `field_id` (`course_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `fac_id` (`fac_id`);

--
-- Indexes for table `create_plan`
--
ALTER TABLE `create_plan`
  ADD PRIMARY KEY (`cre_id`),
  ADD KEY `adj_id` (`adj_id`),
  ADD KEY `field_id` (`course_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `demand_user`
--
ALTER TABLE `demand_user`
  ADD PRIMARY KEY (`demand_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `p_m_id` (`p_m_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `document_type`
--
ALTER TABLE `document_type`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `document_upload`
--
ALTER TABLE `document_upload`
  ADD PRIMARY KEY (`up_id`),
  ADD KEY `doc_id` (`doc_id`),
  ADD KEY `fy_id` (`fy_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fac_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `fy`
--
ALTER TABLE `fy`
  ADD PRIMARY KEY (`fy_id`);

--
-- Indexes for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD PRIMARY KEY (`hrd_id`),
  ADD KEY `uni_id` (`uni_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `province_ministry`
--
ALTER TABLE `province_ministry`
  ADD PRIMARY KEY (`p_m_id`);

--
-- Indexes for table `quota_distribute`
--
ALTER TABLE `quota_distribute`
  ADD PRIMARY KEY (`id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `p_m_id` (`p_m_id`);

--
-- Indexes for table `supply_user`
--
ALTER TABLE `supply_user`
  ADD PRIMARY KEY (`sup_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `uni_id` (`uni_id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`uni_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `stt_id` (`stt_id`);

--
-- Indexes for table `user_status`
--
ALTER TABLE `user_status`
  ADD PRIMARY KEY (`stt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjust`
--
ALTER TABLE `adjust`
  MODIFY `adj_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adjustdetail`
--
ALTER TABLE `adjustdetail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `create_plan`
--
ALTER TABLE `create_plan`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demand_user`
--
ALTER TABLE `demand_user`
  MODIFY `demand_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_type`
--
ALTER TABLE `document_type`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_upload`
--
ALTER TABLE `document_upload`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hrd_user`
--
ALTER TABLE `hrd_user`
  MODIFY `hrd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `province_ministry`
--
ALTER TABLE `province_ministry`
  MODIFY `p_m_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quota_distribute`
--
ALTER TABLE `quota_distribute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supply_user`
--
ALTER TABLE `supply_user`
  MODIFY `sup_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adjust`
--
ALTER TABLE `adjust`
  ADD CONSTRAINT `adjust_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `adjustdetail`
--
ALTER TABLE `adjustdetail`
  ADD CONSTRAINT `adjustdetail_ibfk_1` FOREIGN KEY (`adj_id`) REFERENCES `adjust` (`adj_id`),
  ADD CONSTRAINT `adjustdetail_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`fac_id`) REFERENCES `faculty` (`fac_id`);

--
-- Constraints for table `create_plan`
--
ALTER TABLE `create_plan`
  ADD CONSTRAINT `create_plan_ibfk_1` FOREIGN KEY (`adj_id`) REFERENCES `adjust` (`adj_id`),
  ADD CONSTRAINT `create_plan_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `create_plan_ibfk_4` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `demand_user`
--
ALTER TABLE `demand_user`
  ADD CONSTRAINT `demand_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `demand_user_ibfk_2` FOREIGN KEY (`p_m_id`) REFERENCES `province_ministry` (`p_m_id`);

--
-- Constraints for table `document_upload`
--
ALTER TABLE `document_upload`
  ADD CONSTRAINT `document_upload_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `document_type` (`doc_id`),
  ADD CONSTRAINT `document_upload_ibfk_2` FOREIGN KEY (`fy_id`) REFERENCES `fy` (`fy_id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`);

--
-- Constraints for table `hrd_user`
--
ALTER TABLE `hrd_user`
  ADD CONSTRAINT `hrd_user_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`),
  ADD CONSTRAINT `hrd_user_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `quota_distribute`
--
ALTER TABLE `quota_distribute`
  ADD CONSTRAINT `quota_distribute_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `adjustdetail` (`d_id`),
  ADD CONSTRAINT `quota_distribute_ibfk_2` FOREIGN KEY (`p_m_id`) REFERENCES `province_ministry` (`p_m_id`);

--
-- Constraints for table `supply_user`
--
ALTER TABLE `supply_user`
  ADD CONSTRAINT `supply_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `supply_user_ibfk_2` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`stt_id`) REFERENCES `user_status` (`stt_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
