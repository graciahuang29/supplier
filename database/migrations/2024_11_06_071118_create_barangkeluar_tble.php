<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('barangkeluar_tble', function (Blueprint $table) {
            $table->id();
            $table->integer('id_barang');
            $table->string('nama_barang');
            $table->string('tgl_keluar');
            $table->integer('jml_keluar');
            $table->string('lokasi');
            $table->string('penerima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barangkeluar_tble');
    }
};
