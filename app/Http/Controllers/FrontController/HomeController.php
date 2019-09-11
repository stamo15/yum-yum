<?php

namespace App\Http\Controllers\FrontController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

use App\Model\Account\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        // Redirect user based on their role
        if(Auth::user()->userRole->name === 'user'){
            return view('back.client.pages.home');
        } else if(Auth::user()->userRole->name === 'webmaster') {
            return view('back.admin.pages.home');
        }
        
    }
}
