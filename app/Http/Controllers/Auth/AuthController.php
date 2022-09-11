<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            return $this->redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function login(Request $request)
    {
        $requestJV['email'] = $request->email;
        $requestJV['password'] = $request->password;

//        dd($requestJV);
        if(Auth::attempt($requestJV)) {
            return redirect('/');
        } else {
            return redirect('/login')->withErrors();
        }
    }

    public function logout()
    {
        if(Auth::check()) {
            Auth::logout();
            return redirect('/');
        } else {
            return redirect('/login')->withErrors();
        }
    }
}
