<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function registerSuccessful()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/register-succful.view.php';
}

