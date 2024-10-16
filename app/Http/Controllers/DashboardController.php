<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "Thomas",
                "vek" => "18"
            ],
            [
            "name" => "Shelby",
            "vek" => "11"
            ],
            [
            "name" => "sigma",
                "vek" => "22"
            ],
            [
                "name" => "mafia",
                "vek" => "33",
            ]
        ];

        return view(
            'dashboard',
            ["users" => $users]
        );
    }
}
