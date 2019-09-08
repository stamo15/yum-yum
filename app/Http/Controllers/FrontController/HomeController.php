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
        dd(Auth::user()->role());
        if(Auth::user()->role()->display_name === 'user'){
            return view('back.client.home');
        } else if(Auth::user()->role()->display_name === 'webmaster') {
            return view('back.admin.home');
        }
        
    }
}
