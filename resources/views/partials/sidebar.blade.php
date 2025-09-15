<aside class="sidebar" id="sidebar">
    <a href="{{ url('/') }}" style="text-decoration: none; color: inherit;">
        <div class="sidebar-header">
            <div class="logo">
                <img src="{{ asset('logo-pemda.png') }}" alt="Logo">
            </div>
            <div>
                <div class="site-title">Dashboard Admin</div>
                <div class="tagline">Disarpus Kab. Boltara</div>
            </div>
        </div>
    </a>
    <nav class="sidebar-nav">
        <ul>
            <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="{{ Request::routeIs('buku.*') ? 'active' : '' }}">
                <a href="{{ route('buku.index') }}">
                    <i class="fas fa-book"></i> Buku
                </a>
            </li>
            <li
                class="dropdown {{ Request::routeIs('visimisi.index') || Request::routeIs('tugasfungsi.index') || Request::routeIs('struktur.index') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="dropdown-toggle">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <ul class="submenu">
                    <li class="{{ Request::routeIs('visimisi.index') ? 'active' : '' }}">
                        <a href="{{ route('visimisi.index') }}">Visi Misi</a>
                    </li>
                    <li class="{{ Request::routeIs('tugasfungsi.index') ? 'active' : '' }}">
                        <a href="{{ route('tugasfungsi.index') }}">Tugas dan Fungsi</a>
                    </li>
                    <li class="{{ Request::routeIs('struktur.index') ? 'active' : '' }}">
                        <a href="{{ route('struktur.index') }}">Struktur Organisasi</a>
                    </li>
                </ul>
            </li>

            <li class="dropdown {{ Request::routeIs('password.edit') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="dropdown-toggle">
                    <i class="fa-solid fa-gear"></i> Pengaturan
                </a>
                <ul class="submenu">
                    <li class="{{ Request::routeIs('password.edit') ? 'active' : '' }}">
                        <a href="{{ route('password.edit') }}">
                            <i class="fa-solid fa-key"></i> Ubah Password
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </nav>
    <div class="sidebar-footer">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-button">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>
</aside>
