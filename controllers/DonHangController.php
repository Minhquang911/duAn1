
<?php

class AdminDonHangController
{
    public $modelDonHang;

    public function __construct()
    {
        $this->modelDonHang = new AdminDonHang();
    }

    public function danhsachDonHang()
    {

        $listdonHang = $this->modelDonHang->getAllDonHang();

        require_once './views/donhang/listDonHang.php';
    }

    // public function detailDonHang(){
    //     $don_hang_id = $_GET['id_don_hang'];

    //     // Lấy thông tin đơn hàng ở bảng don_hangs
    //     $donHang = $this->modelDonHang->getDetailDonHang($don_hang_id);

    //     // Lấy danh sách  sản phẩm  đã đặt của đơn hàng ở bảng chi_tiet_don_hangs
    // }

public function postEditDonHang(){
    //Hàm này dùng để xử lý thêm dữ liệu

    // Kiểm tra xem dữ liệu có phải đc submit lên không
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
// Lấy ra dữ liệu
$don_hang_id = $_POST['don_hang_id'] ?? '';

$ten_nguoi_nhan = $_POST['ten_nguoi_nhan'] ?? '';
$sdt_nguoi_nhan = $_POST['sdt_nguoi_nhan'] ?? '';
$email_nguoi_nhan = $_POST['email_nguoi_nhan'] ?? '';
$dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'] ?? '';
$ghi_chu = $_POST['ghi_chu'] ?? '';
$trang_thai_id = $_POST['trang_thai_id'] ?? '';


// Tạo 1 mảng trống  để chứa dữ liệu
$errors =[];

if(empty($ten_nguoi_nhan)){
$errors['ten_nguoi_nhan'] = 'Tên người nhận không được để trống';
}
if(empty($sdt_nguoi_nhan)){
    $errors['sdt_nguoi_nhan'] = 'SDT người nhận không được để trống';
    }
    if(empty($email_nguoi_nhan)){
        $errors['email_nguoi_nhan'] = 'Email người nhận không được để trống';
        }
        if(empty($dia_chi_nguoi_nhan)){
            $errors['dia_chi_nguoi_nhan'] = 'Địa chỉ người nhận không được để trống';
            }
            if(empty($trang_thai_id)){
                $errors['trang_thai_id'] = 'Trạng thái đơn hàng';
                }
                $_SESSION['error'] = $errors;

                // Nếu ko có lỗi tiến hành sửa
                if(empty($errors)){
                    $this->modelDonHang->updateDonHang(
                        $don_hang_id,
                        $ten_nguoi_nhan,
                        $sdt_nguoi_nhan,
                        $email_nguoi_nhan,
                        $dia_chi_nguoi_nhan,
                        $ghi_chu,
                        $trang_thai_id,
                    );
                    header("Location: " . 'http://localhost/base_du_an_1/base_du_an_1/admin/index.php' . '?act=don-hang');
                    exit();

                }else {
                    // Trả về form và lỗi 
                    // Đặt chỉ thị xóa session sau khi hiển thị form
                    $_SESSION['flash'] = true;

                    header("Location: " . 'http://localhost/base_du_an_1/base_du_an_1/admin/index.php' . '?act=form-sua-don-hang&id_don_hang=' . $don_hang_id);
                    exit();
                }
    }
}

 // Form tim kiem
 public function search()
 {
     if (isset($_POST['timkiem'])) {
         $search = $_POST['search'];
         $listdonHang = $this->modelDonHang->searchData($search);

         require_once './views/donhang/listDonHang.php';
     }
 }


    public function formEditDonHang(){
        $id = $_GET['id_don_hang'];
        $donHang = $this->modelDonHang->getDetailDonHang($id);
        $listTrangThaiDonHang = $this->modelDonHang->getAllTrangThaiDonHang();
        if($donHang){
            require_once './views/donhang/editDonHang.php';
            // deleteSessionError();
        } else {
            header("Location: " . 'http://localhost/base_du_an_1/base_du_an_1/admin/index.php' . '?act=don-hang');
            exit();
        }
    }
}
?>