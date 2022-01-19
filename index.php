<?php

// Turn on all errors, warnings and notifications at the top of this app
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require 'vendor/autoload.php';

// .env configuration
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Starting a server PHP session
session_start();

// Include core modules
require 'core/mysql.php';
require 'core/core.php';

// Throw all errors to a central error handler function
// This function is in core/core.php file
set_exception_handler('exception_handler');

if (!isAjax()) {
    // Load the HTML <head> section
    require 'assets/views/layouts/head.view.php';

    $content = [];

    require 'assets/views/header.view.php';

    // Inject code from controller
    require 'core/bootstrap.php';

    // Close it with the bottom end </body> and </html> tags
    require 'assets/views/footer.view.php';

    // Close HTML <body> and <html> section
    require 'assets/views/layouts/bottom.view.php';

} else {
    require 'core/bootstrap.php';
}


require 'functions.php';
require 'connection.php';
require 'queryBuilder.php';
// $pdo =connectToDb();
$pdo = connection::make();

var_dump(fetchMachines($pdo));

var_dump(fetchCups($pdo));

var_dump(fetchBeans($pdo));
var_dump(fetchUsers($pdo));

// $fistItem = new queryBuilder($pdo);
// $firstMachine = $firstItem->selectFirstItem('machines');
// var_dump($firstMachine);


// $dsn ='mysql:host=127.0.0.1; dbname=webshop'; //$dsn data source name
// $user = 'root';
// $pass ='Gorella1!';

// try{
//     $pdo = new PDO($dsn, $user, $pass);
//     echo 'connected';
// }
// catch(PDOException $e){
//     echo 'Failed' .$e->getMessage();
// };

// echo "<pre>";
// $statement = $pdo->prepare('select * from machines');
// $statement->execute();
// $machine = $statement->fetchAll(PDO::FETCH_OBJ);
// var_dump($machine[1]->name);
// echo "</pre>";

// echo "<pre>";
// $statement2 = $pdo->prepare('select * from cups');
// $statement2->execute();
// $cup = $statement2->fetchAll(PDO::FETCH_OBJ);
// var_dump($cup[0]->name);
// echo "</pre>";

// echo "<pre>";
// $statement3 = $pdo->prepare('select * from beans where id=2');
// $statement3->execute();
// $bean = $statement3->fetchAll(PDO::FETCH_OBJ);
// var_dump($bean);
// echo "</pre>";

// echo "<pre>";
// $statement = $pdo->prepare('select * from machines');
// $statement->execute();
// $machine = $statement->fetchAll(PDO::FETCH_CLASS, 'machineClass');
// var_dump($machine[1]->name);
// echo "</pre>";
