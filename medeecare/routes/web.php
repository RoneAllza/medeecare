<?php

use App\Http\Controllers\ArticleCovidController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\TestCovidController;
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
use App\Http\Controllers\TesKecemasanController;
use App\Http\Controllers\HomepageKesehatanKulitController;
use App\Http\Controllers\AnxietyTestController;
use App\Http\Controllers\DokterMentalController;
use App\Http\Controllers\KesehatanMentalController;
use App\Http\Controllers\HeartDiseaseRiskController;
use App\Http\Controllers\ArtikelKulitController;
use App\Http\Controllers\BMIController;
use App\Http\Controllers\ObatKulitController;
use App\Http\Controllers\MedicationRecommendationController;
use App\Http\Controllers\HeartDiseaseCalculatorController;
use App\Http\Controllers\DiabetesRiskController;
use App\Http\Controllers\HomepageForumController;
use App\Http\Controllers\DiabetesTestController;
use App\Http\Controllers\LifestyleRecommendationController;
use App\Http\Controllers\DiabetesPreventionController;
use App\Http\Controllers\RekomendasiObatController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\FormReservasiController;
use App\Http\Controllers\ResumeReservasiController;
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


Route::get('/', [UserController::class, 'homepage'])->name('homepage')->middleware('checkIfNotAdmin');
Route::get('/SignIn', [AuthController::class, 'login'])->name('login');
Route::post('/SignIn-Process', [AuthController::class, 'login_process'])->name('login-process');
Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'checkrole:Pasien']], function(){
    Route::get('/Features', [UserController::class, 'feature'])->name('feature');
    Route::get('/Profile', [UserController::class, 'profile'])->name('profile');
    Route::put('/Profile-Process', [UserController::class, 'updateProfile'])->name('updateProfile');
    Route::get('/CalculatorBMI', [BMIController::class, 'bmi'])->name('bmi');
    Route::post('/CalculatorBMI-Result', [BMIController::class, 'bmi_result'])->name('bmi-result');

    
    // resiko jantungan
    Route::get('/heart-disease-risk', [HeartDiseaseRiskController::class, 'showForm']);
    Route::post('/heart-disease-risk', [HeartDiseaseRiskController::class, 'calculateRisk']);
    Route::get('/medication-recommendation', [MedicationRecommendationController::class, 'showRecommendations']);
    Route::get('/heart-disease-calculator', [HeartDiseaseCalculatorController::class, 'showCalculator']);
    Route::post('/heart-disease-calculator', [HeartDiseaseCalculatorController::class, 'calculateRisk']);

    //resiko diabetes
    Route::get('/diabetes-risk', [DiabetesRiskController::class, 'show'])->name('diabetes-risk.show');
    Route::get('/diabetes-test', [DiabetesTestController::class, 'show'])->name('diabetes-test.show');
    Route::post('/diabetes-test', [DiabetesTestController::class, 'calculate'])->name('diabetes-test.calculate');
    Route::get('/lifestyle-recommendation', [LifestyleRecommendationController::class, 'show'])->name('lifestyle-recommendation');
    Route::get('/diabetes-prevention', [DiabetesPreventionController::class, 'show'])->name('diabetes-prevention');


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

//Route registrasi
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

// Forum Diskusi Kesehatan
Route::get('/forum', [ForumDiskusiController::class, 'viewForum'])->name('forumdiskusikesehatan');
Route::get('/pengisian-form', [FormDiskusiController::class, 'viewForm'])->name('formdiskusikesehatan');
Route::get('/homepage-forum/mental', [HomepageKesehatanMentalController::class, 'viewHomepage'])->name('homepage-mental');
Route::get('/homepage-forum/diabetes', [HomepageDiabetesController::class, 'viewHomepage'])->name('homepage-diabetes');
Route::get('/homepage-forum/parenting', [HomepageParentingController::class, 'viewHomepage'])->name('homepage-parenting');
Route::get('/homepage-forum/pregnancy', [HomepagePregnancyController::class, 'viewHomepage'])->name('homepage-pregnancy');
Route::get('/homepage-forum/infection', [HomepageInfectionController::class, 'viewHomepage'])->name('homepage-infection');
Route::get('/homepage-forum/sport', [HomepageSportController::class, 'viewHomepage'])->name('homepage-sport');

//Tes Kecemasan
Route::get('/tes-kecemasan', [TesKecemasanController::class, 'pertanyaan'])->name('tes-kecemasan.pertanyaan');
Route::post('/tes-kecemasan/hasil', [TesKecemasanController::class, 'simpanHasil'])->name('tes-kecemasan.hasil');
Route::get('/tes-kecemasan/hasil/{id}', [TesKecemasanController::class, 'lihatHasil'])->name('tes-kecemasan.lihat-hasil');

//articlecovid
Route::get('/ArticleCovid', [ArticleCovidController::class, 'FuncArticleCovid'])->name('ArticleCovid');

//testcovid
Route::get('/TestCovid', [TestCovidController::class, 'FuncTestCovid'])->name('TestCovid');
Route::post('/TestCovid/submit', [TestCovidController::class, 'submitTestCovid'])->name('covid.submit');
Route::get('/TestCovid/result', [TestCovidController::class, 'showResultCovid'])->name('covid.result');

// Cek Kesehatan Kulit
Route::get('/homepage-kesehatankulit', [HomepageKesehatanKulitController::class, 'viewHomepageKesehatanKulit'])->name('homepagekesehatankulit');
Route::get('/homepage-kesehatankulit/artikel', [HomepageKesehatanKulitController::class, 'viewArtikel'])->name('detailArtikel');
Route::get('/homepage-kesehatankulit/obat-kulit', [ObatKulitController::class, 'viewObatKulit'])->name('obatkulit');
Route::get('/sehatkulit', [HomepageKesehatanKulitController::class, 'viewHomepageKesehatanKulit'])->name('homepagekesehatankulit');

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
Route::post('/anxiety/submit', [AnxietyTestController::class, 'submitTest'])->name('anxiety.submit');
Route::get('/anxiety/result', [AnxietyTestController::class, 'showResult'])->name('anxiety.result');
Route::get('/mental-health', [AnxietyTestController::class, 'showPsychologistsAndPsychiatrists'])->name('cek_kesehatan');

//route penyakit untuk rekomendasi obat
Route::get('/penyakit', [RekomendasiObatController::class, 'index'])->name('penyakit');
Route::get('/penyakit/create', [RekomendasiObatController::class, 'create'])->name('penyakit.create');
Route::post('/penyakit/store', [RekomendasiObatController::class, 'store'])->name('penyakit.store');
Route::get('/penyakit/{id}/edit', [RekomendasiObatController::class, 'edit'])->name('penyakit.edit');
Route::put('/penyakit/{id}/update', [RekomendasiObatController::class, 'update'])->name('penyakit.update');
Route::delete('/penyakit/{id}/destroy', [RekomendasiObatController::class, 'destroy'])->name('penyakit.destroy');

//route obat untuk rekomendasi obat
Route::get('/obat', [ObatController::class, 'index'])->name('obat');
Route::get('/obat/create', [ObatController::class, 'create'])->name('obat.create');
Route::post('/obat/store', [ObatController::class, 'store'])->name('obat.store');
Route::get('/obat/{id}/edit', [ObatController::class, 'edit'])->name('obat.edit');
Route::put('/obat/{id}/update', [ObatController::class, 'update'])->name('obat.update');
Route::delete('/obat/{id}/destroy', [ObatController::class, 'destroy'])->name('obat.destroy');

Route::get('/rekomendasiobat', [RekomendasiObatController::class, 'rekomendasiobat'])->name('rekomendasiobat');
Route::get('/rekomendasiobat/{penyakit}', [RekomendasiObatController::class, 'penyakit'])->name('rekomendasiobat.penyakit');

// Reservasi Nomor Antrian
Route::get('/reservasi', [FormReservasiController::class, 'viewFormReservasi'])->name('formreservasi');
Route::post('/submit-reservasi', [FormReservasiController::class, 'submitForm'])->name('submit-reservasi');
Route::get('/reservasi/resume', [ResumeReservasiController::class, 'viewResumeReservasi'])->name('resumereservasi');
