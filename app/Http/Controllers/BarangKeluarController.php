<?php

namespace App\Http\Controllers;

use App\Models\BarangKeluar;
use Illuminate\Http\Request;

class BarangKeluarController extends Controller
{
    // Menampilkan data barang keluar
    public function index()
    {
        $barangkeluar_tble = BarangKeluar::all(); // Mengambil semua data barang keluar
        return view('barangkeluar.index', compact('barangkeluar_tble'));
    }

    // Menampilkan form untuk membuat barang keluar baru
    public function create()
    {
        return view('barangkeluar.create');
    }

    // Menyimpan data barang keluar ke dalam database
    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        BarangKeluar::create($request->all());

        return redirect()->route('barangkeluar.index')
                         ->with('success', 'Data barang keluar berhasil disimpan.');
    }

    // Menampilkan form untuk mengedit data barang keluar
    public function edit($id)
    {
        $barangkeluar_tble = BarangKeluar::findOrFail($id);
        return view('barangkeluar.edit', compact('barangkeluar_tble'));
    }

    // Memperbarui data barang keluar
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_barang' => 'required|integer',
            'nama_barang' => 'required|string|max:255',
            'tgl_keluar' => 'required|date',
            'jml_keluar' => 'required|integer',
            'lokasi' => 'required|string|max:255',
            'penerima' => 'required|string|max:255',
        ]);

        $barangkeluar_tble = BarangKeluar::findOrFail($id);
        $barangkeluar_tble->update($request->all());

        return redirect()->route('barangkeluar.index')
                         ->with('success', 'Data barang keluar berhasil diperbarui.');
    }

    // Menghapus data barang keluar
    public function destroy($id)
    {
        $barangkeluar_tble = BarangKeluar::findOrFail($id);
        $barangkeluar_tble->delete();

        return redirect()->route('barangkeluar.index')
                         ->with('success', 'Data barang keluar berhasil dihapus.');
    }
}