<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product Home
    public function productHome()
    {
        return view('productHome');
    }

    //addProduct
    public function addProduct(Request $request)
    {

        $request->validate(
            [
                'name'=>'required|unique:products',
                'price'=>'required',
                'desc'=>'required'
            ],
            [
                'name.required'=>'Enter the name',
                'name.unique'=>'Product already Exist',
                'price.required'=>'Enter the price',
                'desc.required'=>'Give Short description about Product',
            ]

        );
        // $data =  new Product();

        // $data->Name = $request->pName;
        // $data->price = $request->pPrice;
        // $data->desc = $request->pDesc;
        // $data->save();
        // return redirect()->back();
    }
    
}
