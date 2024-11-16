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
-- Cấu trúc bảng cho bảng `don_hangs`
--

CREATE TABLE `don_hangs` (
  `id` int(11) NOT NULL,
  `ma_don_hang` varchar(50) NOT NULL,
  `tai_khoan_id` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(255) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(15) NOT NULL,
  `dia_chi_nguoi_nhan` text NOT NULL,
  `ngay_dat` date NOT NULL,
  `tong_tien` decimal(10,2) NOT NULL,
  `ghi_chu` text NOT NULL,
  `phuong_thuc_thanh_toan_id` int(11) NOT NULL,
  `trang_thai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hangs`
--

INSERT INTO `don_hangs` (`id`, `ma_don_hang`, `tai_khoan_id`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dia_chi_nguoi_nhan`, `ngay_dat`, `tong_tien`, `ghi_chu`, `phuong_thuc_thanh_toan_id`, `trang_thai_id`) VALUES
(1, 'HD-127', 1, 'Phạm Duy Thái', 'anhnd120@gmail.com', '0829998', 'bac ninh', '2019-11-12', 900000.00, 'hang de vo', 2, 10),
(3, 'DH-125', 3, 'chi dan', 'quang@132', '0356072005', 'hhh', '2024-11-14', 900000.00, 'hang de vo xin nhe tay', 2, 1),
(4, 'HD-123', 2, 'anh', 'anh@1133', '7876543', 'cao bang', '2024-11-22', 4444444.00, 'hang de vo xin nhe tay', 2, 6),
(5, 'HD-121', 1, 'Phạm Duy Thái', 'thaipdph55550@gmail.com', '0985338137', 'Hanoi-FPT ', '2024-09-11', 24000.00, 'hang de vo xin nhe tay ^^', 2, 9),
(6, 'DH-129', 1, 'anh', 'anh@123', '7876543', 'cao bang', '2024-11-20', 66000.00, 'hang de vo xin nhe tay', 1, 11),
(7, 'DH-129', 6, 'Tran Minh C', 'TranMinhC555$gmail.com', '09864384', 'hoa an-cao bang', '2024-11-20', 55555555.00, 'hang de vo xin nhe tay', 1, 3),
(8, 'DH-130', 7, 'Nguyen Thi B', 'NguyenThiB123@gmail.com', '0977456789', '123 Nguyen Thi Minh Khai', '2024-11-21', 12345678.00, 'Giao hàng nhanh', 2, 2),
(9, 'DH-131', 8, 'Le Minh C', 'LeMinhC789@gmail.com', '0977223344', '456 Le Duan', '2024-11-22', 98765432.00, 'Đổi trả sản phẩm', 1, 1),
(10, 'DH-132', 9, 'Pham Minh D', 'PhamMinhD456@gmail.com', '0977334455', '789 Hoang Mai', '2024-11-23', 65432100.00, 'Giao tại nhà', 2, 1),
(11, 'DH-133', 7, 'Tran Thi E', 'TranThiE555@gmail.com', '0977445566', '102 Tran Quang Khai', '2024-11-24', 12340000.00, 'Nhận hàng trong ngày', 1, 2),
(12, 'DH-134', 5, 'Le Thi F', 'LeThiF123@gmail.com', '0977667788', '58 Le Loi', '2024-11-25', 23456789.00, 'Đóng gói sản phẩm cẩn thận', 1, 1),
(14, 'DH-136', 2, 'Nguyen Thi H', 'NguyenThiH999@gmail.com', '0977112233', '45 Nguyen Thi Minh Khai', '2024-11-27', 87654321.00, 'Đổi địa chỉ giao hàng', 2, 1),
(16, 'DH-138', 5, 'Le Minh J', 'LeMinhJ123@gmail.com', '0977445567', '56 Hoan Kiem', '2024-11-29', 12356732.00, 'Chờ xác nhận', 1, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tai_khoan_id` (`tai_khoan_id`),
  ADD KEY `don_hangs_ibfk_3` (`phuong_thuc_thanh_toan_id`),
  ADD KEY `trang_thai_id` (`trang_thai_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `don_hangs`
--
ALTER TABLE `don_hangs`
  ADD CONSTRAINT `don_hangs_ibfk_2` FOREIGN KEY (`tai_khoan_id`) REFERENCES `nguoi_dungs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `don_hangs_ibfk_3` FOREIGN KEY (`phuong_thuc_thanh_toan_id`) REFERENCES `phuong_thuc_thanh_toans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `don_hangs_ibfk_4` FOREIGN KEY (`trang_thai_id`) REFERENCES `trang_thai_don_hangs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
