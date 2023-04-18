<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function registration(Request $request){
        $user = User::where('login',$request->login)->first();

        if (empty($user)) {
            $user = User::create([
                'login' => $request->login,
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);

            Auth::login($user);

            return back();
        }

        return back();
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('index');
    }
}
