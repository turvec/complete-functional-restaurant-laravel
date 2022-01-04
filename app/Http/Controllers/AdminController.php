<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function allcustomers(Type $var = null)
    {
        $customers = User::all();
        return view('admin.allcustomers', compact('customers'));
        # code...
    }
    //
}
