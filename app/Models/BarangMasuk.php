<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barangMasuk extends Model
{
    protected $table = 'barangmasuk';
    protected $fillable = ['id', 'id_barang', 'tgl_masuk', 'nama_barang', 'jml_masuk', 'id_supplier'];
}
