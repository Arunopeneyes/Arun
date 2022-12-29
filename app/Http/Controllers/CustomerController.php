<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    public function store(Request $request)
    {
            echo "<pre>";
        print_r($request->all());

        $customer = new Customer1;
        $customer->firstname =$request['firstname'];
        $customer->lastname =$request['lastname'];
        $customer->dob =$request['dob'];
        $customer->gender =$request['gender'];
        $customer->email =$request['email'];
        $customer->phone =$request['phone'];
        $customer->save();
    }

    
}
