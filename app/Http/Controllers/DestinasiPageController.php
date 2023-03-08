<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestinasiPageController extends Controller
{
    //
    public function destinasi()
    {
        return view('destinasi');
    }
}