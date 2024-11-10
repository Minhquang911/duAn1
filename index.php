<?php
session_start();
// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/DashboardController.php';
require_once 'controllers/bannerController.php';

// Require toàn bộ file Models
require_once 'models/banner.php';

// Route
$act = $_GET['act'] ?? '/';

// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    // Dashboards
    '/'                 => (new DashboardController())->index(),
    // quan ly danh muc banner
    'banners'             => (new bannerController())->home(),
    'form-them-banner'    => (new bannerController())->create(),
    'them-banner'         => (new bannerController())->add(),
    'form-sua-banner'     => (new bannerController())->edit(),
    'sua-banner'          => (new bannerController())->update(),
    'xoa-banner'          => (new bannerController())->delete(),
};
