<?php
session_start();
if (!isset($_SESSION['cart'])) {
    // Nếu không có thì đi khởi tạo
    $_SESSION['cart'] = [];
}
if($_SERVER['REQUEST_METHOD']==='POST'){
    $productId = $_POST['SanPhamID'];
    $productName = $_POST['TenSanPham'];
    $productPrice = $_POST['GiaSP'];
    $index = array_search($productId,array_column($_SESSION['cart'],'id'));
    if($index !== false){
        $_SESSION['cart'][$index]['quantity'] += 1;
    }else{
        $product = [
            'SanPhamID' => $productId,
            'TenSanPham' => $productName,
            'GiaSP' => $productPrice,
            'quantity' => 1
        ];
        $_SESSION['cart'][] = $product;
    }
    echo count($_SESSION['cart']);
}else{
    echo 'Yêu cầu không hợp lệ';
}
?>