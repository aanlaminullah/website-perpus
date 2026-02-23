<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri Lensa Kegiatan | Dinas Kearsipan dan Perpustakaan Boltara</title>

    <meta name="description"
        content="Kumpulan dokumentasi foto kegiatan terbaru Dinas Kearsipan dan Perpustakaan Kabupaten Boltara. Lihat momen kegiatan literasi, arsip daerah, dan event perpustakaan kami.">

    <meta name="keywords"
        content="galeri foto perpustakaan, kegiatan dinas kearsipan, dokumentasi perpustakaan boltara, lensa kegiatan">

    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:type" content="article">
    <meta property="og:title" content="Galeri Lensa Kegiatan - Perpustakaan Boltara">
    <meta property="og:description"
        content="Dokumentasi visual berbagai kegiatan literasi dan kearsipan di Kabupaten Boltara.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('logo-pemda.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .bg-primary-blue {
            background-color: #0056b3;
        }

        .text-primary-blue {
            color: #0056b3;
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }

        .hero-gradient {
            background: radial-gradient(circle at top right, #1e40af, #0056b3);
        }

        .image-card:hover .overlay-content {
            opacity: 1;
            transform: translateY(0);
        }

        .fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #0056b3;
            border-radius: 10px;
        }
    </style>
</head>

<body class="bg-[#f8fafc] text-slate-900">

    <nav class="glass-nav sticky top-0 z-50 border-b border-slate-200/50">
        <div class="max-w-7xl mx-auto px-6 h-20 flex justify-between items-center">
            <a href="/" class="flex items-center gap-3 group">
                <div class="p-1 bg-white rounded-lg group-hover:rotate-12 transition-transform shadow-sm">
                    <img src="{{ asset('logo-pemda.png') }}" alt="Logo Pemda" class="h-10 w-auto object-contain">
                </div>
                <span class="font-extrabold text-2xl tracking-tight text-slate-800 uppercase">DKPD<span
                        class="text-blue-600">Boltara</span></span>
            </a>
            <a href="/"
                class="group flex items-center text-slate-600 hover:text-blue-600 transition-all font-semibold">
                <i class="fas fa-chevron-left mr-2 group-hover:-translate-x-1 transition-transform"></i> Kembali
            </a>
        </div>
    </nav>

    <header class="hero-gradient py-24 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <path d="M0 100 C 20 0 50 0 100 100 Z" fill="white"></path>
            </svg>
        </div>
        <div class="max-w-7xl mx-auto px-6 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl font-extrabold text-white mb-6 leading-tight">Lensa Kegiatan</h1>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-20">
        @if ($lensa->isEmpty())
            <div class="flex flex-col items-center justify-center py-24 fade-in">
                <div class="w-64 h-64 mb-8 bg-slate-100 rounded-full flex items-center justify-center">
                    <i class="fas fa-camera-retro text-7xl text-slate-300"></i>
                </div>
                <h3 class="text-2xl font-bold text-slate-800 mb-2">Belum ada momen dibagikan</h3>
                <p class="text-slate-500">Nantikan update foto kegiatan terbaru dari kami segera!</p>
            </div>
        @else
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($lensa as $index => $item)
                    <div class="fade-in group" style="animation-delay: {{ $index * 0.1 }}s">
                        <div
                            class="relative bg-white rounded-[2rem] shadow-sm hover:shadow-2xl transition-all duration-500 border border-slate-100 overflow-hidden flex flex-col h-full">

                            <div class="relative overflow-hidden aspect-[4/3] cursor-pointer"
                                onclick="openLightbox('{{ asset('storage/' . $item->foto) }}', '{{ $item->keterangan }}', '{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}')">
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->keterangan }}"
                                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-blue-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                                    <div
                                        class="overlay-content transform translate-y-4 opacity-0 transition-all duration-300 flex items-center text-white">
                                        <i class="fas fa-search-plus mr-2"></i> Perbesar Foto
                                    </div>
                                </div>

                                <div class="absolute top-4 left-4">
                                    <span
                                        class="bg-white/90 backdrop-blur-md px-4 py-1.5 rounded-full text-xs font-bold text-blue-600 shadow-sm">
                                        <i class="far fa-calendar-alt mr-1"></i>
                                        {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('d M Y') }}
                                    </span>
                                </div>
                            </div>

                            <div class="p-8">
                                <h3
                                    class="text-xl font-extrabold text-slate-800 mb-3 group-hover:text-blue-600 transition-colors line-clamp-2">
                                    {{ $item->keterangan }}
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </main>

    <footer class="bg-white border-t border-slate-200 py-12 mt-10">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-500 text-sm font-medium">
                &copy; {{ date('Y') }} <span class="text-blue-600 font-bold">Dinas Komunikasi Informatika dan
                    Persandian Bolaang Mongondow Utara</span>. Seluruh hak
                cipta dilindungi.
            </p>
        </div>
    </footer>

    <div id="lightbox"
        class="fixed inset-0 z-[100] bg-black/95 hidden flex flex-col items-center justify-center p-4 transition-all duration-300 transform opacity-0">

        <div
            class="relative w-full max-w-4xl bg-white rounded-xl overflow-hidden flex flex-col shadow-2xl animate-[zoomIn_0.3s_ease]">
            <!-- Close Button -->
            <button onclick="closeLightbox()"
                class="absolute top-4 right-4 z-10 text-white bg-black/50 hover:bg-black/70 rounded-full w-10 h-10 flex items-center justify-center transition-colors">
                <i class="fas fa-times"></i>
            </button>

            <!-- Image Container -->
            <div class="w-full bg-black flex items-center justify-center h-auto max-h-[75vh]">
                <img id="lightbox-img" src=""
                    class="w-full h-full max-h-[75vh] object-contain object-center block">
            </div>

            <!-- Details Container -->
            <div class="p-6 text-center border-t border-slate-100">
                <h2 id="lightbox-caption" class="text-xl font-bold text-slate-800 mb-2"></h2>
                <span id="lightbox-date" class="text-sm text-slate-500 font-medium"></span>
            </div>
        </div>
    </div>

    <script>
        function openLightbox(src, caption, date) {
            const lightbox = document.getElementById('lightbox');
            const img = document.getElementById('lightbox-img');
            const captionEl = document.getElementById('lightbox-caption');
            const dateEl = document.getElementById('lightbox-date');

            img.src = src;
            captionEl.innerText = caption;
            dateEl.innerText = date;

            lightbox.classList.remove('hidden');
            // Sedikit delay biar transisi opacity jalan
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
            }, 10);

            document.body.style.overflow = 'hidden'; // Stop scroll
        }

        function closeLightbox() {
            const lightbox = document.getElementById('lightbox');

            lightbox.classList.add('opacity-0');

            setTimeout(() => {
                lightbox.classList.add('hidden');
                document.body.style.overflow = 'auto'; // Resume scroll
            }, 300); // Sesuaikan dengan duration-300
        }

        // Close on ESC key
        document.addEventListener('keydown', (e) => {
            if (e.key === "Escape") closeLightbox();
        });

        // Close on click outside (background)
        document.getElementById('lightbox').addEventListener('click', (e) => {
            if (e.target.id === 'lightbox') {
                closeLightbox();
            }
        });
    </script>

</body>

</html>
