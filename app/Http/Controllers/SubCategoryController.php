<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class SubCategoryController extends Controller
{
    // Show all subcategories
    public function index()
    {
        $data = [
            'data' => SubCategory::with('category', 'user')->get()
        ];

        return view('admin.SubCategory.index', $data);
    }

    // Store new subcategory
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:sub_categories,name',
            'category_id' => 'required|exists:categories,id', // parent category
        ]);

        SubCategory::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
            'user_id' => Auth::id(),
        ]);

        return redirect()->back()->with('success', 'SubCategory added successfully!');
    }

    // Show edit form
    public function edit($id)
{
    $subcategory = SubCategory::findOrFail($id); // fetch subcategory by id
    $categories = Category::all();              // fetch all categories for dropdown

    return view('admin.SubCategory.edit', compact('subcategory', 'categories'));
}


    // Update subcategory
    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:sub_categories,name,' . $id,
            'category_id' => 'required|exists:categories,id',
        ]);

        $subcategory->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('subcategory.index')->with('success', 'SubCategory updated successfully!');
    }

    // Delete subcategory
    public function destroy($id)
    {
        SubCategory::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'SubCategory deleted successfully!');
    }
}
