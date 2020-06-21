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

Route::view('/', 'home'); 
Route::get('/reserver', 'HotelController@index');
Route::get('/rooms', 'RoomController@index'); 
Route::get('/rooms/{id}', 'RoomController@show'); 
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {
    Route::view('/', 'dashboard/dashboard'); 
    Route::resource('reservations', 'ReservationController');
});

Route::get('reservations/checkout', 'ReservationController@create');
Route::post('reservations/add', 'HotelController@create')->name('reservations.add');
Route::post('reservations/checkout', 'ReservationController@create')->name('reservations.checkout');
Route::post('reservations/save', 'ReservationController@store')->name('reservations.save');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::view('/', 'admin/dashboard');
    Route::resource('rooms', 'AdminRoomController');
    Route::get('hotel', 'HotelController@edit')->name('hotel.edit');
    Route::put('hotel','HotelController@update')->name('hotel.update');
    Route::resource('bookings', 'AdminController');
    Route::post('bookings/checkout', 'AdminController@create')->name('bookings.checkout');
});
