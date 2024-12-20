<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Validate the request inputs
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = Admin::where('name', $request->username)
            ->where('password', $request->password)
            ->first();

        if ($admin) {
            session(['username' => $request->username]);
            return redirect('/dashboard')->with('success', 'Login successful');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}
