<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Explore;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function showAbout()
    {
        $chefs = Chef::all();
        $reviews = Review::all();
        return view('user.about', compact('chefs', 'reviews'));
    }
    public function showMenu()
    {
        $category = Category::all();
        $foods = Food::all();
        return view('user.foodmenu', compact('foods','category'));
    }
    public function showContact()
    {
        return view('user.contact');
    }
    public function showExplore()
    {
        $explores = Explore::all();
        return view('user.explore', compact('explores'));
    }
    public function sendContact(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $subject = $request->subject;
        $comments = $request->comments;

        Mail::to($email)->send(new Contact($name, $email, $phone, $subject, $comments));

        return back();
    }
    public function showCart()
    {
        if (Auth::id()) {
            $cart_count = Cart::where('user_id', Auth::id())->count();
            $carts = Cart::where('user_id', Auth::id())->get();

            $total = 0;
            foreach ($carts as $cart) {
                $total += $cart->food->price * $cart->quantity;
            }
            return view('user.cart', compact('cart_count', 'carts', 'total'));
        } else {
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
    }
    public function updateCart(Request $request, $id)
    {
        $data = Cart::find($id);
        $data->quantity = $request->quantity;
        $data->save();
        return back();
    }
    public function showReservation()
    {
        if (Auth::id()) {
            $reservation_count = Reservation::where('user_id', Auth::id())->count();
            $reservations = Reservation::where('user_id', Auth::id())->get();
            return view('user.reservation', compact('reservation_count', 'reservations'));
        } else {
            return redirect('/login');
        }
    }
    //
}
