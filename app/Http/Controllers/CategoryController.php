<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        // Logic to display categories
        $data = [
            'data' => Category::all()
        ];
        return view('admin.Category.index', $data);
    }
 public function store(Request $request)
    {
        // ✅ Validate input
        $request->validate([
            'name' => 'required|unique:categories,name',
        ]);

        // ✅ Create the category
        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name), // generate URL-friendly slug
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }
public function edit($id)
{
    $category = Category::findOrFail($id);
    return view('admin.Category.edit', compact('category'));
}
public function update(Request $request, $id)
{
    $category = Category::findOrFail($id);

    $request->validate([
        'name' => 'required|unique:categories,name,' . $id,
    ]);

    $category->update([
        'name' => $request->name,
    ]);

    return redirect()->route('category.index')->with('success', 'Category updated successfully');
}

}
