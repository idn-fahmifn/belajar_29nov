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
        ]);

        // session agar data umur bisa diperiksa oleh middleware.

        $request->session()->put('age', $request->umur);
        
        return redirect()->route('umur.success');

    }
}
