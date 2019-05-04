<?php

namespace App\Http\Controllers\Akun;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    function index(){
        return view('Users.login');
    }
}
