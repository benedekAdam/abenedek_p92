<?php

$url = '';
$pageType = '';

if (isset($_GET['url'])) {
    $url = $_GET['url'];
}

if ($url == '') {
    $pageType = 'index';
} else {
    $urlPartArr = explode('/', $url);

    switch ($urlPartArr[0]) {
        case 'login':
            $pageType = 'login';
            break;
        case 'register':
            $pageType = 'register';
            break;
        case 'logout':
            $pageType = 'logout';
            break;
        default:
            $pageType = 'index';
    }
}
