<?php

Route::middleware(['api'])->group(function () {
    Route::prefix('shop')->group(function () {


    });
});


// Web middleware required to enable session

/*
Route::middleware(['web'])->group(function () {

    Route::prefix('shop')->group(function () {
        Route::get('/cart', 'AAU_ITS\WBM_module\Controllers\WBMController@cart')->name('wbm-cart');

        Route::get('/details', 'AAU_ITS\WBM_module\Controllers\WBMController@details')->name('wbm-details');
        Route::post('/save-details', 'AAU_ITS\WBM_module\Controllers\WBMController@saveDetails')->name('wbm-details-save');

        Route::get('/payment', 'AAU_ITS\WBM_module\Controllers\PaymentController@index')->name('wbm-payment');
        Route::get('/orderline/remove/{id}', 'AAU_ITS\WBM_module\Controllers\WBMController@removeProduct')->name('wbm-remove-product');

        Route::get('/accepted', 'AAU_ITS\WBM_module\Controllers\WBMController@accepted')->name('wbm-order-accepted');
        Route::get('/canceled', 'AAU_ITS\WBM_module\Controllers\WBMController@canceled')->name('wbm-order-canceled');
    });
});
*/

// Payment related routes
//Route::post('/wbm/payment/callback/{type}', 'AAU_ITS\WBM_module\Controllers\PaymentController@callback')->name('wbm-payment-callback');
