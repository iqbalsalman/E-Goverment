<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect; 

class HomeControllers extends Controller
{
    public function index(){

        return view('Home.index');

    }
}
