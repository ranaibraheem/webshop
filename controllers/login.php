<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function login()
{
    $query = "SELECT * FROM `users` WHERE `email`='" . $_POST['email'] . "'";
    $result = query($query);
    $data = $result->fetch(PDO::FETCH_ASSOC);
    if (password_verify($_POST['password'], $data['password'])) {
        header('Location: /?page=home&action=loginSuccessful');
    }
     else {
        header('Location: /?page=home&action=loginPasswordNotMatch');
    }
}
