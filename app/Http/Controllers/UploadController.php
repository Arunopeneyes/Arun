<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $requeast)
    {
        $fileName = time()."MOE". $requeast->file('image')->getClientOriginalExtension();
        echo $requeast->file('image')->storeAs('uploads',$fileName);
        
    }
}
