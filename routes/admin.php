<?php

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    // dashboard
    Route::get('/', 'HomeController@index')->name('home');
    // permissions
    Route::resource('permissions', 'Admin\PermissionsController');
    Route::delete('permissions_mass_destroy', 'Admin\PermissionsController@massDestroy')->name('permissions.mass_destroy');
    // roles
    Route::resource('roles', 'Admin\RolesController');
    Route::delete('roles_mass_destroy', 'Admin\RolesController@massDestroy')->name('roles.mass_destroy');
    // users
    Route::resource('users', 'Admin\UsersController');
    Route::delete('users_mass_destroy', 'Admin\UsersController@massDestroy')->name('users.mass_destroy');
    // modules
    Route::resource('modules', 'Admin\ModulesController');
    Route::delete('modules_mass_destroy', 'Admin\ModulesController@massDestroy')->name('modules.mass_destroy');
    // products
    Route::resource('products', 'Admin\ProductsController');
    Route::delete('products_mass_destroy', 'Admin\ProductsController@massDestroy')->name('products.mass_destroy');
    // categories
    Route::resource('categories', 'Admin\CategoryController');
    Route::delete('categories_mass_destroy', 'Admin\CategoryController@massDestroy')->name('categories.mass_destroy');
    // subcategories
    Route::resource('subcategories', 'Admin\SubCategoryController');
    Route::delete('subcategories_mass_destroy', 'Admin\SubCategoryController@massDestroy')->name('subcategories.mass_destroy');
    // companies
    Route::resource('companies', 'Admin\CompaniesController');
    Route::delete('companies_mass_destroy', 'Admin\CompaniesController@massDestroy')->name('companies.mass_destroy');
    // banners
    Route::resource('banners', 'Admin\BannersController');
    Route::delete('banners_mass_destroy', 'Admin\BannersController@massDestroy')->name('banners.mass_destroy');
});
