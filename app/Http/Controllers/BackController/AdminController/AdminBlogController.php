<?php

namespace App\Http\Controllers\BackController\AdminController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    private $viewsPath = 'back.admin.pages.blog.';

    public function dashboard(){
        return view($this->viewsPath.'dashboard');
    }
}
