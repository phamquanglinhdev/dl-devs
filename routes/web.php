<?php

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
Route::get("logout",[\App\Http\Controllers\CustomLogoutController::class,'logout'])->name("user.logout");
Route::get('/', function () {
    return view('frontend.index');
})->name("index");
Route::get('/about', function () {
    return view('frontend.about');
})->name("about");
Route::get('/contact', function () {
    return view('frontend.contact');
})->name("contact");
Route::get('/teacher', function () {
    return view('frontend.teacher');
})->name("teacher");
Route::get('/pricing', function () {
    return view('frontend.pricing');
})->name("pricing");

