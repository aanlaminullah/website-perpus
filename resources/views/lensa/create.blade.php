@extends('master')

@section('title', 'Tambah Lensa Kegiatan')

@section('content')
    <h2 class="dashboard-title">Tambah Kegiatan Baru</h2>

    {{-- Menampilkan pesan error global jika ada (opsional, tapi bagus untuk UX) --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-card" style="max-width: 800px;">
        <form action="{{ route('lensa.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="tanggal">Tanggal Kegiatan</label>
                <input type="date" name="tanggal" id="tanggal"
                    class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal') }}" required>

                @error('tanggal')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="foto">Upload Foto</label>
                <input type="file" name="foto" id="foto" class="form-control @error('foto') is-invalid @enderror"
                    accept="image/*" required>
                <small class="text-muted">Format: JPG, PNG. Maksimal 2MB.</small>

                @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label for="keterangan">Keterangan / Caption</label>
                <textarea name="keterangan" id="keterangan" rows="3"
                    class="form-control @error('keterangan') is-invalid @enderror" placeholder="Deskripsi kegiatan..." required>{{ old('keterangan') }}</textarea>

                @error('keterangan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-actions mt-4">
                <a href="{{ route('lensa.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
@endsection
