<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function addChef()
    {
        return view('admin.add_chef');
        # code...
    }
    public function uploadChef(Request $request)
    {
        $ext = $request->file('image')->getClientOriginalExtension();
        $imagename = \Str::slug($request->name).time().'.'.$ext;
        $request->image->move(public_path('chefimage'),$imagename)

        $data = new Chef();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->profession = $request->profession;
        $data->comment = $request->comment;
        # code...
    }
    //
}
