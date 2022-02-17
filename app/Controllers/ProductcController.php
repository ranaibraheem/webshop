<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\productcModel;

class productcController extends Controller
{
    public function index()
    {

        $productsb = productcModel::load()->all();

        return View::render('products/index.view', [
            'productsb'  => $productsb,
        ]);
    }

    public function create()
    {
        
    }

    public function store()
    {
        $productc = $_POST;

        $productc['user_id'] = Helper::getUserIdFromSession();
        $productc['created'] = date('Y-m-d H:i:s');
        $productc['created_by'] = Helper::getUserIdFromSession();

        productcModel::load()->store($productc);
    }

    public function edit()
    {
        $productcId = Helper::getIdFromUrl('productc');

        $productc = productcModel::load()->get((int)$productcId);
        
        return View::render('productsb/edit.view', [
            'productc'   => $productc,
            'action'    => 'productc/' . $productcId . '/update',
        ]);
    }

    public function update()
    {
         
    }

        public function show()
        {
            $productcId = Helper::getIdFromUrl('productsc');
            $productc = productcModel::load()->get((int)$productcId);
            
            return View::render('products/show.view', [
                'name'          =>  $productc -> name, 
                'image'         =>  '/public/images/webshop/' . $productc -> image , 
                'text'          =>  $productc -> text,
                'info'          =>  $productc -> info,
                'onSale30'      =>  $productc -> onSale30,
                'onSale50'      =>  $productc -> onSale50,
                'price'         =>  $productc -> price, 
                'stock'         =>  $productc -> stock,
                'quantity'      =>  $productc -> quantity, 
            ]);
        }  
    }

