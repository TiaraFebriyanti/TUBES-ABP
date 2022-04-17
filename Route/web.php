<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\WebsiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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

Route::get('/', [WebsiteController::class, 'home']);
Route::get('pariwisata', [WebsiteController::class, 'pariwisata']);
Route::get('kontak', [WebsiteController::class, 'kontak']);
Route::get('admin', [UserController::class, 'admin']);
Route::view("jamgadang", 'jamgadang');
Route::view("masjidraya", 'masjidraya');
Route::view("danausingkarak", 'danausingkarak');
Route::view("istanapagaruyuang", 'istanapagaruyuang');
Route::view("lembahharau", 'lembahharau');
Route::view("pantaicaroline", 'pantaicaroline');
Route::view("register", 'register');
Route::get('admin', function () { return view('admin'); })->middleware('checkRole:admin');
Route::get('userbiasa', function () { return view('userbiasa'); })->middleware(['checkRole:userbiasa,admin']);





Route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('tampiluser', [UserController::class, 'tampiluser'])->name('tampiluser')->middleware('auth');
Route::get('tambahuser', [UserController::class, 'tambahuser'])->name('tambahuser')->middleware('auth');
Route::post('simpanuser', [UserController::class, 'simpanuser'])->name('simpanuser')->middleware('auth');
Route::get('ubahuser', [UserController::class, 'ubahuser'])->name('ubahuser')->middleware('auth');
Route::post('updatemodel', [UserController::class, 'updateuser'])->name('updateuser')->middleware('auth');
Route::get('hapususer', [UserController::class, 'hapususer'])->name('hapususer')->middleware('auth');