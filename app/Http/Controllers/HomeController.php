<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.home');
        # code...
    }
    public function redirects()
    {
        $users = User::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.allusers',compact('users'));
        } else {
            $cart_count = Cart::where('user_id',Auth::id())->count();
            return view('user.home',compact('cart_count'));
        }
        
        # code...
    }
    //
}
