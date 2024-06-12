<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('', function () {
    return view('welcome');
})->name('landing');

Route::get('/registration/corporate', [RegisterController::class, 'registration_setup'])->name('register.setup');

Route::post('/registration/path', [RegisterController::class, 'registration_path'])->name('register.direction');
Route::post('/registration-nssf-validate', [RegisterController::class, 'validate_nssf'])->name('register.validate.nssf');
Route::post('/registration-nssf-create', [RegisterController::class, 'create_nssf'])->name('register.nssf');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
