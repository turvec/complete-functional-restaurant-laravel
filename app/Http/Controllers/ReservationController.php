<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function addReservation(Request $request)
    {
        if (Auth::id()) {
            $data = new Reservation();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->phone = $request->phone;
            $data->table = $request->table;
            $data->date = $request->date;
            $data->time = $request->time;
            $data->comment = $request->comment;
            $data->save();
            return back();
        } else {
            return redirect('/login');
        }
    }
    //
}
