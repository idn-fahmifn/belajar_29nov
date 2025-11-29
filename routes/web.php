<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});

// Basic Routing in Laravel
// verb : post, put, delete
// view = menampilkan langsung halaman tanpa ada function
// resource = operasi CRUD

Route::get('profile', function(){

    // case jika data banyak
    $divisi_IT = 40;
    $divisi_umum = 50;
    $total_karyawan = $divisi_IT + $divisi_umum;

    return view('halaman.profile',[
        'nama' => 'Fahmi',
        'jabatan' => 'Kepala IT',
        'total' => $total_karyawan
    ]);


})->name('halaman.profile'); //hanya nama


Route::get('home', function(){

    return view('halaman.home'); //memanggil halaman
    
})->name('halaman.home'); //hanya nama


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






