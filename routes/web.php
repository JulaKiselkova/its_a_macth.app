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

Route::post('/signup', [\App\Http\Controllers\UserController::class, 'create'])
    ->name('create');
Route::post('/signup', [\App\Http\Controllers\UserController::class, 'store'])
    ->name('store');

Route::get('/', [\App\Http\Controllers\SiteController::class, 'mainPage'])->name('mainPage');
Route::get('/loginPage', [\App\Http\Controllers\SiteController::class, 'loginPage'])->name('loginPage');
Route::get('/login', [\App\Http\Controllers\SiteController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\SiteController::class, 'logout'])->name('logout');
Route::get('/signup', [\App\Http\Controllers\SiteController::class, 'signupPage'])->name('signupPage');
Route::get('/members', [\App\Http\Controllers\SiteController::class, 'membersPage'])->name('membersPage');
Route::get('/success', [\App\Http\Controllers\SiteController::class, 'successPage'])->name('successPage');
Route::get('/mistake', [\App\Http\Controllers\SiteController::class, 'mistakePage'])->name('mistakePage');
Route::get('/profile', [\App\Http\Controllers\SiteController::class, 'profilePage'])->name('profilePage');
//Route::get('/profile/{id}', function ($id) {
//    dump($id);
//});
Route::get('/profile/{user}',[\App\Http\Controllers\UserController::class, 'profile'])->name('profile');

