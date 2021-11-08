<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::resource('tables',TableController::class);
Route::get('bookings/{id}',[BookingController::class,'dipto'])->name('bookings.create');
Route::get('booking',[BookingController::class,'index'])->name('bookings.index');
Route::post('bookings',[BookingController::class,'store'])->name('bookings.store');


require __DIR__.'/auth.php';
