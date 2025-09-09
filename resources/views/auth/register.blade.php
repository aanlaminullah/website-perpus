<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Dinas Kearsipan dan Perpustakaan</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="logo-pemda.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <img src="logo-pemda.png" alt="Logo" class="login-logo">
                <h2>Buat Akun Baru</h2>
                <p>Daftar untuk mengakses layanan</p>
            </div>

            {{-- Menampilkan pesan error validasi umum --}}
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif

            {{-- Form untuk registrasi --}}
            <form action="#" method="POST" class="login-form">
                @csrf
                <div class="input-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" placeholder="Masukkan nama lengkap Anda"
                        value="{{ old('name') }}" required>
                    {{-- Menampilkan pesan error spesifik untuk input 'name' --}}
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Masukkan alamat email Anda"
                        value="{{ old('email') }}" required>
                    {{-- Menampilkan pesan error spesifik untuk input 'email' --}}
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Buat password" required>
                    {{-- Menampilkan pesan error spesifik untuk input 'password' --}}
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        placeholder="Ulangi password" required>
                    {{-- Menampilkan pesan error spesifik untuk input 'password_confirmation' --}}
                    @error('password_confirmation')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="login-button">Daftar</button>
            </form>
            <div class="login-footer">
                <p>Sudah punya akun? <a href="{{ route('login') }}" class="register-link">Masuk sekarang</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
