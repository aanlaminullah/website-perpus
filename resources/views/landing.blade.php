<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dinas Kearsipan dan Perpustakaan</title>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="icon" href="logo-pemda.png" type="image/png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


</head>


<body>
    @include('partials.navbar')


    <main>
        <section class="hero-section" id="beranda">
            <div class="hero-content">
                <h1>Selamat Datang</h1>
                <p>
                    Sistem Informasi Kearsipan dan Perpustakaan Digital yang menyediakan
                    layanan terbaik dalam pengelolaan arsip, dokumentasi, dan
                    perpustakaan untuk kemudahan akses informasi publik yang transparan
                    dan akuntabel.
                </p>
                <button class="cta-button">Jelajahi Layanan</button>
            </div>
            <div class="hero-visual">
                <img src="vector2.png" alt="">
            </div>
        </section>

        <section class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">15,450</div>
                <div class="stat-label">Koleksi Buku</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">8,230</div>
                <div class="stat-label">Dokumen Arsip</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">2,150</div>
                <div class="stat-label">Anggota Aktif</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">35</div>
                <div class="stat-label">Jumlah Buku Dibaca</div>
            </div>
        </section>

        <section class="services-section" id="layanan">
            <h2 class="section-title">Layanan Kami</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">📋</div>
                    <h3>LAYANAN KEARSIPAN</h3>
                    <p>
                        Pengelolaan dan pelayanan arsip dinamis dan statis sesuai dengan
                        standar kearsipan nasional.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">📚</div>
                    <h3>LAYANAN PERPUSTAKAAN</h3>
                    <p>
                        Peminjaman buku, jurnal, dan koleksi digital dengan sistem otomasi
                        perpustakaan modern.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">🔍</div>
                    <h3>LAYANAN INFORMASI PUBLIK</h3>
                    <p>
                        Penyediaan informasi publik yang mudah diakses sesuai UU
                        Keterbukaan Informasi Publik.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">💾</div>
                    <h3>DIGITALISASI ARSIP</h3>
                    <p>
                        Layanan digitalisasi dokumen dan arsip untuk kemudahan akses dan
                        preservasi jangka panjang.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">🎓</div>
                    <h3>LITERASI INFORMASI</h3>
                    <p>
                        Program pelatihan dan edukasi literasi informasi untuk masyarakat
                        dan instansi.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
                <div class="service-card">
                    <div class="service-icon">📱</div>
                    <h3>LAYANAN MOBILE</h3>
                    <p>
                        Aplikasi mobile untuk akses layanan perpustakaan dan kearsipan
                        secara online.
                    </p>
                    <a href="#" class="service-link">Selengkapnya →</a>
                </div>
            </div>
        </section>

        <section class="profil-section" id="profil">
            <h2 class="section-title">Profil</h2>
            <div class="profil-content">
                <div class="profil-box">
                    <h3>Visi & Misi</h3>
                    <p>
                        Visi: "{{ $visiMisi->visi }}"
                    </p>
                    <br>
                    <p>Misi:</p>
                    <ul>
                        @foreach (json_decode($visiMisi->misi) as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="profil-box">
                    <h3>Struktur Organisasi</h3>
                    <div class="org-chart">
                        @include('partials.struktur-tree', ['struktur' => $struktur])
                    </div>
                </div>
                <div class="profil-box">
                    <h3>Tugas & Fungsi</h3>
                    <p>
                        {{ $tugasFungsi->tugas }}
                    </p>
                    <br>
                    <ul>
                        @foreach (json_decode($tugasFungsi->fungsi) as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </section>


        <section class="news-section" id="berita">
            <h2 class="section-title">Berita Terkini</h2>
            <div class="news-grid">
                <article class="news-card">
                    <div class="news-image"><img src="/news1.jpg" alt=""></div>
                    <div class="news-content">
                        <div class="news-date">25 Agustus 2024</div>
                        <h3 class="news-title">
                            Peluncuran Sistem Perpustakaan Digital Terintegrasi
                        </h3>
                        <p class="news-excerpt">
                            Dinas meluncurkan sistem perpustakaan digital yang terintegrasi
                            dengan e-government untuk kemudahan akses masyarakat.
                        </p>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-image"><img src="/news2.jpg" alt=""></div>
                    <div class="news-content">
                        <div class="news-date">20 Agustus 2024</div>
                        <h3 class="news-title">
                            Raih Penghargaan Perpustakaan Terbaik Tingkat Provinsi
                        </h3>
                        <p class="news-excerpt">
                            Perpustakaan daerah meraih penghargaan sebagai perpustakaan
                            terbaik tingkat provinsi dalam kategori inovasi layanan.
                        </p>
                    </div>
                </article>
                <article class="news-card">
                    <div class="news-image"><img src="/news3.jpg" alt=""></div>
                    <div class="news-content">
                        <div class="news-date">15 Agustus 2024</div>
                        <h3 class="news-title">Workshop Manajemen Arsip untuk ASN</h3>
                        <p class="news-excerpt">
                            Kegiatan pelatihan manajemen arsip diselenggarakan untuk
                            meningkatkan kompetensi ASN dalam pengelolaan dokumen.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <section class="gallery-section" id="lensa">
            <h2 class="section-title">Lensa Kegiatan</h2>
            <div class="gallery-grid">
                @foreach ($lensaKegiatan as $kegiatan)
                    <div class="gallery-item" onclick="openLightbox(this)">
                        <img src="{{ asset('storage/' . $kegiatan->foto) }}" alt="{{ $kegiatan->keterangan }}">
                        <div class="gallery-overlay-hover">
                            <i class="fas fa-search-plus"></i>
                            <span class="gallery-caption">{{ $kegiatan->keterangan }}</span>
                            <span style="color: #ddd; font-size: 0.8rem; margin-top:5px;">
                                {{ \Carbon\Carbon::parse($kegiatan->tanggal)->format('d M Y') }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="gallery-footer">
                <a href="#" class="btn-outline">More</a>
            </div>
        </section>

        <div id="lightbox" class="lightbox" onclick="closeLightbox(event)">
            <span class="lightbox-close">&times;</span>
            <img class="lightbox-content" id="lightbox-img" src="">
        </div>
    </main>

    <footer class="footer" id="kontak">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Kontak Kami</h3>
                <div class="contact-info">
                    <p>📍 Jl. Trans Sulawesi<br />Kab. Bolaang Mongondow Utara</p>
                    <p>📞 (0334) 123-4567</p>
                    <p>✉️ info@dkpd.boltarakab.go.id</p>
                    <p>🕒 Senin - Kamis : 08:00 - 16:30</p>
                    <p>🕒 Jumat : 08:00 - 11:30</p>
                </div>
            </div>
            <div class="footer-section">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="#">Perpustakaan Digital</a></li>
                    <li><a href="#">Arsip Online</a></li>
                    <li><a href="#">Informasi Publik</a></li>
                    <li><a href="#">E-Book</a></li>
                    <li><a href="#">Katalog Online</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Informasi</h3>
                <ul>
                    <li><a href="#">Profil Dinas</a></li>
                    <li><a href="#">Visi & Misi</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li><a href="#">Tupoksi</a></li>
                    <li><a href="#">Regulasi</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Tautan</h3>
                <ul>
                    <li><a href="#">Portal Boltara</a></li>
                    <li><a href="#">PPID</a></li>
                    <li><a href="#">E-Government</a></li>
                    <li><a href="#">Perpusnas RI</a></li>
                    <li><a href="#">ANRI</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>
                &copy; 2024 Dinas Kearsipan dan Perpustakaan Kabupaten Bolaang Mongondow Utara. All
                Rights Reserved.
            </p>
        </div>
    </footer>


    <script>
        // Smooth scrolling untuk navigasi
        // document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        //     anchor.addEventListener("click", function(e) {
        //         e.preventDefault();
        //         const target = document.querySelector(this.getAttribute("href"));
        //         if (target) {
        //             target.scrollIntoView({
        //                 behavior: "smooth",
        //                 block: "start",
        //             });
        //         }
        //     });
        // });

        // Animasi counter untuk statistik
        function animateCounter(element, target) {
            let current = 0;
            // Jika target kecil (seperti 35), increment 1 agar tidak macet
            const increment = target > 100 ? target / 100 : 1;

            const timer = setInterval(() => {
                current += increment;
                // Pastikan tidak melebihi target
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current).toLocaleString("id-ID");
            }, 20); // Kecepatan animasi
        }

        // Intersection Observer untuk animasi
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll(".stat-number");
                    // UPDATE: Tambahkan angka 35 ke dalam array targets
                    const targets = [15450, 8230, 2150, 35];

                    statNumbers.forEach((num, index) => {
                        // Cek agar index tidak error jika HTML bertambah
                        if (targets[index] !== undefined) {
                            animateCounter(num, targets[index]);
                        }
                    });
                    observer.unobserve(entry.target);
                }
            });
        });

        observer.observe(document.querySelector(".stats-grid"));

        // CTA Button action
        document.querySelector(".cta-button").addEventListener("click", () => {
            document.querySelector("#layanan").scrollIntoView({
                behavior: "smooth",
            });
        });

        window.addEventListener("scroll", function() {
            const header = document.querySelector(".header");
            if (window.scrollY > 50) {
                header.classList.add("shrink");
            } else {
                header.classList.remove("shrink");
            }
        });

        // This is the corrected JavaScript logic for the hamburger menu
        // LOGIKA HAMBURGER MENU & AUTO CLOSE
        const hamburger = document.getElementById("hamburger");
        const navMenu = document.querySelector(".nav-menu");
        const navLinks = document.querySelectorAll(".nav-menu a");

        if (hamburger && navMenu) {
            // 1. Toggle Menu saat Hamburger diklik
            hamburger.addEventListener("click", () => {
                navMenu.classList.toggle("active");
                hamburger.classList.toggle("active");
            });

            // 2. Tutup Menu saat salah satu link diklik
            navLinks.forEach(link => {
                link.addEventListener("click", () => {
                    // Hapus class active agar menu menutup
                    navMenu.classList.remove("active");
                    hamburger.classList.remove("active");
                });
            });

            // 3. (Opsional) Tutup menu jika klik di luar menu (body)
            document.addEventListener("click", (e) => {
                if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
                    navMenu.classList.remove("active");
                    hamburger.classList.remove("active");
                }
            });
        }

        /* ================== SCRIPT TAMBAHAN UNTUK LIGHTBOX ================== */
        function openLightbox(element) {
            const lightbox = document.getElementById('lightbox');
            const lightboxImg = document.getElementById('lightbox-img');
            const imgSource = element.querySelector('img').src;

            lightboxImg.src = imgSource;
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden'; // Mencegah scroll saat lightbox buka
        }

        function closeLightbox(event) {
            // Tutup jika klik pada background (overlay) atau tombol close
            if (event.target.id === 'lightbox' || event.target.className === 'lightbox-close') {
                const lightbox = document.getElementById('lightbox');
                lightbox.classList.remove('active');
                document.body.style.overflow = 'auto'; // Mengembalikan scroll
            }
        }
    </script>
</body>

</html>
