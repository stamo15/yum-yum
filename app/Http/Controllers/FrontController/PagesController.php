<?php

namespace App\Http\Controllers\FrontController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;

use App\Model\Account\User;
use App\Model\Account\UserRole;
use App\Traits\RegisterUserTrait;

class PagesController extends Controller
{
    // Import user registration method
    use RegisterUserTrait;
    
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
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('front.pages.about');
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
        $user = $this->addUser($request);
        Auth::login($user);
        return redirect()->route('home');
    }
    
    /**
     * Process login form.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function signin(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = True;

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed...
            return redirect()->intended('home');
        }
    }
    
    /**
     * Log users out of the application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.login');
    }
}
