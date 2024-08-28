<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SantriController extends Controller
{
    // Menampilkan form tambah calon santri
    public function create()
    {
        return view('santri.create');
    }

    // Menyimpan data calon santri ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'alamat' => 'required|string|max:500',
            'telepon' => 'required|string|max:15',
            // Tambahkan validasi untuk field lain jika diperlukan
        ]);

        // Proses penyimpanan data ke database
        // Misal menggunakan model Santri (sesuaikan dengan nama model Anda)
        \App\Models\Santri::create($request->all());

        // Redirect ke halaman daftar santri dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Calon santri berhasil ditambahkan!');
    }
}
