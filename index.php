<?php 
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/NguoiDungController.php';
require_once 'controllers/TrangThaiDonHangController.php';
require_once 'controllers/DonHangController.php';
// Require toàn bộ file Models
require_once 'models/NguoiDung.php';
require_once 'models/TrangThai.php';
require_once 'models/DonHang.php';
// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                      => (new DashboardController())->index(),

    // Quản lý người dùng
    'nguoi-dungs'              => (new NguoiDungController())->index(),
    'form-them-nguoi-dung'     => (new NguoiDungController())->create(),
    'them-nguoi-dung'          => (new NguoiDungController())->store(),
    'form-sua-nguoi-dung'      => (new NguoiDungController())->edit(),
    'sua-nguoi-dung'           => (new NguoiDungController())->update(),
    'xoa-nguoi-dung'           => (new NguoiDungController())->destroy(),
    'search-nguoi-dung'        => (new NguoiDungController())->search(),
    
   

    // Quản lý trạng thái đơn hàng
    'trang-thai-don-hangs'               => (new TrangThaiDonHangController())->index(),
    'form-them-trang-thai-don-hang'     => (new TrangThaiDonHangController())->create(),
    'them-trang-thai-don-hang'          => (new TrangThaiDonHangController())->store(),
    'form-sua-trang-thai-don-hang'      => (new TrangThaiDonHangController())->edit(),
    'sua-trang-thai-don-hang'           => (new TrangThaiDonHangController())->update(),
    'xoa-trang-thai-don-hang'           => (new TrangThaiDonHangController())->destroy(),
    
    // Quản lý đơn hàng
    'don-hangs'              => (new AdminDonHangController())->danhSachDonHang(),
    'form-sua-don-hang'      => (new AdminDonHangController())->formEditDonHang(),
    'sua-don-hang'           => (new AdminDonHangController())->postEditDonHang(),
    // 'xoa-don-hang'           => (new AdminDonHangController())->deleteDonHang(),
    // 'chi-tiet-don-hang'      => (new AdminDonHangController())->detailDonHang(),
    'search-don-hang'        => (new AdminDonHangController())->search(),
    

};