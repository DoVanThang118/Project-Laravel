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
Route::middleware(["auth","admin"])->prefix("admin")->group(function (){
    include_once("admin.php");
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index1'])->name('home');
Route::get('/hotel-list', [App\Http\Controllers\FlightListController::class, 'index'])->name('hotel-list');
Route::get('/all-booking', [App\Http\Controllers\AllBookingController::class, 'index'])->name('all-booking');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile-edit');
Route::get('/payment-all', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment-all');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');


