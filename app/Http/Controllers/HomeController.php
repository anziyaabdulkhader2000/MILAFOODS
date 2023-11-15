<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function productDetailsRagi()
    {
        return view('productDetailsRagi');
    }

    public function productDetailsBanana()
    {
        return view('productDetailsBanana');
    }

    public function productDetailsRiceBanana()
    {
        return view('productDetailsRiceBanana');
    }

    public function productDetailsKannakaya()
    {
        return view('productDetailsKannakaya');
    }
}
