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
        $products = Product::limit(8);

        # Filter product by category
        if ($category_id) {
            $products->where('category_id', $category_id);
        }

        $data = [
            'categories' => $categories,
            'products' => $products->get(),
            'id' => $category_id
        ];

        return view('category', $data);
    }

    public function addCart($product_id, Request $request)
    {
        # Search product by id
        $product = Product::find($product_id);

        # Add product to cart
        if ($product) {
            $cart = session('cart', []);
            array_push($cart, $product);
            session(['cart' => $cart]);
        }

        return redirect()->route('home');
    }

    public function cart(Request $request)
    {
        $cart = session('cart', []);
        dd($cart);
    }
}
