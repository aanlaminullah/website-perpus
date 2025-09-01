<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data - Dinas Kearsipan dan Perpustakaan</title>
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
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Laporan</a></li>
                <li class="dropdown active" id="dataDropdown">
                    <a href="#" class="dropdown-toggle">Data <span class="arrow">▼</span></a>
                    <ul class="submenu">
                        <li><a href="#" class="active">Buku</a></li>
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

    </main>

    <script>
        // Logika untuk menampilkan/menyembunyikan submenu
        document.addEventListener('DOMContentLoaded', () => {
            const dropdowns = document.querySelectorAll('.dropdown');

            dropdowns.forEach(dropdown => {
                dropdown.addEventListener('click', (event) => {
                    const submenu = dropdown.querySelector('.submenu');
                    if (submenu) {
                        event.preventDefault(); // Mencegah navigasi default
                        dropdown.classList.toggle('active');
                    }
                });
            });
        });
    </script>
</body>

</html>
