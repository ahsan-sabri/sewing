<?php

Route::group(['middleware' => [], 'prefix' => '', 'as' => ''], function () {
    // homepage
    Route::get('/', 'FrontEnd\HomepageController@index')->name('homepage');
    // product page
    Route::get('products/{category_id?}/{subcategory_id?}', 'FrontEnd\ProductPageController@index')->name('productpage');
    // pricing page
    Route::get('product/details/{id}', 'FrontEnd\ProductPageController@show')->name('details');

});
