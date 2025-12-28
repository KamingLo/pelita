<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function(){
    return view('profile');
});

Route::get('/admisi', function(){
    return view('admissions');
});

Route::get('/jenjang', function(){
    return view('school-level');
});

Route::get('/fasilitas', function(){
    return view('facility');
});

