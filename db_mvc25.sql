-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2025 at 12:41 PM
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
-- Database: `db_mvc25`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `sks` int(11) NOT NULL,
  `lecturer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_name`, `sks`, `lecturer_id`) VALUES
(1, 'EN001', 'Pemrograman Berorientasi Objek', 4, 1),
(2, 'EN002', 'Pengembangan Aplikasi Web', 3, 1),
(3, 'EN003', 'Manajemen Proyek IT', 3, 2),
(4, 'EN004', 'E-Commerce & Bisnis Digital', 2, 2),
(5, 'EN005', 'Matematika Diskrit', 3, 3),
(6, 'EN006', 'Fisika Komputasi', 3, 3),
(7, 'EN007', 'Arsitektur Komputer', 3, 4),
(8, 'EN008', 'Jaringan Komputer Dasar', 4, 4),
(9, 'EN009', 'Desain Antarmuka (UI/UX)', 3, 5),
(10, 'EN010', 'Multimedia Interaktif', 3, 5),
(11, 'EN011', 'Sistem Informasi Manajemen', 3, 6),
(12, 'EN012', 'Etika Profesi IT', 2, 6),
(13, 'EN013', 'Pengembangan Game', 4, 7),
(14, 'EN014', 'Animasi Komputer 3D', 3, 7);

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `join_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `nidn`, `name`, `phone`, `join_date`) VALUES
(1, '10151001', 'Lee Heeseung, M.Kom.', '081211112222', '2020-10-15'),
(2, '10200402', 'Park Jongseong, M.B.A.', '081333334444', '2020-04-20'),
(3, '10151103', 'Sim Jaeyun, Ph.D.', '081555556666', '2020-11-15'),
(4, '10081204', 'Park Sunghoon, S.T., M.T.', '081777778888', '2020-12-08'),
(5, '10240605', 'Kim Sunoo, M.Sn.', '081999990000', '2020-06-24'),
(6, '10090206', 'Yang Jungwon, M.Cs.', '082112341234', '2020-02-09'),
(7, '10091207', 'Nishimura Riki, M.Des.', '082243214321', '2020-12-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lecturer_id` (`lecturer_id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturers` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
