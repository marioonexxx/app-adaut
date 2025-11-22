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

<body class="tour-details-page">

    @include('layouts.homepage.navbar')

    <main class="main">

        <!-- Page Title -->
        <div class="page-title dark-background"
            style="background-image: url({{ $paket->foto ? asset('storage/' . $paket->foto) : asset('assets/img/travel/default-tour.jpg') }});">
            <div class="container position-relative">
                <h1>{{ $paket->nama_paket }}</h1>
                {{-- <p>{{ \Illuminate\Support\Str::limit($paket->deskripsi, 150, '...') }}</p> --}}
                <nav class="breadcrumbs">
                    <ol>
                        <li><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="current">{{ $paket->nama_paket }}</li>
                    </ol>
                </nav>
            </div>
        </div><!-- End Page Title -->

        <!-- Travel Tour Details Section -->
        <section id="travel-tour-details" class="travel-tour-details section">

            <div class="container">

                <!-- Pricing Card -->
                <div class="pricing-card mt-4 text-center p-4 shadow-sm rounded-4 bg-light">
                    <div class="price-header mb-3">
                        <span class="badge bg-success fs-6">Best Price</span>
                        <h2 class="mt-2 display-6 fw-bold text-primary">
                            Rp {{ number_format($paket->harga, 0, ',', '.') }}
                        </h2>
                    </div>
                    <p class="price-description mb-3">per person</p>
                    <a href="#booking" class="btn btn-primary btn-lg rounded-pill">
                        Pesan Sekarang
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>


                <!-- Description / Highlights -->
                @if (!empty($paket->deskripsi))
                    <div class="tour-essence mt-4">
                        <h2>ITENARY & FASILITAS PAKET WISATA</h2>
                        <p>{!! $paket->deskripsi !!}</p>
                    </div>
                @endif


                <!-- Booking Section -->
                <div class="booking-section mt-5" id="booking">
                    <div class="booking-form-card">
                        <h3>Secure Your Place</h3>
                        <form action="#" method="post" class="php-email-form">
                            @csrf
                            <div class="form-group">
                                <label for="contact-name">Your Name</label>
                                <input type="text" name="name" id="contact-name" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact-email">Email Address</label>
                                <input type="email" name="email" id="contact-email" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="contact-phone">Phone Number</label>
                                <input type="tel" name="phone" id="contact-phone" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="travelers-count">Number of Travelers</label>
                                <select name="travelers" id="travelers-count" class="form-control" required>
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}
                                            Person{{ $i > 1 ? 's' : '' }}</option>
                                    @endfor
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="special-notes">Special Requests</label>
                                <textarea name="message" id="special-notes" rows="3" class="form-control"
                                    placeholder="Dietary requirements, celebrations, accessibility needs..."></textarea>
                            </div>

                            <button type="submit" class="btn-submit">Submit Booking Request</button>
                        </form>
                    </div>
                </div>

                <!-- Visual Gallery -->
                @if (!empty($paket->gallery))
                    <div class="visual-gallery mt-5">
                        <h2>Moments to Remember</h2>
                        <div class="gallery-grid">
                            @foreach ($paket->gallery as $img)
                                <div class="gallery-piece">
                                    <a href="{{ asset('storage/' . $img) }}" class="glightbox">
                                        <img src="{{ asset('storage/' . $img) }}" class="img-fluid" loading="lazy">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

        </section><!-- /Travel Tour Details Section -->

    </main>


    @include('layouts.homepage.footer2')

</body>

</html>
