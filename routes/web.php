<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ParamedikController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/about', function () {
//     return view('about',[
//         'nama' => 'Qomariah Syifa Fadillah',
//         'prodi' => 'Information System'
//     ]);
// });

// Route::get('/salam', function () {
//     return "Assalamualaikum Warohmatullahi Wabarakatuh";
// });

// Route::get('/salam/{name}', function ($name) {
//     return "Assalamualaikum Warohmatullahi Wabarakatuh $name";
// });

// Route::get('produk', function () {
//     return view ('produk.index');
// });

// Route::get('produk/{id}', function ($id) {
//     return view ('produk.index', ['idproduk' => $id]);
// });

// use App\Http\Controllers\ProdiController;  
// Route::get('/prodi', [ProdiController::class, 'show'])->name('prodi.show');  //show adalah function/method

Route::middleware('auth')->group(function () {
    Route::get('/pasien/show', [PasienController::class, 'show'])->name('pasien.show');
});


Route::get('/paramedik/show', [ParamedikController::class, 'show']);

Route::get('/pasien/index', [PasienController::class, 'index'])->name('pasien.index');

Route::get('/pasien/create', [PasienController::class, 'create'])->name('pasien.create');

Route::get('/pasien/store', [PasienController::class, 'store'])->name('pasien.store');

Route::get('/admin',[AdminController::class,'index']);

require __DIR__.'/auth.php';
