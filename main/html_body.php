<body class="text-center">
    <?php
    echo (new Navbar)->renderNavBar();

    $template = '';
    switch ($pageType) {
        case 'login':
            $template = 'login' . DIRECTORY_SEPARATOR . 'form.php';
            break;
        case 'registration':
            $template = 'registration' . DIRECTORY_SEPARATOR . 'form.php';
            break;
        case 'privacy-policy':
            $template = 'privacy-policy.php';
            break;
        case 'index':
        default:
            $template = 'startpage.php';
    }

    $content = new View($template);
    echo $content->render();
    ?>
</body>