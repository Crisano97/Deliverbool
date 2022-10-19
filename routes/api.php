<?php

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
    Route::get('/restaurants/{request}', 'RestaurantController@filter');
    Route::get('/restaurants/sponsor', 'RestaurantController@sponsoredRestaurants');
    Route::get('/dishes/{id}', 'DishController@getRestaurantDishes');
    Route::get('/categories', 'CategoryController@index');
});
Route::get('v1/restaurants/searchCheck', 'Api\RestaurantController@searchCheckbox');
