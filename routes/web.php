<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;
Route::get('/', function () {
   return view('home');
});
// Rute untuk menampilkan semua data suplier
Route::get('/suplier',   [SuplierController::class, 'index'])->name('suplier.index');
// Rute untuk menampilkan form membuat suplier baru
Route::get('/suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
// Rute untuk menambahkan data suplier baru
Route::post('/suplier', [SuplierController::class, 'store'])->name('suplier.store');
// Route untuk menampilkan form edit
Route::get('/suplier/{suplier}', [SuplierController::class, 'edit'])->name('suplier.edit');
// Route untuk mengupdate data supplier
Route::put('/suplier/{suplier}', [SuplierController::class, 'update'])->name('suplier.update');
// Route untuk menghapus data supplier
Route::delete('/suplier/{suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');


// Rute untuk menampilkan semua data user
Route::get('/user', [UserController::class, 'index'])->name('user.index');

// Rute untuk menampilkan form membuat user baru
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Rute untuk menambahkan data user baru
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// Route untuk menampilkan form edit user
Route::get('/user/{user}', [UserController::class, 'edit'])->name('user.edit');

// Route untuk mengupdate data user
Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');

// Route untuk menghapus data user
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');


// Rute untuk menampilkan semua data stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');

// Rute untuk menampilkan form membuat stok baru
Route::get('/stok/create', [StokController::class, 'create'])->name('stok.create');

// Rute untuk menambahkan data stok baru
Route::post('/stok', [StokController::class, 'store'])->name('stok.store');

// Route untuk menampilkan form edit stok
Route::get('/stok/{stok}edit', [StokController::class, 'edit'])->name('stok.edit');

// Route untuk mengupdate data stok
Route::put('/stok/{stok}', [StokController::class, 'update'])->name('stok.update');

// Route untuk menghapus data stok
Route::delete('/stok/{stok}', [StokController::class, 'destroy'])->name('stok.destroy');


// Route to display all barang masuk data
Route::get('/barangmasuk', [BarangMasukController::class, 'index'])->name('barangmasuk.index');

// Route to show the form for creating a new barang masuk
Route::get('/barangmasuk/create', [BarangMasukController::class, 'create'])->name('barangmasuk.create');

// Route to store a newly created barang masuk
Route::post('/barangmasuk', [BarangMasukController::class, 'store'])->name('barangmasuk.store');

// Route to show the form for editing an existing barang masuk
Route::get('/barangmasuk/{barangmasuk}/edit', [BarangMasukController::class, 'edit'])->name('barangmasuk.edit');

// Route to update an existing barang masuk
Route::put('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'update'])->name('barangmasuk.update');

// Route to delete a barang masuk
Route::delete('/barangmasuk/{barangmasuk}', [BarangMasukController::class, 'destroy'])->name('barangmasuk.destroy');


// Route to display all barang keluar data
Route::get('/barangkeluar', [BarangKeluarController::class, 'index'])->name('barangkeluar.index');

// Route to show the form for creating a new barang keluar
Route::get('/barangkeluar/create', [BarangKeluarController::class, 'create'])->name('barangkeluar.create');

// Route to store a newly created barang keluar
Route::post('/barangkeluar', [BarangKeluarController::class, 'store'])->name('barangkeluar.store');

// Route to show the form for editing an existing barang keluar
Route::get('/barangkeluar/{barangkeluar}/edit', [BarangKeluarController::class, 'edit'])->name('barangkeluar.edit');

// Route to update an existing barang keluar
Route::put('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'update'])->name('barangkeluar.update');

// Route to delete a barang keluar
Route::delete('/barangkeluar/{barangkeluar}', [BarangKeluarController::class, 'destroy'])->name('barangkeluar.destroy');

// Route to display all pinjam barang data
Route::get('/pinjambarang', [PinjamBarangController::class, 'index'])->name('pinjambarang.index');

// Route to show the form for creating a new pinjam barang
Route::get('/pinjambarang/create', [PinjamBarangController::class, 'create'])->name('pinjambarang.create');

// Route to store a newly created pinjam barang
Route::post('/pinjambarang', [PinjamBarangController::class, 'store'])->name('pinjambarang.store');

// Route to show the form for editing an existing pinjam barang
Route::get('/pinjambarang/{pinjambarang}/edit', [PinjamBarangController::class, 'edit'])->name('pinjambarang.edit');

// Route to update an existing pinjam barang
Route::put('/pinjambarang/{pinjambarang}', [PinjamBarangController::class, 'update'])->name('pinjambarang.update');

// Route to delete a pinjam barang
Route::delete('/pinjambarang/{pinjambarang}', [PinjamBarangController::class, 'destroy'])->name('pinjambarang.destroy');