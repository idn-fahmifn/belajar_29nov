<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    // jika mau mendefiniskan tabel : singular 
    // definisikan tabel : 
    protected $table = 'barang';

    protected $fillable = [
        'nama_barang', 'merk', 'harga', 'stok', 'deskripsi'
    ];

}
