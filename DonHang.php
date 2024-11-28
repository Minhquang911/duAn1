<?php
class DonHangModel
{
    public $conn;

    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }
    // Lấy danh sách đơn hàng theo tài khoản
    public function getOrdersByUser($tai_khoan_id)
    {
        $sql = "SELECT * FROM don_hangs WHERE tai_khoan_id = :tai_khoan_id ORDER BY ngay_dat DESC";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['tai_khoan_id' => $tai_khoan_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getTrangThaiDonHang($trang_thai_id)
    {
        $sql = "SELECT ten_trang_thai FROM trang_thai_don_hangs WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $trang_thai_id]);
        return $stmt->fetchColumn(); // Lấy giá trị cột đầu tiên
    }
    public function getPhuongThucThanhToan($phuong_thuc_id)
    {
        $sql = "SELECT ten_phuong_thuc FROM phuong_thuc_thanh_toans WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $phuong_thuc_id]);
        return $stmt->fetchColumn(); // Lấy giá trị cột đầu tiên
    }

    // Lấy chi tiết đơn hàng
    public function getDonHangByMaDonHang($ma_don_hang)
{
    $sql = "SELECT dh.*, ctdh.san_pham_id, ctdh.so_luong, ctdh.don_gia 
            FROM don_hangs dh
            JOIN chi_tiet_don_hangs ctdh ON dh.id = ctdh.don_hang_id
            WHERE dh.ma_don_hang = :ma_don_hang";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['ma_don_hang' => $ma_don_hang]);
    
    // Lấy tất cả chi tiết đơn hàng
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // Nếu bạn muốn nhóm sản phẩm trong đơn hàng, có thể xử lý thêm ở đây
    $donHang = [];
    foreach ($result as $row) {
        $donHang[$row['san_pham_id']][] = $row; // Nhóm theo san_pham_id
    }
    
    return $donHang;
}





     // chi tiết đơn hàng
    public function getDonHangById($ma_don_hang)
{
    try {
    $sql = "SELECT *
            FROM don_hangs 
            WHERE ma_don_hang = :ma_don_hang";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute(['ma_don_hang' => $ma_don_hang]);
    
   return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e){
        echo "Lỗi" . $e->getMessage();
    }
 
}
public function getChiTietDonHangByDonHangId($maDonHang)
{
    try {
        $sql = "SELECT 
                    sp.ten_san_pham, 
                    sp.gia_ban, 
                    sp.hinh_anh, 
                    ctdh.don_gia, 
                    ctdh.so_luong, 
                    (ctdh.don_gia * ctdh.so_luong) AS thanh_tien
                FROM chi_tiet_don_hangs ctdh
                JOIN san_phams sp ON ctdh.san_pham_id = sp.id
                WHERE ctdh.ma_don_hang = :ma_don_hang";

        $stmt = $this->conn->prepare($sql); // $this->conn là đối tượng kết nối PDO
        $stmt->execute(['ma_don_hang' => $maDonHang]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về tất cả kết quả dưới dạng mảng
    } catch (PDOException $e) {
        die("Lỗi truy vấn chi tiết đơn hàng: " . $e->getMessage());
    }
}


// public function getChiTietDonHangByDonHangId($ma_don_hang)
// {
//     try {
//     $sql = "SELECT 
//             chi_tiet_don_hangs.*,
//             san_phams.ten_san_pham,
//             san_phams.hinh_anh
//             FROM 
//             chi_tiet_don_hangs 
//             JOIN
//             san_phams ON chi_tiet_don_hangs.san_pham_id = san_phams.id
//             WHERE 
//             chi_tiet_don_hangs.don_hang_id = :don_hang_id";
//     $stmt = $this->conn->prepare($sql);
//     $stmt->execute([':don_hang_id' => $ma_don_hang]);
    
//    return $stmt->fetch(PDO::FETCH_ASSOC);
//     } catch (Exception $e){
//         echo "Lỗi" . $e->getMessage();
//     }
 
// }
    

    // Hủy đơn hàng
    public function huyDonHang($ma_don_hang)
    {
        $sql = "UPDATE don_hangs SET trang_thai_id = 7 WHERE ma_don_hang = :ma_don_hang AND trang_thai_id = 1";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['ma_don_hang' => $ma_don_hang]);
    }
}
