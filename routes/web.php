<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\GalleryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Auth Login dan Register
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/registeruser', [LoginController::class, 'registeruser'])->name('registeruser');
// logout
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Album
Route::get('/album', [AlbumController::class, 'index'])->name('album');
// Tambah Album
Route::get('/add-album', [AlbumController::class, 'show'])->name('add-album');
Route::post('/create', [AlbumController::class, 'create'])->name('create');

// Photo
Route::get('/photo', [PhotoController::class, 'index'])->name('photo');
// Tambah Photo
Route::get('/add-photo', [PhotoController::class, 'show'])->name('add-photo');
// Route::post('/create', [PhotoController::class, 'create'])->name('create');
