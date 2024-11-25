<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class barangKeluar extends Model
{
    protected $table = 'barangkeluar_tble';
    protected $fillable = ['id', 'id_barang', 'tgl_keluar', 'nama_barang', 'jml_keluar', 'lokasi', 'penerima'];
}
