<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function saveCard()
{
    echo json_encode([
        'success'   => true,
        'message'   => 'Cup added to order',
        'redirect'  => '',
    ]);
}
