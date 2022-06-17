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

Route::prefix('root')->middleware('root')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('root.dashboard');
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
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'admin'])->name('admin.dashboard');

    Route::get('/obat', [App\Http\Controllers\ObatController::class, 'index'])->name('admin.obat');
    Route::get('/tambah_obat', [App\Http\Controllers\ObatController::class, 'create'])->name('obat.create');
    Route::POST('/obat/store', [App\Http\Controllers\ObatController::class, 'store'])->name('obat.store');
    Route::get('/edit_obat/{id}', [App\Http\Controllers\ObatController::class, 'edit'])->name('obat.edit');
    Route::POST('/edit_obat/{id}', [App\Http\Controllers\ObatController::class, 'update'])->name('obat.update');
    Route::get('/hapus_obat/{id}', [App\Http\Controllers\ObatController::class, 'destroy'])->name('obat.destroy');

    Route::get('/jenis_obat', [App\Http\Controllers\JenisObatController::class, 'index'])->name('admin.jenisObat');
    Route::get('/tambah_jenis_obat', [App\Http\Controllers\JenisObatController::class, 'create'])->name('jenisObat.create');
    Route::POST('/jenis_obat/store', [App\Http\Controllers\JenisObatController::class, 'store'])->name('jenisObat.store');
    Route::get('/edit_jenis_obat/{id}', [App\Http\Controllers\JenisObatController::class, 'edit'])->name('jenisObat.edit');
    Route::POST('/edit_jenis_obat/{id}', [App\Http\Controllers\JenisObatController::class, 'update'])->name('jenisObat.update');
    Route::get('/hapus_jenis_obat/{id}', [App\Http\Controllers\JenisObatController::class, 'destroy'])->name('jenisObat.destroy');
    
    Route::get('/artikel', [App\Http\Controllers\ArtikelController::class, 'index'])->name('admin.artikel');
    Route::get('/tambah_artikel', [App\Http\Controllers\ArtikelController::class, 'create'])->name('artikel.create');
    Route::POST('/artikel/store', [App\Http\Controllers\ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/edit_artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::POST('/edit_artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'update'])->name('artikel.update');
    Route::get('/hapus_artikel/{id}', [App\Http\Controllers\ArtikelController::class, 'destroy'])->name('artikel.destroy');

});

/*
|--------------------------------------------------------------------------
| End Admin
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| user
|--------------------------------------------------------------------------
|
| Here is where you can customize your application as user.
|
*/
Route::prefix('user')->middleware('user')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'user'])->name('user.dashboard');

    Route::get('/edit_profile/', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');
    Route::POST('/edit_profile/', [App\Http\Controllers\UserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/edit_password/', [App\Http\Controllers\UserController::class, 'password'])->name('user.password');
    Route::POST('/edit_password/', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('user.updatePassword');

    Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('user.transaksi.index');
    // Route::get('/tambah_transaksi', [App\Http\Controllers\TransaksiController::class, 'create'])->name('user.transaksi.create');
    Route::POST('/transaksi/store', [App\Http\Controllers\TransaksiController::class, 'store'])->name('user.transaksi.store');
    Route::get('/edit_transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'edit'])->name('user.transaksi.edit');
    Route::get('/edit_transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update'])->name('user.transaksi.update');
    Route::get('/hapus_transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy'])->name('user.transaksi.destroy');

});

/*
|--------------------------------------------------------------------------
| End User
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('guest.dashboard');
Route::get('/paket', [App\Http\Controllers\HomeController::class, 'paket'])->name('paket');
Route::get('/obat', [App\Http\Controllers\HomeController::class, 'obat'])->name('obat');
Route::get('/jenis_obat/{id}', [App\Http\Controllers\HomeController::class, 'jenis_obat'])->name('jenis_obat');
Route::get('/artikel', [App\Http\Controllers\HomeController::class, 'artikel'])->name('artikel');
Route::get('/detail_artikel/', [App\Http\Controllers\HomeController::class, 'detail_artikel'])->name('detail_artikel');
Route::get('/detail_obat/', [App\Http\Controllers\HomeController::class, 'detail_obat'])->name('detail_obat');
Route::get('/keranjang', [App\Http\Controllers\HomeController::class, 'keranjang'])->name('keranjang');
Route::get('/checkout_paket/{id}', [App\Http\Controllers\TransaksiController::class, 'checkout_paket'])->name('checkout_paket');
Route::get('/checkout_obat/{id}', [App\Http\Controllers\TransaksiController::class, 'checkout_obat'])->name('checkout_obat');

/*
|--------------------------------------------------------------------------
| End User
|--------------------------------------------------------------------------
*/