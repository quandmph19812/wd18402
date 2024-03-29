<?php

// function showOne2table($id)
//     {
//         try {
//             $sql = "SELECT sanpham.SanPhamID, danhmuc.TenDanhMuc, sanpham.TenSanPham, sanpham.GiaSP, sanpham.MoTa FROM sanpham INNER JOIN danhmuc ON sanpham.ID_DanhMuc = danhmuc.DanhMucID WHERE sanpham.SanPhamID = :id LIMIT 1";

//             $stmt = $GLOBALS['conn']->prepare($sql);

//             $stmt->bindParam(":id", $id);

//             $stmt->execute();

//             return $stmt->fetch();
//         } catch (\Exception $e) {
//             debug($e);
//         }
//     }