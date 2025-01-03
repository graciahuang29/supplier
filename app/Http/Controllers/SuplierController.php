<?php

namespace App\Http\Controllers;

use App\Models\Suplier;
use Illuminate\Http\Request;

class SuplierController extends Controller {
   // Menampilkan semua data suplier
   public function index()
   {
       $supliers = Suplier::all();
       return view('suplier.index', compact('supliers'));
   }

   // Menampilkan form untuk membuat suplier baru
   public function create()
   {
       return view('suplier.create');
   }

   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_supplier' => 'required|integer',
           'nama_supplier' => 'required|string|max:255',
           'alamat_supplier' => 'required|string',
           'telp_supplier' => 'required|string|max:15', // Ensure 'telp_supplier' is required
       ]);

       Suplier::create($validated);

       return redirect()->route('suplier.index')->with('success', 'Supplier berhasil ditambahkan.');
   }

   // Menghapus data Supplier dari database
   public function destroy(Suplier $suplier)
   {
       $suplier->delete();

       return redirect()->route('suplier.index')->with('success', 'Data Supplier berhasil dihapus.');
   }

   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $suplier = Suplier::find($id);

       // Check if the supplier exists
       if (!$suplier) {
           return redirect()->route('suplier.index')->with('error', 'Supplier not found.');
       }
       return view('suplier.edit', compact('suplier'));
   }

   public function update(Suplier $suplier, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
            'id_supplier' => 'required|integer',
           'nama_supplier' => 'required|string|max:255',
           'alamat_supplier' => 'required|string',
           'telp_supplier' => 'required|string|max:15', // Ensure 'telp_supplier' is required
       ]);

       // Update data suplier
       $suplier->update($validatedData);

       return redirect()->route('suplier.index')->with('success', 'Supplier data successfully updated.');
   }
}
