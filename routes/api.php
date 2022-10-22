<?php

use App\Mail\SendNewEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Auth::routes();

Route::namespace('Api')->group(function () {
    Route::get('/restaurants/sponsor', 'RestaurantController@sponsoredRestaurants');
    Route::get('/restaurants/{request}', 'RestaurantController@filter');
    Route::get('/categories', 'CategoryController@index');
    Route::get('/dishes/{id}', 'DishController@getRestaurantDishes');
    Route::get('/emails', 'EmailController@store');
    Route::get('/cart/{cart}', 'Api\OrderController@getDishes');
});
Route::get('v1/restaurants/searchCheck', 'Api\RestaurantController@searchCheckbox');
Route::get('/restaurants', 'Api\RestaurantController@getRestaurantsByCategory');
Route::post('/order/save', 'Api\OrderController@order');
