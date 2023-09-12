<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{


    public function index()
    {
        $categories = Category::get(['name', 'id']); //form create
        $products = Product::with('category')->paginate(10);
        return view('product.index', compact('categories', 'products'));
    }

    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'name'   => 'required|string|regex:/^[\p{L}\s]+$/u|max:255',
                'image'        => 'required|mimes:jpeg,png,jpg,gif',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'category_id' => 'required'
            ]);


        if($request->has('image')){
            $validatedData['image'] = $request->image->store('product', 'public');
        }

        Product::create($validatedData);
        return redirect()->back()->with('success', __('saved successfully'));


    }

    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name'   => 'required|string|regex:/^[\p{L}\s]+$/u|max:255',
            'image'        => 'nullable',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'category_id' => 'required'
        ]);


        if ($request->hasFile('image')) {
            File::delete('storage/'.$product->image);
             $validatedData['image'] = $request->image->store('product', 'public');
         }

    $product->update($validatedData);
    return redirect()->back()->with('success', __('saved successfully'));

    }

    public function destroy($id )
    {
        $products = Product::destroy($id);
        return redirect()->back()->with('success', __('saved successfully'));
    }
}
