<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PelanggaranController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SisPel;
use App\Models\SiswaPelanggaran;

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


Route::get('/input', function () {
    return view('inputguru');
});

Route::get('/inputt', function () {
    return view('inputsiswa');
});

Route::get('/guruu', function () {
    return view('dataguru');
});

Route::get('/inputguru', function () {
    return view('inputguru');
});

// login regist logout
Route::get('/', [LoginController::class, 'login'])->name('login');

Route::get('/register', [LoginController::class, 'register'])->name('register');

Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');

Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// siswa
Route::get('/siswaa', [SiswaController::class, 'siswa'])->name('siswa');

Route::get('/inputsiswa', [SiswaController::class, 'inpsiswa'])->name('inpsiswa');

Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');

Route::get('/tampilkansiswa/{id}', [SiswaController::class, 'tampilkansiswa'])->name('tampilkansiswa');

Route::get('/detailsiswa/{id}', [SiswaController::class, 'detailsiswa'])->name('detailsiswa');

Route::post('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('updatesiswa');

Route::get('/deletesiswa/{id}', [SiswaController::class, 'deletesiswa'])->name('deletesiswa');

// pelanggaran
Route::get('/pelanggaran', [PelanggaranController::class, 'pelanggaran'])->name('pelanggaran');

Route::get('/inputpelanggaran', [PelanggaranController::class, 'inppelanggaran'])->name('inppelanggaran');

Route::post('/insertpelanggaran', [PelanggaranController::class, 'insertpelanggaran'])->name('insertpelanggaran');

Route::get('/tampilkanpelanggaran/{id}', [PelanggaranController::class, 'tampilkanpelanggaran'])->name('tampilkanpelanggaran');

Route::post('/updatepelanggaran/{id}', [PelanggaranController::class, 'updatepelanggaran'])->name('updatepelanggaran');

Route::get('/deletepelanggaran/{id}', [PelanggaranController::class, 'deletepelanggaran'])->name('deletepelanggaran');

// guru
Route::get('/guruu', [GuruController::class, 'guru'])->name('guru');

Route::get('/inputguru', [GuruController::class, 'inpguru'])->name('inpguru');

Route::post('/insertguru', [GuruController::class, 'insertguru'])->name('insertguru');

Route::get('/tampilkanguru/{id}', [GuruController::class, 'tampilkanguru'])->name('tampilkanguru');

Route::post('/updateguru/{id}', [GuruController::class, 'updateguru'])->name('updateguru');

Route::get('/deleteguru/{id}', [GuruController::class, 'deleteguru'])->name('deleteguru');

// transaksi
// Route::get('/transaksi', function(SiswaPelanggaran $siswapelanggaran){
//     $siswapelanggaran->create(['siswa_id' => '2', 'pelanggaran_id' => '1']);
//     $siswapelanggaran->create(['siswa_id' => '2', 'pelanggaran_id' => '2']);
//     $siswapelanggaran->create(['siswa_id' => '3', 'pelanggaran_id' => '2']);
//     $siswapelanggaran->create(['siswa_id' => '3', 'pelanggaran_id' => '1']);

//     return 'berhasil ditambah';

    
// });

Route::get('/transaksii',[SisPel::class, 'getSiswa'])->middleware('auth');

Route::get('/inputpelanggar',[SisPel::class, 'inputpelanggar'])->name('inputpelanggar');

Route::post('/insertpelanggar',[SisPel::class, 'insertpelanggar'])->name('insertpelanggar');

Route::get('/tampilpelanggar',[SisPel::class, 'tampilpelanggar'])->name('tampilpelanggar');

Route::get('/deletepelanggar/{id}', [SisPel::class, 'deletepelanggar'])->name('deletepelanggar');
