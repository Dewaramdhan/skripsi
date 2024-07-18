<?php

use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\JenisBantuanController;
// use App\Http\Controllers\DataUjiController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('penduduk', PendudukController::class);

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::resource('trainings', TrainingController::class);

Route::resource('jenis_bantuans', JenisBantuanController::class);

// Route::resource('data_uji', DataUjiController::class);