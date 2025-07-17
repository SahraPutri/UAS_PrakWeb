@extends('layouts.app')

@section('title', 'Edit Mata Kuliah')

@section('content')
    <h1>Edit Mata Kuliah</h1>

    <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
            <input type="text" name="kode_mk" id="kode_mk" class="form-control" value="{{ $matakuliah->kode_mk }}" required>
        </div>

        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
            <input type="text" name="nama_mk" id="nama_mk" class="form-control" value="{{ $matakuliah->nama_mk }}" required>
        </div>

        <div class="mb-3">
            <label for="sks" class="form-label">SKS</label>
            <input type="number" name="sks" id="sks" class="form-control" value="{{ $matakuliah->sks }}" required>
        </div>

        <div class="mb-3">
            <label for="dosen" class="form-label">Nama Dosen</label>
            <input type="text" name="dosen" id="dosen" class="form-control" value="{{ $matakuliah->dosen }}" required>
        </div>

        <button type="submit" class="btn btn-warning"><i class="fas fa-save"></i> Update</button>
        <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali</a>
    </form>
@endsection
