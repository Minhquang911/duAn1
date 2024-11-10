<?php

class TrangThaiDonHangController
{
    // Kết nối đến model
    public $modelTrangThai;

    public function __construct()
    {
        $this->modelTrangThai = new TrangThai();
    }

    // Hàm hiển thị danh sách
    public function index()
    {
        // Lấy ra dữ liệu trạng thái
        $trangThais = $this->modelTrangThai->getAll();


        // Đưa dữ liệu ra view
        require_once './views/trangthai/list_trang_thai.php';
    }

    // Hàm hiển thị form thêm
    public function create()
    {
        require_once './views/trangthai/create_trang_thai.php';
    }

    // Hàm xử lý thêm vào CSDL
    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra dữ liệu
            $ten_trang_thai = $_POST['ten_trang_thai'];
            $trang_thai = $_POST['trang_thai'];

            // Validate
            $errors = [];
            if (empty($ten_trang_thai)) {
                $errors['ten_trang_thai'] = 'Tên trạng thái là bắt buộc';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái là bắt buộc';
            }

            // Thêm dữ liệu
            if (empty($errors)) {
                // Nếu không có lỗi thì thêm dữ liệu
                // Thêm vào CSDL
                $this->modelTrangThai->postData($ten_trang_thai, $trang_thai);
                unset($_SESSION['errors']);
                header('Location: ?act=trang-thai-don-hangs');
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: ?act=form-them-trang-thai-don-hang');
                exit();
            }
        }
    }

    // Hàm hiển thị form sửa
    public function edit()
    {
        // Lấy id
        $id = $_GET['trang_thai_id'];
        // Lấy thông tin chi tiết của trạng thái
        $trangThai = $this->modelTrangThai->getDetailData($id);

        // Đổ dữ liệu ra form
        require_once './views/trangthai/edit_trang_thai.php';
    }

    // Hàm xử lý cập nhật dữ liệu vào CSDL
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra dữ liệu
            $id = $_POST['id'];
            $ten_trang_thai = $_POST['ten_trang_thai'];
            $trang_thai = $_POST['trang_thai'];

            // Validate
            $errors = [];
            if (empty($ten_trang_thai)) {
                $errors['ten_trang_thai'] = 'Tên trạng thái là bắt buộc';
            }
            if (empty($trang_thai)) {
                $errors['trang_thai'] = 'Trạng thái là bắt buộc';
            }

            // Thêm dữ liệu
            if (empty($errors)) {
                // Nếu không có lỗi thì thêm dữ liệu
                // Thêm vào CSDL
                $this->modelTrangThai->updateData($id, $ten_trang_thai, $trang_thai);
                unset($_SESSION['errors']);
                header('Location: ?act=trang-thai-don-hangs');
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: ?act=form-sua-trang-thai-don-hang');
                exit();
            }
        }
    }

    // Hàm xóa dữ liệu trong CSDL
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['trang_thai_id'];

            // Xóa trạng thái
            $this->modelTrangThai->deleteData($id);

            header('Location: ?act=trang-thai-don-hangs');
            exit();
        }
    }
}
