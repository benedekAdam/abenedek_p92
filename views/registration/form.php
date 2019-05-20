<?php
$name = isset($_POST['User']['name']) ? $_POST['User']['name']  : '';
$username = isset($_POST['User']['username']) ? $_POST['User']['username']  : '';
$email = isset($_POST['User']['email']) ? $_POST['User']['email']  : '';


$errorArr = [];

if (isset($_POST) && !empty($_POST)) {
    $controller = new UserController;
    $user = $controller->registerUser();

    if ($user->valid) {
        header('Location: /');
        exit;
    } else {
        $errorArr = $user->errorArr;
        foreach ($errorArr as $key => $error) {
            $validity[$key] = $error ? 'is-invalid' : 'is-valid';
        }
    }
}

?>

<h3>Registration</h3>
<form class="form form-signin needs-validation" method="POST">
    <div class="form-group">
        <label for="User_name">Name</label>
        <input type="text" class="form-control <?= isset($validity['name']) ? $validity['name'] : '' ?>" name="User[name]" id="User_name" placeholder="Name" aria-required="true" value=<?= $name ?>>
        <div class="invalid-feedback"><?= $errorArr['name'] ?></div>
    </div>

    <div class="form-group">
        <label for="User_username">Username</label>
        <input type="text" class="form-control <?= isset($validity['username']) ? $validity['username'] : '' ?>" name="User[username]" id="User_username" placeholder="Username" aria-required="true" value="<?= $username ?>">
        <div class="invalid-feedback"><?= $errorArr['username'] ?></div>
    </div>

    <div class="form-group">
        <label for="User_username">Email address</label>
        <input type="text" class="form-control <?= isset($validity['email']) ? $validity['email'] : '' ?>" name="User[email]" id="User_email" placeholder="Email address" aria-required="true" value="<?= $email ?>">
        <div class="invalid-feedback"><?= $errorArr['email'] ?></div>
    </div>

    <div class="form-group">
        <label for="User_password">Password</label>
        <input type="password" class="form-control <?= isset($validity['password']) ? $validity['password'] : '' ?>" name="User[password]" id="User_password" placeholder="Password" aria-required="true">
        <div class="invalid-feedback"><?= $errorArr['password'] ?></div>
    </div>

    <div class="form-group">
        <label for="User_passwordre">Repeat password</label>
        <input type="password" class="form-control" name="User[passwordre]" id="User_passwordre" placeholder="Repeat password" aria-required="true">
    </div>

    <div class="form-group">
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" required aria-required="true"> I have read and accepted the <a href="privacy-policy">privacy policy</a>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
    </div>
</form>