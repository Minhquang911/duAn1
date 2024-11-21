<?php
class DanhGiaController {
    public $modelDanhGia;

    public function __construct() {
        $this->modelDanhGia = new DanhGia();
    }

    // Hiển thị danh sách bình luận
    public function listDanhGia() {
        $listDanhGia = $this->modelDanhGia->getAll();
        
        // Debug: kiểm tra dữ liệu trả về

        require_once 'views/sanpham/list_danhgia.php'; // Trỏ đến file view danh sách bình luận
    }
    

    // Chuyển trạng thái bình luận giữa Hiện và Ẩn
    public function deleteDanhGia($id)
{
    if ($id && is_numeric($id)) {  // Kiểm tra ID hợp lệ
        $this->modelDanhGia->delete($id);
        header("Location: index.php?act=danh-gia");
    } else {
        echo "ID không hợp lệ!";
    }

}

}
?>
