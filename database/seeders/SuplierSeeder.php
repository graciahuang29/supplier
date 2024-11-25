<?php

namespace Database\Seeders;

use App\Models\Suplier; // Pastikan Anda mengimpor model Suplier
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data ke tabel supplier
        Suplier::create([
            'id_supplier' => 1111,
            'nama_supplier' => 'PT ANDREW',
            'alamat_supplier' => 'Cengkareng',
            'telp_supplier' => '1234567890', // Pastikan Anda memberikan nilai untuk telp_supplier
        ]);

        // Menambahkan data lainnya jika diperlukan
        Suplier::create([
            'id_supplier' => 1112,
            'nama_supplier' => 'PT BANGUN',
            'alamat_supplier' => 'Jakarta Selatan',
            'telp_supplier' => '0987654321',
        ]);

        // Anda bisa menambahkan lebih banyak data sesuai kebutuhan
    }
}
