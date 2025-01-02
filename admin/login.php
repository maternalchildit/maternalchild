<?php
session_start();

require('../setup.php');
require('./admin-setup.php');

use Utility\Functions;

$_SESSION['logged_in'] = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // TODO: log user in
    ensure_csrf_token();

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    if ($username != "peterojo" or $password != "cipro2.34%Y") {
        header('Location: /admin/login.php');
        exit;
    }

    $_SESSION['logged_in'] = true;
    header("Location: /admin/");
} else {
    set_csrf_token();
}

Functions::extend('admin/header', compact('cdn'));
?>

<main>
    <div class="container">
        <form action="" method="post">
        <?php add_csrf_input(); ?>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" required="required" name="username" />
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" required="required" name="password" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</main>