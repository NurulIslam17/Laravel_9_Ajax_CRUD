<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //product Home
    public function productHome()
    {
        $product = Product::latest()->paginate(10);
        return view('productHome',compact('product'));
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
        $data =  new Product();

        $data->Name = $request->name;
        $data->price = $request->price;
        $data->desc = $request->desc;
        $data->save();
        return response()->json([
            'status'=>'successfull'
        ]);
    }
    
}
