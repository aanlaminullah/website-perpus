<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Dinas Kearsipan dan Perpustakaan</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="logo-pemda.png" type="image/png">
</head>

<body class="login-page">
    <div class="login-container">
        <div class="login-box">
            <div class="login-header">
                <img src="logo-pemda.png" alt="Logo" class="login-logo">
                <h2>Selamat Datang</h2>
                <p>Masuk ke akun Anda untuk melanjutkan</p>
            </div>
            <form action="#" method="POST" class="login-form">
                <div class="input-group">
                    <label for="email">Email atau Username</label>
                    <input type="text" id="email" name="email" placeholder="Masukkan email atau username"
                        required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                </div>
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    {{-- <a href="#" class="forgot-password">Lupa Password?</a> --}}
                </div>
                <button type="submit" class="login-button">Masuk</button>
            </form>
            {{-- <div class="login-footer">
                <p>Belum punya akun? <a href="#" class="register-link">Daftar sekarang</a></p>
            </div> --}}
        </div>
    </div>
</body>

</html>
