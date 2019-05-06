<?php

namespace App\Http\Controllers;

class HomeControllers extends Controller
{
    public function index()
    {

        return view('dashboard.dashboarad_utama');

    }

    public function about()
    {
        return view('dashboard.about');
    }

    public function Contack()
    {

        return view('dashboard.contack.name');
    }

    public function projeck()
    {
        return view('dashboard.projeck');
    }
}
