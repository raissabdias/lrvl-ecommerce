<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request) 
    {
        $data = [];

        # Get all products
        $products = Product::all();
        $data['products'] = $products;

        return view('home', $data);
    }

    public function category(Request $request) 
    {
        $data = [];

        return view('category', $data);
    }
}
