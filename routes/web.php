<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\UmurController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Basic Routing in Laravel
// verb : post, put, delete
// view = menampilkan langsung halaman tanpa ada function
// resource = operasi CRUD

Route::get('profile', [HalamanController::class, 'profile'])
    ->name('halaman.profile'); //hanya nama


Route::get('home', [HalamanController::class, 'home'])
    ->name('halaman.home'); //hanya nama


// Route dengan Parameter
//  - Parameter wajib

Route::get('mobil/create', function () {
    return "create mobil";
});

Route::get('mobil/{param}', function ($param) {
    $merk = $param;
    return 'Ini adalah detail mobil ' . $merk;
})->name('mobil');



// - parameter Optional
Route::get('motor/{param?}', function ($param = 'honda') {
    $merk = $param;
    return 'Ini adalah detail motor ' . $merk;
})->name('motor');

// Group untun Routing
// 1. kelompokan berdasarkan prefix
// 2. kelompokan berdasarkan middleware
Route::prefix('training')->group(function () {

    Route::get('mtcna', function () {
        return "Ini adalah kelas mtcna";
    });
    Route::get('ccna', function () {
        return "Ini adalah kelas ccna";
    });
    Route::get('mtcine', function () {
        return "Ini adalah kelas mtcine";
    });

    Route::prefix('programming')->group(function () {
        Route::get('laravel', function () {
            return "Ini adalah kelas laravel";
        });
    });
});

// Routing dengan resource 
Route::resource('barang', BarangController::class);

// Index
// Route::get('barang/{param}' controller index);
// Route::put/patch('barang/{param}' controller index);
// Route::delete('barang/{param}' controller index);



Route::get('barang-report', [BarangController::class, 'report'])
    ->name('barang.report');

// get => menampilkan (data, halaman, respon);
// post => mengirimkan request -> server;
// put/patch => mengubah data dengan request baru -> server;
// delete => Menghapus data

// Route Umur
Route::prefix('umur')->group(function(){
    // 2 halaman : form -> success

    Route::get('form', [UmurController::class, 'form'])
    ->name('umur.form');

});











