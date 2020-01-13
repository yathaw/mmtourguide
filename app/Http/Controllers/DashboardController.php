<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function admin()
    {
    	return view("backend/dashboard");
    }

    public function guide()
    {
    	return view("backend/dashboard");
    }
}
