<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/bannerController.php';
require_once 'controllers/tinTucControler.php';
require_once 'controllers/DonHangController.php';
// Require toàn bộ file Models
require_once 'models/banner.php';
require_once 'models/DonHang.php';
require_once 'models/tinTuc.php';
// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                     => (new DashboardController())->index(),

    // Quản lý tin tức
    'tin-tucs'             => (new TinTucController())->home(),
    'form-them-tin-tuc'    => (new TinTucController())->create(),
    'them-tin-tuc'         => (new TinTucController())->add(),
    'form-sua-tin-tuc'     => (new TinTucController())->edit(),
    'sua-tin-tuc'          => (new TinTucController())->update(),
    'xoa-tin-tuc'          => (new TinTucController())->delete(),



    // Quản lý banner
    'banners'             => (new bannerController())->home(),
    'form-them-banner'    => (new bannerController())->create(),
    'them-banner'         => (new bannerController())->add(),
    'form-sua-banner'     => (new bannerController())->edit(),
    'sua-banner'          => (new bannerController())->update(),
    'xoa-banner'          => (new bannerController())->delete(),
    'search-banner'       => (new bannerController())->search(),

    // Quản lý đơn hàng
    'don-hangs'           => (new AdminDonHangController())->danhSachDonHang(),
    'form-sua-don-hang'   => (new AdminDonHangController())->edit(),
    'sua-don-hang'        => (new AdminDonHangController())->update(),
    'chi-tiet-don-hang'      => (new AdminDonHangController())->detailDonHang(),
    'search-don-hang'     => (new AdminDonHangController())->search(),
};
