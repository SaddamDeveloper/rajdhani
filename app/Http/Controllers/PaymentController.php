<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;

class PaymentController extends Controller
{
     public function index()
    {
    	return view('frontend.contents.payment');
    }

    public function pay(Request $request)
    {
    	// dd($request->all());
    	$parameters = [
      
        'tid' => '1233221223322',
        'purpose' => 'Adminssion Form Fees',
        'order_id' => '1',
        'buyer_name' => $request->name,
        'email' => $request->email,
        'phone' =>  $request->phone,
        'amount' => '500',
        
      ];

      $order = \Indipay::gateway('instamojo')->prepare($parameters);
      //dd($order);
      return \Indipay::process($order);
    }

    public function paymentresponse(Request $request)
    
    {
        // For default Gateway
        $response = \Indipay::response($request);
        
        // For Otherthan Default Gateway
        $response = \Indipay::gateway('instamojo')->response($request);
        //dd($response);

        
        if($response)
        {
          $payment = new Payment;
          $payment->buyer_name = $response->payment_request->buyer_name;
          $payment->buyer_phone = $response->payment_request->phone;
          $payment->buyer_email = $response->payment_request->email;
          $payment->payment_id = $response->payment_request->payment->payment_id;
          $payment->buy_status = $response->payment_request->payment->status;
          $payment->amount = $response->payment_request->payment->amount;
          $payment->quantity = $response->payment_request->payment->quantity;
          $payment->unit_price = $response->payment_request->payment->unit_price;
          $payment->fees = $response->payment_request->payment->fees;
          $payment->instrument_type = $response->payment_request->payment->instrument_type;
          $payment->status = $response->payment_request->status;
          $payment->payment_request_id = $response->payment_request->id;
          $payment->payment_at = $response->payment_request->payment->created_at;
          $payment->payment_request_at = $response->payment_request->created_at;
          //dd($payment);

          $payment->save();

      	\Session::flash('alert-success','Payment Sucessfull');
        }else
        {
        	\Session::flash('alert-danger','Payment Failure');
        }
        
    

        $paid = Payment::where('payment_id', $response->payment_request->payment->payment_id)->where('buyer_email', $response->payment_request->email)->first();

        return view('frontend.contents.paymentresponse', compact('response', 'paid'));
    
    }

    public function payment()
    {
      $payments = Payment::orderBy('id', 'DESC')->get();
      return view('backend.payment.index', compact('payments'));
    } 
}
