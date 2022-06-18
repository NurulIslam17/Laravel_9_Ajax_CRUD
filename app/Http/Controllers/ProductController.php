<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product Home
    public function productHome()
    {
        return view('productHome');
    }
    
}
