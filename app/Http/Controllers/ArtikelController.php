<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function index(){
        $artikel = [
            ['title'=> 'judul pertama', 'subject'=> 'ini isi pertama'],
            ['title'=> 'judul kedua', 'subject'=> 'ini isi kedua'],
            ['title'=> 'judul ketiga', 'subject'=> 'ini isi ketiga'],
        ];

        return view('artikel.index', compact('artikel')); 
    }

    function show($slug){

        return view('artikel.tes', compact('slug'));
    }
}
