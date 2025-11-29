<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('barang.index');
    }
    
    public function report()
    {
        return "Halaman report barang";

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Halaman create barang";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($param)
    {
        return "Halaman show barang ".$param;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "Halaman edit barang";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
