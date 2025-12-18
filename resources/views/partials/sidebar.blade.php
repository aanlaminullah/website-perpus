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
                    <i class="fas fa-tachometer-alt"></i> Statistik
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
                    <i class="fas fa-edit"></i> Profil
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
            <li class="{{ Request::routeIs('lensa.*') ? 'active' : '' }}">
                <a href="{{ route('lensa.index') }}">
                    <i class="fas fa-camera"></i> Lensa Kegiatan
                </a>
            </li>

            @if (auth()->check() && auth()->user()->role === 'admin')
                <li class="{{ Request::routeIs('admin.users.*') ? 'active' : '' }}">
                    <a href="{{ route('admin.users.index') }}">
                        <i class="fas fa-users-cog"></i> Edit User
                    </a>
                </li>
            @endif

            <li class="dropdown {{ Request::routeIs('password.edit') ? 'active' : '' }}">
                <a href="javascript:void(0)" class="dropdown-toggle">
                    <i class="fa-solid fa-gear"></i> Pengaturan
                </a>
                <ul class="submenu">
                    <li class="{{ Request::routeIs('password.edit') ? 'active' : '' }}">
                        <a href="{{ route('password.edit') }}">
                            Ubah Password
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </nav>
    <form action="{{ route('logout') }}" method="POST" id="logout-form">
        @csrf
        <button type="button" class="logout-button" id="btn-logout">
            <i class="fas fa-sign-out-alt"></i> Logout
        </button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnLogout = document.getElementById('btn-logout');

            if (btnLogout) {
                btnLogout.addEventListener('click', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Yakin ingin keluar?',
                        text: "Sesi Anda akan berakhir!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Logout',
                        cancelButtonText: 'Batal',
                        reverseButtons: true // Opsional: menukar posisi tombol
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Jika user klik "Ya", submit form secara manual
                            document.getElementById('logout-form').submit();
                        }
                    });
                });
            }
        });
    </script>
    </div>
</aside>
