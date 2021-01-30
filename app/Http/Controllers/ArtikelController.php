<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function index(){
        return view('contact');
    }

    function show(){
        return view('tes');
    }
}
