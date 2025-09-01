<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Dinas Kearsipan dan Perpustakaan</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="logo-pemda.png" type="image/png">

</head>

<body class="admin-dashboard">

    <aside class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <img src="logo-pemda.png" alt="Logo">
            </div>
            <div>
                <div class="site-title">Dashboard Admin</div>
                <div class="tagline">Disarpus Kab. Lumajang</div>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul>
                <li><a href="#" class="active">Beranda</a></li>
                <li><a href="#">Laporan</a></li>
                <li class="dropdown" id="dataDropdown">
                    <a href="#" class="dropdown-toggle">Data <span class="arrow">▼</span></a>
                    <ul class="submenu">
                        <li><a href="#">Buku</a></li>
                        <li><a href="#">Anggota</a></li>
                    </ul>
                </li>
                <li class="dropdown" id="settingsDropdown">
                    <a href="#" class="dropdown-toggle">Pengaturan <span class="arrow">▼</span></a>
                    <ul class="submenu">
                        <li><a href="#">Profil</a></li>
                        <li><a href="#">Sistem</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">
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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Logika untuk menampilkan/menyembunyikan submenu
        document.addEventListener('DOMContentLoaded', () => {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', (event) => {
                    const submenu = dropdown.querySelector('.submenu');
                    if (submenu) {
                        event.preventDefault();
                        dropdown.classList.toggle('active');
                    }
                });
            });

            // Data dummy untuk grafik, diubah menjadi 12 bulan
            const chartData = {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                datasets: [{
                    label: 'Peminjaman Buku',
                    data: [150, 200, 180, 250, 220, 300, 280, 320, 310, 290, 350, 400],
                    backgroundColor: '#3498db',
                    borderColor: '#2980b9',
                    borderWidth: 1
                }]
            };

            // Konfigurasi dan pembuatan grafik
            const ctx = document.getElementById('peminjamanChart').getContext('2d');
            const peminjamanChart = new Chart(ctx, {
                type: 'bar',
                data: chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        });
    </script>
</body>

</html>
