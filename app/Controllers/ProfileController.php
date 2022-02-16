<?php

namespace App\Controllers;

use App\Libraries\View;
use App\Helpers\Helper;
use App\Models\UserModel;

class ProfileController
{
    public function index()
    {
        if (isset($_SESSION) && isset($_SESSION['user'])) {
            $userId = Helper::getUserIdFromSession();

            $user = UserModel::load()->get($userId);

            return View::render('credentials/me.view', [
                'user'  => $user,
            ]);
        } else {
            header('Location: login');
        }
        
    }

    public function changeEmail()
    {

    }

}