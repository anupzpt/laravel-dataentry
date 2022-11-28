<?php

use App\Http\Controllers\EntryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('home');
});
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('register');

Route::post('/register', [UserController::class, 'registerUser'])->name('registerUser');
Route::post('/login', [UserController::class, 'loginUser'])->name('loginUser');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::get('/entry', [EntryController::class, 'entry'])->name('entry');
Route::get('/delete/{id}',[EntryController::class,'delete']);
Route::get('/edit/{id}',[EntryController::class,'edit']);
Route::post('/save-data',[EntryController::class,'saveData'])->name('saveData');
Route::post('/edit',[EntryController::class,'updateData'])->name('updateData');
