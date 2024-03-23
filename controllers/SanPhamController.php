<?php

function chitietsp($id)
{
    $title = 'chi tiết sản phẩm';
    $view = 'chitiet';

    $dataDanhMuc = listAll('danhmuc');
    $dataSanPham = showOne2table('sanpham', 'anhsanpham', 'SanPhamID', 'ID_SanPham', 'SanPhamID', $id);

    require_once PATH_VIEW . 'layouts/master.php';
}

function timkiem()
{
    $view = 'search';

    if (isset($_GET['keyword'])) {
        $keyword = $_GET['keyword'];

        $data = timKiemSanPham($keyword);


        require_once PATH_VIEW . 'layouts/master.php';
    }
}
    
//     require_once PATH_VIEW . 'layouts/master.php';
// }
// function timkiem(){
//     $title = 'tìm kiếm';
//     $view = 'listdoc';
//     $dataDanhMuc = listAll('danhmuc');
//     if(!empty($_POST)){

//         $data = [
//            'keyword' => $_POST['keyword'],
//         ];

//         timkiem('sanpham', 'danhmuc', 'anhsanpham', 'ID_DanhMuc', 'DanhMucID', 'SanPhamID', 'ID_SanPham','SanPhamID', $data);

//         exit;
//     };

    
//     require_once PATH_VIEW . 'layouts/master.php';
// }