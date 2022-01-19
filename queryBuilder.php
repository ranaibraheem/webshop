<?php

class qureyBuilder
{
    protected $pdo;
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectFirstItem($table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id = 1");
        $statement->execute();
        return $statement->fetchFirstItem(PDO::FETCH_OBJ);
    }
}