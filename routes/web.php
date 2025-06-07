<?php

use Illuminate\Support\Facades\Route;
use App\Models\Departemen;
use App\Models\Pegawai;
use App\Http\Controllers\PegawaiController;

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

Route::get('/', [PegawaiController::class, "TampilDataPegawai"]);
Route::get('/pegawai/buat', [PegawaiController::class, "TambahPegawai"]);
Route::post('/pegawai/buat', [PegawaiController::class, "Simpan"]);
Route::get('/pegawai/edit/{nip}', [PegawaiController::class, "Edit"]);
Route::post('/pegawai/edit/{nip}', [PegawaiController::class, "UpdateEdit"]);
Route::get('/pegawai/hapus/{nip}', [PegawaiController::class, "Hapus"]);




