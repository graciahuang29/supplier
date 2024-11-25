<?php

namespace Database\Seeders;

use App\Models\stok; // Pastikan Anda mengimpor model Suplier
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data ke tabel supplier
        Stok::create([
            'id_barang' => 1111,
            'nama_barang' => 'Pintu',
            'jml_masuk' => '2',
            'jml_keluar' => '1', // Pastikan Anda memberikan nilai untuk telp_supplier
            'total_barang' => '8',
        ]);

        // Menambahkan data lainnya jika diperlukan
        Stok::create([
            'id_barang' => 1122,
            'nama_barang' => 'Mesin',
            'jml_masuk' => '5',
            'jml_keluar' => '1', // Pastikan Anda memberikan nilai untuk telp_supplier
            'total_barang' => '18',
        ]);

        // Anda bisa menambahkan lebih banyak data sesuai kebutuhan
    }
}
