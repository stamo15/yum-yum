<?php

namespace App\Http\Controllers\FrontController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    
    /**
     * Show the application home page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
    
    /**
     * Show the client registration page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('front.register');
    }
    
    /**
     * Show the client login page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('front.login');
    }
    
    /**
     * Show the featured recipes page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recipes()
    {
        return view('front.recipes');
    }
    
    /**
     * Show a single recipe page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recipeSingle()
    {
        return view('front.recipe-single');
    }
    
    /**
     * Show the blog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        return view('front.blog');
    }
    
    /**
     * Show a single blog post page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogPost()
    {
        return view('front.blogPost');
    }
}
