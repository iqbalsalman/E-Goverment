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

        return view('dashboard.dashboarad_utama');
    }

    public function About()
    {
        return view('dashboard.About');
    }
    public function Contack()
    {

        return view('dashboard.kontak');
    }

    public function projeck()
    {
        return view('dashboard.projeck');
    }

    public function dashboard()
    {
        return view('dashboard.home');
    }
    public function viewAsset()
    {
        return view('dashboard.ViewAsset');
    }
   
  
}
