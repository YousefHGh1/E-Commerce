<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $categories=Category::paginate('6');
        return view('E-Commerce.E-Commerce' ,compact('categories'));
    }
    public function product( )
    {
        $products=Product::paginate(5);
        return view('E-Commerce.products',compact('products'));
    }


}

    
