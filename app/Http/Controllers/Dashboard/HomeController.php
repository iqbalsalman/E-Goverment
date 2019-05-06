<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

        return view('dashboard.dashboarad_utama');
    }

    public function About()
    {
        return view('dashboard.About');
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
