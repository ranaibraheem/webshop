<?php

namespace App\Controllers;

use App\Helpers\Helper;
use App\Libraries\View;

class AdminController
{
    public function index()
    {
        return View::render('admin/main.view', [
            'logged_in' => Helper::isLoggedIn(),
        ]);
    }
}
//:: roep static function --Static methods can be called directly - without creating an instance of the class first.