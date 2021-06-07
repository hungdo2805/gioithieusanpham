<?php

use Illuminate\Support\Facades\Route;

//===================================LONG DEV BACKEND===============================================
Auth::routes();
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {

    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::resource('chuyenmuc', 'Admin\ChuyenMuc_Controller');





});



//===================================END BACKEND====================================================


//===================================HUNG FRONTEND=================================================

Route::get('/', function () {
    return view('welcome');
});




















//===================================END FRONTEND===============================================