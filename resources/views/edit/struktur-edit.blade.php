@extends('master')

@section('title', 'Edit Struktur Organisasi')

@section('content')
    <h2 class="dashboard-title">Edit Anggota Struktur Organisasi</h2>

    <div class="content-panel">
        <h3>Form Edit Anggota</h3>
        <hr>

        {{-- Form untuk mengedit data --}}
        <form action="{{ route('struktur.update', $node->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Gunakan method PUT untuk operasi update --}}

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" id="jabatan" name="jabatan" class="form-control" value="{{ $node->jabatan }}" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ $node->nama }}"
                    required>
            </div>

            <div class="form-group">
                <label for="parent_id">Atasan (Parent)</label>
                <select id="parent_id" name="parent_id" class="form-control">
                    <option value="">-- Pilih Atasan --</option>
                    @foreach ($allNodes as $parent)
                        <option value="{{ $parent->id }}" {{ $node->parent_id == $parent->id ? 'selected' : '' }}>
                            {{ $parent->jabatan }} - {{ $parent->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('struktur.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
