<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Barang::create([
        //     'nama_barang' => 'Laptop',
        //     'merk' => 'Lenovo',
        //     'harga' => 2000000,
        //     'stok' => 10,
        //     'deskripsi' => 'Laptop murah tapi bukan murahan',
        // ]);

        Barang::factory()->count(100)->create();

    }
}
