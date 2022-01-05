<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function about()
    {
        return view('user.about');
        # code...
    }
    //
}
