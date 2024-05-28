<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumDiskusiController;
use App\Http\Controllers\FormDiskusiController;
use App\Http\Controllers\HomepageKesehatanMentalController;
use App\Http\Controllers\HomepageDiabetesController;
use App\Http\Controllers\HomepageParentingController;
use App\Http\Controllers\HomepagePregnancyController;
use App\Http\Controllers\HomepageInfectionController;
use App\Http\Controllers\HomepageSportController;

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

Route::get('/forum', [ForumDiskusiController::class, 'viewForum'])->name('forumdiskusikesehatan');
Route::get('/pengisian-form', [FormDiskusiController::class, 'viewForm'])->name('formdiskusikesehatan.viewForm');
Route::post('/submit-forum', [FormDiskusiController::class, 'submitForm'])->name('submit-forum');
Route::get('/homepage-forum/mental', [HomepageKesehatanMentalController::class, 'viewHomepage'])->name('homepage-mental');
Route::get('/homepage-forum/diabetes', [HomepageDiabetesController::class, 'viewHomepage'])->name('homepage-diabetes');
Route::get('/homepage-forum/parenting', [HomepageParentingController::class, 'viewHomepage'])->name('homepage-parenting');
Route::get('/homepage-forum/pregnancy', [HomepagePregnancyController::class, 'viewHomepage'])->name('homepage-pregnancy');
Route::get('/homepage-forum/infection', [HomepageInfectionController::class, 'viewHomepage'])->name('homepage-infection');
Route::get('/homepage-forum/sport', [HomepageSportController::class, 'viewHomepage'])->name('homepage-sport');

