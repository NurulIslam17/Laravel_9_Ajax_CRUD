<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;

Route::get('/',[ProductController::class,'ProductHome']);
//addProduct
Route::post('/addProduct',[ProductController::class,'addProduct'])->name('add.Product');