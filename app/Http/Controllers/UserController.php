<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function addCart(Request $request, $id)
    {
        if (Auth::id()) {

            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->food_id = $id;
            $cart->quantity = $request->quantity;
            $cart->save();
            
            return back();
        } else {
            return redirect('/login');
        }
        
    }
    //
}
