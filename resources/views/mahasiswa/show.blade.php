@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <div class="card bg-dark text-light border-secondary">
        <div class="card-body">
            <p><strong>Nama:</strong> {{ $mahasiswa->nama }}</p>
            <p><strong>NIM:</strong> {{ $mahasiswa->nim }}</p>
            <p><strong>Nomor Telepon:</strong> {{ $mahasiswa->nomor_telepon }}</p>
            <p><strong>Email:</strong> {{ $mahasiswa->email }}</p>
        </div>
    </div>

    <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i> Kembali</a>
@endsection
