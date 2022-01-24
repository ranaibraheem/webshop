<?php

// function connectToDb()
// {
//    try {
//        return new PDO('mysql:host=127.0.0.1; dbname=webshop', 'root', 'Gorella1!');
   
//    } catch (PDOException $e){
//         die($e->getMessage());
//     };
// };

function fetchMachines($pdo)
{
    echo "<pre>";
    $statement = $pdo->prepare('select name from machines where id = 1');
    $statement->execute();
    $machine = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $machine;
    echo "</pre>";
};

function fetchCups($pdo)
{
    echo "<pre>";
    $statement2 = $pdo->prepare('select name from cups where id = 4');
    $statement2->execute();
    $cup = $statement2->fetchAll(PDO::FETCH_OBJ);
    return $cup;
    echo "</pre>";
};

function fetchBeans($pdo)
{
    echo "<pre>";
    $statement3 = $pdo->prepare('select * from beans');
    $statement3->execute();
    $bean = $statement3->fetchAll(PDO::FETCH_OBJ);
    return $bean[0]->price;
    echo "</pre>";
};
function fetchUsers($pdo)
{
    echo "<pre>";
    $statement4 = $pdo->prepare('select first_name from users');
    $statement4->execute();
    $user = $statement4->fetchAll(PDO::FETCH_OBJ);
    return $user;
    echo "</pre>";
};

