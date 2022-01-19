<?php

use App\Http\Controllers\PenulisController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/', [PenulisController::class, 'index']);

Route::post('/saveArtikel', [PenulisController::class, 'saveArtikel']);

Route::get('/semua-artikel', [PenulisController::class, 'semuaArtikel']);

Route::get('/semua-artikel-fetch', [PenulisController::class, 'fetch']);

Route::get('/semua-artikel-hapus/{id}', [PenulisController::class, 'hapus']);

Route::get('/semua-artikel-edit/{id}', [PenulisController::class, 'edit']);

Route::get('/semua-artikel-edit-fetch/{id}', [PenulisController::class, 'editFetch']);

Route::post('/editArtikel/submit', [PenulisController::class, 'editSubmit']);

Route::get('/publish', [PenulisController::class, 'publishh']);

Route::get('/publishGet', [PenulisController::class, 'get_publish']);

Route::get('/draft', [PenulisController::class, 'draftt']);

Route::get('/draftGet', [PenulisController::class, 'get_draft']);

Route::get('/kategori', [PenulisController::class, 'get_kategori']);

Route::get('/menusemuakategori', [PenulisController::class, 'menu_semuakategori']);

Route::get('/getsemuakategori', [PenulisController::class, 'get_semuakategori']);

Route::get('/menukategori', [PenulisController::class, 'menu_kategori']);

Route::post('/saveKategori', [PenulisController::class, 'saveKategori']);

Route::get('/kategori-hapus/{id}', [PenulisController::class, 'kategoriHapus']);

Route::get('/kategori-edit/{id}', [PenulisController::class, 'kategoriEdit']);

Route::get('/kategori-edit-fetch/{id}', [PenulisController::class, 'kategoriFetch']);

Route::post('/editkategori/submit', [PenulisController::class, 'kategoriSubmit']);
