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
        return view('front.pages.index');
    }
    
    /**
     * Show the client registration page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function register()
    {
        return view('front.pages.register');
    }
    
    /**
     * Show the client login page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function login()
    {
        return view('front.pages.login');
    }
    
    /**
     * Show the featured recipes page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recipes()
    {
        return view('front.pages.recipes');
    }
    
    /**
     * Show a single recipe page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function recipeSingle()
    {
        return view('front.pages.recipe-single');
    }
    
    /**
     * Show the blog page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blog()
    {
        return view('front.pages.blog');
    }
    
    /**
     * Show a single blog post page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogPost()
    {
        return view('front.pages.blog-post');
    }
    
    /**
     * Process registration form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signup(Request $request)
    {
        // Validating form inputs
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email',
            'phone' => 'required|string',
            'subscribed' => 'required'
        ]);
        return view('front.pages.blog-post');
    }
    
    /**
     * Process login form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signin(Request $request)
    {
        return view('front.pages.blog-post');
    }
}
