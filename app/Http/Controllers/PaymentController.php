<?php

namespace App\Http\Controllers;

use App\Models\Payment;
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

        //Get payment details from paystack
        $paymentDetails = \Paystack::getPaymentData();

        //Get reference from payment detials gotten from paystack
        $reference = $paymentDetails['data']['reference'];

        //Get payment from db
        $payment = Payment::where('reference', $reference)->first();

        //check if txn has been paid
        if ($payment->status == 'success') {
            return back()->with(['error' => 'Failed payment, please try again']);
        }

        //Update payment

        $payment->status = 'success';
        $payment->save();

        Auth::user()->carts()->delete();

        //return success message
        return back()->with(['success' => 'Account credited succesfully']);
    }
    public function showPayment()
    {
       $payment_count = Auth::user()->payments()->count();
       $payments = Auth::user()->payments;
       return view('user.payments', compact('payments','payment_count'));
    }
    public function showOrder()
    {
       $order_count = Auth::user()->orders()->count();
       $orders = Auth::user()->orders;
       return view('user.orders', compact('orders','order_count'));
    }
}
