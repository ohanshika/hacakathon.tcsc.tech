<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Customers;


class CustomerController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $customer = new Customers();
        $customer->name = $request['name'];
        $customer->email = $request['email'];
     // Hash the password
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->password = md5($request['password']);
        // Save the customer to the database
        $customer->save();

     
    }

}
