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

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/obat', [App\Http\Controllers\HomeController::class, 'obat'])->name('obat');
Route::get('/artikel', [App\Http\Controllers\HomeController::class, 'artikel'])->name('artikel');
Route::get('/detail_artikel/', [App\Http\Controllers\HomeController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/detail_obat/', [App\Http\Controllers\HomeController::class, 'detail_obat'])->name('detail_obat');
Route::get('/keranjang', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
Auth::routes();

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});