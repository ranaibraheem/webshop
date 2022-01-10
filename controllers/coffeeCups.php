<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function saveCard()
{
    $_REQUEST;

    echo json_encode([
        'success' => true,
        'message' => 'Cup added to order',
        'redirect' => '',
    ]);
}

function getData()
{
    echo json_encode([
        'success' => true,
        'cups' => require 'data/cups.php',
    ]);
}
