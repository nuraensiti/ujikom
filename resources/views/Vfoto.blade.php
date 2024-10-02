@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Daftar Foto</h2>
    <a href="#" onclick="ModalTambahFoto()" class="btn btn-success mb-3">+ Tambah Foto</a>

    <!-- Tabel Data Foto -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Galeri ID</th>
                <th>File</th>
                <th>Judul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($foto as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->galeri_id }}</td>
                <td>{{ $item->file }}</td>
                <td>{{ $item->judul }}</td>
                <td>
                    <a href="#" onclick="ModalEditFoto('{{ $item->id }}', '{{ $item->galeri_id }}', '{{ $item->file }}', '{{ $item->judul }}')" class="btn btn-info btn-sm">Edit</a>
                    <a href="#" onclick="ModalHapusGaleri('{{ $item->id }}', '{{ $item->judul }}')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $foto->links() }}
    </div>
</div>

<!-- Modal Tambah Foto -->
<form action="{{ route('foto.tambah') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Galeri ID</label>
                        <input type="text" class="form-control" name="galeri_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File</label>
                        <input type="text" class="form-control" name="file" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Form Modal Hapus Foto -->
<form action="{{ route('foto.hapus') }}" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah Anda yakin ingin menghapus foto <strong id="judulFoto"></strong>? Tindakan ini tidak dapat dibatalkan.</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="hapusFotoId">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>

<!-- Modal Edit Foto -->
<form action="{{ route('foto.edit') }}" method="post">
    @csrf
    <input type="hidden" name="id" id="edit_id"> <!-- Pastikan input ini ada -->
    <div class="modal fade" id="ModalEditFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Foto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Galeri ID</label>
                        <input type="text" class="form-control" name="galeri_id" id="edit_galeri_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">File</label>
                        <input type="text" class="form-control" name="file" id="edit_file" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Judul</label>
                        <input type="text" class="form-control" name="judul" id="edit_judul" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary" value="Simpan Perubahan">
                </div>
            </div>
        </div>
    </div>
</form>


<script>
    function ModalTambahFoto() {
        $('#ModalTambahFoto').modal('show');
    }

    // Modal Hapus Galeri
    function ModalHapusGaleri(id, judul) {
        document.getElementById('judulFoto').innerText = judul; // Menampilkan judul di modal
        document.querySelector('[name="id"]').value = id; // Mengisi input hidden dengan id foto
        $('#ModalHapusGaleri').modal('show'); // Menampilkan modal hapus
    }

    function ModalEditFoto(id, galeri_id, file, judul) {
    $('#edit_id').val(id);
    $('#edit_galeri_id').val(galeri_id); // Disesuaikan ke galeri_id
    $('#edit_file').val(file);           // Disesuaikan ke file
    $('#edit_judul').val(judul);
    $('#ModalEditFoto').modal('show');
}

</script>
@endsection
