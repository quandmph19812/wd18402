<?php

function khachhangDetail($id){
    $user = getUserByID($id);

    require_once PATH_VIEW . 'khachhang/detail.php';
}