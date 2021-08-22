<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //Memanggil view home
    public function home()
    {
        return view('home');
    }
}
