<?php

namespace App\Http\Controllers;

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
    public function deleteuser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
        # code...
    }
    public function edituser(Request $request, User $data)
    {
        // $data->id = $request->id;
        // $data->name = $request->name;
        // $data->email = $request->email;
        // $data->password = $request->password;
        // $data->save();
        // return back();
        # code...
    }
   
    //
}
