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


Auth::routes();

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/flight-list', [App\Http\Controllers\FlightListController::class, 'index'])->name('flight-list');
Route::get('/ticket-list', [App\Http\Controllers\TicketListController::class, 'index'])->name('ticket-list');
Route::get('/all-booking', [App\Http\Controllers\AllBookingController::class, 'index'])->name('all-booking');
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking');
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
Route::post("/admin/discount/discount-add",[App\Http\Controllers\Admin\DiscountController::class,"discountcreate"]);

Route::get("/admin/discount/discount-edit/{discount}",[App\Http\Controllers\Admin\DiscountController::class,"discountedit"]);
Route::post("/admin/discount/discount-edit/{discount}",[App\Http\Controllers\Admin\DiscountController::class,"discountupdate"]);

Route::get("/admin/airplane/airplane-all",[App\Http\Controllers\Admin\AirplaneController::class,"airplaneall"]);
Route::get("/admin/airplane/airplane-view/{airplane}",[App\Http\Controllers\Admin\AirplaneController::class,"airplaneview"]);


Route::get("/admin/airplane/airplane-edit/{airplane}",[App\Http\Controllers\Admin\AirplaneController::class,"airplaneedit"]);
Route::post("/admin/airplane/airplane-edit/{airplane}",[App\Http\Controllers\Admin\AirplaneController::class,"airplaneupdate"]);
Route::get("/admin/airplane/airplane-add",[App\Http\Controllers\Admin\AirplaneController::class,"airplaneadd"]);
Route::post("/admin/airplane/airplane-add",[App\Http\Controllers\Admin\AirplaneController::class,"airplanecreate"]);

Route::get("/admin/airstrip/airstrip-all",[App\Http\Controllers\Admin\AirStripController::class,"airstripall"]);
Route::get("/admin/airstrip/airstrip-add",[App\Http\Controllers\Admin\AirStripController::class,"airstripadd"]);
Route::post("/admin/airstrip/airstrip-add",[App\Http\Controllers\Admin\AirStripController::class,"airstripcreate"]);

Route::get("/admin/airstrip/airstrip-edit/{airstrip}",[App\Http\Controllers\Admin\AirStripController::class,"airstripedit"]);
Route::post("/admin/airstrip/airstrip-edit/{airstrip}",[App\Http\Controllers\Admin\AirStripController::class,"airstripupdate"]);



Route::get("/admin/flight/flight-all",[App\Http\Controllers\Admin\FlightController::class,"flightall"]);
Route::get("/admin/flight/flight-add",[App\Http\Controllers\Admin\FlightController::class,"flightadd"]);
Route::post("/admin/flight/flight-add",[App\Http\Controllers\Admin\FlightController::class,"flightcreate"]);
Route::get("/admin/flight/flight-view/{flight}",[App\Http\Controllers\Admin\FlightController::class,"flightview"]);
Route::get("/admin/flight/flight-edit/{flight}",[App\Http\Controllers\Admin\FlightController::class,"flightedit"]);
Route::post("/admin/flight/flight-edit/{flight}",[App\Http\Controllers\Admin\FlightController::class,"flightupdate"]);


