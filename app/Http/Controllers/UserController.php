<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function about()
    {
        return view('user.about');
        # code...
    }
    public function menu()
    {
        $foods = Food::all();
        return view('user.foodmenu', compact('foods'));
        # code...
    }
    //
}
