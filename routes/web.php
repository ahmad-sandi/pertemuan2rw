<?php

use App\Http\Controllers\Mahasiswacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});



Route::get('/about', function () {
    return view('page.about');
});


route::get('/profile', [Mahasiswacontroller::class,'index']);