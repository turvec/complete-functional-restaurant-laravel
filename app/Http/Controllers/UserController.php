<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showAbout()
    {
        return view('user.about');
        # code...
    }
    public function showMenu()
    {
        $foods = Food::all();
        return view('user.foodmenu', compact('foods'));
        # code...
    }
    public function showContact()
    {
        return view('user.contact');
        # code...
    }
    //
}
