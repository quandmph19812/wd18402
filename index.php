<?php

// require file trong commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
require_once './commons/model.php';

// require file trong controllers và models
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// $data = listAll('danhmuc');
// debug($data);

// điều hướng
$act = $_GET['act'] ?? '/';

match ($act) {
     '/' => index(),
    // 'khachhang' => khachhangDetail($_GET['id']),
    // 'home' => homeindex(),
    'san-pham' => SanPhamList($_GET['id']),
    'chi-tiet' => chitietsp($_GET['id']),
    'listdoc' => SanPhamList($_GET['id']),
    'san-pham-tim-kiem' => timkiem($_GET['keyword']),
        
};

require_once './commons/disconnect-db.php';