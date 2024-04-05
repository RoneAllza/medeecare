<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Web\infopenyakitController;
use App\Http\Controllers\GuestController;
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
    return view('welcome');
});

// Route Category Artikel
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');

//Route Artikel
Route::get('/Artikel', [ArtikelController::class, 'index'])->name('Artikel');
Route::get('/Artikel/create', [ArtikelController::class, 'create'])->name('Artikel.create');
Route::post('/Artikel/store', [ArtikelController::class, 'store'])->name('Artikel.store');
Route::get('/Artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('Artikel.edit');
Route::put('/Artikel/{id}/update', [ArtikelController::class, 'update'])->name('Artikel.update');
Route::delete('/Artikel/{id}/destroy', [ArtikelController::class, 'destroy'])->name('Artikel.destroy');

//Route Tampilan Informasi Penyakit
Route::get('/infopenyakit', [infopenyakitController::class, 'index'])->name('informasipenyakit');
Route::get('/Artikel/{id}', [infopenyakitController::class, 'show'])->name('isi.artikel');
Route::get('/searchinfopenyakit', [GuestController::class, 'search'])->name('search');

