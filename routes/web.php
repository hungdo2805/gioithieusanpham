<?php

use Illuminate\Support\Facades\Route;

//===================================BACKEND===============================================
Auth::routes();
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {

    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::resource('chuyenmuc', 'Admin\ChuyenMuc_Controller');
    Route::resource('baiviet', 'Admin\BaiViet_Controller');
   





});

Route::resource('binhluan', 'BinhLuan_Controller');


//===================================END BACKEND====================================================


//=================================== FRONTEND=================================================



Route::get('/','Khach_Controller@trangchu')->name('khach.index');
Route::get('baiviet/{id}','Khach_Controller@getbaiviet')->name('post.getbaiviet');


Route::get('{ten_chuyen_muc}/{id}','Khach_Controller@getchuyenmuc')->name('khach.getchuyenmuc');
























//===================================END FRONTEND===============================================