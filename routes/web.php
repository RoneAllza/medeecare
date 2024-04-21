<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ForumDiskusiController;
use App\Http\Controllers\FormDiskusiController;

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

Route::get('/', [ForumDiskusiController::class, 'viewForum'])->name('forumdiskusi');
Route::get('/', [FormDiskusiController::class, 'viewForm'])->name('formdiskusi');