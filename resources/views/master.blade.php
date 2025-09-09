<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" href="{{ asset('logo-pemda.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

</head>

<body class="admin-dashboard">

    @include('partials.sidebar')

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
    </script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
