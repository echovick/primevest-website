<?php

use App\Http\Controllers\WaitListController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/why-us', function () {
    return view('why-primevest');
});


Route::get('/how-primevest-works', function () {
    return view('how-primevest-works');
});


Route::get('/join-wait-list', function () {
    return view('join-wait-list');
});

Route::post('/join-waitlist', [WaitListController::class, 'store'])->name('joinWaitlist');
