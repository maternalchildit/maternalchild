<?php

function ensure_login()
{
    if (@$_SESSION['logged_in'] == false) {
        header("Location: /admin/login.php");
        exit();
    }
}

function set_csrf_token()
{
    $_SESSION['token'] = null;
    $_SESSION['token'] = get_csrf_token();
}

function add_csrf_input()
{
    echo "<input type='hidden' name='_token' value='" . $_SESSION['token'] . "' />";
}

function get_csrf_token()
{
    return md5(uniqid(rand(), TRUE));
}

function ensure_csrf_token()
{
    $token = htmlspecialchars(filter_input(INPUT_POST, '_token'));
    if ($token !== $_SESSION['token']) {
        header("Location: /admin/login.php");
        exit;
    }
}

$_SESSION['errors'] ??= [];