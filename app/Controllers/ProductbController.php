<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\ProductbModel;

class ProductbController extends Controller
{
    public function index()
    {

        $productsb = ProductbModel::load()->all();

        return View::render('products/index.view', [
            'productsb'  => $productsb,
        ]);
    }

    public function create()
    {
        
    }

    public function store()
    {
        $productb = $_POST;

        $productb['user_id'] = Helper::getUserIdFromSession();
        $productb['created'] = date('Y-m-d H:i:s');
        $productb['created_by'] = Helper::getUserIdFromSession();

        ProductbModel::load()->store($productb);
    }

    public function edit()
    {
        $productbId = Helper::getIdFromUrl('productb');

        $productb = ProductbModel::load()->get((int)$productbId);
        
        return View::render('productsb/edit.view', [
            'productb'   => $productb,
            'action'    => 'productb/' . $productbId . '/update',
        ]);
    }

    public function update()
    {
         
    }

        public function show()
        {

            $productbId = Helper::getIdFromUrl('productsb');
            $productb = ProductbModel::load()->get((int)$productbId);

            return View::render('products/show.view', [
                'name'          =>  $productb -> name, 
                'image'         =>  '/public/images/webshop/' . $productb -> image , 
                'text'          =>  $productb -> text,
                'info'          =>  $productb -> info,
                'onSale30'      =>  $productb -> onSale30,
                'onSale50'      =>  $productb -> onSale50,
                'price'         =>  $productb -> price, 
                'stock'         =>  $productb -> stock, 
            ]);
        }  
    }

