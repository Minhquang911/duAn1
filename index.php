
<?php
session_start();
// Require file Common
require_once './common/env.php'; // Khai báo biến môi trường
require_once './common/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once './controllers/HomeController.php';
require_once './controllers/BinhLuanController.php';
require_once './controllers/KhuyenmaiController.php';


// Require toàn bộ file Models
require_once 'models/Khuyenmai.php';

require_once './models/NguoiDung.php';
require_once 'models/Sanpham.php';
require_once 'models/AdminBinhLuan.php';

// Route
$act = $_GET['act'] ?? '/';


// Để bảo bảo tính chất chỉ gọi 1 hàm Controller để xử lý request thì mình sử dụng match

match ($act) {
    
    // Trang chủ
    '/'                 => (new HomeController())->home(),
    //Chi tiết sản phẩm
    'chi-tiet-san-pham' => (new HomeController())->chiTietSanPham(),
'search-san-pham'       => (new HomeController())->search(),
    // Đăng nhập client
    'login' => (new HomeController())->formLogin(),
    'check-login' => (new HomeController())->checkLogin(),

    // Đăng ký  

    'dangky' => (new HomeController())->formDangKy(),
    'check-dangky' => (new HomeController())->checkDangKy(),    

    'add-binhluan' => (new BinhLuanController())->addBinhLuan(),


    //
    'khuyen-mai' => (new KmaiController())->listKhuyenmai()

   

};

                                                    <a href="<?= BASE_URL . '?act=chi-tiet-san-pham&id=' . $sanPham['id'] ?> " class="btn btn-cart">Xem chi tiết</a>

