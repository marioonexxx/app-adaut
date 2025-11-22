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

        <!-- Main page content -->
        <div class="container-xl px-4">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="card mb-4">
                <div class="card-header">Lengkapi data paket wisata :</div>
                <div class="card-body">
                    <form action="{{ route('administrator.storepaketwisata') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="kodepaket">Kode Paket</label>
                            <input class="form-control" id="kodepaket" type="text" name="kode"
                                placeholder="Masukan kode paket wisata">
                        </div>
                        <div class="mb-3">
                            <label for="namapaket">Nama Paket</label>
                            <input class="form-control" id="namapaket" type="text" name="nama"
                                placeholder="Masukan nama paket wisata">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea class="form-control" id="deskripsi" rows="3" name="deskripsi"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="fasilitas">Fasilitas</label>
                            <textarea class="form-control" id="fasilitas" rows="3" name="fasilitas"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="itenary">Itenary</label>
                            <textarea class="form-control" id="itenary" rows="6" name="itenary"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar">Upload Gambar</label>
                            <input class="form-control" id="gambar" name="gambar" type="file" accept="image/*"
                                required>
                            <small class="text-muted">Maksimal ukuran: 2MB</small>
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Data paket wisata :</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatablesSimple">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode</th>
                                    <th>Nama Paket</th>

                                    <th>Deskripsi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pakets as $paket)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $paket->kode }}</td>
                                        <td>{{ $paket->nama }}</td>

                                        <td>{{ Str::limit(strip_tags($paket->deskripsi), 80) }}</td>
                                        <td>
                                            @if ($paket->gambar)
                                                <img src="{{ asset('storage/' . $paket->gambar) }}" alt="gambar"
                                                    width="100">
                                            @else
                                                <em>-</em>
                                            @endif
                                        </td>
                                        <td>


                                            <a href="{{ route('administrator.editpaketwisata', $paket->id) }}"
                                                class="btn btn-sm btn-primary">Edit</a>

                                            <!-- Tombol Delete -->
                                            <form id="delete-form-{{ $paket->id }}"
                                                action="{{ route('administrator.deletepaketwisata', $paket->id) }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>

                                            <button class="btn btn-danger btn-sm"
                                                onclick="confirmDelete({{ $paket->id }})">Hapus</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada data</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/aefwj8n9k6pqvt3g11vib1wb0wxv53b23vfkuk4xshzxh6p8/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>

    <script>
        tinymce.init({
            selector: '#itenary, #fasilitas',
            plugins: 'table paste link lists code',
            toolbar: 'undo redo | styles | bold italic underline | alignleft aligncenter alignright | bullist numlist | table | link | code',
            paste_data_images: true,
            height: 300,
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });
    </script>

    {{-- datatable --}}

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/sbadmin/js/datatables/datatables-simple-demo.js') }}"></script>


    {{-- sweetalert2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>
@endsection
