<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        $users = [
            [
                "name" => "janko",
                "vek" => "18"
            ],
            [
            "name" => "peto",
            "vek" => "11"
            ],
            [
            "name" => "sigma",
                "vek" => "22"
            ]
        ];

        return view(
            'dashboard',
            ["users" => $users]
        );
    }
}
