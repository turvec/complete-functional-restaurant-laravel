<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function allusers(Type $var = null)
    {
        $users = User::all();
        return view('admin.allusers', compact('users'));
        # code...
    }
    //
}
