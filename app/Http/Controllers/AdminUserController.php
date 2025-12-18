<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    // Menampilkan daftar user
    public function index()
    {
        // Cek apakah yang login adalah admin
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Anda tidak memiliki akses ke halaman ini.');
        }

        $users = User::where('role', 'user')->get();
        return view('admin.users.index', compact('users'));
    }

    // Form ganti password user tertentu
    public function edit(User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }
        return view('admin.users.edit', compact('user'));
    }

    // Proses update password
    public function updatePassword(Request $request, User $user)
    {
        if (Auth::user()->role !== 'admin') {
            abort(403);
        }

        $request->validate([
            'password' => 'required|min:8|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Password berhasil direset untuk user ' . $user->name);
    }
}
