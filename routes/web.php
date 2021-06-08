<?php

use Illuminate\Support\Facades\Route;

//===================================LONG DEV BACKEND===============================================
Auth::routes();
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {

    Route::get('/', 'Admin\HomeController@index')->name('home');
    Route::resource('chuyenmuc', 'Admin\ChuyenMuc_Controller');
    Route::resource('baiviet', 'Admin\BaiViet_Controller');





});



//===================================END BACKEND====================================================


//===================================HUNG FRONTEND=================================================

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', function () {
//     return view('welcome');
// });
// Route te cua hungdev

Route::group(['prefix' => 'admin2'], function () {

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


Route::get('/', function () {
    return view('home_pages/home');
});
Route::get('/shop.html','HomeController@getShop')->name('getshop');

Route::get('/about.html','HomeController@getAbout')->name('getabout');

Route::get('/product_details.html','HomeController@productDetails')->name('get_product_details');

Route::get('/news.html','HomeController@getNews')->name('getnews');

Route::get('/news_details.html','HomeController@newsDetails')->name('get_news_details');

Route::get('/contact_us.html','HomeController@contactUs')->name('get_contact_us');




// het  Route  cua hungdev




















//===================================END FRONTEND===============================================