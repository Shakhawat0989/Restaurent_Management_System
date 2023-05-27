<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
;
Route::get("/",[HomeController::class, "index"]);
Route::get("/redirects",[HomeController::class, "redirects"]);


Route::get("/users",[AdminController::class, "user"]);
Route::get("/deleteuser/{id}",[AdminController::class, "deleteuser"]);
Route::get("/addfoods",[AdminController::class, "addfood"]);
Route::post("/foodupload",[AdminController::class, "upload"]);
Route::get("/deletemenu/{id}",[AdminController::class, "deletemenu"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});