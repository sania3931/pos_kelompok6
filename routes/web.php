<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Front\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'indexLogin'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
// Route::group(['middleware'=> ['auth']], function(){
Route::get('/reload-captcha', [RegisterController::class, 'reloadCaptcha']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/users', UserController::class);

// Route::middleware(['auth', 'Checklevel:super admin'])->group(function() {
//     Route::prefix('super admin')->group(function() {
//     });
// });
// Route::middleware(['auth', 'Checklevel:administrator'])->group(function() {
//     Route::prefix('administrator')->name('administrator.')->group(function() {
//     });
// });
Route::get('/dashboard', function () {
    return view('templates.admin.main');
})->name('dashboard');
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
