<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
        # code...
    }
    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('layouts.admin');
        } else {
            return view('home');
        }
        
        # code...
    }
    //
}