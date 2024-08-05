<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DashboardController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Departemen Route
    Route::get('/departemen', [DepartemenController::class, 'index'])->name('departemen');
    Route::get('/departemen/tambah', [DepartemenController::class, 'tambah']);
    Route::post('/departemen/proses', [DepartemenController::class, 'proses'])->name('departemen.proses');
    Route::get('/departemen/edit/{id}', [DepartemenController::class, 'edit'])->name('departemen.edit');
    Route::post('/departemen/update/{id}', [DepartemenController::class, 'update']);
    Route::get('/departemen/hapus/{id}', [DepartemenController::class, 'hapus']);

    //employee Route
    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee');
    Route::get('/employee/tambah', [EmployeeController::class, 'tambah']);
    Route::post('/employee/proses', [EmployeeController::class, 'proses'])->name('employee.proses');
    Route::get('/employee/edit/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::post('/employee/update/{id}', [EmployeeController::class, 'update'])->name('employee.update');;
    Route::get('/employee/hapus/{id}', [EmployeeController::class, 'hapus']);
});


require __DIR__.'/auth.php';
