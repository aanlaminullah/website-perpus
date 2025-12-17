@extends('master')

@section('title', 'Edit Statistik - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Manajemen Statistik Beranda</h2>

    <div class="form-card">
        @if (session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('stats.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="stats-edit-grid">

                <div class="form-group">
                    <label for="koleksi_buku">
                        <i class="fas fa-book" style="color: #3498db; margin-right: 5px;"></i>
                        Total Koleksi Buku
                    </label>
                    <input type="number" id="koleksi_buku" name="koleksi_buku"
                        value="{{ old('koleksi_buku', $stats->koleksi_buku ?? 0) }}" placeholder="Masukkan jumlah buku..."
                        required>
                </div>

                <div class="form-group">
                    <label for="dokumen_arsip">
                        <i class="fas fa-archive" style="color: #27ae60; margin-right: 5px;"></i>
                        Total Dokumen Arsip
                    </label>
                    <input type="number" id="dokumen_arsip" name="dokumen_arsip"
                        value="{{ old('dokumen_arsip', $stats->dokumen_arsip ?? 0) }}"
                        placeholder="Masukkan jumlah arsip..." required>
                </div>

                <div class="form-group">
                    <label for="anggota_aktif">
                        <i class="fas fa-users" style="color: #e74c3c; margin-right: 5px;"></i>
                        Jumlah Anggota Aktif
                    </label>
                    <input type="number" id="anggota_aktif" name="anggota_aktif"
                        value="{{ old('anggota_aktif', $stats->anggota_aktif ?? 0) }}"
                        placeholder="Masukkan jumlah anggota..." required>
                </div>

                <div class="form-group">
                    <label for="buku_dibaca">
                        <i class="fas fa-book-reader" style="color: #f39c12; margin-right: 5px;"></i>
                        Jumlah Buku Dibaca
                    </label>
                    <input type="number" id="buku_dibaca" name="buku_dibaca"
                        value="{{ old('buku_dibaca', $stats->buku_dibaca ?? 0) }}" placeholder="Masukkan jumlah dibaca..."
                        required>
                </div>

            </div>

            <div class="form-actions" style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 20px;">
                {{-- Tombol Batal reload page --}}
                <a href="{{ route('dashboard') }}" class="btn btn-secondary"
                    style="text-decoration:none; display:inline-block; text-align:center;">Batal</a>

                {{-- Tombol Submit Form --}}
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
