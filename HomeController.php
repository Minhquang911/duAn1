<?php 

class HomeController
{

    public $modelNguoiDung;
    public $modelSanPham;
    public $modelTaiKhoan;
    public $modelDonHang;
    public $conn;

    public function __construct()
    {
        $this->conn = connectDB();
        $this->modelNguoiDung = new NguoiDung();
        $this->modelSanPham = new SanPham();
    }

    public function home(){
        $listSanPham = $this->modelSanPham->getAllSanPham();
        $categories = $this->modelSanPham->getDanhMucs();
        require_once './views/home.php';
    }

    public function danhSachSanPham()
    {
        // Lấy giá trị tìm kiếm
        $searchTerm = $_GET['search'] ?? '';
    
        // Lấy giá trị phân trang
        $currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $itemsPerPage = 16;
        $offset = ($currentPage - 1) * $itemsPerPage;
    
        // Lấy giá trị lọc theo khoảng giá từ URL
        $min_price = isset($_GET['min_price']) ? (int)$_GET['min_price'] : 0;
        $max_price = isset($_GET['max_price']) ? (int)$_GET['max_price'] : PHP_INT_MAX;
    
        // Lấy sản phẩm dựa trên bộ lọc
        if ($searchTerm) {
            $Sanphams = $this->modelSanPham->searchByNameAndPrice($searchTerm, $min_price, $max_price);
        } else {
            $Sanphams = $this->modelSanPham->getPagedSanPhamByPrice($min_price, $max_price, $offset, $itemsPerPage);
        }
    
        // Lấy tổng số sản phẩm theo khoảng giá để tính số trang
        $totalItems = $this->modelSanPham->getTotalSanPhamByPrice($min_price, $max_price);
        $totalPages = ceil($totalItems / $itemsPerPage);
    
        // Lấy danh mục
        $categories = $this->modelSanPham->getDanhMucs();
    
        // Gửi dữ liệu đến View
        require_once './views/listSanpham.php';
    }
    
    


public function danhMucSanPham() {
    // Lấy tất cả danh mục sản phẩm
    $danhMucs = $this->modelSanPham->getDanhMucs();
    $Sanphams = $this->modelSanPham->getAllSanPham(); // Hoặc getAll() tùy theo yêu cầu
    $categories = $this->modelSanPham->getDanhMucs();
    // Truyền dữ liệu vào view
    require_once './views/danhmuc_sanpham.php';
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
    

     public function chiTietMuaHang (){
        if(isset($_SESSION['user_client'])){
            // Lấy ra thông tin tài khoản đăng nhập
            $user = $this->modelTaiKhoan->getTaiKhoanFromEmail($_SESSION['user_client']);
            $tai_khoan_id = $user['id'];

            // Lấy id đơn truyền từ URL
            $donHangId = $_GET['id'];

            // Lấy ra danh sách trạng thái đơn hàng
            $arrTrangThaiDonHang = $this->modelDonHang->getTrangThaiDonHang();
            $trangThaiDonHang = array_column($arrTrangThaiDonHang, 'ten_trang_thai', 'id');

            //Lấy ra danh sách phương thức thanh toán
            $arrPhuongThucThanhToan = $this->modelDonHang->getPhuongThucThanhToan();
            $phuongThucThanhToan = array_column($arrPhuongThucThanhToan, 'ten_phuong_thuc', 'id');

            //Lấy ra thông tin đơn hàng theo ID
            $donHang = $this->modelDonHang->getDonHangById($donHangId);

            // Lấy thông tin sản phẩm của đơn hàng trong bảng chi tiết đơn hàng
            $chiTietDonHang = $this->modelDonHang->getChiTietDonHangByDonHangId($donHangId);
            // echo "<pre>";
            // print_r($donHang);

        } else {
            var_dump('Bạn chưa đăng nhập');
            die;
        }
     }
}