@extends('master')

@section('title', 'Kelola Lensa Kegiatan')

@section('content')
    <h2 class="dashboard-title">Manajemen Lensa Kegiatan</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="form-card">
        <div style="margin-bottom: 20px; text-align: right;">
            <a href="{{ route('lensa.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Kegiatan
            </a>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Foto</th>
                        <th>Keterangan</th>
                        <th width="15%">Tanggal</th>
                        <th width="15%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lensa as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="Foto"
                                    style="width: 100px; border-radius: 5px;">
                            </td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</td>
                            <td>
                                <a href="{{ route('lensa.edit', $item->id) }}" class="btn btn-sm btn-warning"
                                    style="color:white;">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('lensa.destroy', $item->id) }}" method="POST"
                                    style="display:inline-block;" onsubmit="return confirm('Yakin ingin menghapus?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
