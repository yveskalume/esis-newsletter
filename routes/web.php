<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\StudentController;
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

Route::get('/', [StudentController::class, "registerPage"])->name("student.registerPage");
Route::post("/register", [StudentController::class, "register"])->name("student.register");
Route::prefix("dashboard")->group(function () {
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");
    Route::post("/",[MessageController::class,"newMessage"])->name("message.new");
});
