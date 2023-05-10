<?php

use App\Http\Controllers\admin\CauHoiController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\NhomNganhController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TVTSController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/TVTS-diem', [TVTSController::class, 'diem'])->name('TVTS-diem');
Route::post('/TVTS-diem', [TVTSController::class, 'resultdiem'])->name('result_diem');

Route::get('/TVTS-holland', [TVTSController::class, 'holland'])->name('TVTS-holland');
Route::post('/TVTS-holland', [TVTSController::class, 'resultHolland'])->name('result_holland');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/nhom-nganh', [NhomNganhController::class, 'index'])->name('nhom-nganh');

    Route::get('/nhom-nganh/add-nhom-nganh', [NhomNganhController::class, 'loadForm'])->name('add-nhom-nganh');
    Route::post('/nhom-nganh/add-nhom-nganh', [NhomNganhController::class, 'insert'])->name('insert_nhom_nganh');

    Route::get('/nhom-nganh/cau-hoi', [CauHoiController::class, 'index'])->name('cau-hoi');
    Route::get('/nhom-nganh/add-cau-hoi', [CauHoiController::class, 'loadform'])->name('add-cau-hoi');

    Route::get('/nhom-nganh/cau-tra-loi', [NhomNganhController::class, 'index'])->name('cau-tra-loi');
});
