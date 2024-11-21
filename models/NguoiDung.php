<?php
class NguoiDung
{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Check đăng nhập
    public function checkLogin2($email, $mat_khau){
        try {
            $sql = "SELECT * FROM nguoi_dungs WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            $nguoidungs = $stmt->fetch();
    
            // var_dump($nguoidungs);
    
            if ($nguoidungs && password_verify($mat_khau, $nguoidungs['mat_khau'])) {
                if ($nguoidungs['vai_tro'] == 'user') {
                    if ($nguoidungs['trang_thai'] == 1) {
                        return $nguoidungs['email'];
                    } else {
                        return "Tài khoản bị cấm";
                    }
                } else {
                    return "Tài khoản không có quyền đăng nhập";
                }
            } else {
                return "Bạn nhập sai thông tin mật khẩu hoặc tài khoản";
            }
        } catch (\Exception $e) {
            return "Lỗi hệ thống: " . $e->getMessage();
        }
    }

    // Check đăng kí
    public function checkDangKy2($ten_nguoi_dung, $email, $so_dien_thoai, $mat_khau, $dia_chi){
        try {
            // Kiểm tra nếu email đã tồn tại
            $sql = "SELECT * FROM nguoi_dungs WHERE email = :email";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute(['email' => $email]);
            $nguoiDung = $stmt->fetch();
    
            if ($nguoiDung) {
                // Nếu email đã tồn tại, trả về thông báo lỗi
                return "Email này đã được đăng ký.";
            }
    
            // Mã hóa mật khẩu trước khi lưu vào cơ sở dữ liệu
            $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);
    
            // Thêm người dùng mới vào cơ sở dữ liệu
            $sql = "INSERT INTO nguoi_dungs (ten_nguoi_dung, email, so_dien_thoai, mat_khau, vai_tro, trang_thai, dia_chi) 
                    VALUES (:ten_nguoi_dung, :email, :so_dien_thoai, :mat_khau, 'user', 1, :dia_chi)";
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([
                'ten_nguoi_dung' => $ten_nguoi_dung,
                'email' => $email,
                'so_dien_thoai' => $so_dien_thoai,
                'mat_khau' => $hashed_password,
                'dia_chi' => $dia_chi
            ]);
            
            return true; // Trả về true nếu lưu thành công
        } catch (\Exception $e) {
            return "Lỗi hệ thống: " . $e->getMessage(); // Xử lý lỗi nếu có
        }
    }
    
    
}