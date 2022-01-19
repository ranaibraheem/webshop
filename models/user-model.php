<?php

function getAllUsers()
{
    $query = "
    SELECT `id`, `first_name`, `last_name`, `email` 
    FROM `users` 
    WHERE `deleted_at` IS NULL";

    $result = query($query);

    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function getSingleUser($id)
{
    $query = "
        SELECT `id`, `first_name`, `last_name`, `email` 
        FROM `users` 
        WHERE `deleted_at` IS NULL 
        AND `id`=" . $id;

    $result = query($query);

    return $result->fetch(PDO::FETCH_ASSOC);
}
