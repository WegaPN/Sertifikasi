<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkemaController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\FormController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


// Grup rute yang menggunakan middleware 'auth'
Route::middleware(['auth'])->group(function() {

    // Rute untuk Form
    Route::get('/form/create', [FormController::class, 'create'])->name('form.create');

    // Rute untuk Skema
    Route::resource('skema', SkemaController::class)->except([
        'show' // Tidak memerlukan rute untuk menampilkan satu data
    ]);
    Route::get('/skema/search', [SkemaController::class, 'search'])->name('skema.search');

    // Rute untuk Peserta
    Route::resource('peserta', PesertaController::class)->except([
        'show' // Tidak memerlukan rute untuk menampilkan satu data
    ]);
    Route::get('/peserta/search', [PesertaController::class, 'search'])->name('peserta.search');
    
});
