<body class="text-center">
    <?php
    echo (new Navbar)->renderNavBar();

    $template = '';
    switch ($pageType) {
        case 'login':
            $template = 'login' . DIRECTORY_SEPARATOR . 'form.php';
            break;
        case 'index':
        default:
            $template = 'startpage.php';
    }

    $content = new View($template);
    echo $content->render();
    ?>
    <script type="text/javascript" src="<?= $baseHref ?>dist/bootstrap/js/bootstrap.min.js"></script>
</body>