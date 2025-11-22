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

<body class="index-page">

    @include('layouts.homepage.navbar')

    <main class="main">

        <!-- Travel Hero Section -->
        <section id="travel-hero" class="travel-hero section dark-background">

            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content">
                            <h1>Jelajahi Keindahan Desa Wisata Adaut</h1>
                            <p class="lead">
                                Temukan pesona budaya Tnyafar, keaslian tradisi masyarakat Adaut,
                                serta keindahan alam Kepulauan Tanimbar yang memukau.
                                Rasakan pengalaman wisata yang autentik, hangat, dan penuh cerita.
                            </p>
                            <div class="d-flex flex-wrap gap-3 mt-4">
                                <a href="#" class="btn btn-primary">Lihat Paket Wisata</a>
                                <a href="https://youtu.be/6rtuwd1zwuM" target="_blank"
                                    class="btn btn-outline-light">Pelajari Budaya & Wisata Adaut</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5 mt-lg-0">
                        <div class="booking-form">
                            <form action="" method="post" onsubmit="redirectToWA(event)">
                                <div class="row gy-3">
                                    <div class="col-md-12">
                                        <label for="destination">Destination</label>
                                        <input type="text" name="destination" id="destination" class="form-control"
                                            placeholder="Where do you want to go?" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="check-in">Check In</label>
                                        <input type="date" name="checkin" id="check-in" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="check-out">Check Out</label>
                                        <input type="date" name="checkout" id="check-out" class="form-control"
                                            required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="adults">Dewasa</label>
                                        <input type="number" name="adults" id="adults" class="form-control"
                                            min="1" max="20" value="2" required="">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="children">Anak</label>
                                        <input type="number" name="children" id="children" class="form-control"
                                            min="0" max="20" value="0">
                                    </div>

                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn btn-accent w-100 mt-3">
                                            Pesan via WhatsApp
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Travel Hero Section -->

        <!-- Why Us Section -->
        <section id="why-us" class="why-us section">

            <div class="container">

                <!-- Main Content Grid -->
                <div class="content-grid">
                    <div class="row g-4 align-items-stretch">

                        <!-- About Section -->
                        <div class="col-lg-6">
                            <div class="about-block">
                                <div class="about-header">
                                    <span class="section-badge">Tentang Kami</span>
                                    <h3>Wisata Autentik Desa Adaut – Budaya, Alam, dan Kehangatan Lokal</h3>
                                </div>
                                <div class="about-content">
                                    <p>
                                        Desa Wisata Adaut, yang terletak di Kabupaten Kepulauan Tanimbar (Saumlaki),
                                        menawarkan pengalaman wisata budaya yang mendalam melalui tradisi sakral
                                        <strong>Tnyafar</strong>, kehidupan masyarakat yang ramah, serta lanskap alam
                                        pesisir yang memesona.
                                    </p>
                                    <p>
                                        Kami hadir untuk menghadirkan perjalanan yang bukan hanya indah, tetapi juga
                                        penuh makna—menghubungkan Anda dengan kisah, tradisi, dan kearifan lokal yang
                                        telah diwariskan turun-temurun oleh masyarakat Adaut.
                                    </p>

                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Pemandu lokal berpengalaman dan memahami budaya Tnyafar</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Paket wisata yang dirancang sesuai kebutuhan wisatawan</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check-circle-fill"></i>
                                            <span>Dukungan penuh selama perjalanan Anda di Desa Adaut</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Image Showcase -->
                        <div class="col-lg-6">
                            <div class="image-showcase">
                                <div class="main-image">
                                    <img src="{{ asset('traveltime/assets/img/travel/tnyafar.jpg') }}"
                                        alt="Budaya Tnyafar Desa Adaut" class="img-fluid rounded-3">
                                    <div class="overlay-badge">
                                        <div class="badge-content">
                                            <i class="bi bi-award-fill"></i>
                                            <div class="badge-text">
                                                <strong>Destinasi Unggulan</strong>
                                                <span>Budaya & Tradisi Tanimbar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="floating-card">
                                    <img src="{{ asset('traveltime/assets/img/travel/misc-5.png') }}"
                                        alt="Pengalaman Wisata di Adaut" class="img-fluid rounded-2">
                                    <div class="card-content">
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <span>4.9/5</span>
                                        </div>
                                        <p>"Pengalaman wisata yang sangat berkesan!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- End Main Content Grid -->

                <!-- Why Choose Us Section -->
                <div class="why-choose-wrapper">
                    <div class="section-header text-center">
                        <span class="section-badge">Kenapa Memilih Kami</span>
                        <h3>Keunikan Wisata Adaut</h3>
                        <p>
                            Tempat di mana budaya, alam, dan keramahan melebur menjadi pengalaman terbaik bagi setiap
                            pengunjung.
                        </p>
                    </div>

                    <div class="features-container">
                        <div class="row g-4">

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon-wrapper">
                                        <div class="feature-icon">
                                            <i class="bi bi-compass"></i>
                                        </div>
                                    </div>
                                    <h4>Budaya Autentik</h4>
                                    <p>Rasakan langsung upacara sakral Tnyafar dan tradisi warisan leluhur Adaut.</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon-wrapper">
                                        <div class="feature-icon">
                                            <i class="bi bi-heart-fill"></i>
                                        </div>
                                    </div>
                                    <h4>Keramahan Lokal</h4>
                                    <p>Masyarakat Adaut terkenal ramah, hangat, dan terbuka terhadap wisatawan.</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon-wrapper">
                                        <div class="feature-icon">
                                            <i class="bi bi-lightning-charge-fill"></i>
                                        </div>
                                    </div>
                                    <h4>Proses Mudah</h4>
                                    <p>Pemesanan praktis dan respons cepat melalui WhatsApp atau website.</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="feature-box">
                                    <div class="feature-icon-wrapper">
                                        <div class="feature-icon">
                                            <i class="bi bi-globe-americas"></i>
                                        </div>
                                    </div>
                                    <h4>Destinasi Alami</h4>
                                    <p>Pantai, bukit, dan panorama alam Tanimbar yang masih asri dan terjaga.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!-- End Why Choose Us Section -->

            </div>

        </section><!-- /Why Us Section -->


        <!-- Featured Tours Section -->
        <section id="featured-tours" class="featured-tours section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Paket Wisata Unggulan</h2>
                <div>
                    <span>Jelajahi Pilihan</span>
                    <span class="description-title">Paket Wisata Terbaik</span>
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
                                                {{-- <a href="{{ route('paket-wisata.homepage.show', $paket->id) }}"
                                                    class="explore-btn">Explore Tour</a> --}}
                                                <a href="{{ route('homepage.show.paket-wisata', $paket->id) }}"
                                                    class="explore-btn">Explore Tour</a>


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
                    <a href="{{ route('paket-wisata.index') }}" class="discover-more-btn">Discover More
                        Adventures</a>
                </div>
            </div>

        </section>
        <!-- /Featured Tours Section -->


        <!-- Testimonials Home Section -->
        <section id="testimonials-home" class="testimonials-home section">

            <!-- Section Title -->
            <div class="container section-title">
                <h2>Testimoni Pengunjung</h2>
                <div>
                    <span>Cerita Nyata dari</span>
                    <span class="description-title">Wisata Desa Adaut</span>
                </div>
            </div>
            <!-- End Section Title -->

            <div class="container">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                }
            }
            </script>

                    <div class="swiper-wrapper">
                        @foreach ($testimonis as $testi)
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="row gy-4 justify-content-center">
                                        <div class="col-lg-6">
                                            <div class="testimonial-content">
                                                <p>
                                                    <i class="bi bi-quote quote-icon-left"></i>
                                                    <span>{{ $testi->isi_testimoni }}</span>
                                                    <i class="bi bi-quote quote-icon-right"></i>
                                                </p>
                                                <h3>{{ $testi->nama }}</h3>
                                                @if ($testi->rating)
                                                    <div class="stars">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= $testi->rating)
                                                                <i class="bi bi-star-fill"></i>
                                                            @else
                                                                <i class="bi bi-star"></i>
                                                            @endif
                                                        @endfor
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-2 text-center">
                                            <img src="{{ $testi->foto ? asset('storage/' . $testi->foto) : asset('assets/img/person/default.webp') }}"
                                                class="img-fluid testimonial-img" alt="{{ $testi->nama }}">


                                        </div>
                                    </div>
                                </div>
                            </div><!-- End testimonial item -->
                        @endforeach
                    </div>

                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section>
        <!-- /Testimonials Home Section -->


        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section">

            <div class="container">

                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2>Siap Menjelajahi Desa Wisata Adaut?</h2>
                        <p>
                            Nikmati pengalaman wisata budaya Tnyafar, jelajahi keindahan alam Kepulauan Tanimbar,
                            dan rasakan keramahan masyarakat Adaut. Semua paket wisata dipesan langsung melalui WhatsApp
                            untuk memudahkan Anda.
                        </p>
                        <div class="cta-buttons">
                            <a href="https://wa.me/6282198653180?text=Halo%20Admin%20Wisata%20Adaut,%20saya%20ingin%20melihat%20daftar%20destinasi%20dan%20paket%20wisata."
                                class="btn-primary">
                                Pesan via WhatsApp
                            </a>

                            <a href="https://wa.me/6282198653180?text=Halo%20Admin,%20saya%20ingin%20konsultasi%20untuk%20perjalanan%20ke%20Desa%20Wisata%20Adaut."
                                class="btn-secondary">
                                Konsultasi Perjalanan
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item text-center">
                            <div class="icon">
                                <i class="bi bi-globe"></i>
                            </div>
                            <h4>Wisata Budaya</h4>
                            <p>Ikuti prosesi Tnyafar dan aktivitas adat khas masyarakat Adaut.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item text-center">
                            <div class="icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <h4>Aman & Nyaman</h4>
                            <p>Dampingi langsung oleh pemandu lokal berpengalaman.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item text-center">
                            <div class="icon">
                                <i class="bi bi-headset"></i>
                            </div>
                            <h4>Respons Cepat</h4>
                            <p>Kami siap membantu melalui WhatsApp kapan pun Anda butuh.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="feature-item text-center">
                            <div class="icon">
                                <i class="bi bi-percent"></i>
                            </div>
                            <h4>Harga Terbaik</h4>
                            <p>Paket wisata langsung dari desa, tanpa perantara.</p>
                        </div>
                    </div>
                </div>

                <div class="stats-section">
                    <div class="row text-center">
                        <div class="col-lg-3 col-md-6">
                            <div class="stat-item">
                                <span class="stat-number purecounter" data-purecounter-start="0"
                                    data-purecounter-end="1200" data-purecounter-duration="2"></span>
                                <span class="stat-label">Wisatawan Puas</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="stat-item">
                                <span class="stat-number purecounter" data-purecounter-start="0"
                                    data-purecounter-end="8" data-purecounter-duration="2"></span>
                                <span class="stat-label">Ritual & Tradisi</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="stat-item">
                                <span class="stat-number purecounter" data-purecounter-start="0"
                                    data-purecounter-end="97" data-purecounter-duration="2"></span>
                                <span class="stat-label">Tingkat Kepuasan (%)</span>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="stat-item">
                                <span class="stat-number purecounter" data-purecounter-start="0"
                                    data-purecounter-end="5" data-purecounter-duration="2"></span>
                                <span class="stat-label">Tahun Berjalan</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- /Call To Action Section -->


    </main>

    @include('layouts.homepage.footer2')

    <script>
        function redirectToWA(event) {
            event.preventDefault();

            const destination = document.getElementById("destination").value;
            const checkin = document.getElementById("check-in").value;
            const checkout = document.getElementById("check-out").value;
            const adults = document.getElementById("adults").value;
            const children = document.getElementById("children").value;

            const message = encodeURIComponent(
                `Halo, saya ingin memesan paket wisata:\n` +
                `• Destination: ${destination}\n` +
                `• Check In: ${checkin}\n` +
                `• Check Out: ${checkout}\n` +
                `• Adults: ${adults}\n` +
                `• Children: ${children}\n\n` +
                `Mohon informasi lebih lanjut.`
            );

            const phone = "6282198653180";

            window.open(`https://wa.me/${phone}?text=${message}`, "_blank");
        }
    </script>

</body>

</html>
