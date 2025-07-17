@extends('layouts.app')

@section('title', 'Transkrip Nilai Mahasiswa')

@section('content')
    <h1>Transkrip Nilai Mahasiswa</h1>

    <h3>Nama Mahasiswa: {{ $mahasiswa->nama }}</h3>

    <!-- Tombol Kembali -->
    <a href="{{ route('nilaimahasiswa.index') }}" class="btn btn-secondary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>

    <!-- Tabel Transkrip Nilai Mahasiswa -->
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>Matakuliah</th>
                <th>Nilai Angka</th>
                <th>Nilai Huruf</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa->nilai as $nilai)
                <tr>
                    <td>{{ $nilai->matakuliah->nama_mk }}</td>
                    <td>{{ $nilai->nilai_angka }}</td>
                    <td>{{ $nilai->nilai_huruf }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
