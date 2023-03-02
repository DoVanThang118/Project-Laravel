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
Route::get('/hotel-list', [App\Http\Controllers\FlightListController::class, 'index'])->name('hotel-list');
Route::get('/all-booking', [App\Http\Controllers\AllBookingController::class, 'index'])->name('all-booking');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile-edit');
Route::get('/payment-all', [App\Http\Controllers\PaymentController::class, 'index'])->name('payment-all');
Route::get('/payment', [App\Http\Controllers\PaymentController::class, 'payment'])->name('payment');

Route::get("/admin/dashboard",[App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('dashboard');

Route::get("/admin/member/user-all",[App\Http\Controllers\Admin\MemberController::class,"userall"]);
Route::get("/admin/member/user-add",[App\Http\Controllers\Admin\MemberController::class,"useradd"]);
Route::get("/admin/member/user-edit",[App\Http\Controllers\Admin\MemberController::class,"useredit"]);
Route::get("/admin/member/user-view",[App\Http\Controllers\Admin\MemberController::class,"userview"]);

Route::get("/admin/discount/discount-all",[App\Http\Controllers\Admin\DiscountController::class,"discountall"]);
Route::get("/admin/discount/discount-add",[App\Http\Controllers\Admin\DiscountController::class,"discountadd"]);
Route::get("/admin/discount/discount-edit",[App\Http\Controllers\Admin\DiscountController::class,"discountedit"]);

Route::get("/admin/hotel/hotel-all",[App\Http\Controllers\Admin\HotelController::class,"hotelall"]);
Route::get("/admin/hotel/hotel-edit",[App\Http\Controllers\Admin\HotelController::class,"hoteledit"]);
Route::get("/admin/hotel/hotel-add",[App\Http\Controllers\Admin\HotelController::class,"hoteladd"]);
Route::get("/admin/hotel/hotel-room-type-all",[App\Http\Controllers\Admin\HotelController::class,"hotelroomtypeall"]);
Route::get("/admin/hotel/hotel-room-type-add",[App\Http\Controllers\Admin\HotelController::class,"hotelroomtypeadd"]);
Route::get("/admin/hotel/hotel-room-type-edit",[App\Http\Controllers\Admin\HotelController::class,"hotelroomtypeedit"]);

