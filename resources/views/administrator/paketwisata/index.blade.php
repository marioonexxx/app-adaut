@section('title', 'Pengelolaan Paket Wisata')
@extends('layouts.navbar')

@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title mt-4">
                                <div class="page-header-icon"><i data-feather="edit"></i></div>
                                Pengelolaan Paket Wisata
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-xl px-4">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <!-- BUTTON TAMBAH -->
            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                + Tambah Paket Wisata
            </button>

            <div class="card">
                <div class="card-header">Data Paket Wisata :</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple" class="table table-striped align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Paket</th>
                                    <th>Kategori</th>
                                    <th>Durasi</th>
                                    <th>Harga</th>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th style="width: 130px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pakets as $paket)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td class="fw-bold">{{ $paket->nama_paket }}</td>
                                        <td><span class="badge bg-info text-dark">{{ $paket->kategori ?? '-' }}</span></td>
                                        <td>{{ $paket->durasi_hari }} Hari</td>
                                        <td><span class="text-primary fw-semibold">Rp
                                                {{ number_format($paket->harga, 0, ',', '.') }}</span></td>
                                        <td>
                                            @if ($paket->foto)
                                                <img src="{{ asset('storage/' . $paket->foto) }}" class="img-thumbnail"
                                                    style="width:70px;height:55px;object-fit:cover;">
                                            @else
                                                <em>-</em>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($paket->status == 1)
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-danger">Nonaktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <!-- Edit Button -->
                                            <button class="btn btn-sm btn-primary mb-1" data-bs-toggle="modal"
                                                data-bs-target="#modalEdit{{ $paket->id }}">
                                                <i class="fas fa-edit"></i>
                                            </button>

                                            <!-- Delete Form -->
                                            <form id="delete-form-{{ $paket->id }}"
                                                action="{{ route('paket-wisata.destroy', $paket->id) }}" method="POST"
                                                style="display:none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button class="btn btn-sm btn-danger"
                                                onclick="confirmDelete({{ $paket->id }})">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <!-- MODAL EDIT -->
                                    <div class="modal fade" id="modalEdit{{ $paket->id }}" tabindex="-1">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Paket Wisata</h5>
                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="modal"></button>
                                                </div>
                                                <form action="{{ route('paket-wisata.update', $paket->id) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="mb-3">
                                                            <label>Nama Paket</label>
                                                            <input type="text" name="nama_paket" class="form-control"
                                                                value="{{ $paket->nama_paket }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Kategori Paket</label>
                                                            <select name="kategori" class="form-control" required>
                                                                <option value="">-- Pilih Kategori --</option>
                                                                <option value="Paket Wisata Budaya"
                                                                    {{ $paket->kategori == 'Paket Wisata Budaya' ? 'selected' : '' }}>
                                                                    Paket Wisata Budaya</option>
                                                                <option value="Paket Wisata Pantai & Alam"
                                                                    {{ $paket->kategori == 'Paket Wisata Pantai & Alam' ? 'selected' : '' }}>
                                                                    Paket Wisata Pantai & Alam</option>
                                                                <option value="Paket Wisata Desa"
                                                                    {{ $paket->kategori == 'Paket Wisata Desa' ? 'selected' : '' }}>
                                                                    Paket Wisata Desa</option>
                                                                <option value="Event Budaya"
                                                                    {{ $paket->kategori == 'Event Budaya' ? 'selected' : '' }}>
                                                                    Event Budaya</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Deskripsi</label>
                                                            <textarea class="form-control editor-deskripsi" name="deskripsi" rows="3">{{ $paket->deskripsi }}</textarea>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Durasi (Hari)</label>
                                                            <input type="number" name="durasi_hari" class="form-control"
                                                                value="{{ $paket->durasi_hari }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Harga</label>
                                                            <input type="number" name="harga" class="form-control"
                                                                value="{{ $paket->harga }}" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Status</label>
                                                            <select name="status" class="form-control">
                                                                <option value="1"
                                                                    {{ $paket->status == 1 ? 'selected' : '' }}>Aktif</option>
                                                                <option value="0"
                                                                    {{ $paket->status == 0 ? 'selected' : '' }}>Nonaktif
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label>Ganti Foto</label>
                                                            <input type="file" name="foto" class="form-control"
                                                                accept="image/*">
                                                            <small>Biarkan kosong jika tidak ganti foto</small>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL EDIT -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- MODAL TAMBAH -->
    <div class="modal fade" id="modalTambah" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Paket Wisata</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('paket-wisata.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label>Nama Paket</label>
                            <input class="form-control" name="nama_paket" type="text" required>
                        </div>
                        <div class="mb-3">
                            <label>Kategori Paket</label>
                            <select class="form-control" name="kategori" required>
                                <option value="">-- Pilih Kategori --</option>
                                <option value="Paket Wisata Budaya">Paket Wisata Budaya</option>
                                <option value="Paket Wisata Pantai & Alam">Paket Wisata Pantai & Alam</option>
                                <option value="Paket Wisata Desa">Paket Wisata Desa</option>
                                <option value="Event Budaya">Event Budaya</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control editor-deskripsi" name="deskripsi" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label>Durasi (Hari)</label>
                            <input class="form-control" name="durasi_hari" type="number" required>
                        </div>
                        <div class="mb-3">
                            <label>Harga</label>
                            <input class="form-control" name="harga" type="number" required>
                        </div>
                        <div class="mb-3">
                            <label>Upload Foto</label>
                            <input class="form-control" name="foto" type="file" accept="image/*" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- DataTables -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const datatable = document.getElementById('datatablesSimple');
            if (datatable) {
                new simpleDatatables.DataTable(datatable);
            }
        });
    </script>

    <!-- SweetAlert Delete -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonText: 'Batal',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/aefwj8n9k6pqvt3g11vib1wb0wxv53b23vfkuk4xshzxh6p8/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '.editor-deskripsi',
            plugins: 'table paste link lists code',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | table | link | code',
            paste_data_images: true,
            height: 300,
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>
@endsection
