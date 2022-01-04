<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PembimbingController;
use App\Models\Pembimbing;

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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/mahasiswas', [MahasiswaController::class, 'getAllMahasiswas']);
Route::get('/mahasiswas/{mahasiswa:nim}', [MahasiswaController::class, 'getOneMahasiswa']);

Route::get('/pembimbings', [PembimbingController::class, 'getAllPembimbings']);
Route::get('/pembimbing/{pembimbing:kode_pembimbing}', [PembimbingController::class, 'getOnePembimbing']);
