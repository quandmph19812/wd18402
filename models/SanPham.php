<?php

function timKiemSanPham($keyword)
{
    try {
        $sql = "SELECT * FROM sanpham JOIN anhsanpham ON sanpham.SanPhamID = anhsanpham.ID_SanPham  WHERE sanpham.TenSanPham LIKE :keyword";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $keyword = "%{$keyword}%";

        $stmt->bindParam(':keyword', $keyword);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}


function getAllProduct_new()
{
    try {
        $sql = 'SELECT * FROM sanpham where 1 ORDER BY ID_SanPham desc limit 0,5';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    } catch (\Exception $e) {
        debug($e);
    }
}

function getProductByID($id)
{
    try {
        $sql = 'SELECT * FROM sanpham WHERE ID_SanPham = :id';

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        return $stmt->fetch();
    } catch (\Exception $e) {
        debug($e);
    }
}

function loadall_sanpham_danhmuc($iddm)
{
    try {
        $sql = "SELECT * FROM sanpham WHERE ID_DanhMuc = :iddm ORDER BY ID_SanPham DESC";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->bindParam(':iddm', $iddm);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (\Exception $e) {
        // Handle exceptions properly, you can log or throw the exception as per your requirement
        // Logging example: error_log($e->getMessage());
        // Throw example: throw $e;
        // For now, let's return an empty array
        return array();
    }
}

function load_ten_dm($iddm)
{
    try {
        if ($iddm > 0) {
            $sql = "SELECT TenDanhMuc FROM danhmuc WHERE ID_DanhMuc = :iddm";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':iddm', $iddm);
            $stmt->execute();
            $result = $stmt->fetch();
            if ($result) {
                return $result['TenDanhMuc'];
            } else {
                return ""; // Return empty string if no category found with the given ID
            }
        } else {
            return ""; // Return empty string if ID is not valid
        }
    } catch (\Exception $e) {
        // Handle exceptions properly, you can log or throw the exception as per your requirement
        // Logging example: error_log($e->getMessage());
        // Throw example: throw $e;
        // For now, let's return an empty string
        return "";
    }
}
