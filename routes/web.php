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
Route::get('change-password', 'ChangePasswordController@index');
Route::post('change-password', 'ChangePasswordController@store')->name('change.password');
Route::get('reservations/checkout', 'ReservationController@create');
Route::post('reservations/add', 'HotelController@create')->name('reservations.add');
Route::post('reservations/checkout', 'ReservationController@create')->name('reservations.checkout');
Route::post('reservations/save', 'ReservationController@store')->name('reservations.save');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => 'admin'], function () {
    Route::view('/', 'admin/dashboard');
    Route::resource('rooms', 'Admin\AdminRoomController');
    Route::resource('hotel', 'Admin\AdminHotelController');
    Route::resource('bookings', 'Admin\AdminController');
 //   Route::get('bookings/checkout', 'AdminController@create');
 //   Route::post('bookings/checkout', 'AdminController@create')->name('reservations.create');
});
Route::get('/contact', 'ContactUsController@index');
Route::post('/contact', 'ContactUsController@store')->name('contact');