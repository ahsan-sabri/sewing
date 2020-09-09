<?php
Auth::routes(['register' => false]);

// Change Password Routes...
Route::get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
Route::patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// admin routes
include 'admin.php';

//front end routes
include 'frontend.php';

//ajax routes
include 'ajax.php';
