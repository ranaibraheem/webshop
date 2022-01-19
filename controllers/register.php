<?php
// require "assets/views/register.view.php";

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' .$view . '.view.php';
}

function store()
{
    $user = $_POST;
    $user['created_at'] = date('Y-m-d H:i:s');
    $user['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    insert($user, 'users');
    dd($user);
        header('Location: /?page=home&action=registerSuccessful');
}
