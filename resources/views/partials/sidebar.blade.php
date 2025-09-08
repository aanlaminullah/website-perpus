<aside class="sidebar" id="sidebar">
    <a href="{{ url('/') }}" style="text-decoration: none; color: inherit;">
        <div class="sidebar-header">
            <div class="logo">
                <img src="{{ asset('logo-pemda.png') }}" alt="Logo">
            </div>
            <div>
                <div class="site-title">Dashboard Admin</div>
                <div class="tagline">Disarpus Kab. Boltara
                </div>
            </div>
        </div>
    </a>
    <nav class="sidebar-nav">
        <ul>
            <li><a href="/dashboard">Dashboard</a></li>
            <li><a href="{{ route('buku.index') }}">Buku</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropdown-toggle">
                    Edit
                </a>
                <ul class="submenu">
                    <li><a href="{{ route('visimisi.index') }}">Visi Misi</a></li>
                    <li><a href="{{ route('tugasfungsi.index') }}">Tugas dan Fungsi</a></li>
                    <li><a href="{{ route('struktur.index') }}">Struktur Organisasi</a></li>
                </ul>
            </li>
            {{-- <li><a href="#">Laporan</a></li>
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
            </li> --}}
        </ul>
    </nav>
</aside>
