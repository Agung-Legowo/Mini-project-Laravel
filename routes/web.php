<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KirimEmailController;

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
    return view('beranda',[
    			"title" => "beranda",
    			"active" => "beranda",
		]);
});


//Halaman Frontend
Route::get('/beranda', [MenuController::class, 'home']);
Route::get('info-kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('tentang-kami', [MenuController::class, 'tentang_kami']);

//Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//Register
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//CRUD SISWA
Route::resource('siswa', SiswaController::class);

//Kirim Email
Route::get('formemail', [KirimEmailController::class, 'index']);
Route::post('kirim', [KirimEmailController::class, 'kirim']);