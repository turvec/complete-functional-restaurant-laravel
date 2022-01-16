<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showAbout()
    {
        $chefs = Chef::all();
        return view('user.about',compact('chefs'));
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
    public function showCart()
    {
        if (Auth::id()) {
            $cart_count = Cart::where('user_id',Auth::id())->count();
            $carts = Cart::where('user_id',Auth::id())->get();
        return view('user.cart', compact('cart_count','carts'));
        }
       else {
        return redirect('/login');
       }
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
    public function deleteCart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return back();
        # code...
    }
    public function updateCart(Request $request, $id)
    {
        $data = Cart::find($id);
        $data->quantity = $request->quantity;
        $data->save();
        return back();
        # code...
    }
    //
}
