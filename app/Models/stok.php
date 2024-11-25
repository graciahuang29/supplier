<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stok extends Model
{
    protected $table = 'stokbarang';
    protected $fillable = ['id_barang', 'nama_barang', 'jml_masuk', 'jml_keluar', 'total_barang'];
    public $incrementing = false; // karena 'id_barang' adalah primary key yang bukan auto-increment
}
