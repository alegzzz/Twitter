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
                'email' => "required|email|unique:users, email",
                'password' => "required|min:6|max:20|confirmed",
            ]
        );

        User::create(
            [
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]
        );

        return redirect() ->route('dashboard')->with('success', 'Your account has been created!');
    }
}