<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::paginate(10);
        return view('category.index', compact('categories'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|unique:categories|max:255|regex:/^[\p{L}\s]+$/u',
            'image'        => 'required|mimes:jpeg,png,jpg,gif',
        ],[
            'required' => __('required'),
            'uniqe' => __('uniqe'),
            'mimes' => __('mimes'),
            'string'=> __('string'),
            'regex'=> __('regex'),
        ]);
        if($request->has('image')){
            $validatedData['image'] = $request->image->store('category', 'public');
        }
        Category::create($validatedData);
        return redirect()->back()
            ->with('success', __('saved successfully'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            //  except:id
            'name' => 'required|string|unique:categories,name,' . $category->id . '|max:255|regex:/^[\p{L}\s]+$/u',
            'image'        => 'nullable',
        ],[
            'required' => __('required'),
            'mimes' => __('mimes'),
            'string'=> __('string'),
            'regex'=> __('regex'),
        ]);
         if ($request->hasFile('image')) {
           File::delete('storage/'.$category->image);
            $validatedData['image'] = $request->image->store('category', 'public');
        }
        $category->update($validatedData);
        return redirect()->back()
            ->with('success', __('Updated successfully.'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        File::delete('storage/'.$category->image);
        return redirect()->back()->with('success', 'deleted successfully');
    }

}
