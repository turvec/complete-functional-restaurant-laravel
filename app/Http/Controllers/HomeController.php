<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Event;
use App\Models\Food;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __contruct()
    {
        $this->middleware(['auth','verified']);
    }
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $reviews = Review::all();
        $events = Event::all();
        $main_dishes = Food::where('category_id',1);
        $pizzas = Food::where('category_id',2)->get();
        $desserts = Food::where('category_id',3)->get();
        return view('user.home', compact('reviews', 'events','main_dishes','pizzas','desserts'));
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

    }
    //
}
