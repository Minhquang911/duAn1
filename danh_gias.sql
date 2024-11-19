-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2024 at 04:20 AM
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
-- Database: `nguoi_dung`
--

-- --------------------------------------------------------

--
-- Table structure for table `danh_gias`
--

CREATE TABLE `danh_gias` (
  `id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `tai_khoan_id` int(11) NOT NULL,
  `noi_dung` text DEFAULT NULL,
  `diem_so` int(11) DEFAULT NULL,
  `ngay_danh_gia` datetime DEFAULT current_timestamp(),
  `trang_thai` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danh_gias`
--

INSERT INTO `danh_gias` (`id`, `san_pham_id`, `tai_khoan_id`, `noi_dung`, `diem_so`, `ngay_danh_gia`, `trang_thai`) VALUES
(1, 11, 3, 'dsadasdas', 2, '2024-11-19 03:06:46', 1),
(2, 11, 3, 'vnckvncxkjvncx', 3, '2024-11-19 03:07:04', 1),
(6, 32, 1, 'dsadasdasaa', 3, '2024-11-19 03:06:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danh_gias`
--
ALTER TABLE `danh_gias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `san_pham_id` (`san_pham_id`),
  ADD KEY `tai_khoan_id` (`tai_khoan_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danh_gias`
--
ALTER TABLE `danh_gias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `danh_gias`
--
ALTER TABLE `danh_gias`
  ADD CONSTRAINT `danh_gias_ibfk_1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_phams` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `danh_gias_ibfk_2` FOREIGN KEY (`tai_khoan_id`) REFERENCES `nguoi_dungs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
