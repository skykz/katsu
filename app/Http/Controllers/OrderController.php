<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function contactPost(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'telephone' => 'required', 'message' => 'required' ]);

        //create new record of order
        Order::create($request->all());

//        Mail::send('email',
//            array(
//                'name' => $request->get('name'),
//                'email' => $request->get('email'),
//                'bodyMessage' => $request->get('message')
//            ), function($message)
//            {
//                $message->from('katsu@gmail.com');
//                $message->to('client@bobbyiliev.com', 'Bobby')->subject('Bobby Site Contect Form');
//            });
        return back()->with('success', 'Thank you for contacting me!');
    }
}
