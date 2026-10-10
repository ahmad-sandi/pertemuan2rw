<?php

use App\Http\Controllers\Mahasiswacontroller;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});

route::get('/profile', [Mahasiswacontroller::class,'index']);
route::get('/project', [ProjectController::class,'index'])->name('project.index');
route::get('/project/{id}', [Projectcontroller::class,'show'])->name('project.show');


Route::get('/about', function () {
    return view('page.about');
});



