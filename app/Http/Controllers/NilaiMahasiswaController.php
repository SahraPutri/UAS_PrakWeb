<?php

namespace App\Http\Controllers;

use App\Models\NilaiMahasiswa;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use Illuminate\Http\Request;

class NilaiMahasiswaController extends Controller
{
    // Menampilkan daftar nilai mahasiswa dengan pencarian
    public function index(Request $request)
    {
        $search = $request->get('search');
        
        // Mengambil data nilai mahasiswa dengan relasi Mahasiswa dan MataKuliah
        $nilaimahasiswas = NilaiMahasiswa::with(['mahasiswa', 'mataKuliah'])
            ->when($search, function ($query, $search) {
                return $query->whereHas('mahasiswa', function($q) use ($search) {
                    $q->where('nama', 'like', "%$search%")
                      ->orWhere('nim', 'like', "%$search%");
                });
            })
            ->get();

        return view('nilaimahasiswa.index', compact('nilaimahasiswas'));
    }

    // Menampilkan form untuk tambah nilai mahasiswa
    public function create()
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();
        return view('nilaimahasiswa.create', compact('mahasiswas', 'matakuliahs'));
    }

    // Menyimpan data nilai mahasiswa baru
    public function store(Request $request)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai_angka' => 'required|numeric',
            'nilai_huruf' => 'required|string',
        ]);

        NilaiMahasiswa::create($request->all());

        return redirect()->route('nilaimahasiswa.index')
                         ->with('success', 'Nilai Mahasiswa berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit nilai mahasiswa
    public function edit(NilaiMahasiswa $nilai)
    {
        $mahasiswas = Mahasiswa::all();
        $matakuliahs = MataKuliah::all();
        return view('nilaimahasiswa.edit', compact('nilai', 'mahasiswas', 'matakuliahs'));
    }

    // Memperbarui data nilai mahasiswa
    public function update(Request $request, NilaiMahasiswa $nilai)
    {
        $request->validate([
            'mahasiswa_id' => 'required|exists:mahasiswas,id',
            'mata_kuliah_id' => 'required|exists:mata_kuliahs,id',
            'nilai_angka' => 'required|numeric',
            'nilai_huruf' => 'required|string',
        ]);

        $nilai->update($request->all());

        return redirect()->route('nilaimahasiswa.index')
                         ->with('success', 'Nilai Mahasiswa berhasil diupdate.');
    }

    // Menampilkan transkrip nilai mahasiswa
    public function transkrip($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('nilaimahasiswa.transkrip', compact('mahasiswa'));
    }

    // Menghapus data nilai mahasiswa
    public function destroy($id)
{
    // Menggunakan query builder untuk menghapus data berdasarkan id
    NilaiMahasiswa::where('id', $id)->delete();

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('nilaimahasiswa.index')
                     ->with('success', 'Nilai Mahasiswa berhasil dihapus.');
}

}