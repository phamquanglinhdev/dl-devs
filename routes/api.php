<?php

use App\Http\Controllers\api\ListController;
use App\Http\Controllers\api\UserController;
use App\Http\Controllers\api\VideoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post("/login",[UserController::class,'apiLogin'])->name("api.login");
Route::get("/video/{url}",[VideoController::class,'index','url'])->where(['url'])->name("api.video");
Route::get("/list/{id}",[ListController::class,'show','id'])->where(['id'])->name("api.show");
Route::post("/list",[ListController::class,'index','id'])->name("api.list");
