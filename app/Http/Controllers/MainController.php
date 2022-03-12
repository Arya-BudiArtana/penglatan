<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function home()
    {
        return view('pages.index', ['page' => 1]);
    }
    public function about()
    {
        return view('pages.about', ['page' => 2]);
    }
    public function product()
    {
        return view('pages.produk', ['page' => 3]);
    }
}
