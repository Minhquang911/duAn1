<?php 

class HomeController
{

    public $modelNguoiDung;
    public $modelSanPham;
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
        $this->modelNguoiDung = new NguoiDung();
        $this->modelSanPham = new SanPham();
    }

    public function home(){
        $listSanPham = $this->modelSanPham->getAllSanPham();
        require_once './views/home.php';
    }

    // Đăng nhập
    public function formLogin(){
        require_once './views/dangnhap/formLogin.php';
        
    }

    public function checkLogin(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){

            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];

            // var_dump($email);

            $nguoiDungs = $this->modelNguoiDung->checkLogin2($email, $mat_khau);

            if ($nguoiDungs == $email){
                $_SESSION['nguoidungs_client'] = $nguoiDungs;
                header("Location: http://localhost/base_du_an_1/base_du_an_1/index.php");
                exit();
            }else{
                $_SESSION['error'] = $nguoiDungs;

                $_SESSION['flash'] = true;

                header("Location: http://localhost/base_du_an_1/base_du_an_1/index.php" . '?act=login');
                exit();
            }
        }  
    }
    
    // Đăng ký
    public function formDangKy(){
        require_once './views/dangnhap/formDangKy.php';
    }
    
    public function checkDangKy(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Lấy dữ liệu từ form
            $ten_nguoi_dung = $_POST['ten_nguoi_dung'];
            $email = $_POST['email'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $mat_khau = $_POST['mat_khau'];
            $confirm_mat_khau = $_POST['confirm_mat_khau'];
            $dia_chi = $_POST['dia_chi'];
    
            // Kiểm tra nếu mật khẩu xác nhận khớp
            if ($mat_khau !== $confirm_mat_khau) {
                $_SESSION['error'] = "Mật khẩu và xác nhận mật khẩu không khớp.";
                header("Location: http://localhost/base_du_an_1/base_du_an_1/index.php" . '?act=dangky');
                exit();
            }
    
            // Gọi phương thức trong model để đăng ký người dùng
            $result = $this->modelNguoiDung->checkDangKy2($ten_nguoi_dung, $email, $so_dien_thoai, $mat_khau, $dia_chi);
    
            if ($result === true) {
                // Đăng ký thành công, chuyển hướng đến trang đăng nhập
                $_SESSION['success'] = "Đăng ký thành công! Bạn có thể đăng nhập ngay.";
                header("Location: http://localhost/base_du_an_1/base_du_an_1/index.php" . '?act=login');
                exit();
            } else {
                // Nếu có lỗi (email đã tồn tại), hiển thị lỗi
                $_SESSION['error'] = $result;
                header("Location: http://localhost/base_du_an_1/base_du_an_1/index.php" . '?act=dangky');
                exit();
            }
        }
    }
    

    public function chiTietSanPham(){
        $danhMucs = $this->modelSanPham->getDanhMucs();
        $id = $_GET['id'] ?? null;
    
        if ($id && is_numeric($id)) {
            // Lấy thông tin sản phẩm theo ID
            $Sanpham = $this->modelSanPham->getSpById($id);
    
            // Lấy danh sách ảnh của sản phẩm
            $listSanpham = $this->modelSanPham->getlistAnh($id);
    
            // Lấy bình luận của sản phẩm
            $binhLuans = $this->modelSanPham->getBinhLuansBySanPhamId($id); 
    
            // Lấy đánh giá của sản phẩm
            $danhGias = $this->modelSanPham->getDanhGiasBySanPhamId($id);

            $listSanphamCungDanhMuc = $this->modelSanPham->getListSanPhamDanhMuc($Sanpham['danh_muc_id']);
            
            if ($Sanpham) {
                // Truyền dữ liệu vào view
                require "./views/chitiet_sanpham.php";
            } else {
                header("Location: " . BASE_URL);
            }
        } else {
            echo "ID không hợp lệ!";
        }
    }
     // Form tim kiem
     public function search()
     {
         if (isset($_POST['timkiem'])) {
             $search = $_POST['search'];
             $listSanpham = $this->modelSanPham->searchData($search);
 
             require_once './views/chitiett_sanpham.php';
         }
     }
    
}