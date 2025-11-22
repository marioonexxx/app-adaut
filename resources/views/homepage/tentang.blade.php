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

        <!-- About Section -->
        <section id="about-website" class="about-website section py-5">
            <div class="container my-5">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-6">
                        <img src="assets/img/travel/showcase-12.webp" class="img-fluid rounded shadow"
                            alt="Desa Wisata Adaut">
                    </div>
                    <div class="col-lg-6">
                        <h2>Mengenal Website Ini</h2>
                        <p>Website ini dibuat sebagai platform pemasaran paket wisata Desa Wisata Adaut. Di sini,
                            wisatawan dapat:</p>
                        <ul>
                            <li>Menjelajahi berbagai paket wisata budaya, alam, dan aktivitas lokal di Desa Adaut.</li>
                            <li>Melihat informasi lengkap tentang durasi, harga, lokasi, dan kapasitas setiap paket.
                            </li>
                            <li>Membaca testimoni pengunjung sebelumnya untuk pengalaman yang lebih nyata.</li>
                            <li>Mudah melakukan reservasi online untuk memesan paket wisata yang diinginkan.</li>
                            <li>Mendapatkan informasi terkini tentang kegiatan dan event budaya di Desa Wisata Adaut.
                            </li>
                        </ul>
                        <p>Tujuan website ini adalah membantu mempromosikan keindahan alam, budaya lokal, dan pengalaman
                            autentik Desa Wisata Adaut kepada wisatawan domestik maupun mancanegara.</p>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- Call to Action -->
        <section id="cta-booking" class="cta-booking section py-5 bg-light text-center">
            <div class="container">
                <h2>Siap Menjelajahi Desa Wisata Adaut?</h2>
                <p>Jelajahi paket wisata yang kami tawarkan dan rasakan pengalaman wisata yang tak terlupakan.</p>
                <a href="#" class="btn btn-primary btn-lg">Lihat Paket Wisata</a>
            </div>
        </section>




    </main>

    @include('layouts.homepage.footer2')
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: "{{ session('success') }}",
                confirmButtonText: 'OK'
            });
        </script>
    @endif


</body>

</html>
