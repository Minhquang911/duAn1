<?php 
class DonHang {
public $conn;

// Kết nối CSDL
public function __construct()
{
    $this->conn = connectDB(); 
}
// Danh sách đơn hàng
public function getAll(){
    try{
$sql = 'SELECT * FROM don_hangs';

$stmt = $this->conn->prepare($sql);

$stmt->execute();

return $stmt->fetchAll();
    } catch (PDOException $e) {
      echo 'Lỗi: ' . $e->getMessage();
    }
}
// Thêm dữ liệu vào CSDL
public function postData($ma_don_hang, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $ghi_chu, $trang_thai_id){
    try{
$sql = 'INSERT INTO don_hangs (ma_don_hang, ten_nguoi_nhan, email_nguoi_nhan, sdt_nguoi_nhan, dia_chi_nguoi_nhan, ghi_chu, trang_thai_id)
VALUES (:ma_don_hang, :ten_nguoi_nhan, :email_nguoi_nhan, :sdt_nguoi_nhan, :dia_chi_nguoi_nhan, :ghi_chu, :trang_thai_id)';

$stmt = $this->conn->prepare($sql);

// Gán giá trị vào các tham số
$stmt->bindParam(':ma_don_hang', $ma_don_hang);
$stmt->bindParam(':ten_nguoi_nhan', $ten_nguoi_nhan);
$stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
$stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
$stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
$stmt->bindParam(':ghi_chu', $ghi_chu);
$stmt->bindParam(':trang_thai_id', $trang_thai_id);

$stmt->execute();

return true;
    } catch (PDOException $e) {
      echo 'Lỗi: ' . $e->getMessage();
    }
}

// Lấy thông tin chi tiết
public function getDetailData($id){
    try{
$sql = 'SELECT * FROM don_hangs WHERE id = :id';

$stmt = $this->conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

return $stmt->fetch();
    } catch (PDOException $e) {
      echo 'Lỗi: ' . $e->getMessage();
    }
}

// Cập nhật dữ liệu vào CSDL
public function updateData($id, $ma_don_hang, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dia_chi_nguoi_nhan, $ghi_chu, $trang_thai_id){
    try{
$sql = 'UPDATE don_hangs SET ma_don_hang = :ma_don_hang, ten_nguoi_nhan = :ten_nguoi_nhan, email_nguoi_nhan = :email_nguoi_nhan, sdt_nguoi_nhan = :sdt_nguoi_nhan, dia_chi_nguoi_nhan = :dia_chi_nguoi_nhan, ghi_chu = :ghi_chu, trang_thai_id = :trang_thai_id WHERE id = :id';
$stmt = $this->conn->prepare($sql);

// Gán giá trị vào các tham số
$stmt->bindParam(':id', $id);

$stmt->bindParam(':ma_don_hang', $ma_don_hang);
$stmt->bindParam(':ten_nguoi_nhan', $ten_nguoi_nhan);
$stmt->bindParam(':email_nguoi_nhan', $email_nguoi_nhan);
$stmt->bindParam(':sdt_nguoi_nhan', $sdt_nguoi_nhan);
$stmt->bindParam(':dia_chi_nguoi_nhan', $dia_chi_nguoi_nhan);
$stmt->bindParam(':ghi_chu', $ghi_chu);
$stmt->bindParam(':trang_thai_id', $trang_thai_id);

$stmt->execute();

return true;
    } catch (PDOException $e) {
      echo 'Lỗi: ' . $e->getMessage();
    }
}
// Tìm kiếm trong CSDL
  // Phương thức tìm kiếm đơn hàng
  public function searchData($search)
  {
      try {
          // Tạo câu truy vấn SQL tìm kiếm theo mã đơn hàng
          $sql = "SELECT * FROM don_hangs WHERE ma_don_hang LIKE :search";
          
          $stmt = $this->conn->prepare($sql);
          // Thêm dấu % vào từ khóa để tìm kiếm theo chuỗi chứa từ khóa
          $stmt->bindValue(':search', '%' . $search . '%');
          
          $stmt->execute();

          $results = $stmt->fetchAll();

          return !empty($results) ? $results : [];
      } catch (PDOException $e) {
          echo 'Lỗi: ' . $e->getMessage();
      }
  }

 



// Xóa dữ liệu trong CSDL
public function deleteData($id){
    try{
$sql = 'DELETE FROM nguoi_dungs WHERE id = :id';

$stmt = $this->conn->prepare($sql);

$stmt->bindParam(':id', $id);

$stmt->execute();

return true;
    } catch (PDOException $e) {
      echo 'Lỗi: ' . $e->getMessage();
    }
}
// Hủy kết nối CSDL 
public function __destruct()
{
    $this->conn = null; 
}
}