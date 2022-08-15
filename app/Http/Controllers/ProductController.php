<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
}
