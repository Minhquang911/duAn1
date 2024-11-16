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
-- Cấu trúc bảng cho bảng `nguoi_dungs`
--

CREATE TABLE `nguoi_dungs` (
  `id` int(11) NOT NULL,
  `ho_ten` varchar(255) NOT NULL,
  `anh_dai_dien` text DEFAULT NULL,
  `ngay_sinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `so_dien_thoai` varchar(10) NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL DEFAULT 1,
  `dia_chi` text NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `chuc_vu_id` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoi_dungs`
--

INSERT INTO `nguoi_dungs` (`id`, `ho_ten`, `anh_dai_dien`, `ngay_sinh`, `email`, `so_dien_thoai`, `gioi_tinh`, `dia_chi`, `mat_khau`, `chuc_vu_id`, `trang_thai`) VALUES
(1, 'Duy Thái', 'image11.jpg', '2005-01-04', 'thaipdph49740@gmail.com', '0985338137', 1, 'Số 1 Hà Nội', '123456', 1, 1),
(2, 'hoanganh\r\n', 'image10.jpg', '2014-11-19', 'anhh9999@gmail.com', '098373855', 2, ' thai binh', '432243', 0, 1),
(3, 'chi dan', 'image5.jpg', '2020-11-12', 'chidan5555@gmail.com', '096666666', 1, ' kiengiang', '444443', 1, 1),
(4, 'hoang van a', 'image6.jpg', '1990-08-11', 'nguoidung1@gmail.com', '0977843234', 2, 'long bien - Hà Nội', '123456', 1, 2),
(5, 'Nguyen Thi B', 'image1.jpg', '1992-05-20', 'nguyenthib@gmail.com', '0977843235', 1, 'Hoan Kiem - Hà Nội', '123456', 1, 1),
(6, 'Tran Minh C', 'image2.jpg', '1985-11-15', 'tranminhc@gmail.com', '0977843236', 1, 'Tay Ho - Hà Nội', '123456', 0, 2),
(7, 'Le Minh D', 'image3.jpg', '1995-02-18', 'leminhd@gmail.com', '0977843237', 2, 'Cau Giay - Hà Nội', '123456', 0, 1),
(8, 'Pham Thi E', 'image4.jpg', '1988-06-30', 'phamthie@gmail.com', '0977843238', 2, 'Ba Dinh - Hà Nội', '123456', 1, 2),
(9, 'Vu Thi F', 'image5.jpg', '1993-09-25', 'vuthif@gmail.com', '0977843239', 1, 'Hoang Mai - Hà Nội', '123456', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `nguoi_dungs`
--
ALTER TABLE `nguoi_dungs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
