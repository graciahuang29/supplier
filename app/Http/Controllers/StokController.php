<?php

namespace App\Http\Controllers;

use App\Models\Stok;
use Illuminate\Http\Request;

class StokController extends Controller
{
    // Menampilkan semua data stok
    public function index()
    {
        $stok = stok::all();
        return view('stok.index', compact('stok'));
    }

    // Menampilkan form untuk menambah stok
    public function create()
    {
        return view('stok.create');
    }

    // Menyimpan data stok ke database
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jml_masuk' => 'required|integer|min:1',
            'jml_keluar' => 'required|integer|min:1',
            'total_barang' => 'required|integer|min:0',
        ]);

        stok::create($validated);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil ditambahkan.');
    }

    // Menghapus data stok
    public function destroy(Stok $stok)
    {
        $stok->delete();

        return redirect()->route('stok.index')->with('success', 'Stok berhasil dihapus.');
    }

    // Menampilkan form edit stok
    public function edit(stok $stok)
    {
        return view('stok.edit', compact('stok'));
    }

    // Mengupdate data stok
    public function update(tok $stok, Request $request)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string|max:255',
            'jumlah' => 'required|integer|min:1',
            'harga' => 'required|numeric|min:0',
        ]);

        $stok->update($validatedData);

        return redirect()->route('stok.index')->with('success', 'Stok berhasil diperbarui.');
    }
}
