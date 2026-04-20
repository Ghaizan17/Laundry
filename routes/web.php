<?php

use App\Http\Controllers\LaundryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaundryController::class, 'index'])->name('home');

Route::get('/daftar-layanan', function(){
    return view('daftar-layanan');
})->name('daftar-layanan');

Route::get('/laundry-kiloan', [LaundryController::class, 'createKiloan'])->name('laundry-kiloan');

Route::post('/laundry', [LaundryController::class, 'store'])->name('store');
Route::delete('/laundry/{id}', [LaundryController::class, 'destroy'])->name('destroy');
Route::get('/laundry/{id}/edit', [LaundryController::class, 'edit'])->name('edit');
Route::put('/laundry/{id}', [LaundryController::class, 'update'])->name('update');

Route::prefix('admin')->group(function() {
    Route::get('/dashboard', [LaundryController::class, 'dashboard'])->name('dashboard');
});