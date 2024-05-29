<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

Route::get('/', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});


Route::post('/registration-user',[AuthenticationController::class,'store'])->name('pradeep');