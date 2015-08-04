<?php if ($_GET) {
    switch ($_GET['page']) {
        case 'home':
            if (file_exists('home.php')) {
                include_once 'home.php';
            } else {
                exit("File yang dicari tidak ada");
            }
            break;

        case 'report':
            if (file_exists('report.php')) {
                include_once 'report.php';
            } else {
                exit("File yang dicari tidak ada");
            }
            break;
    }
} else {
    if (file_exists('home.php')) {
        include_once 'home.php';
    } else {
        exit("File yang dicari tidak ada");
    }
}