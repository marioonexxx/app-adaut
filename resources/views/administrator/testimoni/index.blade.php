@section('title', 'Manajemen Testimoni')
@extends('layouts.navbar')

@section('content')
<main>
    <header class="page-header page-header-dark bg-gradient-primary-to-secondary mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title mt-4">
                            <div class="page-header-icon"><i data-feather="message-square"></i></div>
                            Manajemen Testimoni Paket Wisata
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

        <div class="card">
            <div class="card-header">Data Testimoni :</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatablesSimple" class="table table-striped align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Paket</th>
                                <th>Testimoni</th>
                                <th>Rating</th>
                                <th>Foto</th>
                                <th style="width: 100px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($testimoni as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->nama }}</td>
                                    <td>{{ $row->paket->nama_paket ?? '-' }}</td>
                                    <td>{{ $row->isi_testimoni }}</td>
                                    <td>
                                        ⭐ {{ $row->rating }}/5
                                    </td>
                                    <td>
                                        @if ($row->foto)
                                            <img src="{{ asset('storage/' . $row->foto) }}"
                                                 class="img-thumbnail"
                                                 style="width: 60px; height: 60px; object-fit: cover;">
                                        @else
                                            <em>-</em>
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Delete Form -->
                                        <form id="delete-form-{{ $row->id }}"
                                              action="{{ route('adminstrator.testimonial.destroy', $row->id) }}"
                                              method="POST" style="display:none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <button class="btn btn-sm btn-danger"
                                            onclick="confirmDelete({{ $row->id }})">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</main>

<!-- SweetAlert Delete -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Yakin ingin menghapus testimoni ini?',
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

<!-- Datatables -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const datatable = document.getElementById('datatablesSimple');
        if (datatable) {
            new simpleDatatables.DataTable(datatable);
        }
    });
</script>
@endsection
