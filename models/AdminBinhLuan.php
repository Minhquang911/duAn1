<?php 
    class BinhLuan {
        private $pdo;

        public function __construct()
        {
            $this->pdo = connectDB(); // Giả sử hàm connectDB() đã được định nghĩa bên ngoài
        }

        public function getAll() {
            try {
                $sql = "
                    SELECT 
                        binh_luans.*,   
                        san_phams.ten_san_pham,
                        nguoi_dungs.ten_nguoi_dung AS nguoi_binh_luan
                    FROM binh_luans
                    JOIN san_phams ON binh_luans.san_pham_id = san_phams.id
                    JOIN nguoi_dungs ON binh_luans.tai_khoan_id = nguoi_dungs.id
                ";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo 'Lỗi: ' . $e->getMessage();
            }
        }
        

        // Cập nhật trạng thái bình luận (Hiện/Ẩn)
        public function toggleStatus($id) {
            try {
                // Lấy trạng thái hiện tại của bình luận
                $sql = "SELECT trang_thai FROM binh_luans WHERE id = :id";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([':id' => $id]);
                $result = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($result) {
                    $newStatus = $result['trang_thai'] == 1 ? 0 : 1; // Đổi trạng thái từ 1 sang 0 hoặc ngược lại

                    // Cập nhật trạng thái bình luận
                    $updateSql = "UPDATE binh_luans SET trang_thai = :newStatus WHERE id = :id";
                    $updateStmt = $this->pdo->prepare($updateSql);
                    $updateStmt->execute([':newStatus' => $newStatus, ':id' => $id]);

                    return true; // Cập nhật thành công
                }
                return false; // Không tìm thấy bình luận
            } catch (PDOException $e) {
                echo 'Lỗi: ' . $e->getMessage();
                return false;
            }
        }
        public function add($sanPhamId, $noiDung, $taiKhoanId) {
            try {
                $sql = "INSERT INTO binh_luans (san_pham_id, tai_khoan_id, noi_dung, ngay_dang, trang_thai) 
                        VALUES (:san_pham_id, :tai_khoan_id, :noi_dung, NOW(), 1)";
                $stmt = $this->pdo->prepare($sql);
                $stmt->execute([
                    ':san_pham_id' => $sanPhamId,
                    ':tai_khoan_id' => $taiKhoanId,
                    ':noi_dung' => $noiDung
                ]);
                return true;
            } catch (PDOException $e) {
                echo 'Lỗi: ' . $e->getMessage();
                return false;
            }
        }
        
        
        
        // Lấy danh sách sản phẩm
        public function getSanPhams() {
            try {
                $sql = "SELECT id, ten_san_pham FROM san_phams";
                $stmt = $this->pdo->query($sql);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo 'Lỗi: ' . $e->getMessage();
                return [];
            }
        }
        
        // Lấy danh sách người dùng
        public function getNguoiDungs() {
            try {
                $sql = "SELECT id, ten_nguoi_dung FROM nguoi_dungs";
                $stmt = $this->pdo->query($sql);
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo 'Lỗi: ' . $e->getMessage();
                return [];
            }
        }
        

        
        
    }
    ?>
