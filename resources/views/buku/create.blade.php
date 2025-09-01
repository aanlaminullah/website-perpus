@extends('master')

@section('title', 'Form - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Tambah Data Buku</h2>

    <div class="form-card">
        <form action="{{ route('buku.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="judul">Judul Buku</label>
                <input type="text" id="title" name="title" placeholder="Masukkan judul buku" required>
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" id="author" name="author" placeholder="Masukkan nama penulis" required>
            </div>
            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select id="category" name="category">
                    <option value="">Pilih Kategori</option>
                    <option value="sejarah">Sejarah</option>
                    <option value="fiksi">Fiksi</option>
                    <option value="ilmiah">Ilmiah</option>
                    <option value="teknologi">Teknologi</option>
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Terbit</label>
                <input type="number" id="year" name="year" placeholder="Contoh: 2023" min="1900"
                    max="2100">
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn-secondary">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
