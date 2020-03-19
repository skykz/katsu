<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Http\Controllers\Api;



Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
Route::get('/category/{id}', 'HomeController@getCategoryById')->name('getCategoryById');

Route::get('/setLang/{name}', 'HomeController@setLang');
Route::get('/detail/{id}', 'HomeController@getPortfolio')->name('/detail/{id}');
Route::post('sendEmail', 'Api\MainController@sendOrder')->name('sendEmail');




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('order', 'OrderController@contact');
    Route::post('order', ['as'=>'contact.store','uses'=>'OrderController@contactPost']);
});
