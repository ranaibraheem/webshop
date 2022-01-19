<?php

$query = "SELECT * FROM `cups` WHERE `deleted_at` IS NULL";
$result = query($query);
$data = $result->fetchAll(PDO::FETCH_ASSOC);

return $data;