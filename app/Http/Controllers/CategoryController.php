<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Topic;


class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }
  
    public function create()
    {
        
        $categories = Category::all();
        //  $options=null;
        return view('categories.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
      
        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    
    }

 
     

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $category->name = $request->input('name');
        // $category->options = $request->input('options');
        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}