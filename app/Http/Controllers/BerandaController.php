<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view('beranda'); // Make sure the view exists in resources/views
    }
}
