<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $users = [
            [
                "name" => "Damian",
                "vek" => "17"
            ],
            [
                "name" => "Andrej",
                "vek" => "19"
            ],
            [
                "name" => "Samo",
                "vek" => "21"
            ]
        ];
        return view(
            'users.profile',
            [
                "users" => $users,
            ],
        );
    }
}
