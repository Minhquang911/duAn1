<?php
session_start();
// Require file Common
require_once './commons/env.php'; // Khai báo biến môi trường
require_once './commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/tintucController.php';

// Require toàn bộ file Models
require_once './models/NguoiDung.php';
require_once 'models/Sanpham.php';
require_once './models/tinTuc.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Trang chủ
    '/'                 => (new HomeController())->home(),

    // Đăng nhập client
    'login' => (new HomeController())->formLogin(),
    'check-login' => (new HomeController())->checkLogin(),

    // Đăng ký

    'dangky' => (new HomeController())->formDangKy(),
    'check-dangky' => (new HomeController())->checkDangKy(),


    // Tin tức
    'tintucs'  => (new TinTucController())->list_tintuc(),
    'theloai-tintuc'  => (new TinTucController())->Show_category(),
    'detail-tintuc'  => (new TinTucController())->showDetail(),
    'edit-tintuc'  => (new TinTucController())->showEdit(),
};
