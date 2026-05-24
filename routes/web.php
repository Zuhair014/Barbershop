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

Route::middleware('auth')->group(function(){

    Route::resource('booking', BookingController::class);

});

Route::get('/admin/bookings', [BookingController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';