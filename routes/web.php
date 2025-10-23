<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function (){
    return view('about-Us.about');
})->name('about');

Route::get('/artikel', function() {
    return view('artikel.artikel');
})->name('artikel');

Route::get('/hubungi', function() {
    return view('hubungi-kami.hubungi');
})->name('hubungi');

Route::get('/layanan', function () {
    return view('layanan-kami.layanan');
})->name('layanan');
