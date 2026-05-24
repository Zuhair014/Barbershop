<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarberController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('frontend.home');
});

Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

Route::resource('barbers', BarberController::class);

Route::get('/booking', [BookingController::class, 'create']);

Route::post('/booking', [BookingController::class, 'store']);

Route::get('/admin/bookings', [BookingController::class, 'index']);