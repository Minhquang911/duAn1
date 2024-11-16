-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 16, 2024 lúc 07:57 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chi_tiet_don_hangs`
--

CREATE TABLE `chi_tiet_don_hangs` (
  `id` int(11) NOT NULL,
  `don_hang_id` int(11) NOT NULL,
  `san_pham_id` int(11) NOT NULL,
  `don_gia` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `thanh_tien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chi_tiet_don_hangs`
--

INSERT INTO `chi_tiet_don_hangs` (`id`, `don_hang_id`, `san_pham_id`, `don_gia`, `so_luong`, `thanh_tien`) VALUES
(24, 11, 21, 55500, 200, 145643),
(25, 1, 31, 70000, 500, 643232),
(26, 14, 32, 255555, 230, 15446543),
(27, 4, 37, 65000, 130, 8450000),
(28, 5, 40, 35000, 230, 8050000),
(29, 3, 37, 46000, 100, 8450000),
(30, 1, 33, 76000, 120, 8450000),
(31, 6, 37, 25000, 140, 8450000),
(32, 4, 37, 81000, 150, 8450000),
(34, 3, 37, 46000, 100, 3430000),
(35, 1, 37, 76000, 120, 8450700),
(36, 6, 37, 25000, 140, 8455000),
(37, 4, 37, 81000, 150, 850000),
(39, 3, 41, 46000, 100, 3430000),
(40, 1, 33, 76000, 120, 8450700),
(41, 9, 34, 25000, 140, 8455000),
(42, 4, 35, 81000, 150, 850000),
(44, 8, 40, 46000, 100, 3430000),
(45, 10, 33, 76000, 120, 8450700),
(46, 11, 34, 25000, 140, 8455000),
(47, 12, 35, 81000, 150, 850000),
(49, 3, 40, 46000, 100, 3430000),
(50, 16, 33, 76000, 120, 8450700),
(51, 1, 33, 76000, 120, 8450700),
(52, 5, 33, 76000, 120, 8450700),
(53, 6, 36, 32000, 150, 8450060),
(54, 6, 36, 32000, 150, 8450060);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chi_tiet_don_hangs_ibfk_1` (`san_pham_id`),
  ADD KEY `don_hang_id` (`don_hang_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chi_tiet_don_hangs`
--
ALTER TABLE `chi_tiet_don_hangs`
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_1` FOREIGN KEY (`san_pham_id`) REFERENCES `san_phams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chi_tiet_don_hangs_ibfk_2` FOREIGN KEY (`don_hang_id`) REFERENCES `don_hangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
