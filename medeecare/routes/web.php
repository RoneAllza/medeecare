<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Web\infopenyakitController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ForumDiskusiController;
use App\Http\Controllers\FormDiskusiController;
use App\Http\Controllers\HomepageKesehatanKulitController;
use App\Http\Controllers\AnxietyTestController;
use App\Http\Controllers\DokterMentalController;
use App\Http\Controllers\KesehatanMentalController;
use App\Http\Controllers\HeartDiseaseRiskController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ObatKulitController;



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


Route::get('/', [UserController::class, 'homepage'])->name('homepage')->middleware('checkIfNotAdmin');
Route::get('/SignIn', [AuthController::class, 'login'])->name('login');
Route::post('/SignIn-Process', [AuthController::class, 'login_process'])->name('login-process');
Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkrole:Pasien']], function(){
    Route::get('/Features', [UserController::class, 'feature'])->name('feature');
    Route::get('/Profile', [UserController::class, 'profile'])->name('profile');
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
Route::get('/ArtikelCategory/{category}', [infopenyakitController::class, 'kategori'])->name('Artikel.category');
Route::get('/informasipenyakit/search', [infopenyakitController::class, 'search'])->name('informasipenyakit.search');

// Registrasi
Route::get('/registrasi', [GuestController:: class, 'registrasi'])->name('registrasi');
Route::post('/regis-proses', [GuestController:: class, 'regis_proses'])->name('regis_proses');


//admin only
Route::group(['middleware' => ['auth', 'checkrole:Admin']], function(){
    //Bagian Landing
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.landing');

    //Bagian User Admin
    Route::get('/admin/manage', [AdminController::class, 'user'])->name('admin.manage');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/admin/{id}/edit', [AdminController::class, 'editadmin'])->name('admin.editadmin');
    Route::put('/admin/{id}', [AdminController::class, 'updateadmin'])->name('admin.updateadmin');

    //Bagian User Pasien
    Route::get('/admin/administrasi', [AdminController::class, 'administrasi'])->name('admin.dashboard');
    Route::get('/users/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/users/{id}', [AdminController::class, 'update'])->name('admin.update');

    //Bagian Notifikasi
    Route::get('/admin/notification-settings', [AdminController::class, 'notificationSettings'])->name('admin.notification_settings');
    Route::post('/admin/notification-settings', [AdminController::class, 'storeNotificationSettings'])->name('admin.store_notification_settings');
});

// Forum yagesya
Route::get('/forumdiskusi', [ForumDiskusiController::class, 'viewForum'])->name('forumdiskusi');
Route::get('/formdiskusi', [FormDiskusiController::class, 'viewForm'])->name('formdiskusi');

// Cek Kesehatan Kulit
Route::get('/', [HomepageKesehatanKulitController::class, 'viewHomepageKesehatanKulit'])->name('homepagekesehatankulit');
Route::get('/', [ArtikelController::class, 'viewArtikel'])->name('artikel');
Route::get('/', [ObatKulitController::class, 'viewObatKulit'])->name('obatkulit');

//CRUD Dokter Kesehatan Mental
Route::get('/Dokter', [DokterMentalController::class, 'index'])->name('Dokter');
Route::get('/Dokter/create', [DokterMentalController::class, 'create'])->name('Dokter.create');
Route::post('/Dokter/store', [DokterMentalController::class, 'store'])->name('Dokter.store');
Route::get('/Dokter/{id}/edit', [DokterMentalController::class, 'edit'])->name('Dokter.edit');
Route::put('/Dokter/{id}/update', [DokterMentalController::class, 'update'])->name('Dokter.update');
Route::delete('/Dokter/{id}/destroy', [DokterMentalController::class, 'destroy'])->name('Dokter.destroy');

///Route Tampilan Kesehatan Mental
Route::get('/kesehatanmental', [KesehatanMentalController::class, 'index'])->name('kesehatanmental');
Route::get('/kesehatanmental/{id}', [KesehatanMentalController::class, 'show'])->name('isi.kesehatanmental');
Route::get('/kesehatanmental/search', [KesehatanMentalController::class, 'search'])->name('kesehatanmental.search');

//Cek Kesehatan Mental
Route::get('/anxiety/test', [AnxietyTestController::class, 'showForm'])->name('anxiety.form');
Route::post('/anxiety/submit', [AnxietyTestController::class, 'submitTest'])->name('anxiety.submit')->middleware('auth');
Route::get('/anxiety/result/{id}', [AnxietyTestController::class, 'showResult'])->name('anxiety.result');
Route::get('/mental-health', [AnxietyTestController::class, 'showPsychologistsAndPsychiatrists'])->name('cek_kesehatan');

// resiko jantungan
Route::get('/heart-disease-risk', [HeartDiseaseRiskController::class, 'showForm']);
Route::post('/heart-disease-risk', [HeartDiseaseRiskController::class, 'calculateRisk']);


