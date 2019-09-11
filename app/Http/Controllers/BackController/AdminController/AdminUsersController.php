<?php

namespace App\Http\Controllers\BackController\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsersController extends Controller
{
    private $viewsPath = 'back.admin.pages.users.';

    public function dashboard(){
        return view($this->viewsPath.'dashboard');
    }
}
