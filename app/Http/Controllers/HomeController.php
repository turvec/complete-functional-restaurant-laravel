<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::all();
        return view('user.home', compact('reviews'));
        # code...
    }
    public function redirects()
    {
        $users = User::all();
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.allusers',compact('users'));
        } else {

            return redirect()->route('home');
        }

        # code...
    }
    //
}
