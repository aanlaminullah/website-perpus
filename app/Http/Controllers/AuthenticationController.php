<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthenticationController extends Controller
{

    public function showLogin()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        // Coba untuk mengotentikasi pengguna
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard')->with('success', 'Anda berhasil masuk!');
        }

        // Jika otentikasi gagal
        throw ValidationException::withMessages([
            'name' => 'Username atau password salah.',
        ]);
    }


    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Buat pengguna baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Login otomatis pengguna yang baru terdaftar
        Auth::login($user);

        return redirect()->intended('/login')->with('success', 'Akun berhasil dibuat!');
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda berhasil keluar!');
    }


    public function showChangePassword()
    {
        return view('auth.changepassword');
    }


    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'new_password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = Auth::user();

        // Cek apakah password lama sesuai
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors([
                'current_password' => 'Password lama tidak sesuai.',
            ]);
        }

        // Update password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return redirect()->route('password.edit')->with('success', 'Password berhasil diperbarui!');
    }
}
