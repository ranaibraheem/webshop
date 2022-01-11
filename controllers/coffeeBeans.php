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
        'message' => 'Beans added to order',
        'redirect' => '',
    ]);
}

function gectData()
{
    echo json_encode([
        'success' => true,
        'beans' => require 'data/beans.php',
    ]);
}
