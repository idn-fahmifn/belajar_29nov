<?php

use App\Http\Controllers\HalamanController;
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
Route::get('mobil/{param}', function($param){
    $merk = $param;
    return 'Ini adalah detail mobil '.$merk;
})->name('mobil');

// - parameter Optional
Route::get('motor/{param?}', function($param = 'honda'){
    $merk = $param;
    return 'Ini adalah detail motor '.$merk;
})->name('motor');






