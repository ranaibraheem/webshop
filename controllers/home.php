<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function registerSuccessful()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/register-successful.view.php';
}

function loginSuccessful()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/login-successful.view.php';
}

function updateSuccessful()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/update-successful.view.php';
}

function registerPasswordNotMatch()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/register-password-not-match.view.php';
}

function updatePasswordNotMatch()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/update-password-not-match.view.php';
}
function loginPasswordNotMatch()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/login-password-not-match.view.php';
}
