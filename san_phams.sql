-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 16, 2024 lúc 07:58 PM
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
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int(11) NOT NULL,
  `ten_san_pham` varchar(255) NOT NULL,
  `mo_ta` varchar(255) NOT NULL,
  `gia_ban` int(11) NOT NULL,
  `gia_nhap` int(11) NOT NULL,
  `gia_khuyen_mai` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `hinh_anh` varchar(255) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `ngay_nhap` date NOT NULL,
  `luot_xem` int(11) NOT NULL,
  `mo_ta_chi_tiet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `ten_san_pham`, `mo_ta`, `gia_ban`, `gia_nhap`, `gia_khuyen_mai`, `so_luong`, `hinh_anh`, `trang_thai`, `ngay_nhap`, `luot_xem`, `mo_ta_chi_tiet`) VALUES
(21, 'buts chif', 'dưpejefwfcwvd', 20000, 15000, 18000, 200, 'wfvsvsv', 1, '2024-11-21', 130, 'xinh '),
(31, 'vở', 'cscvscvs', 15000, 10000, 12000, 500, 'anh ise vbu rn ', 2, '2024-11-10', 555, 'ok va ray cụ tgkv df. '),
(32, 'each', 'each tieng anh', 32000, 28000, 30000, 150, 'r2f2gwbvfs ', 1, '2023-10-15', 533, 'noi chung la ok'),
(33, 'Sản phẩm A', 'Mô tả sản phẩm A', 50000, 30000, 45000, 100, 'sanpham_a.jpg', 1, '2024-08-14', 0, 'Mô tả chi tiết sản phẩm A'),
(34, 'Sản phẩm B', 'Mô tả sản phẩm B', 150000, 120000, 140000, 50, 'sanpham_b.jpg', 1, '2024-11-17', 0, 'Mô tả chi tiết sản phẩm B'),
(35, 'Sản phẩm C', 'Mô tả sản phẩm C', 75000, 50000, 70000, 30, 'sanpham_c.jpg', 1, '2024-11-13', 0, 'Mô tả chi tiết sản phẩm C'),
(36, 'Sản phẩm D', 'Mô tả sản phẩm D', 20000, 15000, 18000, 200, 'sanpham_d.jpg', 1, '2024-10-15', 0, 'Mô tả chi tiết sản phẩm D'),
(37, 'Sản phẩm E', 'Mô tả sản phẩm E', 100000, 80000, 95000, 150, 'sanpham_e.jpg', 1, '2024-08-13', 0, 'Mô tả chi tiết sản phẩm E'),
(38, 'Sản phẩm F', 'Mô tả sản phẩm F', 80000, 60000, 70000, 120, 'sanpham_f.jpg', 1, '2024-11-28', 0, 'Mô tả chi tiết sản phẩm F'),
(39, 'Sản phẩm G', 'Mô tả sản phẩm G', 60000, 40000, 55000, 180, 'sanpham_g.jpg', 1, '2024-09-02', 0, 'Mô tả chi tiết sản phẩm G'),
(40, 'Sản phẩm H', 'Mô tả sản phẩm H', 120000, 100000, 110000, 90, 'sanpham_h.jpg', 1, '2024-07-15', 0, 'Mô tả chi tiết sản phẩm H'),
(41, 'Sản phẩm I', 'Mô tả sản phẩm I', 45000, 35000, 42000, 250, 'sanpham_i.jpg', 1, '2024-08-30', 0, 'Mô tả chi tiết sản phẩm I'),
(42, 'Sản phẩm J', 'Mô tả sản phẩm J', 30000, 25000, 28000, 500, 'sanpham_j.jpg', 1, '2024-04-09', 0, 'Mô tả chi tiết sản phẩm J');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
