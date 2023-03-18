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

Route::middleware('auth')->group(function (){
    Route::post("/add_to_cart/{flight}",[App\Http\Controllers\WelcomeController::class, 'addToCart'])->name("add_to_cart");
});
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);
Route::get('/flightList', [App\Http\Controllers\WelcomeController::class, 'filter']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/remove-cart/{typeOfTicket}",[App\Http\Controllers\WelcomeController::class,"remove"]);
Route::get("/user/cart",[App\Http\Controllers\WelcomeController::class,"shopcart"]);
Route::get('/checkout', [App\Http\Controllers\WelcomeController::class, 'checkout']);
Route::post("/checkout",[App\Http\Controllers\WelcomeController::class,"placeOrder"]);

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile-edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile-edit');
Route::get('/detail-order/{order}', [App\Http\Controllers\ProfileController::class, 'detailorder'])->name('detail-order');
Route::post('/profile-edit', [App\Http\Controllers\ProfileController::class, 'update']);


Route::get('/contactus', [App\Http\Controllers\ContactController::class, 'index']);

//Pusher
Route::get("/sendNotification",[App\Http\Controllers\PusherController::class,"sendNotification"]);

//PayPal
Route::get("successTransaction/{order}",[App\Http\Controllers\WelcomeController::class,"successTransaction"])->name("successTransaction");
Route::get("cancelTransaction/{order}",[App\Http\Controllers\WelcomeController::class,"cancelTransaction"])->name("cancelTransaction");


//view
Route::get("/hoChiMinhCity",[App\Http\Controllers\ViewController::class, 'hcmCity']);
Route::get("/HaNoi",[App\Http\Controllers\ViewController::class, 'haNoi']);
Route::get("/phuQuoc",[App\Http\Controllers\ViewController::class, 'phuquoc']);
Route::get("/daNang",[App\Http\Controllers\ViewController::class, 'danang']);
Route::get("/daLat",[App\Http\Controllers\ViewController::class, 'dalat']);
Route::get("/london",[App\Http\Controllers\ViewController::class, 'london']);
Route::get("/paris",[App\Http\Controllers\ViewController::class, 'paris']);
Route::get("/newYork",[App\Http\Controllers\ViewController::class, 'newyork']);
Route::get("/bangkok",[App\Http\Controllers\ViewController::class, 'bangkok']);
Route::get("/singapore",[App\Http\Controllers\ViewController::class, 'singapore']);

Route::middleware(["auth","admin"])->group(function (){
    Route::get("/admin/dashboard",[App\Http\Controllers\Admin\DashboardController::class,'dashboard'])->name('dashboard');


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
});

