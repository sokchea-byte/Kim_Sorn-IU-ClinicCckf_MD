<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrondController extends Controller
{
    public function index()
    {
        $data = [
            'menu' => Category::where('status', 1)->get(),
            // 'subcategories' => SubCategory::all(),
            // 'posts' =>  Post::latest()->take(10)->get(),
        ];
        return view('Frond.index', $data);
    }
    public function category($id)
    {
        $data = [
            'menu' => Category::where('status', 1)->get(),
            'category' => Category::findOrFail($id),
            'posts' => Post::where('category_id', $id)->latest()->paginate(10),
        ];
        return view('Frond.category', $data);
    }
    public function subcategory($id)
    {
        $data = [
            'menu' => Category::where('status', 1)->get(),
            'subcategory' => SubCategory::findOrFail($id),
            'posts' => Post::where('subcategory_id', $id)->latest()->paginate(10),
        ];
        return view('Frond.subcategory', $data);
    }
}
