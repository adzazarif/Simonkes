<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view("layout.pasien.dashboard",[
            "title"=> "Dashboard",
        ]);
    }
}
