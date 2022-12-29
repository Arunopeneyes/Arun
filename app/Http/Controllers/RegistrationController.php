<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class RegistrationController extends Controller
{
    public function index()
    {
        $url = url('/register');
        $title = "Registration";
        $data = compact('url', 'title');
        return view('form')->with($data);
    }
    public function register(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password'
            ]
            );
            echo "<pre>";
        print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->save();
        return redirect('/register/view');
    }

    public function view(Request $request)
    {
        $search = $request['search'] ?? "";
        if($search != "")
        {
            $register = Customer::where('name','LIKE',"%$search%")->orwhere('email','LIKE',"%$search%")->get();
        }
        else
        {
            $register = Customer::paginate(15);
        }
        $data = compact('register','search');
        return view('register-view')->with($data);
    }

    public function delete($id)
    {
        $register = Customer::find($id);
        if(!is_null($register))
        {
            $register->delete();
        }
        return redirect('/register/view');
    }

    public function forcedelete($id)
    {
        $register = Customer::withTrashed()->find($id);
        if(!is_null($register))
        {
            $register->forcedelete();
        }
        return redirect('/register/trash');
    }


    public function restore($id)
    {
        $register = Customer::withTrashed()->find($id);
        if(!is_null($register))
        {
            $register->restore();
        }
        return redirect('/register/trash');
    }

    public function edit($id)
    {
        $register = Customer::find($id);
        if(!is_null($register))
        {
            return redirect('register');
        }
        else
        {
         $url = url('/register/update/') ."/". $id;
            $title = "Update Details";
            $data = compact('register','url','title');
            return view('register')->with($data);
        }
    }

    public function trash()
    {
        $register = Customer::onlyTrashed()->get();
        $data = compact('register');
        return view('register-trash')->with($data);
    }
}
//