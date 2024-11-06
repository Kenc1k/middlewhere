<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        dd($email, $password); 
        return view('login.index');
    }
    

    public function register(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        dd($name, $email, $password);
        return view('register.index');
    }

    public function loginPage()
    {
        // dd(123);
        return view('login.index');
    }
    public function  registerPage()
    {
        // dd(123);
        return view('register.index');
    }
}
