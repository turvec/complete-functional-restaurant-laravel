<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Food;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function showAbout()
    {
        $chefs = Chef::all();
        return view('user.about', compact('chefs'));
    }
    public function showMenu()
    {
        $foods = Food::all();
        return view('user.foodmenu', compact('foods'));
    }
    public function showContact()
    {
        return view('user.contact');
    }
    public function showExplore()
    {
        return view('user.explore');
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

        Mail::to($email)->send(new Contact($name,$email,$phone,$subject,$comments));

        return back();
    }
    public function showCart()
    {
        $cart_count = Cart::where('user_id', Auth::id())->count();
        $carts = Cart::where('user_id', Auth::id())->get();

        $total = 0;
        foreach ($carts as $cart ) {
            $total += $cart->food->price * $cart->quantity;
        }
        return view('user.cart', compact('cart_count', 'carts','total'));
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

        $reservation_count = Reservation::where('user_id', Auth::id())->count();
        $reservations = Reservation::where('user_id', Auth::id())->get();
        return view('user.reservation', compact('reservation_count', 'reservations'));
    }
    //
}
