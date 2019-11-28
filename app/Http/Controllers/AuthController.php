<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    public function getLogin(){
        if(Auth::check()){
            return redirect()->route('home');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($data)) {
            return redirect()->route('home');
        } else {
            return redirect()->route('login');
        }
    }
}
