<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('auth/login');
// });

Auth::routes();

Route::middleware('auth')
    ->namespace('Admin')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        // Route::get('/login', 'HomeController@index')->name('home');
        Route::get('/dishes/deleted', 'DishController@softDeleted')->name('dishes.deleted');
        Route::put('/dishes/edit/{id}', 'DishController@editImg')->name('dishes.editImg');
        Route::patch('/dishes/deleted/{id}', 'DishController@restore')->name('dishes.restore');
        Route::delete('/dishes/deleted/{id}', 'DishController@hardDeleted')->name('dishes.hardDeleted');
        Route::resource('/restaurants', 'RestaurantController');
        Route::resource('/dishes', 'DishController');
        Route::resource('/order', 'OrderController');
        //BRAINTREE ROUTE
        Route::get('/payment/process', 'PaymentsController@process')->name('payment.process');
    });

    Route::get('{any?}', function(){
        return view('guest.home');
      })->where('any', '.*');

// Route::get('/home', 'HomeController@index')->name('home');
