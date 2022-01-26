<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $data = $request->validate([
            'reference' => 'required|unique:transactions,reference,'
        ]);
        $payment = Auth::user()->payments()->create([
            'amount' => $request->amount,
            'reference' => $request->reference
        ]);
        foreach($request->food_name as $key => $food_name )
        {
        $orders = Auth::user()->orders()->create([
            'payment_id' => $payment->id,
            'food_name' =>  $food_name,
            'init_price' =>  $request->init_price[$key],
            'food_quantity' =>  $request->food_quantity[$key],
            'total_price' =>  $request->total_price[$key],
            'delivery_address' => $request->delivery_address
        ]);
        }
        try{
            return Paystack::getAuthorizationUrl()->redirectNow();
        }catch(\Exception $e) {
            $payment->status = 'failed';
            $payment->save();
            $orders->save();
            
            return back()->with(['error' => 'Error while processing payment']);
        }

        # code...
    }
    //
}
