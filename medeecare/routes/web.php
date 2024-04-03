<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\Controller;

=======
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
>>>>>>> 3c21ab1c8a2ba037363110fa550ab39126b2872d

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

Route::get('/', [UserController::class, 'homepage'])->name('homepage');
Route::get('/SignIn', [AuthController::class, 'login'])->name('login');
Route::post('/SignIn-Process', [AuthController::class, 'login_process'])->name('login-process');
Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkrole:Pasien']], function(){
});
<<<<<<< HEAD
Route::get('/SignIn', [LoginController::class, 'login'])->name('login');
// Route for informasipenyakit
Route::get('/infopenyakit', [GuestController::class, 'informasipenyakit'])->name('informasipenyakit');
=======

Route::group(['middleware' => ['auth', 'checkrole:Admin']], function(){
    Route::get('/admin', [AdminController::class, 'index']);
});
>>>>>>> 3c21ab1c8a2ba037363110fa550ab39126b2872d
