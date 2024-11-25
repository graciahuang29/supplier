<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan daftar semua user
    public function index()
    {
        $users = User::paginate(5);
        return view('user.index', compact('users'));
    }

    // Menampilkan form untuk membuat user baru
    public function create()
    {
        return view('user.create');
    }

    // Menyimpan data user baru
    public function store(Request $request)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|integer|min:8',
            'level'=> 'required|string|max:255',
        ]);

        User::create($request->all());

        return redirect()->route('user.index');
    }

    // Menampilkan form untuk mengedit user
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // Mengupdate data user
    public function update(Request $request, User $user)
    {
        $request->validate([
            'id_user' => 'required|integer',
            'nama' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'password' => 'required|integer|min:8',
            'level'=> 'required|string|max:255',
        ]);

        $user->update($request->all());

        return redirect()->route('user.index');
    }

    // Menghapus data user
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}