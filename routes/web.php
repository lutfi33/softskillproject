<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProses;
use App\Http\Controllers\LandingFasil;
use App\Http\Controllers\LandingPeserta;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\RegisterController;

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

// Login
Route::middleware(['guest'])->group(function(){
    Route::get('/',[LoginController::class, 'login'])->name('login');
    Route::post('/',[LoginController::class, 'loginProses'])->name('loginProses');
    Route::get('register',[RegisterController::class, 'register'])->name('register');
    Route::post('registerProses',[RegisterController::class, 'registerProses'])->name('registerProses');
    Route::get('/forgotpassword',[LoginController::class, 'forgotpassword'])->name('forgotpassword');
    Route::post('/prosesforgotpassword',[LoginController::class, 'prosesforgotpassword'])->name('prosesforgotpassword');
});

Route::get('/home',[AdminProses::class, 'index'])->name('datafail');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');
// Login


Route::middleware(['auth'])->group(function(){
    // Dashboard SUPERUSER
    // Fasilitator CRUD
    Route::get('/landingEror',[AdminProses::class, 'index'])->name('landingEror')->middleware('userAkses:superuser');
    Route::get('/landingSuper',[AdminProses::class, 'pageAdmin'])->name('landingSuper')->middleware('userAkses:superuser');
    Route::get('/dataFasil',[AdminProses::class, 'index'])->name('dataFasil')->middleware('userAkses:superuser');
    Route::get('/newFasil',[AdminProses::class, 'tambahFasil'])->name('tambahFasil')->middleware('userAkses:superuser');
    Route::post('/insertData',[AdminProses::class, 'insertData'])->name('insertData')->middleware('userAkses:superuser');
    Route::get('/tampilDataFasil/{id}',[AdminProses::class, 'tampilDataFasil'])->name('tampilDataFasil')->middleware('userAkses:superuser');
    Route::post('/updateDataFasil/{id}',[AdminProses::class, 'updateDataFasil'])->name('updateDataFasil')->middleware('userAkses:superuser');
    Route::get('/deleteDataFasil/{id}',[AdminProses::class, 'deleteDataFasil'])->name('deleteDataFasil')->middleware('userAkses:superuser');

    // Peserta CRUD
    Route::get('/dataPeserta',[PesertaController::class, 'dataPeserta'])->name('dataPeserta')->middleware('userAkses:superuser');
    Route::get('/tambahPeserta',[PesertaController::class, 'tambahPeserta'])->middleware('userAkses:superuser');
    Route::post('/prosesPeserta',[PesertaController::class, 'prosesPeserta'])->middleware('userAkses:superuser');
    Route::get('/tampilDataPeserta/{id}',[PesertaController::class, 'tampilDataPeserta'])->middleware('userAkses:superuser');
    Route::post('/updateDataPeserta/{id}',[PesertaController::class, 'updateDataPeserta'])->name('updateDataPeserta')->middleware('userAkses:superuser');
    Route::get('/deleteDataPeserta/{id}',[PesertaController::class, 'deleteDataPeserta'])->middleware('userAkses:superuser');
    
    // Pengguna
    Route::get('/deleteDataPengguna/{id}',[AdminProses::class, 'deleteDataPengguna'])->middleware('userAkses:superuser');
    Route::get('/dataPengguna',[AdminProses::class, 'pengguna'])->name('dataPengguna')->middleware('userAkses:superuser');
    Route::get('/newPengguna',[AdminProses::class, 'tambahPengguna'])->name('newPengguna')->middleware('userAkses:superuser');
    Route::post('/prosesInsert',[AdminProses::class, 'prosesPengguna'])->name('prosesInsert')->middleware('userAkses:superuser');

     // nilai
     Route::get('/superPenilaian',[PenilaianController::class, 'superPenilaian'])->name('superPenilaian')->middleware('userAkses:superuser');
     Route::get('/superNilai',[PenilaianController::class, 'tampilNilai'])->name('tampilNilaiSuper')->middleware('userAkses:superuser');
     Route::post('/insertDataNilaiSuper',[PenilaianController::class, 'insertDataNilaiSuper'])->name('insertDataNilaiSuper')->middleware('userAkses:superuser');
     Route::get('/superDeleteDataNilai/{id}',[PenilaianController::class, 'deleteDataNilai'])->name('deleteDataNilai')->middleware('userAkses:superuser');

    //  newpuseruser
    Route::get('/newSuperuser',[AdminProses::class, 'newSuperuser'])->name('newSuperuser')->middleware('userAkses:superuser');
    Route::post('/insertDataSuper',[AdminProses::class, 'insertDatasuper'])->name('insertDataSuper')->middleware('userAkses:superuser');

    // FILTER DATA
    Route::post('/filter', [AdminProses::class, 'filterByLevel'])->name('filter.by.level')->middleware('userAkses:superuser');
    // Dashboard SUPERUSER

    // ============================================
    // Dashboard PESERTA
    Route::get('/landingEror',[LandingPeserta::class, 'pageAdmin'])->name('landingEror')->middleware('userAkses:peserta');
    Route::get('/landingPeserta',[LandingPeserta::class, 'pageAdmin'])->name('landingPeserta')->middleware('userAkses:peserta');
    Route::get('/profilPeserta',[LandingPeserta::class, 'profilPeserta'])->name('profilPeserta')->middleware('userAkses:peserta');
    Route::get('/nilaiPeserta',[LandingPeserta::class, 'nilaiPeserta'])->name('niliaPeserta')->middleware('userAkses:peserta');
    // Dasboard PESERTA
    // =============================================
    // Dashboard FASILITATOR
    Route::get('/landingEror',[LandingFasil::class, 'pageAdmin'])->name('landingEror')->middleware('userAkses:fasilitator');
    Route::get('/landingFasil',[LandingFasil::class, 'pageAdmin'])->name('landingFasil')->middleware('userAkses:fasilitator');
    
    // nilai
    Route::get('/penilaian',[PenilaianController::class, 'tampilFasil'])->name('tampilFasil')->middleware('userAkses:fasilitator');
    Route::get('/hasilPenilaian',[PenilaianController::class, 'index'])->name('indexPenilaian')->middleware('userAkses:fasilitator');
    Route::get('/allData',[LandingFasil::class, 'tampilNilai'])->name('tampilNilai')->middleware('userAkses:fasilitator');
    Route::post('/prosesNilai',[PenilaianController::class, 'insertDataNilai'])->name('prosesNilai')->middleware('userAkses:fasilitator');
    Route::get('/deleteDataNilai/{id}',[LandingFasil::class, 'deleteDataNilai'])->name('deleteDataNilai')->middleware('userAkses:fasilitator');
    // Dashboard FASILITATOR
});




// Dashboard Peserta
// Dashboard Peserta

// Dashboard Fasilitator
// Dashboard Fasilitator