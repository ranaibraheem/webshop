<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' .$view . '.view.php';
}

function store()
{
    $user = $_POST;
    $user['created_at'] = date('Y-m-d H:i:s');
    $user['updated_at'] = date('Y-m-d H:i:s');

    $user['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user['confirm_password'] = password_hash($_POST['confirm_password'], PASSWORD_DEFAULT);

    if ($_POST["password"] === $_POST["confirm_password"]) {
        insert($user, 'users');
        header('Location: /?page=home&action=registerSuccessful');
    }
     else {
        header('Location: /?page=home&action=registerPasswordNotMatch');
    }
}
