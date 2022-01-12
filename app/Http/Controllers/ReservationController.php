<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function addReservation(Request $request)
    {
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
        # code...
    }
    //
}
