<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PinjamBarang extends Model
{
    protected $table = 'pinjambarang';
    protected $fillable = ['id_pinjam', 'peminjam', 'tgl_pinjam', 'id_barang', 'jml_barang', 'nama_barang', 'tgl_kembali', 'kondisi'];
}
