<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    // Menampilkan daftar mata kuliah
    public function index(Request $request)
    {
        $search = $request->get('search');

        $matakuliahs = MataKuliah::when($search, function ($query, $search) {
                return $query->where('kode_mk', 'like', '%' . $search . '%');
            })
            ->get();

        return view('matakuliah.index', compact('matakuliahs'));
    }

    // Menampilkan form untuk tambah mata kuliah
    public function create()
    {
        return view('matakuliah.create');
    }

    // Menyimpan data mata kuliah baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_mk' => 'required',
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'dosen' => 'required' // Validasi nama dosen sebagai string biasa
        ]);

        MataKuliah::create($request->all());

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Mata Kuliah berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit data mata kuliah
    public function edit(MataKuliah $matakuliah)
    {
        return view('matakuliah.edit', compact('matakuliah'));
    }

    // Memperbarui data mata kuliah
    public function update(Request $request, MataKuliah $matakuliah)
    {
        $request->validate([
            'kode_mk' => 'required|unique:mata_kuliahs,kode_mk,' . $matakuliah->id,
            'nama_mk' => 'required',
            'sks' => 'required|integer',
            'dosen' => 'required' // Validasi dosen juga di update
        ]);

        $matakuliah->update($request->all());

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data Mata Kuliah berhasil diupdate.');
    }

    // Menampilkan detail mata kuliah
    public function show($id)
    {
        $matakuliah = MataKuliah::findOrFail($id);
        return view('matakuliah.show', compact('matakuliah'));
    }

    // Menghapus data mata kuliah
    public function destroy(MataKuliah $matakuliah)
    {
        $matakuliah->delete();

        return redirect()->route('matakuliah.index')
                         ->with('success', 'Data Mata Kuliah berhasil dihapus.');
    }
}
