<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categories;
use App\Models\User;



class Profile_User_Controller extends Controller
{
    public function index()
    {
        $iduser = session('user')->id;
        // dump($iduser);
        // $products = Product::all()->where('$product->category_id', '=', '$category->id');
        // ->where('$product->created_by', '=', '$iduser');
        $products = Product::all();
        // dump($products);
        $user = User::where("id", "$iduser")->first();
        $categories = Categories::all()->where('$product->category_id', '=', '$category->id');
        $categorynames = Product::join('categories', 'products.category_id', '=', 'categories.id')->distinct('categories.id')
            ->get(['products.category_id', 'categories.id', 'categories.name']);
        // dump($categories);
        return view('profile.index', compact('products', 'categories', 'categorynames', 'user'));
    }


    public function edit(User $userinfo)
    {

        $iduser = session('user')->id;
        dump($iduser);
        $user = User::where("id", "$iduser")->first();


        return view('profile.edit', compact('user'));
    }


    public function update(Request $request)
    {


        $iduser = session('user')->id;
        $user = User::where("id", "$iduser")->first();

        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $request['password'] = session('user')->password;
        $request['admin'] = session('user')->admin;


        $user->fill($request->post())->save();
        return redirect()->route('profile.index')->with('success', 'Your profile has been updated successfully');
    }
}
