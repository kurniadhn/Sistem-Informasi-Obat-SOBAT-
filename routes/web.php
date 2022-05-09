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
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index'])->name('login');
Route::post('/logout', [App\Http\Controllers\LoginController::class, 'logout']);
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Auth::routes();

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});