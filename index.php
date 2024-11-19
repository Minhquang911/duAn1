<?php

// Require file Common
require_once '../commons/env.php'; // Khai báo biến môi trường
require_once '../commons/function.php'; // Hàm hỗ trợ

// Require toàn bộ file Controllers
require_once 'controllers/SanphamController.php';
require_once 'controllers/DanhmucController.php';
require_once 'controllers/BinhLuanController.php';
require_once 'controllers/DanhGiaController.php';

// Require toàn bộ file Models
require_once 'models/SanphamModel.php';
require_once 'models/DanhMuc.php';
require_once 'models/AdminBinhLuan.php';
require_once 'models/AdminDanhGia.php';
    // require_once 'models/DanhGia.php';



// Lấy action từ URL
$act = $_GET['act'] ?? '/'; // Default là list-sanpham nếu không có act

// Xử lý route dựa trên action
match ($act) {
    // Các route cho sản phẩm
    'chitiet-sanpham' => (new SanphamController())->showChitietSanphamlist(),

    'list-sanpham' => (new SanphamController())->showSanphamList(),
    'add-sanpham' => (new SanphamController())->showAddSanphamForm(),
    'add-sanpham-submit' => (new SanphamController())->addSanpham(),
    'edit-sanpham' => (new SanphamController())->showEditSanphamForm(),
    'update-sanpham' => (new SanphamController())->updateSanpham(),
    'delete-sanpham' => (new SanphamController())->deleteSanpham($_GET['id'] ?? null),

    // Route chi tiết sản phẩm
    // đabsg giá    
    'danh-gia' => (new DanhGiaController())->listDanhGia(),

    // Các route khác (Bình luận)
    'binh-luan' => (new BinhLuanController())->ListBinhLuan(),
    'toggle-binhluan' =>(new BinhLuanController())->toggleStatus()

};
