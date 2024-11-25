<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    
}