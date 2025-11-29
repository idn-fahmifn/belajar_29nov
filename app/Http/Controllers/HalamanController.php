<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    // home
    public function home()
    {
        return view('halaman.home'); //memanggil halaman
    }

    //  profile
    public function profile()
    {
        // case jika data banyak
        $divisi_IT = 40;
        $divisi_umum = 50;
        $total_karyawan = $divisi_IT + $divisi_umum;

        return view('halaman.profile', [
            'nama' => 'Fahmi',
            'jabatan' => 'Kepala IT',
            'total' => $total_karyawan
        ]);

    }
}
