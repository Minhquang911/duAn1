<?php
class banner
{
    public $db;

    //ket noi csdl
    public function __construct()
    {
        $this->db = connectDB();
    }

    // lay ra danh sach banner
    public function getAll()
    {
        try {
            $sql = 'SELECT * FROM banner';

            $stmt = $this->db->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }

    // them moi du lieu vao csdl
    public function addData($tieude_banner, $hinhanh_banner, $trangthai)
    {
        try {
            $sql = 'INSERT INTO banner (tieude_banner,hinhanh_banner, trangthai)
                    VALUES (:tieude_banner, :hinhanh_banner, :trangthai)';

            $stmt = $this->db->prepare($sql);

            // gan gia tri vao cac tham so trong csdl
            $stmt->bindParam(':tieude_banner', $tieude_banner);
            $stmt->bindParam(':hinhanh_banner', $hinhanh_banner);
            $stmt->bindParam(':trangthai', $trangthai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }


    // lay thong tin chi tiet
    public function createData($id)
    {
        try {
            $sql = 'SELECT * FROM banner WHERE id = :id ';

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }


    //cap nhat du lieu 
    public function updateData($id, $tieude_banner, $hinhanh_banner, $trangthai)
    {
        try {
            $sql = 'UPDATE  banner SET tieude_banner =:tieude_banner, hinhanh_banner =:hinhanh_banner,  trangthai =:trangthai 
                    WHERE id =:id';
            $stmt = $this->db->prepare($sql);

            // gan gia tri vao cac tham so trong csdl
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':tieude_banner', $tieude_banner);
            $stmt->bindParam(':hinhanh_banner', $hinhanh_banner);
            $stmt->bindParam(':trangthai', $trangthai);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }




    // xoa du lieu khoi csdl va trang home
    public function deleteData($id)
    {
        try {
            $sql = 'DELETE FROM banner WHERE id = :id ';

            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo 'loi: ' . $e->getMessage();
        }
    }


















    //huy ket noi csdl

    public function __destruct()
    {
        $this->db = null;
    }
}
