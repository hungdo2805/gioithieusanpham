<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
=======
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

>>>>>>> ba4e2a08cc1db7a7d11869b1b3908dd26fdc9ed0
}
