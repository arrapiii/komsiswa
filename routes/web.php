<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;

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

Route::get('/siswaa', [SiswaController::class, 'siswa'])->name('siswa');

Route::get('/inputsiswa', [SiswaController::class, 'inpsiswa'])->name('inpsiswa');

Route::post('/insertsiswa', [SiswaController::class, 'insertsiswa'])->name('insertsiswa');

Route::get('/tampilkansiswa/{id}', [SiswaController::class, 'tampilkansiswa'])->name('tampilkansiswa');
Route::post('/updatesiswa/{id}', [SiswaController::class, 'updatesiswa'])->name('updatesiswa');
Route::get('/deletesiswa/{id}', [SiswaController::class, 'deletesiswa'])->name('deletesiswa');

Route::get('/guruu', [GuruController::class, 'guru']);

Route::get('/inputguru', [GuruController::class, 'inpguru']);