<?php

namespace App\Http\Controllers;

class MitraController extends Controller
{
    //dwi surya
    public function dwi()
    {
        return view('pages.mitra.dwi.detail', ['page' => 1]);
    }
    public function produkdwi()
    {
        return view('pages.mitra.dwi.produkmitra', ['page' => 3]);
    }

    //mariasmi
    public function mariasmi()
    {
        return view('pages.mitra.mariasmi.detail', ['page' => 1]);
    }
    public function produkmariasmi()
    {
        return view('pages.mitra.mariasmi.produkmitra', ['page' => 3]);
    }

    //rati
    public function rati()
    {
        return view('pages.mitra.rati.detail', ['page' => 1]);
    }
    public function produkrati()
    {
        return view('pages.mitra.rati.produkmitra', ['page' => 3]);
    }

    //wardi
    public function wardi()
    {
        return view('pages.mitra.wardi.detail', ['page' => 1]);
    }
    public function produkwardi()
    {
        return view('pages.mitra.wardi.produkmitra', ['page' => 3]);
    }
}
