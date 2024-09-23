<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Mengembalikan view dashboard
        return view('dashboard');
    }
}
