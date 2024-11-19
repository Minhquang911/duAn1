<?php

class AmdinThongke
{

    public $conn;
    // Kết nối CSDL
    public function __construct()
    {
        $this->conn = connectDB();
    }

    public function getAllDonHang_ThongKe()
    {
        try {
            $sql = 'SELECT don_hangs.*, trang_thai_don_hangs.ten_trang_thai
                    FROM don_hangs
                    INNER JOIN trang_thai_don_hangs 
                    ON don_hangs.trang_thai_id = trang_thai_don_hangs.id';

            $stmt = $this->conn->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (Exception $e) {
            echo "lỗi" . $e->getMessage();
        }
    }

    public function getRevenueData()
    {
        // Giả sử đây là dữ liệu từ database
        return [
            'current_day' => date("d/m/Y"),
            'orders' => 555,
            'revenue' => 22890,
            'profit' => 18.92
        ];
    }
}
