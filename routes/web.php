<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController as TC;
use App\Http\Controllers\LoginController as AUTH;
use App\Http\Middleware\authUser;
Route::get('/login', [AUTH::class, 'index'])->name('login.form')->middleware(authUser::class);;
Route::post('/login/logging', [AUTH::class, 'login'])->name('user.login');
Route::get('/logout', [AUTH::class, 'logout'])->name('user.logout');


Route::get('/register', [AUTH::class, 'regform'])->name('register.form')->middleware(authUser::class);;
Route::get('/register/creating', [AUTH::class, 'register'])->name('create.account');

// Grouped routes with authUser middleware

// Route::get('/', [TC::class, 'index'])->name('home')->middleware(authUser::class);
Route::get('/', function(){
  return view('pages.taskpage');
})->name('add.task')->middleware(authUser::class);

