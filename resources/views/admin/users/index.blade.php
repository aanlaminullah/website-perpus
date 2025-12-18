@extends('master')

@section('title', 'Manajemen User')

@section('content')
    <h2 class="dashboard-title">Manajemen User</h2>

    <div class="form-card">
        @if (session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
            <thead>
                <tr style="background-color: #f2f2f2; text-align: left;">
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Nama</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Email</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Role</th>
                    <th style="padding: 12px; border-bottom: 1px solid #ddd;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $user->name }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">{{ $user->email }}</td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">
                            <span
                                style="padding: 4px 8px; border-radius: 4px; background: {{ $user->role == 'admin' ? '#e74c3c' : '#3498db' }}; color: white; font-size: 12px;">
                                {{ ucfirst($user->role) }}
                            </span>
                        </td>
                        <td style="padding: 12px; border-bottom: 1px solid #ddd;">
                            <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-primary"
                                style="padding: 5px 10px; font-size: 12px;">
                                <i class="fas fa-key"></i> Reset Password
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
