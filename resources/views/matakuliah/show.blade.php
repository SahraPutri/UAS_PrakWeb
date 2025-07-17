@extends('layouts.app')

@section('title', 'Detail Mata Kuliah')

@section('content')
    <h1>Detail Mata Kuliah</h1>

    <div class="card bg-dark text-light border-secondary">
        <div class="card-body">
            <p><strong>Kode Mata Kuliah:</strong> {{ $matakuliah->kode_mk }}</p>
            <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama_mk }}</p>
            <p><strong>Jumlah SKS:</strong> {{ $matakuliah->sks }}</p>
            <p><strong>Nama Dosen:</strong> {{ $matakuliah->dosen }}</p>
        </div>
    </div>

    <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection
