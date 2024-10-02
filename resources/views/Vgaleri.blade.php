@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>Daftar Galeri</h2>
    <a href="#" onclick="ModalTambahGaleri()" class="btn btn-success mb-3">+ Tambah Galeri</a>

    <!-- Tabel Data Galeri -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Post ID</th>
                <th>Position</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($galeri as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->galeri_id }}</td>
                <td>{{ $item->file }}</td>
                <td>{{ $item->judul }}</td>
                <td>
                    <a href="#" onclick="ModalEditGaleri('{{ $item->id }}', '{{ $item->post_id }}', '{{ $item->position }}', '{{ $item->status }}')" class="btn btn-info btn-sm">Edit</a>
                    <a href="#" onclick="ModalHapusGaleri('{{ $item->id }}', '{{ $item->position }}')" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $galeri->links() }}
    </div>
</div>

<!-- Form Modal Tambah Galeri -->
<form action="galeri/tambah" method="post">
    @csrf
    <div class="modal fade" id="ModalTambahGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Post ID</label>
                        <input type="text" class="form-control" name="post_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position (URL Gambar)</label>
                        <input type="text" class="form-control" name="position" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
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

<!-- Form Modal Hapus Galeri -->
<form action="galeri/hapus" method="post">
    @csrf
    <div class="modal fade" id="ModalHapusGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Hapus Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">Apakah Anda yakin ingin menghapus galeri ini? Tindakan ini tidak dapat dibatalkan.</div>
                <div class="modal-footer">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-danger" value="Hapus">
                </div>
            </div>
        </div>
    </div>
</form>



<!-- Form Modal Edit Galeri -->
<form action="galeri/edit" method="post">
    @csrf
    <div class="modal fade" id="ModalEditGaleri" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label class="form-label">Post ID</label>
                        <input type="text" class="form-control" name="post_id" id="edit_post_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Position (URL Gambar)</label>
                        <input type="text" class="form-control" name="position" id="edit_position" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select class="form-control" name="status" id="edit_status" required>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
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

<!-- Scripts -->
<script>
    // Modal Tambah Galeri
    function ModalTambahGaleri() {
        $('#ModalTambahGaleri').modal('show');
    }

    // Modal Hapus Galeri
    function ModalHapusGaleri(id) {
        $('[name="id"]').val(id);
        $('#ModalHapusGaleri').modal('show');
    }

    // Modal Edit Galeri
    function ModalEditGaleri(id, post_id, position, status) {
        $('#edit_post_id').val(post_id);
        $('#edit_position').val(position);
        $('#edit_status').val(status);
        $('[name="id"]').val(id);
        $('#ModalEditGaleri').modal('show');
    }
</script>
@endsection
