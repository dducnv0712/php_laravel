<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;
Route::middleware(["auth","admin"])->group(function (){//phải đăng nhập mới cho vào trang

    Route::get('/', [WebController::class,"home"]);
    Route::get('/about-us', [WebController::class,"about"]);


//category controller
    Route::get("/categories",[CategoryController::class,"all"]);
    Route::post("/categories/save",[CategoryController::class,"save"]);
    Route::post("/categories/update/{id}",[CategoryController::class,"update"]);
    Route::get("/categories/delete/{id}",[CategoryController::class,"delete"]);

//product controller
    Route::get("/products",[ProductController::class,"all"]);
    Route::post("/products/save",[ProductController::class,"save"]);
    Route::get("/products/delete/{id}",[ProductController::class,"delete"]);
    Route::post("/products/update/{id}",[ProductController::class,"update"]);
    Route::get("/products/proCategories/{id}",[ProductController::class,"proCategories"]);
    Route::get("/products/proBrands/{id}",[ProductController::class,"proBrands"]);

//Brand Controller
    Route::get("/brands",[BrandController::class,"all"]);
    Route::post("/brands/save",[BrandController::class,"save"]);
    Route::get("/brands/delete/{id}",[BrandController::class,"delete"]);
    Route::post("/brands/update/{id}",[BrandController::class,"update"]);
});
