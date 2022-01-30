<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Unicodeveloper\Paystack\Paystack;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $data = $request->validate([
            'reference' => 'required|unique:payments,reference,'
        ]);
        $payment = Auth::user()->payments()->create([
            'amount' => $request->amount,
            'reference' => $request->reference
        ]);
        $carts = Auth::user()->carts;
        foreach ($carts as $cart) {
            $orders = Auth::user()->orders()->create([
                'payment_id' => $payment->id,
                'food_name' =>  $cart->food->title,
                'init_price' =>  $cart->food->price,
                'food_quantity' =>  $cart->quantity,
                'total_price' =>  $cart->food->price *  $cart->quantity,
                'delivery_address' => $request->delivery_address
            ]);
        }
        try {
            return \Paystack::getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            $payment->status = 'failed';
            $payment->save();

            return back()->with(['error' => 'Error while processing payment']);
        }

        # code...
    }
    public function paymentCallback()
    {

        $paymentDetails = \Paystack::getPaymentData();

        dd($paymentDetails);
    }
}
