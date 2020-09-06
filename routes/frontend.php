<?php

Route::group(['middleware' => [], 'prefix' => '', 'as' => ''], function () {
    // homepage
    Route::get('/', 'FrontEnd\HomepageController@index')->name('homepage');
    // product page
    Route::get('products', 'FrontEnd\ProductPageController@index')->name('productpage');
    // pricing page
    Route::get('details', 'FrontEnd\ProductPageController@show')->name('details');

});
