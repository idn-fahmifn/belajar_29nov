<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }
    public function success()
    {
        return view('umur.success');
    }

    // proses untuk mengambil dan redirect ke halam sukses
    public function proses(Request $request)
    {
        $request->validate([
            'nama' => ['required', 'string', 'min:3', 'max:30'],
            'umur' => ['required', 'integer', 'min:1', 'max:99'] //20
        ],[
            'nama.required' => "Nama wajib diisi",
            'nama.string' => "Nama isisnya adalah karakter",
            'nama.min' => "Masukan minimal 3 karakter",
            'nama.max' => "Masukan maksimal 30 karakter",

            'umur.required' => "Umur wajib diisi",
            'umur.integer' => "Umur isinya adalah angka",
            'umur.min' => "Masukan minimal Umur 1",
            'umur.max' => "Masukan maksimal Umur 99",
        ]);

        // session agar data umur bisa diperiksa oleh middleware.

        $request->session()->put('age', $request->umur);

        return redirect()->route('umur.success');

    }
}
