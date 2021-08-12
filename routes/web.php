<?php

use App\Http\Controllers\FeedbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
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
Route::get('/', [WebController::class, "home"]);
Route::post('/submit',[FeedbackController::class, "feedback"]);
Route::get('/fail', [WebController::class, "fail"]);
Route::get('/success', [WebController::class, "success"]);
Route::get('cities', 'CityController@index')->name('cities.index');
//Route::get('/details/{id}', [WebController::class,"details"]);
//Route::get('/about-us', [WebController::class, "about"]);
//
//Route::middleware(["auth","user"])->group(function () {//phải đăng nhập mới cho vào trang
//
//Route::get('/cart', [WebController::class, "cart"]);
//Route::get('/checkout', [WebController::class, "checkout"]);
//
//
//Route::post("/add-to-cart/{id}", [WebController::class, "addToCart"]);
//Route::get("/delCart/{id}", [WebController::class, "delCart"]);
//
//Route::get("/updateCart/{id}", [WebController::class, "updateCart"]);
//
//});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
