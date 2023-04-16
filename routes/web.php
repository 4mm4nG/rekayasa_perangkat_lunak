<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('login', function(){
//     return view('login');
// })->name('login_view')->middleware('guest');

Route::resource('login', LoginController::class)->middleware('guest');
Route::resource('logout', LogoutController::class);

Route::resource('home', HomeController::class)->middleware('auth');

Route::group(['middleware' => ['role:admin']], function(){
});
