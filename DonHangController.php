<?php
class AdminDonHangController
{
    //Kết nối đến file model
    public $modelDonHang;

    public function __construct()
    {
        $this->modelDonHang = new DonHang();
    }
    //Hàm hiển thị danh sách
    public function index()
    {
        // Lấy ra dữ liệu đơn hàng
        $donHangs = $this->modelDonHang->getAll();

        // Đưa dữ liệu ra view
        require_once './views/donhang/listDonHang.php';
    }





    // //Hàm hiển thị form thêm
    // public function create()
    // {
    //     require_once './views/donhang/create_nguoi_dung.php';
    // }
    // //Hàm xử lý thêm vào CSDL
    // public function store()
    // {
    //     if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //         // Lấy ra dữ liệu
    //         $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
    //         $email = $_POST['email'];
    //         $so_dien_thoai = $_POST['so_dien_thoai'];
    //         $trang_thai = $_POST['trang_thai'];

    //         // Validate
    //         $errors = [];
    //         if (empty($ten_nguoi_dung)) {
    //             $errors['ten_nguoi_dung'] = 'Tên người dùng là bắt buộc';
    //         }
    //         if (empty($email)) {
    //             $errors['email'] = 'Email là bắt buộc';
    //         }
    //         if (empty($so_dien_thoai)) {
    //             $errors['so_dien_thoai'] = 'Số điện thoại là bắt buộc';
    //         }

    //         if (empty($trang_thai)) {
    //             $errors['trang_thai'] = 'Tên trạng thái là bắt buộc';
    //         }
    //         // Thêm dữ liệu
    //         if (empty($errors)) {
    //             // Nếu không có lỗi thì thêm dữ liệu
    //             // Thêm vào CSDL
    //             $this->modelDonHang->postData($ten_nguoi_dung, $email, $so_dien_thoai, $trang_thai);
    //             unset($_SESSION['errors']);
    //             header('Location: ?act=nguoi-dungs');
    //             exit();
    //         } else {
    //             $_SESSION['errors'] = $errors;
    //             header('Location: ?act=form-them-nguoi-dung');
    //             exit();
    //         }
    //     }
    // }


    //Hàm hiển thị form sửa
    public function edit()
    {
        //Lấy id
        $id = $_GET['don_hang_id'];
        // Lấy thông tin chi tiết của người nhận
        $donHang = $this->modelDonHang->getDetailData($id);

        //Đổ dữ liệu ra form
        require_once './views/donhang/editDonHang.php';
    }


    //Hàm xử lý cập nhật dữ liệu vào CSDL
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Lấy ra dữ liệu
            $id = $_POST['id'];
            $ma_don_hang = $_POST['ma_don_hang'];
            $ten_nguoi_nhan = $_POST['ten_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'];
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
            $ghi_chu = $_POST['ghi_chu'];
            $trang_thai_id = $_POST['trang_thai_id'];

            // Validate
            $errors = [];
            if (empty($ma_don_hang)) {
                $errors['ma_don_hang'] = 'Mã đơn hàng là bắt buộc';
            }
            if (empty($ten_nguoi_nhan)) {
                $errors['ten_nguoi_nhan'] = 'Tên người dùng là bắt buộc';
            }
            if (empty($email_nguoi_nhan)) {
                $errors['email_nguoi_nhan'] = 'Email là bắt buộc';
            }
            if (empty($sdt_nguoi_nhan)) {
                $errors['sdt_nguoi_nhan'] = 'Số điện thoại là bắt buộc';
            }
            if (empty($dia_chi_nguoi_nhan)) {
                $errors['dia_chi_nguoi_nhan'] = 'Địa chỉ là bắt buộc';
            }
            if (empty($ghi_chu)) {
                $errors['ghi_chu'] = 'Ghi chú là bắt buộc';
            }
            if (empty($trang_thai_id)) {
                $errors['trang_thai_id'] = 'Tên trạng thái là bắt buộc';
            }
            // Thêm dữ liệu
            if (empty($errors)) {
                // Nếu không có lỗi thì thêm dữ liệu
                // Thêm vào CSDL
                $this->modelDonHang->updateData($id, $ma_don_hang, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $ghi_chu, $trang_thai_id);
                unset($_SESSION['errors']);
                header('Location: ?act=don-hangs');
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header('Location: ?act=form-sua-don-hang');
                exit();
            }
        }
    }
    // Form tim kiem
    public function search()
    {
        if (isset($_POST['timkiem'])) {
            $search = $_POST['search'];
            $donHangs = $this->modelDonHang->searchData($search);

            require_once './views/donhang/listDonHang.php';
        }
    }
    //Hàm xóa dữ liệu trong CSDL
    public function destroy()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['don_hang_id'];

            // Xóa đơn hàng 
            $this->modelDonHang->deleteData($id);

            header('Location: ?act=don-hangs');
            exit();
        }
    }
}
