<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'data' => User::all(),
            'auccess' => 'User Added Successfully'
        ];
        return view('admin.user.index')->with($data);
    }
    public function store(Request $request){
    $image = $request->file('image');
    if ($image) {
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('users/images'), $image_name);
        $image_path = 'users/images/' . $image_name;

        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->phone),
            'image' => $image_path,
            'phone' => $request->phone,
            'created_at' => now(),
        ]);
     } else {
        User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->phone),
            // 'image' => $image_path,
            'phone' => $request->phone,
            'created_at' => now(),
        ]);
    }

    return redirect()->back();
}
    public function profile(){
        return view('admin.user.user');
    }
    public function profileUpdate(Request $request){
         $image = $request->file('image');
    if ($image) {
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('users/images'), $image_name);
        $image_path = 'users/images/' . $image_name;

        User::findOrFail(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => Hash::make($request->phone),
            'image' => $image_path,
            'phone' => $request->phone,
            'created_at' => now(),
        ]);
     } else {
        User::findOrFail(Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'password' => Hash::make($request->phone),
            // 'image' => $image_path,
            'phone' => $request->phone,
            'created_at' => now(),
        ]);
    }

    return redirect()->back();
}
    }

