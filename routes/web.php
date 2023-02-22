<?php

use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SewaController;
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
    return view('home', [
        'title' => 'Halaman Home Webste'
    ]);
});

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::get('register', 'register');
    Route::get('logout', 'logout');
    Route::post('login/proses', 'proses');
    Route::post('login/proses_register', 'proses_register');
});

Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['CekUserLogin:1']], function () {
        Route::controller(SewaController::class)->group(function () {
            Route::get('sewa', 'index')->name('sewa');
        });
    });
});
