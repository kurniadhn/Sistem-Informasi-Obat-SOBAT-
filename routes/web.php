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

Auth::routes();

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/hash', function() {
  $hash = Hash::make('root');
  return $hash;
});

/*
|--------------------------------------------------------------------------
| Root
|--------------------------------------------------------------------------
|
| Here is where you can customize your application as root.
|
*/

Route::prefix('Root')->middleware('root')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\RootController::class, 'index'])->name('root.dashboard');
});

/*
|--------------------------------------------------------------------------
| End Root
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| Here is where you can customize your application as admin.
|
*/
Route::prefix('Admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.dashboard');

    Route::get('/obat', [App\Http\Controllers\AdminController::class, 'obat'])->name('admin.obat');
    Route::get('/tambah_obat', [App\Http\Controllers\AdminController::class, 'obat'])->name('admin.obat');

});

/*
|--------------------------------------------------------------------------
| End Admin
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
|
| Here is where you can use your application as guest.
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('guest.dashboard');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/obat', [App\Http\Controllers\HomeController::class, 'obat'])->name('obat');
Route::get('/artikel', [App\Http\Controllers\HomeController::class, 'artikel'])->name('artikel');
Route::get('/detail_artikel/', [App\Http\Controllers\HomeController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/detail_obat/', [App\Http\Controllers\HomeController::class, 'detail_obat'])->name('detail_obat');
Route::get('/keranjang', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');

/*
|--------------------------------------------------------------------------
| End User
|--------------------------------------------------------------------------
*/