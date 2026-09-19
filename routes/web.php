<?php

use App\Http\Controllers\Mahasiswacontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


route::get('/mahasiswa', [Mahasiswacontroller::class,'index']);