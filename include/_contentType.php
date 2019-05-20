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
        case 'registration':
            $pageType = 'registration';
            break;
        case 'logout':
            $pageType = 'logout';
            break;
        case 'privacy-policy':
            $pageType = 'privacy-policy';
            break;
        default:
            $pageType = 'index';
    }
}
