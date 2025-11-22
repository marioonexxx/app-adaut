@extends('layouts.navbar') {{-- Ganti sesuai layout kamu --}}
@section('title', 'Edit Paket Wisata')

@section('content')
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
            <div class="container-xl px-4">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title mt-4">
                                <div class="page-header-icon"><i data-feather="edit"></i></div>
                                Update Data Paket Wisata
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

        <form method="POST" action="{{ route('administrator.updatepaketwisata', $paket->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="kode">Kode Paket</label>
                <input class="form-control" id="kode" name="kode" type="text"
                    value="{{ old('kode', $paket->kode) }}" required>
            </div>

            <div class="mb-3">
                <label for="nama">Nama Paket</label>
                <input class="form-control" id="nama" name="nama" type="text"
                    value="{{ old('nama', $paket->nama) }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $paket->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="fasilitas">Fasilitas</label>
                <textarea class="form-control" id="fasilitas" name="fasilitas" rows="3">{{ old('fasilitas', $paket->fasilitas) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="itenary">Itenary</label>
                <textarea class="form-control" id="itenary" name="itenary" rows="6">{{ old('itenary', $paket->itenary) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="gambar">Gambar Saat Ini</label><br>
                @if ($paket->gambar)
                    <img src="{{ asset('storage/' . $paket->gambar) }}" alt="Gambar Paket" width="200" class="mb-2">
                @else
                    <p><em>Tidak ada gambar</em></p>
                @endif
                <input type="file" name="gambar" class="form-control" accept="image/*">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti</small>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('administrator.showpaketwisata') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
    </main>

    <!-- TinyMCE -->
    <script src="https://cdn.tiny.cloud/1/aefwj8n9k6pqvt3g11vib1wb0wxv53b23vfkuk4xshzxh6p8/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#itenary, #fasilitas',
            plugins: 'lists link image table code',
            toolbar: 'undo redo | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code',
            menubar: false,
            height: 300,
            content_css: 'default'
        });
    </script>
@endsection
