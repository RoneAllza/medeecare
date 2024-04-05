<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('home');
=======
Route::get('/', [UserController::class, 'homepage'])->name('homepage')->middleware('checkIfNotAdmin');
Route::get('/SignIn', [AuthController::class, 'login'])->name('login');
Route::post('/SignIn-Process', [AuthController::class, 'login_process'])->name('login-process');
Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkrole:Pasien']], function(){
    Route::get('/Features', [UserController::class, 'feature'])->name('feature');
>>>>>>> Stashed changes
});
Route::get('/SignIn', [LoginController::class, 'login'])->name('login');
