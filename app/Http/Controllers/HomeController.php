<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        return view('home');
    }

    public function ECommerce()
    {
        $categories = Category::paginate(3);
        return view('E-Commerce.E-Commerce', compact('categories'));
    }

    public function cat_product($id)
    {
        $categories = Category::get(['name', 'id']);
        $category = Category::with('products')->findOrFail($id);

        $cat_products = $category->products()->paginate(6);

        return view('E-Commerce.cat_product', compact('cat_products', 'categories'));
    }
}
