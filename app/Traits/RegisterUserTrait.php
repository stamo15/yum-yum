<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

use App\Model\Account\User;
use App\Model\Account\UserRole;

trait RegisterUserTrait
{
    public function addUser(Request $request){
        // Validating form inputs
        $this->validate($request, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email',
            'phone' => 'required|string'
        ]);

        $user = new User;
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->user_role_id = 2;
        
        $user->save();
        
        return $user;
    }
}