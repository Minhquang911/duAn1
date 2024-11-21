<?php 

class SanPham
{
public $conn;

public function __construct()
{
    $this->conn = connectDB();
}

public function getAllSanPham(){
    try {
        $sql = 'SELECT san_phams.*, danh_mucs.ten_danh_muc
        FROM san_phams
        INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
        ';
        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (Exception $e) {
        echo "Lỗi" . $e->getMessage();
    }
}
   // Lấy sản phẩm theo ID
   public function getById($id)
   {
       try {
           $stmt = $this->conn->prepare("SELECT * FROM san_phams WHERE id = :id");
           $stmt->execute(['id' => $id]);
           return $stmt->fetch(PDO::FETCH_ASSOC);
       } catch (PDOException $e) {
           echo "Lỗi khi lấy dữ liệu sản phẩm: " . $e->getMessage();
           return false;
       }
   }

   public function getSpById($id)
{
try {
   // Truy vấn kết hợp giữa bảng san_phams và danh_mucs để lấy cả thông tin sản phẩm và tên danh mục
   $stmt = $this->conn->prepare("
       SELECT sp.*, dm.ten_danh_muc
       FROM san_phams sp
       JOIN danh_mucs dm ON sp.danh_muc_id = dm.id
       WHERE sp.id = :id
   ");
   $stmt->execute(['id' => $id]);
   return $stmt->fetch(PDO::FETCH_ASSOC); // Trả về dữ liệu bao gồm thông tin sản phẩm và tên danh mục
} catch (PDOException $e) {
   echo "Lỗi khi lấy dữ liệu sản phẩm: " . $e->getMessage();
   return false;
}
}
public function getBinhLuansBySanPhamId($sanPhamId)
{
try {
   $sql = "
       SELECT 
           bl.noi_dung, 
           bl.trang_thai AS trang_thai_binh_luan, 
           bl.ngay_dang
       FROM 
           binh_luans bl
       WHERE 
           bl.san_pham_id = :san_pham_id
       ORDER BY 
           bl.ngay_dang DESC;
   ";
   $stmt = $this->conn->prepare($sql);
   $stmt->execute(['san_pham_id' => $sanPhamId]);
   return $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
   echo "Lỗi khi lấy bình luận: " . $e->getMessage();
   return []; // Nếu có lỗi, trả về mảng rỗng
}
}
public function getDanhGiasBySanPhamId($san_pham_id)
{
$query = "
   SELECT 
       danh_gias.diem_so,
       danh_gias.noi_dung AS noi_dung_danh_gia,
       danh_gias.ngay_danh_gia,
       nguoi_dungs.ten_nguoi_dung AS nguoi_danh_gia
   FROM 
       danh_gias
   LEFT JOIN 
       nguoi_dungs ON danh_gias.tai_khoan_id = nguoi_dungs.id
   WHERE 
       danh_gias.san_pham_id = :san_pham_id
   ORDER BY 
       danh_gias.ngay_danh_gia DESC
";

$stmt = $this->conn->prepare($query);
$stmt->execute(['san_pham_id' => $san_pham_id]);

return $stmt->fetchAll(PDO::FETCH_ASSOC);
}



        //list anh san pham
        public function getlistAnh($id)
        {
            try {
                $stmt = $this->conn->prepare("SELECT * FROM san_pham_images WHERE san_pham_id = :id");
                $stmt->execute(['id' => $id]);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Lỗi khi lấy dữ liệu sản phẩm: " . $e->getMessage();
                return false;
            }
        }

            
        public function getDanhMucs()
    {
        $sql = "SELECT * FROM danh_mucs WHERE trang_thai = 1"; // Chỉ lấy danh mục còn hàng
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC); // Trả về mảng danh mục
    }

    public function getListSanPhamDanhMuc($danh_muc_id){
        try {
            $sql = 'SELECT san_phams.*, danh_mucs.ten_danh_muc
            FROM san_phams
            INNER JOIN danh_mucs ON san_phams.danh_muc_id = danh_mucs.id
            WHERE san_phams.danh_muc_id = '. $danh_muc_id;
            $stmt = $this->conn->prepare($sql);
    
            $stmt->execute();
    
            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "Lỗi" . $e->getMessage();
        }
    }
    
    public function searchData($search)
    {
        try {
            // Tạo câu truy vấn SQL tìm kiếm theo tên, email, số điện thoại, trạng thái
            $sql = "SELECT * FROM san_phams WHERE ten_san_pham LIKE :search";

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
}