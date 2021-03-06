<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Event;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
   public function food()
   {
      $all_foods = Food::all();
      $seafoods = Food::where('category_id', '1')->get();
      $desserts = Food::where('category_id', '2')->get();
      $starters = Food::where('category_id', '3')->get();
      $drinks = Food::where('category_id', '4')->get();

      return response()->json([
         'all_foods' => $all_foods,
         'seafoods' => $seafoods,
         'desserts' => $desserts,
         'starters' => $starters,
         'drinks' => $drinks
      ]);
   }

   public function customers()
   {
      $customers = User::all();

      return response()->json(['customers' => $customers]);
   }

   public function cart()
   {
      $all_cart = Cart::all();

      return response()->json(['resturant_cart' => $all_cart]);
   }

   public function categories()
   {
      $food_category = Category::all();

      return response()->json(['food_category' => $food_category]);
   }

   public function chefs()
   {
      $all_chefs = Chef::all();

      return response()->json(['all_chefs' => $all_chefs]);
   }
   public function reservations()
   {
      $all_reservations = Reservation::all();

      return response()->json(['all_reservation' => $all_reservations]);
   }
   public function events()
   {
      $all_events = Event::all();

      return response()->json(['all_events' => $all_events]);
   }
   public function reviews()
   {
      $all_reviews = Review::all();

      return response()->json(['all_reviews' => $all_reviews]);
   }


   //
}
