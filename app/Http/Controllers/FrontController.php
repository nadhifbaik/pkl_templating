<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //

    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop');
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function track()
    {
        return view('track');
    }

    public function aboute()
    {
        return view('aboute');
    }

    public function detailproduk()
    {
        return view('detailproduk');
    }

}
