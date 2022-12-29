<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
  public function index()
  {
    return view('abc');
  }

  public function home()
  {
    return view('home');
  }

}
