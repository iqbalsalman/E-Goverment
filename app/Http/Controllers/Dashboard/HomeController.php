<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index()
    {

        return view('Home.dashboarad_utama');
    }

    public function About()
    {
        return view('Home.About');
    }
    public function Contack()
    {

        return view('Home.kontak');
    }

    public function projeck()
    {
        return view('Home.projeck');
    }
  
}
