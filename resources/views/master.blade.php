<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dinas Kearsipan dan Perpustakaan') | Kabupaten Boltara</title>

    <meta name="description" content="@yield('meta_description', 'Layanan resmi Dinas Kearsipan dan Perpustakaan Kabupaten Boltara. Temukan koleksi buku, dokumen sejarah, dan lensa kegiatan terbaru.')">
    <meta name="keywords" content="perpustakaan, kearsipan, boltara, buku, dinas perpustakaan, lensa kegiatan">
    <meta name="author" content="Dinas Kearsipan dan Perpustakaan Boltara">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title') | Dinas Perpustakaan">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:image" content="{{ asset('logo-pemda.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title')">
    <meta property="twitter:description" content="@yield('meta_description')">
    <meta property="twitter:image" content="{{ asset('logo-pemda.png') }}">

    <link rel="icon" href="{{ asset('logo-pemda.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <meta name="google-site-verification"
        content="google-site-verification=6a18oiKDdZaLAFLnyUBwwLC7NjfSWvBiNeQpBczCWag" />
</head>

<body class="admin-dashboard">

    @include('partials.sidebar')

    <!-- Tombol hamburger -->
    <button id="hamburgerBtn" class="hamburger-btn">
        <i class="fas fa-bars"></i>
    </button>

    <main class="main-content">
        @yield('content')
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Logika untuk menampilkan/menyembunyikan submenu
        // document.addEventListener('DOMContentLoaded', () => {
        //     const dropdowns = document.querySelectorAll('.dropdown');

        //     dropdowns.forEach(dropdown => {
        //         dropdown.addEventListener('click', (event) => {
        //             const submenu = dropdown.querySelector('.submenu');
        //             if (submenu) {
        //                 event.preventDefault();
        //                 dropdown.classList.toggle('active');
        //             }
        //         });
        //     });

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
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.querySelectorAll(".dropdown-toggle").forEach(function(toggle) {
                toggle.addEventListener("click", function(e) {
                    e.preventDefault();

                    // tutup semua dropdown lain
                    document.querySelectorAll(".sidebar-nav li.dropdown").forEach(function(li) {
                        if (li !== toggle.parentElement) {
                            li.classList.remove("active");
                        }
                    });

                    // toggle dropdown yang diklik
                    toggle.parentElement.classList.toggle("active");
                });
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const sidebar = document.querySelector('.sidebar');
            const mainContent = document.querySelector('.main-content');

            hamburgerBtn.addEventListener('click', () => {
                sidebar.classList.toggle('active');
                if (window.innerWidth <= 768) {
                    mainContent.classList.toggle('expanded');
                }
            });
        });
    </script>




    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Pilih semua form yang ada di halaman
            const forms = document.querySelectorAll('form');

            forms.forEach(form => {
                form.addEventListener('submit', function(e) {
                    // Cek validasi HTML5 dulu (misal: attribute required)
                    if (!this.checkValidity()) {
                        e.preventDefault();
                        e.stopPropagation();
                        // Biarkan browser menampilkan pesan error bawaan
                        return;
                    }

                    // Abaikan form logout (karena sudah ada confirm sendiri)
                    if (this.getAttribute('id') === 'logout-form') {
                        return;
                    }

                    // Cari tombol submit di dalam form
                    const submitBtn = this.querySelector('button[type="submit"]');

                    // 1. Tampilkan SweetAlert Loading
                    Swal.fire({
                        title: 'Mohon Tunggu',
                        text: 'Sedang memproses data...',
                        // Memanggil gambar dari folder public proyek sendiri
                        imageUrl: "{{ asset('/spinner.gif') }}",
                        imageWidth: 100,
                        imageHeight: 100,
                        allowOutsideClick: false,
                        showConfirmButton: false
                    });

                    // 2. Ubah tampilan tombol submit (Visual Feedback di tombol)
                    if (submitBtn) {
                        // Simpan teks asli
                        const originalText = submitBtn.innerHTML;
                        // Ubah jadi disabled dan loading
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memproses...';

                        // Kembalikan tombol jika user menekan Back browser (opsional/safety net)
                        setTimeout(() => {
                            // Script ini berjalan sampai halaman reload/pindah.
                            // Jika validasi server gagal dan kembali ke halaman ini, halaman akan refresh otomatis
                        }, 5000);
                    }
                });
            });
        });
    </script>
</body>

</html>
