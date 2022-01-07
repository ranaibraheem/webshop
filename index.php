<?php
$greeting = 'Hello, ';
$lan = 'PHP';
$name = htmlspecialchars($_GET['name']);

$colors = [
    'Red',
    'Blue',
    'Green',
];
$colors[] = 'Pink';
$coffees = [
    'color' => 'brown',
    'beans' => true,
    'weight' => 1,
];
$coffees['density:'] = 'dark';
// unset($coffees['color']);

// echo '<pre>';
// die(var_dump($coffees));
// echo '</pre>';
$brand = "&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;";
$desc = "Coffee Machines";
require 'assets/views/index.view.php';
