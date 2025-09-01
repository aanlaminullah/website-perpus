@extends('master')

@section('title', 'List Buku - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">List Data Buku</h2>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped"> <a href="{{ route('buku.create') }}"
                class="btn btn-primary mb-3">Tambah
                Data</a>

            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Kategori</th>
                    <th>Tahun</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($books as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->author }}</td>
                        <td>{{ $b->category }}</td>
                        <td>{{ $b->year }}</td>
                        <td>
                            <a href="#" class="btn btn-info btn-sm">View</a>
                            <form action="#" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">
                            <p class="text-center">Tidak ada buku.</p>
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>


@endsection
