<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class AdminController extends Controller
{

    public function index()
    {
        return view('admin.landing');
    }

    public function administrasi()
    {
        $users = User::where('role', 'Pasien')->get();
        return view('admin.dashboard', compact('users'));
    }

    public function user()
    {
        $users = User::where('role', 'Admin')->get();
        return view('admin.manage', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.dashboard');
    }

    public function editadmin($id)
    {
        $user = User::findOrFail($id);
        return view('admin.editadmin', compact('user'));
    }

    public function updateadmin(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.manage');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Tambahkan validasi untuk password
            'personal_info' => 'required|string',
        ]);

        // Tambahkan kolom role ke dalam data yang divalidasi
        $validatedData['role'] = 'admin';

        // Enkripsi password menggunakan bcrypt
        $validatedData['password'] = Hash::make($validatedData['password']);

        // Buat admin baru dengan menggunakan data yang divalidasi
        $admin = User::create($validatedData);

        // Redirect ke halaman dashboard admin
        return redirect()->route('admin.manage')->with('success', 'Admin berhasil ditambahkan.');
    }
}



