<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;
use App\Models\CategoryModel;

class CategoryController extends Controller
{

    public function index()
    {
        $userId = Helper::getUserIdFromSession();
        
        $skills = CategoryModel::load()->all(null, $userId);

        View::render('categories/index.view', [
            'skills'    => $skills,
        ]);
    }

}