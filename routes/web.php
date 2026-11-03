<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::view("/dashbord", "dashbord");
Route::view("/signUp", "signUp")->name("vieWsignUp");
Route::view("/login", "login")->name("vieWlogin");

Route::group([
    "as" => "User.",
    "prefix" => "User",
    "controller" => UserController::class,
], function () {
    Route::post("/createSignUp", "createSignup")->name("createSignup");
    Route::post("/LoginUser", "LoginUser")->name("LoginUser");
    Route::get("/logOut", "logOut")->name("logOut");
});

Route::group([
    "as" => "Product.",
    "prefix" => "Product",
    "controller" => ProductController::class
], function () {
    Route::get("/create", "create")->name("create");
    Route::get("/list", "index")->name("index");
    Route::post("/insert", "insert")->name("insert");
    Route::get("/single/{product}/{truee?}", "single")->name("single");
    Route::get("/edite/{product}", "edite")->name("edite");
    Route::get("/delete/{product}", "delete")->name("delete");
    Route::post("/update", "update")->name("update");
});

Route::group([
    "as" => "Category.",
    "prefix" => "Category",
    "controller" => CategoryController::class
], function () {
    Route::get("/create", "create")->name("create");
    Route::get("/list", "index")->name("index");
    Route::post("/insert", "insert")->name("insert");
    Route::get("/single/{id}", "single")->name("single");
    Route::get("/edite/{id}", "edite")->name("edite");
    Route::post("/update", "update")->name("update");
    Route::get("/delete/{id}", "delete")->name("delete");
});