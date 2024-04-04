<?php

function chitietsp($id){

    $view = 'chitiet';

    $dataDanhMuc = listAll('danhmuc');
    $dataSanPham = showOne2table('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham', 'SanPhamID', $id);

    require_once PATH_VIEW . 'layouts/master.php';
}