<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\SuperAdmin\BarangController;
use App\Http\Controllers\SuperAdmin\KategoriController;
use App\Http\Controllers\SuperAdmin\SuplierController;
use App\Http\Controllers\SuperAdmin\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return redirect()->route('login');
// });
Route::get('/login', [LoginController::class, 'indexLogin'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Route::group(['middleware'=> ['auth']], function(){
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::resource('/users', UserController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [ControllersHomeController::class, 'index'])->name('home');
    Route::middleware(['superadmin'])->group(function() {
        Route::prefix('super-admin')->group(function() {
            Route::get('/dashboard', function () {
                return view('templates.admin.main');
            })->name('superadmin_dashboard');
            Route::resource('/users', UserController::class);
            Route::resource('/kategori', KategoriController::class);
            Route::resource('/barang', BarangController::class);
            Route::resource('/suplier', SuplierController::class);
            Route::post('/kategori/data', [KategoriController::class,'data'])->name('kategori.data');
            Route::post('/users/showUser', [UserController::class,'getDataUser'])->name('showUser');
            Route::delete('/users/delete', [UserController::class,'delete'])->name('deleteUser');
        });
    });
    Route::middleware(['administrator'])->group(function() {
        Route::prefix('administrator')->group(function() {
            Route::get('/dashboard', function () {
                return view('templates.admin.main');
            })->name('admin_dashboard');
        });
    });
});
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('templates.admin.main');
//     });
// });

// Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/login', [AuthController::class, 'login']);
// Route::get('/login', [AuthController::class, 'login']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// });
