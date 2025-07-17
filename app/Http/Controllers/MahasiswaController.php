<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan daftar mahasiswa dengan pencarian
    public function index(Request $request)
    {
        $search = $request->get('search'); // Ambil nilai pencarian

        // Query untuk mencari mahasiswa berdasarkan nama atau nim
        $mahasiswas = Mahasiswa::when($search, function ($query, $search) {
            return $query->where('nama', 'like', '%' . $search . '%')
                         ->orWhere('nim', 'like', '%' . $search . '%');
        })->get(); // Ambil data mahasiswa sesuai pencarian

        return view('mahasiswa.index', compact('mahasiswas')); // Kirim data mahasiswa ke view
    }

    // Menampilkan form untuk tambah mahasiswa
    public function create()
    {
        return view('mahasiswa.create'); // Tampilkan halaman form tambah mahasiswa
    }

    // Menyimpan data mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required', // Nama harus diisi
            'nim' => 'required|unique:mahasiswas', // NIM harus unik
            'nomor_telepon' => 'required|numeric', // Nomor telepon harus diisi dan berupa angka
            'email' => 'required|email|unique:mahasiswas', // Email harus valid dan unik
        ]);

        Mahasiswa::create($request->all()); // Simpan data mahasiswa baru

        return redirect()->route('mahasiswa.index') // Redirect ke daftar mahasiswa
                         ->with('success', 'Data Mahasiswa berhasil ditambahkan.'); // Kirim pesan sukses
    }

    // Menampilkan form untuk mengedit data mahasiswa
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa')); // Tampilkan form edit dengan data mahasiswa
    }

    // Memperbarui data mahasiswa
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $request->validate([
            'nama' => 'required', // Nama harus diisi
            'nim' => 'required|unique:mahasiswas,nim,' . $mahasiswa->id, // NIM harus unik kecuali untuk mahasiswa yang sedang diupdate
            'nomor_telepon' => 'required|numeric', // Nomor telepon harus diisi dan berupa angka
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id, // Email harus valid dan unik
        ]);

        $mahasiswa->update($request->all()); // Update data mahasiswa

        return redirect()->route('mahasiswa.index') // Redirect ke daftar mahasiswa
                         ->with('success', 'Data Mahasiswa berhasil diupdate.'); // Kirim pesan sukses
    }

    // Menampilkan detail mahasiswa
    public function show($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id); // Temukan mahasiswa berdasarkan ID
        return view('mahasiswa.show', compact('mahasiswa')); // Kirim data mahasiswa ke view detail
    }

    // Menghapus data mahasiswa
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete(); // Hapus data mahasiswa

        return redirect()->route('mahasiswa.index') // Redirect ke daftar mahasiswa
                         ->with('success', 'Data Mahasiswa berhasil dihapus.'); // Kirim pesan sukses
    }
}
