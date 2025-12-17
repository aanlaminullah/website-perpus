@extends('master')

@section('title', 'Edit Statistik - Dinas Kearsipan dan Perpustakaan')

@section('content')
    <h2 class="dashboard-title">Manajemen Statistik Beranda</h2>

    <div class="form-card">
        <div class="alert alert-success" style="display: none; margin-bottom: 20px;">
            <i class="fas fa-check-circle"></i> Data berhasil diperbarui (Simulasi)
        </div>

        <form>
            <div class="stats-edit-grid">

                <div class="form-group">
                    <label for="koleksi_buku">
                        <i class="fas fa-book" style="color: #3498db; margin-right: 5px;"></i>
                        Total Koleksi Buku
                    </label>
                    <input type="number" id="koleksi_buku" name="koleksi_buku" value="15450"
                        placeholder="Masukkan jumlah buku...">
                    <small style="color: #666; font-size: 12px;">Angka saat ini: 15,450</small>
                </div>

                <div class="form-group">
                    <label for="dokumen_arsip">
                        <i class="fas fa-archive" style="color: #27ae60; margin-right: 5px;"></i>
                        Total Dokumen Arsip
                    </label>
                    <input type="number" id="dokumen_arsip" name="dokumen_arsip" value="8230"
                        placeholder="Masukkan jumlah arsip...">
                    <small style="color: #666; font-size: 12px;">Angka saat ini: 8,230</small>
                </div>

                <div class="form-group">
                    <label for="anggota_aktif">
                        <i class="fas fa-users" style="color: #e74c3c; margin-right: 5px;"></i>
                        Jumlah Anggota Aktif
                    </label>
                    <input type="number" id="anggota_aktif" name="anggota_aktif" value="2150"
                        placeholder="Masukkan jumlah anggota...">
                    <small style="color: #666; font-size: 12px;">Angka saat ini: 2,150</small>
                </div>

                <div class="form-group">
                    <label for="buku_dibaca">
                        <i class="fas fa-book-reader" style="color: #f39c12; margin-right: 5px;"></i>
                        Jumlah Buku Dibaca
                    </label>
                    <input type="number" id="buku_dibaca" name="buku_dibaca" value="35"
                        placeholder="Masukkan jumlah dibaca...">
                    <small style="color: #666; font-size: 12px;">Angka saat ini: 35</small>
                </div>

            </div>

            <div class="form-actions" style="margin-top: 40px; border-top: 1px solid #eee; padding-top: 20px;">
                <button type="button" class="btn btn-secondary" onclick="window.location.reload()">Batal</button>
                <button type="button" class="btn btn-primary" onclick="simpanData()">
                    <i class="fas fa-save"></i> Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    <script>
        // Script sederhana untuk simulasi tombol simpan
        function simpanData() {
            const btn = document.querySelector('.btn-primary');
            const alert = document.querySelector('.alert');

            // Efek Loading
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
            btn.disabled = true;

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                alert.style.display = 'block';
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 1000);
        }
    </script>
@endsection
