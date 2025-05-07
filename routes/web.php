<?php
use Illuminate\Support\Facades\Route;



use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PengelolaanController;
Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['checklogin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/profile', [ProfileController::class, 'index']);
});

Route::get('/pengelolaan', [PengelolaanController::class, 'index']);
Route::post('/pengelolaan/tambah', [PengelolaanController::class, 'tambah']);
Route::post('/pengelolaan/hapus/{index}', [PengelolaanController::class, 'hapus']);
Route::post('/pengelolaan/edit/{index}', [PengelolaanController::class, 'edit']);
Route::post('/pengelolaan/update/{index}', [PengelolaanController::class, 'update']);

