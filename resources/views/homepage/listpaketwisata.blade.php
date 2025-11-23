<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata Desa Wisata Adaut – Eksplor Budaya Tnyafar & Experience Autentik</title>
    <meta name="description"
        content="Temukan pengalaman wisata terbaik di Desa Wisata Adaut. Nikmati paket wisata budaya Tnyafar, keindahan alam, tradisi lokal, dan aktivitas autentik khas Kepulauan Tanimbar.">
    <meta name="keywords"
        content="Desa Wisata Adaut, paket wisata Adaut, wisata budaya Tnyafar, wisata Tanimbar, e-tourism Adaut, wisata budaya Maluku, paket wisata desa, budaya Tnyafar Tanimbar">
    <meta name="author" content="Desa Wisata Adaut">
    <link rel="canonical" href="https://www.wisata.adaut.com/">


    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('traveltime/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('traveltime/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('traveltime/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('traveltime/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('traveltime/assets/css/main.css') }}" rel="stylesheet">

</head>

<body class="testimonials-page">

    @include('layouts.homepage.navbar')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background" style="background-image: url(assets/img/travel/showcase-11.webp);">
            <div class="container position-relative text-center">
                <h1>Tentang Desa Wisata Adaut</h1>
                <p>Selamat datang di website resmi Desa Wisata Adaut! Temukan berbagai paket wisata yang menawarkan
                    pengalaman budaya Tnyafar, keindahan alam, serta kegiatan autentik khas Kepulauan Tanimbar. Website
                    ini hadir untuk memudahkan wisatawan merencanakan perjalanan, mengeksplor budaya lokal, dan
                    menikmati pengalaman wisata yang berkesan.</p>
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="current">Tentang</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Featured Tours Section -->
        <section id="featured-tours" class="featured-tours section py-5">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Paket Wisata Desa Adaut</h2>
                <div>
                    <span>Jelajahi Pilihan</span>
                    <span class="description-title">Paket Wisata Terbaik Kami</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container">
                <div class="row g-4">
                    @foreach ($pakets as $paket)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="destination-card">
                                <div class="destination-overlay">
                                    <img src="{{ $paket->foto ? asset('storage/' . $paket->foto) : asset('traveltime/assets/img/default-tour.jpg') }}"
                                        alt="{{ $paket->nama_paket }}" class="img-fluid" loading="lazy">

                                    <div class="card-overlay">
                                        <div class="badge-container">
                                            @if ($paket->status == 1)
                                                <span class="featured-badge">Best Seller</span>
                                            @endif
                                            <span class="price-tag">Rp
                                                {{ number_format($paket->harga, 0, ',', '.') }}</span>
                                        </div>

                                        <div class="card-details">
                                            <h5>{{ $paket->nama_paket }}</h5>

                                            <div class="meta-info">
                                                <span><i class="bi bi-calendar3"></i> {{ $paket->durasi_hari }}
                                                    Hari</span>
                                                <span><i class="bi bi-geo-alt"></i>
                                                    {{ $paket->kategori ?? '-' }}</span>
                                            </div>

                                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($paket->deskripsi), 100, '...') }}
                                            </p>

                                            <div class="action-row">
                                                <a href="{{ route('homepage.show.paket-wisata', $paket->id) }}"
                                                    class="explore-btn">Detail Paket</a>

                                                <div class="rating-stars">
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-fill"></i>
                                                    <i class="bi bi-star-half"></i>
                                                    <small>4.7</small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!-- End Tour Items -->
                </div>

                <div class="text-center mt-5">
                    <a href="{{ route('paket-wisata.index') }}" class="discover-more-btn">
                        Lihat Semua Paket Wisata
                    </a>
                </div>
            </div>

        </section>
        <!-- /Featured Tours Section -->




    </main>

    @include('layouts.homepage.footer2')


</body>

</html>
