<?php

// khai báo các hàm dùng global

if (!function_exists('require_file')) {

    function require_file($pathfolder)
    {
        $files = array_diff(scandir($pathfolder), ['.', '..']);

        foreach ($files as $file) {
            require_once $pathfolder . $file;
        }
    }
}

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";

        print_r($data);

        die;
    }
}

if (!function_exists('e404')) {
    function e404()
    {
        echo "404 - not found";
        die;
    }
}
