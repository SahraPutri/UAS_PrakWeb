@extends('layouts.app')

@section('title', 'Data Nilai Mahasiswa')

@section('content')
    <h1>Data Nilai Mahasiswa</h1>

    <!-- Tombol Tambah Nilai Mahasiswa -->
    <a href="{{ route('nilaimahasiswa.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Nilai Mahasiswa</a>

    <!-- Form Pencarian Nilai Mahasiswa -->
    <form action="{{ route('nilaimahasiswa.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM Mahasiswa" value="{{ request('search') }}">
    </form>

    <!-- Tabel Data Nilai Mahasiswa -->
    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mahasiswa</th>
                <th>Matakuliah</th>
                <th>Nilai</th>
                <th>NIM</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaimahasiswas as $nilai)
                <tr>
                    <td>{{ $nilai->id }}</td>
                    <td>{{ $nilai->mahasiswa->nama }}</td>
                    <td>{{ $nilai->matakuliah->nama_mk }}</td>
                    <td>{{ $nilai->nilai_angka }} ({{ $nilai->nilai_huruf }})</td>
                    <td>{{ $nilai->mahasiswa->nim }}</td>
                    <td>
                        <!-- Tombol Lihat Transkrip -->
                        <a href="{{ route('transkrip', $nilai->mahasiswa->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Lihat Transkrip</a>
                        
                        <!-- Tombol Edit -->
                        <a href="{{ route('nilaimahasiswa.edit', $nilai->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        
                        <!-- Form Hapus Data Nilai Mahasiswa -->
                        <form action="{{ route('nilaimahasiswa.destroy', $nilai->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">
        <i class="fas fa-trash-alt"></i> Hapus
    </button>
</form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
