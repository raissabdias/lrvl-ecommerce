<?php

namespace App\Http\Controllers;

use App\Models\Category;
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

    public function category($category_id = null, Request $request) 
    {
        $data = [];

        # Get all categories
        $categories = Category::all();

        # Get all products
        $products = Product::limit(4);

        # Filter product by category
        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        $data = [
            'categories' => $categories,
            'products' => $products->get()
        ];

        return view('category', $data);
    }
}
