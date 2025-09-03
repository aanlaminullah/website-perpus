@extends('master')

@section('title', 'Edit Visi dan Misi - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Edit Visi dan Misi</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('visimisi.update') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="visi">Visi</label>
            <textarea name="visi" id="visi" class="form-control" rows="3" required>{{ old('visi', $visiMisi->visi ?? '') }}</textarea>
        </div>

        <div class="form-group">
            <label for="misi">Misi</label>
            <div id="misi-list">
                @php
                    $misiItems = $visiMisi ? json_decode($visiMisi->misi, true) : [''];
                @endphp
                @foreach ($misiItems as $index => $misi)
                    <div class="misi-item d-flex mb-2">
                        <input type="text" name="misi[]" class="form-control" value="{{ $misi }}" required>
                        <button type="button" class="btn btn-danger btn-sm ms-2 remove-misi">✖</button>
                    </div>
                @endforeach
            </div>
            <button type="button" id="add-misi" class="btn btn-sm btn-primary mt-2">+ Tambah Misi</button>
        </div>


        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>


    <script>
        // Tambah misi baru
        document.getElementById('add-misi').addEventListener('click', function() {
            let wrapper = document.createElement('div');
            wrapper.className = 'misi-item d-flex mb-2';

            wrapper.innerHTML = `
            <input type="text" name="misi[]" class="form-control" required>
            <button type="button" class="btn btn-danger btn-sm ms-2 remove-misi">✖</button>
        `;

            document.getElementById('misi-list').appendChild(wrapper);
        });

        // Hapus misi (delegasi event biar tombol baru juga bisa kepake)
        document.getElementById('misi-list').addEventListener('click', function(e) {
            if (e.target.classList.contains('remove-misi')) {
                e.target.closest('.misi-item').remove();
            }
        });
    </script>




@endsection
