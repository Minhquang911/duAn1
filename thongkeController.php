<?php

class thongkeController
{

    public $modelThongke;

    public function __construct()
    {
        $this->modelThongke = new AmdinThongke();
    }


    public function home()
    {

        // hien thi danh sach don hang
        $listdonHang = $this->modelThongke->getAllDonHang_ThongKe();

        // in ra man hinh 
        require_once 'views/thongke/list_thongke.php';
    }

    public function showRevenue()
    {
        $data = $this->modelThongke->getRevenueData(); // Lấy dữ liệu từ Model

        require_once 'views/thongke/list_thongke.php'; // Gọi View
    }
}
