<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BerandaController;


/*
|-------------------------------------------------------------------------
-
| Web Routes
|-------------------------------------------------------------------------
-
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class,
'index'])->name('home');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::resources([
    'roles' => RoleController::class,
    'users' => UserController::class,
    'products' => ProductController::class,
    'mahasiswas' => MahasiswaController::class,
    // 'permissions' => PermissionController::class,
]);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/beranda', function () {
    return view('beranda');
})->name('beranda');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/login-admin', function () {
    return view('auth.login-admin');
})->name('login-admin');

Route::get('/hasil-pencarian', function () {
    return view('guest.hasil-pencarian');
})->name('hasil-pencarian');

Route::get('/data-alumni', function () {
    return view('alumni.biodata');
})->name('biodata');
