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
                                <div class="page-header-icon"><i data-feather="email"></i></div>
                                Pengelolaan pesan yang masuk.
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


            <div class="card">
                <div class="card-header">Data paket wisata :</div>
                <div class="card-body">
                    <div class="table-responsive">
                         <table id="datatablesSimple">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Subjek</th>
                                    <th>Pesan</th>
                                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($listKontak as $index => $kontak)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $kontak->name }}</td>
                                        <td>{{ $kontak->email }}</td>
                                        <td>{{ $kontak->subject }}</td>
                                        <td>{{ $kontak->message }}</td>
                                        <td>{{ $kontak->created_at->format('d M Y H:i') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center">Belum ada pesan masuk.</td>
                                    </tr>
                                @endforelse
                            </tbody>
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
            selector: '#itenary',
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
