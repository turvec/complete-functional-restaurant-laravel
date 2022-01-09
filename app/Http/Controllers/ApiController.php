<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Chef;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function food()
    {
       $all_foods = Food::all();
       $seafoods = Food::where('category_id','1');
       $desserts = Food::where('category_id','2');
       $starters = Food::where('category_id','3');
       $drinks = Food::where('category_id','4');

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

      return response()->json([ 'customers' => $customers ]);
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
   
  
    //
}
