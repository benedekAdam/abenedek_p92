<div role="main" class="container">
    <div class="starter-template">
        <h1>Please register or log in to access your data:</h1>
        <div class="btn-group btn-group-lg btn-wrapper" role="group">
            <button onclick="location.href='<?= Login::getUrl() ?>'" type="button" class="btn btn-secondary btn-lg">Login</button>
            <button onclick="location.href='<?= Register::getUrl() ?>'" type="button" class="btn btn-primary btn-lg">Register</button>
        </div>
    </div>
</div>