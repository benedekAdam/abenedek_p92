<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">
            P92 Job Application
        </a>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $baseHref ?>">Home</a>
                </li>
                <?php
                if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']) {
                    include('navbar/navbar_loggedin.php');
                } else {
                    include('navbar/navbar_basic.php');
                }
                ?>
            </ul>
        </div>
    </div>
</nav>