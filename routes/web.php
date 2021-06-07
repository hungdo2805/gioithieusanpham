<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route te cua hungdev

Route::group(['prefix' => 'admin'], function () {

    Route::get('/dashboad', function () {
        return view('admin.admin');
    });
    Route::get('/category_posts', function () {
        return view('admin.category_post');
    });
    Route::get('/posts', function () {
        return view('admin.post');
    });  
    Route::get('/comments', function () {
        return view('admin.comments');
    });    
});
// het  Route  cua hungdev
