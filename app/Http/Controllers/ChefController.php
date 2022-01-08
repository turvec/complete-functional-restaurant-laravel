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
        $request->image->move(public_path('chefimage'),$imagename);

        $data = new Chef();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->profession = $request->profession;
        $data->comment = $request->comment;
        $data->image = $request->image;
        $data->save();

        return back();
        # code...
    }
    public function showAllChefs()
    {
        $chefs = Chef::all();
        return view('admin.allchefs',compact('chefs'));
        # code...
    }
    public function deleteChef($id)
    {
        $data = Chef::find($id);
        $data->delete();
        return redirect()->back();
        # code...
    }
    public function editChef($id)
    {
        $chef = Chef::find($id);
        return view('admin.edit_chef', compact('chef'));
        # code...
    }
    public function updateChef(Request $request,$id)
    {

        $update = Chef::find($id);
        $update->name = $request->name;
        $update->email = $request->email;
        $update->phone = $request->phone;
        $update->profession = $request->profession;
        $update->comment = $request->comment;
        if ($request->has('image')) {
            $ext = $request->file('image')->getClientOriginalExtension();
            $imagename = \Str::slug($request->name).time().'.'.$ext;
            $request->image->move(public_path('chefimage'),$imagename);
            $update->image = $request->image;
        }
        $update->save();

        return back();
        # code...
    }
    //
}
