<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages.todos');
})->name('todos');

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/join', function () {
    return view('pages.join');
})->name('join');

Route::get('/task', function () {
    return view('pages.task');
})->name('task');