<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Auth routing
Route::post('login', 'AuthController@login');

Route::group([
    'middleware' => 'api.jwt'
], function(){
    Route::resource('links','LinksController');
    Route::patch('change-active/{link}','LinksController@change_active');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::resource('orders','OrdersController');
    Route::get('products','ProductsController@getProducts');
    Route::put('orders/quantity/{orderItem}/{add}','OrdersController@changeQuantity');
    Route::put('final-order','OrdersController@finalOrder');
});

