<?php

class TinTucController
{

    // ket noi den file model
    public $modelTintuc;

    public function __construct()
    {
        $this->modelTintuc = new TinTuc();
    }

    // ham hien thi danh sach
    public function home()
    {


        // lay ra du lieu tintuc
        $tinTucs = $this->modelTintuc->getAll();



        // dua du lieu ra view
        require_once './views/tintuc/index.php';
    }


    // ham hien thi form them
    public function create()
    {
        require_once 'views/tintuc/add.php';
    }

    // ham xu ly them vao CSDL
    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lay ra du lieu
            $ten_tin_tuc = $_POST['tieude'];
            $ten_noi_dung = $_POST['noidung'];
            $trang_thai = $_POST['trangthai'];

            // check validate
            $errors = [];
            if (empty($ten_tin_tuc)) {
                $errors['tieude'] = 'Nhập tiêu đề bắt buộc';
            }

            if (empty($ten_noi_dung)) {
                $errors['noidung'] = 'Nhập nội dung bắt buộc';
            }

            if (empty($trang_thai)) {
                $errors['trangthai'] = 'Trạng thái là bắt buộc';
            }

            if (empty($errors)) {
                // neu k co loi thi them du lieu vao 
                // thuc hien them vao du lieu
                $this->modelTintuc->addData($ten_tin_tuc, $ten_noi_dung, $trang_thai);
                unset($_SESSION['errors']);
                header('location: ?act=tin-tucs ');
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header('location: ?act=form-them-tin-tuc ');
                exit();
            }
        }
    }


    // ham hien thi form cap nhat du lieu
    public function edit()
    {
        // lay id 
        $id = $_GET['tintuc_id'];

        // thay from danh sach cua trang tin tuc
        $tinTucs = $this->modelTintuc->getDetailData($id);


        // do du lieu ra form
        require_once 'views/tintuc/update.php';
    }


    // ham xu ly cap nhan du lieu vao CSDL
    public function update()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // lay ra du lieu
            $id = $_POST['id'];
            $ten_tin_tuc = $_POST['tieude'];
            $ten_noi_dung = $_POST['noidung'];
            $trang_thai = $_POST['trangthai'];

            // check validate
            $errors = [];
            if (empty($ten_tin_tuc)) {
                $errors['tieude'] = 'Nhập tiêu đề bắt buộc';
            }

            if (empty($ten_noi_dung)) {
                $errors['noidung'] = 'Nhập nội dung bắt buộc';
            }

            if (empty($trang_thai)) {
                $errors['trangthai'] = 'Trạng thái là bắt buộc';
            }

            if (empty($errors)) {
                // neu k co loi thi them du lieu vao 
                // thuc hien them vao du lieu
                $this->modelTintuc->updateData($id, $ten_tin_tuc, $ten_noi_dung, $trang_thai);
                unset($_SESSION['errors']);
                header('location: ?act=tin-tucs ');
                exit();
            } else {
                $_SESSION['errors'] = $errors;
                header('location: ?act=form-sua-tin-tuc ');
                exit();
            }
        }
    }



    // ham xu ly xoa  du lieu trong CSDL
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $id = $_POST['tintuc_id'];


            // thuc hien xoa tin tuc
            $this->modelTintuc->delete_Tintuc($id);
            header('location: ?act=tin-tucs ');
            exit();
        }
    }
}
