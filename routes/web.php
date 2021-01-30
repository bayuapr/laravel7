<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'welcome');
Route::view('contacthy', 'contact');

Route ::get('/artikel', 'ArtikelController@index');
Route ::get('artikel/{slug}', 'ArtikelController@show');

