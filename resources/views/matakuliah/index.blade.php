@extends('layouts.app')

@section('title', 'Data Mata Kuliah')

@section('content')
    <h1>Data Mata Kuliah</h1>

    <a href="{{ route('matakuliah.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus-circle"></i> Tambah Mata Kuliah</a>

    <form action="{{ route('matakuliah.index') }}" method="GET" class="mb-3">
        <input type="text" name="search" class="form-control" placeholder="Cari Kode MK" value="{{ request('search') }}">
    </form>

    <table class="table table-bordered table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode MK</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Nama Dosen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matakuliahs as $matakuliah)
                <tr>
                    <td>{{ $matakuliah->id }}</td>
                    <td>{{ $matakuliah->kode_mk }}</td>
                    <td>{{ $matakuliah->nama_mk }}</td>
                    <td>{{ $matakuliah->sks }}</td>
                    <td>{{ $matakuliah->dosen }}</td>
                    <td>
                        <a href="{{ route('matakuliah.show', $matakuliah->id) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> Detail</a>
                        <a href="{{ route('matakuliah.edit', $matakuliah->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                        <form action="{{ route('matakuliah.destroy', $matakuliah->id) }}" method="POST" style="display:inline;">
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
