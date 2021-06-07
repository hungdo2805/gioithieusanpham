<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{
    public function getShop()
    {
        return view('home_pages.shop');
    }

    public function getNews(){
        return view('home_pages.news');
    }
    public function getAbout(){
        return view('home_pages.about');
    }

    public function contactUs(){
        return view('home_pages.contact_us');
    }

    public function productDetails(){
        return view('home_pages.product_details');
    }

    public function newsDetails(){
        return view('home_pages.news_details');
    }

}
