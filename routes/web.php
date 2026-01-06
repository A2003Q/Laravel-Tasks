<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', fn() => view('dashboard'))->name('dashboard');
Route::get('/form', fn() => view('form'));
Route::get('/table', fn() => view('table'));
Route::get('/new', fn() => view('new'));
Route::get('/about', [PageController::class, 'about']);
Route::get('/task5', [PageController::class, 'task5']);
Route::get('/task7',function(){
    return view('task7');
})->name('task7');
