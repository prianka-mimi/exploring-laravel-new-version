<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('log-out', [DashboardController::class, 'logout'])->name('log-out');
Route::get('profile', [DashboardController::class, 'profile'])->name('profile');

Route::get('user', [UserController::class, 'index'])->name('user');
Route::get('user/add', [UserController::class, 'create'])->name('user-add');
Route::post('user/store', [UserController::class, 'store'])->name('user-store');

Route::get('patients', [PatientController::class, 'index'])->name('patients');
Route::get('patients/add', [PatientController::class, 'create'])->name('patients-add');
Route::post('patients/store', [PatientController::class, 'store'])->name('patients-store');
Route::get('patients/view/{patient_slug}', [PatientController::class, 'show'])->name('patients-view');

require __DIR__.'/auth.php';
