<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('parent')->get();
        return view("Category.index", ['categories' => $categories]);
    }
    public function create()
    {
        $categories = Category::all();
        return view('Category.create', ['categories' => $categories]);
    }
    public function insert(Request $request)
    {
        // dd($request->all());
        $path = null;
        if (isset($request->image)) {
            // $type = request()->footerImage->getClientOriginalExtension();
            $name = $request->image->getClientOriginalName();
            $fullName = Str::uuid() . '_' . $name;
            $path = $request->file('image')->storeAs('images', $fullName, 'public');

        }
        Category::create([
            'title' => $request->title,
            'parent_id' => $request->parent_id,
            'image' => $path,
            'description' => $request->description
        ]);
        return to_route('Category.index');
    }
    public function single(Request $request)
    {
        // dd($category);
        $category = Category::find($request->id);
        // $category->parent;
        return view("Category.single", ['category' => $category]);
    }
    public function edite($id)
    {
        $id = Category::find($id);
        $categories = Category::all();
        return view('Category.edite', ['category' => $id, 'categories' => $categories]);
    }
    public function update(Request $request)
    {
        $category = Category::find($request->id);
        $category->title = $request->title;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id;
        $category->save();
        return to_route('Category.index');
    }
    public function delete(Category $id)
    {
        $id->delete();
        return to_route('Category.index');
    }
    // public function proList(Category $category)
    // {
    //     return view('admin.category.proList', ['category' => $category]);
    //     // dd($category->products);
    // }
}