@extends('master')

@section('title', 'Edit Tugas dan Fungsi - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Edit Tugas dan Fungsi</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('tugasfungsi.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="tugas">Tugas</label>
            <textarea name="tugas" id="tugas" class="form-control" rows="3" required>{{ old('tugas', $tugasFungsi->tugas ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="fungsi">Fungsi</label>
            <div id="fungsi-list">
                @php
                    $fungsiItems = $tugasFungsi ? json_decode($tugasFungsi->fungsi, true) : [''];
                @endphp
                @foreach ($fungsiItems as $fungsi)
                    <div class="fungsi-item d-flex mb-2">
                        <input type="text" name="fungsi[]" class="form-control" value="{{ $fungsi }}" required>
                        <button type="button" class="btn btn-danger btn-sm ms-2 remove-fungsi">✖</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-fungsi" class="btn btn-sm btn-primary mt-2">+ Tambah Fungsi</button>
        </div>

        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>

    <script>
        // Tambah fungsi baru
        document.getElementById('add-fungsi').addEventListener('click', function() {
            let wrapper = document.createElement('div');
            wrapper.className = 'fungsi-item d-flex mb-2';

            wrapper.innerHTML = `
                <input type="text" name="fungsi[]" class="form-control" required>
                <button type="button" class="btn btn-danger btn-sm ms-2 remove-fungsi">✖</button>
            `;

            document.getElementById('fungsi-list').appendChild(wrapper);
        });

        // Hapus fungsi
        document.getElementById('fungsi-list').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-fungsi')) {
                e.target.closest('.fungsi-item').remove();
            }
        });
    </script>
@endsection
