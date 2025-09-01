@extends('master')

@section('title', 'Dashboard Admin - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Beranda</h2>

    <div class="stats-cards">
        <div class="stat-item">
            <div class="stat-number">15,450</div>
            <div class="stat-label">Total Koleksi Buku</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">8,230</div>
            <div class="stat-label">Total Dokumen Arsip</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">2,150</div>
            <div class="stat-label">Jumlah Anggota Aktif</div>
        </div>
        <div class="stat-item">
            <div class="stat-number">4,789</div>
            <div class="stat-label">Peminjaman Bulan Ini</div>
        </div>
    </div>

    <div class="dashboard-grid">
        <div class="main-widgets">
            <div class="widget-card">
                <h3>Statistik Peminjaman</h3>
                <div class="chart-container">
                    <canvas id="peminjamanChart"></canvas>
                </div>
            </div>

            <div class="widget-card">
                <h3>Koleksi Terpopuler</h3>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon">📚</div>
                        <div class="activity-details">
                            <h4>Sejarah Kota Lumajang</h4>
                            <p>Dipinjam 520 kali</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">📚</div>
                        <div class="activity-details">
                            <h4>Metode Kearsipan Modern</h4>
                            <p>Dipinjam 485 kali</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">📚</div>
                        <div class="activity-details">
                            <h4>Literasi Digital Untuk Semua</h4>
                            <p>Dipinjam 410 kali</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="side-widgets">
            <div class="widget-card">
                <h3>Aktivitas Terbaru</h3>
                <ul class="activity-list">
                    <li class="activity-item">
                        <div class="activity-icon">➡️</div>
                        <div class="activity-details">
                            <h4>Anggota baru bergabung</h4>
                            <p>Nama: Budi Santoso</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">📚</div>
                        <div class="activity-details">
                            <h4>Peminjaman Buku</h4>
                            <p>Judul: Seni Mengelola Arsip</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">⬅️</div>
                        <div class="activity-details">
                            <h4>Pengembalian Buku</h4>
                            <p>Judul: Kebijakan Publik 2024</p>
                        </div>
                    </li>
                    <li class="activity-item">
                        <div class="activity-icon">💾</div>
                        <div class="activity-details">
                            <h4>Arsip baru diunggah</h4>
                            <p>Arsip: Laporan Tahunan 2023</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div>
        <section class="widget-card">
            <h3>Catatan</h3>
            <p>Selamat datang di dashboard admin Dinas Kearsipan dan Perpustakaan Kabupaten Lumajang. Gunakan
                navigasi di sebelah kiri untuk mengelola data, melihat laporan, dan mengatur sistem.</p>
    </div>
@endsection
