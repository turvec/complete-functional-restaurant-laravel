<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function getAllusers()
    {
        $users = User::all();
        return view('admin.allusers', compact('users'));
        # code...
    }
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
        # code...
    }

    public function addFood()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        return view('admin.addfood', compact('categories'));
        # code...
    }
    public function uploadFood(Request $request)
    {
        $xtension = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->title) . time() . '.' . $xtension;
        $request->image->move(public_path('foodimage'), $imagename);

        $data = new Food();

        $data->image = $imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->category_id = $request->category_id;

        $data->save();

        return back();
    }
    public function getAllfoods()
    {
        $foods = Food::all();
        return view('admin.allfoods', compact('foods'));
        # code...
    }

    public function deleteFood($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect()->back();
        # code...
    }
    public function editFood($id)
    {
        $food = Food::find($id);
        return view('admin.editfood', compact('food'));
    }
    public function updateFood(Request $request, $id)
    {
        $update = Food::find($id);
        if ($request->has('image')) {
            $xtension = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->title) . time() . '.' . $xtension;
            $request->image->move(public_path('foodimage'), $imagename);
            $update->image = $imagename;
        }
        $update->title = $request->title;
        $update->price = $request->price;
        $update->description = $request->description;

        $update->save();

        return back();
        # code...
    }
    public function showReservation()
    {
        
    }



    //
}
