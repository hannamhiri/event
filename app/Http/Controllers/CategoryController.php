<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class CategoryController extends Controller
{
    public function index()

    {   $categories = Category::all();
        return view('admin.event_category.show_categories')->with("categories", $categories);
    }
   
    public function create()
    {
        return view('admin.event_category.add_category');
    }

    public function store(Request $request)
{
    
    $request->validate([
        'name' => ['required'],
        'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
    ]);
   
    $imagePath = $request->file('image')->store('uploads', 'public');

    $category = new Category();
    $category->name = $request->input('name'); 
    $category->image = $imagePath; 

    
    $category->save();

    return redirect()->route('category.index')->with('success', 'Catégorie ajoutée avec succès.');
}


    public function edit($id)
    {
        $category =Category::findOrFail($id);

        return view('admin.event_category.edit_category')->with('category',$category);
    }

    
    public function update(Request $request, Category $category)
{
    
    $request->validate([
        'name' => ['required'],
        'image' => ['sometimes', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'], 
    ]);

    if ($request->hasFile('image')) {
        if ($category->image) {
            Storage::delete('public/' . $category->image);
        }

        $imagePath = $request->file('image')->store('uploads', 'public');
        $category->image = $imagePath;
    }

    $category->name = $request->input('name');
    $category->save();

    // Redirection
    return redirect()->route('category.index')->with('success', 'Category updated successfully');
}


    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category->delete()){
            return redirect()->route('category.index');
        }
        else{
            echo"error";
        }

    }
}
