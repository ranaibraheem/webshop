<?php

namespace App\Models;

use App\Models\Model;
use App\Libraries\MySql;
use PDO;

class productcModel extends ProductModel
{
    // Name of the table
    protected $model = "cups";

    // Max number of records when fetching all records from table
    protected $limit;

    // Non writable fields
    protected $protectedFields = [
        'id',
        'updated_at',
        'deleted_at',
        'updated_by',
        'deleted_by',
    ];

    /**
     * Load class 'staticaly'
     */
    public static function load()
    {
        return new static;
    }

    public function __construct()
    {
        parent::__construct(
            $this->model, 
            $this->limit, 
            $this->protectedFields
        );   
    }
}