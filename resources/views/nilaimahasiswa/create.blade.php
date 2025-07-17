@extends('layouts.app')

@section('title', 'Tambah Nilai Mahasiswa')

@section('content')
    <h1>Tambah Nilai Mahasiswa</h1>

    <form action="{{ route('nilaimahasiswa.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
                @foreach($mahasiswas as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}">{{ $mahasiswa->nama }} ({{ $mahasiswa->nim }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
                @foreach($matakuliahs as $matakuliah)
                    <option value="{{ $matakuliah->id }}">{{ $matakuliah->nama_mk }} ({{ $matakuliah->kode_mk }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nilai_angka" class="form-label">Nilai Angka</label>
            <input type="number" name="nilai_angka" id="nilai_angka" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="nilai_huruf" class="form-label">Nilai Huruf</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success"><i class="fas fa-check-circle"></i> Simpan</button>
        <a href="{{ route('nilaimahasiswa.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
@endsection
