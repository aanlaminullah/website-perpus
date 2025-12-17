@extends('master')

@section('title', 'Edit Lensa Kegiatan')

@section('content')
    <h2 class="dashboard-title">Edit Kegiatan</h2>

    <div class="form-card" style="max-width: 800px;">
        <form action="{{ route('lensa.update', $lensa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="tanggal">Tanggal Kegiatan</label>
                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $lensa->tanggal }}"
                    required>
            </div>

            <div class="form-group">
                <label>Foto Saat Ini</label><br>
                <img src="{{ asset('storage/' . $lensa->foto) }}" alt="Current Foto"
                    style="width: 150px; border-radius: 8px; margin-bottom: 10px;">
            </div>

            <div class="form-group">
                <label for="foto">Ganti Foto (Opsional)</label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/*">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
            </div>

            <div class="form-group">
                <label for="keterangan">Keterangan / Caption</label>
                <textarea name="keterangan" id="keterangan" rows="3" class="form-control" required>{{ $lensa->keterangan }}</textarea>
            </div>

            <div class="form-actions">
                <a href="{{ route('lensa.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
