<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function store(){


        $validated = request()->validate(
            [
                'name' => 'required|min:3|max:40',
                'email' => "required|email|unique:users,email",
                'password' => "required",
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );
        return redirect() ->route('dashboard.index')->with('success', 'Your account has been created!');
    }

    public function login(){
        return view('auth.login');
    }

    public function authenticate(){

        $validated = request()->validate(
            [
                'email' => "required|email",
                'password' => "required",
            ]
        );

        if(auth() -> attempt($validated)){
            request()->session()->regenerate();

            return redirect() -> route('dashboard.index')->with('success', 'You are now logged in!');
        }

        return redirect() ->route('login.login')->withErrors([
            'email', 'No matching user found with provided email and password.'
            ]
        );
    }
}
