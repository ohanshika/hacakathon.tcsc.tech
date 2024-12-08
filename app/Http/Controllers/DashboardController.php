<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the session has the username
        if (session()->has('username')) {
            // Retrieve all participants from the database
            $participants = Participant::all();

            // Pass the data to the view using compact
            return view('dashboard', compact('participants'));
        } else {
            // If session does not have the username, redirect to the login page
            return redirect('/admin');
        }
    }


}
