<?php

function __autoload($class_name) {
    $class_name = ucwords($class_name);
    $path = "Models/$class_name.php";

    if(file_exists($path)) {
        require_once $path;
    } else {
        die("File $class_name.php tidak ditemukan");
    }
}