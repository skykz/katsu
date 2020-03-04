<?php


namespace App\Functions;


use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailFunction{

    function  sendToMail(Request $request){
    Mail::send('email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'bodyMessage' => $request->get('message')
            ), function($message)
            {
                $message->from('katsu@gmail.com');
                $message->to('client@bobbyiliev.com', 'Bobby')->subject('Bobby Site Contect Form');
            });
    }
}
