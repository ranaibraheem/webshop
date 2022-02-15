<?php

namespace App\Controllers;

use App\Libraries\MySql;
use App\Libraries\Request;
use App\Libraries\View;
use Exception;
use PDO;
use App\Models\ProductModel;

class HomeController
{

    public function index()
    {
        return View::render('site/home.view');
    }

    public function products()
    {
        if (!Request::ajax()) {
            return;
        }

        try {
            $product = new ProductModel;
            $products = $product->all();

            $success = true;
            $message = "Success";
        } catch (Exception $e) {
            $products = null;
            $success = false;
            $message = $e->getMessage();
        }

        echo json_encode([
            'success'   => $success,
            'message'   => $message,
            'products'  => $products,
        ]);
    }
}
