<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allcustomers(Type $var = null)
    {
        $customers = Auth::user()->all();
        return view('admin.allcustomers', compact('customers'));
        # code...
    }
    //
}
