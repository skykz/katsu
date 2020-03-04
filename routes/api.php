<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//TODO: make 4 api for front

Route::get('get/all','Api\MainController@index');

Route::post('send/order','Api\MainController@sendOrder');
//Route::get('contact', 'ContactController@contact');
//Route::post('contact', ['as'=>'contact.store','uses'=>'ContactController@contactPost']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
