<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Logic to display posts
        $data = [
            'data' => Post::all()
        ];
        return view('admin.Post.index', $data);
    }
    public function create()
    {
        $data = [
            'categories' => \App\Models\Category::all(),// fetch all categories for the form
            'subcategories' => \App\Models\SubCategory::all()// fetch all subcategories for the form
        ];
        // Logic to show create post form
        return view('admin.Post.create',$data);
    }
    public function store(Request $request)
    {
        // Logic to store post
    }
    public function edit($id)
    {
        // Logic to show edit post form
    }
    public function update(Request $request, $id)
    {
        // Logic to update post
    }
    public function delete($id)
    {
        // Logic to delete post
    }
    public function getSubcategory($id)
    {
        $subcategories = SubCategory::where('category_id', $id)->get();
        return response()->json($subcategories);
    }
}
