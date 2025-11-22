@include('layouts.homepage.header')


<style>
    .star-rating {
        direction: rtl;
        display: inline-flex;
    }

    .star-rating input[type=radio] {
        display: none;
    }

    .star-rating label {
        font-size: 2rem;
        color: #ccc;
        cursor: pointer;
        transition: color 0.2s;
    }

    .star-rating input[type=radio]:checked~label {
        color: gold;
    }

    .star-rating label:hover,
    .star-rating label:hover~label {
        color: gold;
    }
</style>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('homepage') }}">Home</a></li>
                    <li class="current">Testimonial</li>
                </ol>
            </nav>
            <h1>Testimonial</h1>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Testimonial Paket Wisata Desa Adaut</h2>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="{{ route('store.testimonial') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required>
                </div>
                <select name="paket" id="paket" class="form-select" required>
                    <option value="">-- Pilih Paket Wisata --</option>
                    @foreach ($listPaket as $paket)
                        <option value="{{ $paket->nama }}">{{ $paket->nama }}</option>
                    @endforeach
                </select>

                <div class="mb-3">
                    <label class="form-label">Rating</label>
                    <div class="star-rating">
                        @for ($i = 5; $i >= 1; $i--)
                            <input type="radio" name="rating" id="star{{ $i }}"
                                value="{{ $i }}" required>
                            <label for="star{{ $i }}">★</label>
                        @endfor
                    </div>
                </div>
                <div class="mb-3">
                    <label for="pesan" class="form-label">Pesan</label>
                    <textarea name="pesan" class="form-control" id="pesan" rows="4" required></textarea>
                </div>


                <button type="submit" class="btn btn-primary">Kirim Testimoni</button>
            </form>

        </div>

    </section><!-- /Starter Section Section -->

</main>

@include('layouts.homepage.footer')
