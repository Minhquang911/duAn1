<?php

class TinTuc
{

    public $db;

    // ket noi CSDL
    public function __construct()
    {
        $this->db = connectDB();
    }


    // danh sach tintuc
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM ql_tintuc';

            $stmt = $this->db->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }

    // them du lieu moi vao CSDL
    public function addData($ten_tin_tuc, $ten_noi_dung, $trang_thai)
    {
        try {
            $sql = 'INSERT INTO ql_tintuc(tieude, noidung, Trangthai) VALUES (:tieude, :noidung, :Trangthai) ';

            $stmt = $this->db->prepare($sql);
            // gan gia tri vao cac tham so trong CSDL
            $stmt->bindParam(':tieude', $ten_tin_tuc);
            $stmt->bindParam(':noidung', $ten_noi_dung);
            $stmt->bindParam(':Trangthai', $trang_thai);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }


    // lay thong tin chi tiet tu from add
    public function getDetailData($id)
    {
        try {
            $sql = 'SELECT * FROM ql_tintuc WHERE id = :id ';

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam('id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }

    // cap nhat du lieu vao CSDL
    public function updateData($id, $ten_tin_tuc, $ten_noi_dung, $trang_thai)
    {
        try {
            $sql = 'UPDATE ql_tintuc SET ten_tin_tuc =:ten_tin_tuc, ten_noi_dung =:ten_noi_dung, trang_thai =:trang_thai WHERE id =:id';

            $stmt = $this->db->prepare($sql);
            // gan gia tri vao cac tham so trong CSDL

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':ten_tin_tuc', $ten_tin_tuc);
            $stmt->bindParam(':ten_noi_dung', $ten_noi_dung);
            $stmt->bindParam(':trang_thai', $trang_thai);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }


    // xoa du lieu tintuc trong CSDL
    public function delete_Tintuc($id)
    {
        try {
            $sql = 'DELETE FROM  ql_tintuc WHERE id = :id';

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }



    // huy ket noi CSDL 
    public function __destruct()
    {
        $this->db = null;
    }
}
