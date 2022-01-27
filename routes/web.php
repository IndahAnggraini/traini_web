<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\PortalController;
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

//utk menampilkan Front End di home atau kompas.com
Route::get('/home', [PortalController::class, 'homee']);

//utk menampilkan Front End di TREN atau kompas.com -- news [poin 2 tugas pertemuan 6]
Route::get('/tren', [PortalController::class, 'trenn']);

//utk menampilkan Front End di ISI TREN atau kompas.com -- news [poin 3 tugas pertemuan 6]
Route::get('/detail', [PortalController::class, 'detail_berita']);

Route::get('/', [PenulisController::class, 'index']);

//utk auth google, login dengan akun google
Route::get('/auth/google', [AuthController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

//logout
Route::get('/logout', [AuthController::class, 'logout']);


//login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/submit-login', [AuthController::class, 'submitLogin']);

Route::post('/submit-register', [AuthController::class, 'submitRegister']);

Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('/submit-forgot', [AuthController::class, 'submitForgot']);

Route::get('/recover-password', [AuthController::class, 'recoverPassword']);
Route::post('/submit-recover', [AuthController::class, 'submitRecover']);

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

Route::get('/semua-artikel', [PenulisController::class, 'semuaArtikel'])->middleware('isWriter');

//route nya utk memeriksa yaitu auth dan iswriter, lnjt di kernel.php yg mana auth th harus login,
Route::middleware(['auth', 'isWriter'])->group(function() {
    Route::get('/semua-artikel-fetch', [PenulisController::class, 'fetch']);
    Route::post('/saveArtikel', [PenulisController::class, 'saveArtikel']);
    Route::get('/semua-artikel-hapus/{id}', [PenulisController::class, 'hapus']);
    Route::get('/semua-artikel-edit/{id}', [PenulisController::class, 'edit']);
    Route::get('/semua-artikel-edit-fetch/{id}', [PenulisController::class, 'editFetch']);
    Route::post('/editArtikel/submit', [PenulisController::class, 'editSubmit']);
});


