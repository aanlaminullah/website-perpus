@extends('master')

@section('title', 'Edit Tugas dan Fungsi - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Edit Struktur Organisasi</h2>

    {{-- Kode untuk menampilkan pesan sukses --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="content-panel">
        {{-- Form Tambah Struktur --}}
        <h3>Tambah Anggota Baru</h3>
        <hr>
        @include('partials.struktur-form', ['allNodes' => $allNodes])
    </div>

    <div class="content-panel mt-4">
        {{-- Tabel untuk Edit/Hapus Struktur --}}
        <h3>Daftar Anggota</h3>
        <hr>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Jabatan</th>
                    <th>Nama</th>
                    <th>Atasan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($struktur as $node)
                    <tr>
                        <td>{{ $node->jabatan }}</td>
                        <td>{{ $node->nama }}</td>
                        <td>{{ $node->parent ? $node->parent->nama : '-' }}</td>
                        <td>
                            <a href="{{ route('struktur.edit', $node->id) }}" class="btn btn-sm btn-info">Edit</a>
                            <form action="{{ route('struktur.destroy', $node->id) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
