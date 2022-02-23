<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', function () {
    return view('turulav.main');
});
Route::get('/signup', [\App\Http\Controllers\UserController::class, 'index'])
    ->name('index');
Route::post('/signup', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('create');
Route::post('/signup', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('store');
//Route::post('/signup', function () {
//    Route::resources([
//        'user'=> \App\Http\Controllers\UserController::class,
//    ]);
//    return view('turulav.signup');
//});
//Route::get('/signup', [\App\Http\Controllers\UserController::class, 'show'])->name('show');
//Route::post('/signup', [\App\Http\Controllers\UserController::class, 'index'])->name('index');
//Route::get('/signup', [\App\Http\Controllers\UserController::class, 'index'])->name('index');;

