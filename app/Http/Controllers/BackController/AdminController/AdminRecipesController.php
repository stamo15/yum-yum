<?php

namespace App\Http\Controllers\BackController\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminRecipesController extends Controller
{
    private $viewsPath = 'back.admin.pages.recipes.';

    public function dashboard(){
        return view($this->viewsPath.'dashboard');
    }
}
