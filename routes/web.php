<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Beranda']);
});

Route::get('/permohonan', function () {
    return view('permohonan', ['title' => 'Permohonan']);
});

Route::get('/sertifikat', function () {
    return view('sertifikat', ['title' => 'Sertifikat']);
});