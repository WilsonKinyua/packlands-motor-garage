<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::post('users/media', 'UsersApiController@storeMedia')->name('users.storeMedia');
    Route::apiResource('users', 'UsersApiController');

    // Service
    Route::post('services/media', 'ServiceApiController@storeMedia')->name('services.storeMedia');
    Route::apiResource('services', 'ServiceApiController');

    // Service Offered By
    Route::apiResource('service-offered-bies', 'ServiceOfferedByApiController');

    // About Us Page
    Route::post('about-us-pages/media', 'AboutUsPageApiController@storeMedia')->name('about-us-pages.storeMedia');
    Route::apiResource('about-us-pages', 'AboutUsPageApiController');

    // Bookings
    Route::post('bookings/media', 'BookingsApiController@storeMedia')->name('bookings.storeMedia');
    Route::apiResource('bookings', 'BookingsApiController', ['except' => ['store', 'update', 'destroy']]);
});
