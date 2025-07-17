@extends('layouts.app')

@section('title', 'Edit Nilai Mahasiswa')

@section('content')
    <h1>Edit Nilai Mahasiswa</h1>

    <form action="{{ route('nilaimahasiswa.update', $nilai->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="mahasiswa_id" class="form-label">Mahasiswa</label>
            <select name="mahasiswa_id" id="mahasiswa_id" class="form-control" required>
                @foreach($mahasiswas as $mahasiswa)
                    <option value="{{ $mahasiswa->id }}" @if($mahasiswa->id == $nilai->mahasiswa_id) selected @endif>{{ $mahasiswa->nama }} ({{ $mahasiswa->nim }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="mata_kuliah_id" class="form-label">Mata Kuliah</label>
            <select name="mata_kuliah_id" id="mata_kuliah_id" class="form-control" required>
                @foreach($matakuliahs as $matakuliah)
                    <option value="{{ $matakuliah->id }}" @if($matakuliah->id == $nilai->mata_kuliah_id) selected @endif>{{ $matakuliah->nama_mk }} ({{ $matakuliah->kode_mk }})</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nilai_angka" class="form-label">Nilai Angka</label>
            <input type="number" name="nilai_angka" id="nilai_angka" class="form-control" value="{{ $nilai->nilai_angka }}" required>
        </div>

        <div class="mb-3">
            <label for="nilai_huruf" class="form-label">Nilai Huruf</label>
            <input type="text" name="nilai_huruf" id="nilai_huruf" class="form-control" value="{{ $nilai->nilai_huruf }}" required>
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
        <a href="{{ route('nilaimahasiswa.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
@endsection
