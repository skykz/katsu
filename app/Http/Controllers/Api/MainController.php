<?php

namespace App\Http\Controllers\Api;

use App\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index(){
      $data = \App\Portfolio::get();
      $category = DB::table('categories')->get();
      $contact = DB::table('contacts')->get();
      $about = DB::table('about_us')->get();
      $team = DB::table('pages')->get();

        $result = array(
          "portfolio"=> $data, /// на фотки надо поставить storage/folder
          "category"=>$category,
          "team"=>$team,
          "contact"=>$contact,
          "about"=>$about
      );
      return response()->json($result,200);
    }

    public function sendOrder(Request $request)
    {
        $this->validate($request, [ 'name' => 'required', 'number' => 'required']);
        $newOrder = new Order();
        $newOrder->name = $request->name;
        $newOrder->telephone_number = $request->number;
        $newOrder->comment = $request->message;
        $newOrder->save();

        //TODO: when Asyl will give me new email with passwords
//        Mail::send('mailTemplate',
//            array(
//                'name' => $request->get('name'),
//                'number' => $request->get('number'),
//                'bodyMessage' => $request->get('message')
//            ), function($message)
//            {
//                $message->from('Info@katsu.kz');
//                $message->to('Info@katsu.kz', 'Привет!')->subject('Новая заявка пришла.');
//            });
        return redirect('/')->with('status','sent');

    }


    public function getDetailById($id){
        $detail = \App\Portfolio::find($id);

        return response()->json($detail,200);
    }

}
