<?php
Route::group([
    'middleware' => ['cors'],
], function ($router) {
    Route::get('/user', 'UserController@show');
    Route::get('/products', 'ProductController@index');
    Route::get('/cart', 'CartController@show');
    Route::post('/cart', 'CartController@add');
    Route::delete('/cart', 'CartController@delete');
    Route::put('/cart', 'CartController@update');
    Route::post('/checkout', 'CheckoutController@pay');
    Route::get('/finish', 'CheckoutController@finish')->name('checkout.success');
    Route::get('/cancel', 'CheckoutController@cancel')->name('checkout.cancel');
});
