<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/flight-list', [App\Http\Controllers\FlightListController::class, 'index'])->name('flight-list');
Route::get('/all-booking', [App\Http\Controllers\AllBookingController::class, 'index'])->name('all-booking');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile-edit');
Route::get('/payment-all', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment-all');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');

Route::get("/admin/dashboard",[App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('dashboard');

