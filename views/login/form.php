<?php
$username = isset($_POST['User']['username']) ? $_POST['User']['username']  : '';

$errorArr = [];
if (isset($_POST) && !empty($_POST)) {
    $controller = new UserController;
    $user = $controller->login();

    if ($user->valid) {
        header('Location: /');
        exit;
    } else {
        $validity['username'] = $user->errorArr['username'];
    }
}
?>

<h3>Sign in below:</h3>
<form class="form form-register" method="POST">
    <div class="form-group">
        <label for="User_username">Username</label>
        <input type="text" class="form-control" name="User[username]" id="User_username" placeholder="Username" value="<?= $username ?>" aria-required="true">
        <div class="invalid-feedback"><?= $errorArr['username'] ?></div>
    </div>

    <div class="form-group">
        <label for="User_password">Password</label>
        <input type="password" class="form-control" name="User[password]" id="User_password" placeholder="Password" aria-required="true">
        <div class="invalid-feedback"></div>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</form>