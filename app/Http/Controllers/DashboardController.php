<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the session has the username
        if (session()->has('username')) {
            return view('dashboard'); // If username exists in session, show dashboard
        } else {
            return redirect('/admin'); // Otherwise, redirect to login page
        }
    }
    
}
