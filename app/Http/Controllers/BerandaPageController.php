<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaPageController extends Controller
{
    //
    public function beranda()
    {
        return view('beranda');
    }
}