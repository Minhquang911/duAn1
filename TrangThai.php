<?php

class TrangThai
{
    public $conn;

    // Kết nối CSDL 
    public function __construct()
    {
        $this->conn = connectDB();
    }

    // Danh sách trạng thái
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM trang_thai_don_hangs ';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Thêm dữ liệu vào CSDL
    public function postData($ten_trang_thai, $trang_thai)
    {
        try {
            $sql = 'INSERT INTO trang_thai_don_hangs (ten_trang_thai, trang_thai)
            VALUES (:ten_trang_thai, :trang_thai)';

            $stmt = $this->conn->prepare($sql);

            // Gán giá trị vào các tham số
            $stmt->bindParam('ten_trang_thai', $ten_trang_thai);
            $stmt->bindParam('trang_thai', $trang_thai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Lấy thông tin chi tiết
    public function getDetailData($id)
    {
        try {
            $sql = 'SELECT * FROM trang_thai_don_hangs WHERE id = :id';

            $stmt = $this->conn->prepare($sql);

            $stmt->bindParam('id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Cập nhật dữ liệu vào CSDL
    public function updateData($id, $ten_trang_thai, $trang_thai)
    {
        try {
            $sql = 'UPDATE trang_thai_don_hangs SET ten_trang_thai = :ten_trang_thai, trang_thai = :trang_thai WHERE id = :id';


            $stmt = $this->conn->prepare($sql);

            // Gán giá trị vào các tham số
            $stmt->bindParam('id', $id);
            $stmt->bindParam('ten_trang_thai', $ten_trang_thai);
            $stmt->bindParam('trang_thai', $trang_thai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Xóa dữ liệu trong CSDL
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM trang_thai_don_hangs WHERE id = :id';

            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam('id', $id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'Lỗi: ' . $e->getMessage();
        }
    }

    // Hủy kết nối
    public function __destruct()
    {
        $this->conn = null;
    }
}
