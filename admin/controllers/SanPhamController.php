<?php

function SanPhamListAll()
{
    $title = 'Danh sách sản phẩm';
    $view = 'SanPham/list';

    $data = list3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham');
    
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamShow($id)
{
    $data = showOne3table('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham','SanPhamID', $id);
    
    if (empty($data)) {
        e404();
    }

    $title = 'chi tiet san pham';
    $view = 'SanPham/show';

    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamCreate()
{
    $title = 'thêm mới danh mục';
    $view = 'SanPham/create';
    
    $dataDanhMuc = listAll('danhmuc');

    if (!empty($_POST)) {

        $data = [
            'ID_DanhMuc' => $_POST['ID_DanhMuc'],
            'TenSanPham' => $_POST['TenSanPham'],
            'GiaSP' => $_POST['GiaSP'],
            'SoLuong' => $_POST['SoLuong'],
            'MoTa' => $_POST['MoTa'],
        ];

        insert('sanpham', $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamUpdate($id)
{
    $SanPham = showOne('sanpham', 'SanPhamID', $id);

    $dataDanhMuc = listAll('danhmuc');

    if (empty($SanPham)) {
        e404();
    }

    $title = 'thêm mới sản phẩm';
    $view = 'SanPham/update';

    if (!empty($_POST)) {

        $data = [
            'ID_DanhMuc' => $_POST['ID_DanhMuc'],
            'TenSanPham' => $_POST['TenSanPham'],
            'GiaSP' => $_POST['GiaSP'],
            'SoLuong' => $_POST['SoLuong'],
            'MoTa' => $_POST['MoTa'],
        ];


        update('sanpham','SanPhamID', $id, $data);

        header('Location: ' . BASE_URL_ADMIN . '?act=san-pham-update&id=' . $id);

        exit;
    }


    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
}

function SanPhamDelete($id)
{
    destroy('sanpham', 'SanPhamID', $id);

    header('Location: ' . BASE_URL_ADMIN . '?act=san-pham');
    die;
}
