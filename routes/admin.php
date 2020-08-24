 <?php
    Route::get('/', 'AdminController@dashboard');
    Route::resource('clients', 'AdminClientController');
    Route::resource('rooms', 'AdminRoomController');
    Route::resource('hotel', 'AdminHotelController');
    Route::resource('bookings', 'AdminController');
    Route::resource('photos', 'AdminPhotoController');