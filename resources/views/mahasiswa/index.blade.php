@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')
    <h1>Data Mahasiswa</h1>

    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Mahasiswa</a>

    <form action="{{ route('mahasiswa.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Nama atau NIM" value="{{ request('search') }}">
    </form>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Nomor Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswas as $mahasiswa)
                <tr>
                    <td>{{ $mahasiswa->id }}</td>
                    <td>{{ $mahasiswa->nama }}</td>
                    <td>{{ $mahasiswa->nim }}</td>
                    <td>{{ $mahasiswa->nomor_telepon }}</td>
                    <td>{{ $mahasiswa->email }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $mahasiswa->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $mahasiswa->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
