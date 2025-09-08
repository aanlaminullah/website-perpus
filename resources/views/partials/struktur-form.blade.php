<div class="form-container">
    <form action="{{ route('struktur.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" id="jabatan" name="jabatan" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="parent_id">Atasan (Parent)</label>
            <select id="parent_id" name="parent_id" class="form-control">
                <option value="">-- Pilih Atasan --</option>
                {{-- Opsi akan diisi oleh data dari controller --}}
                @foreach ($allNodes as $node)
                    <option value="{{ $node->id }}">{{ $node->jabatan }} - {{ $node->nama }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah Anggota</button>
    </form>
</div>
