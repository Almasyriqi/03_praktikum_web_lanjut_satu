<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

// Home
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Produk
Route::prefix('/produk')->group(function() {
    Route::get('/', [PageController::class, 'produk']);
    Route::get('/celana', [PageController::class, 'celana']);
    Route::get('/jaket', [PageController::class, 'jaket']);
    Route::get('/sepatu', [PageController::class, 'sepatu']);
    Route::get('/sandal', [PageController::class, 'sandal']);
});

// News
// NB : jika memasukkan id = 1 pada url maka akan masuk ke halaman daftar berita
// jika memasukkan id selain 1 pada url maka akan masuk ke halaman berita
Route::get('/news/{id}', [PageController::class, 'berita']);

// Program
Route::prefix('/program')->group(function() {
    Route::get('/', [PageController::class, 'program']);
    Route::get('/karir', [PageController::class, 'karir']);
    Route::get('/magang', [PageController::class, 'magang']);
    Route::get('/kunjungan', [PageController::class, 'kunjungan']);
});

// About us
Route::get('/about', [PageController::class, 'about'] );

// Contact us
Route::resource('contact', ContactController::class)->only([
    'index'
]);