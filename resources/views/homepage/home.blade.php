@include('layouts.homepage.header')

<main class="main">

    <!-- Home Section -->
    <section id="home" class="hero section">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1>SELAMAT DATANG DI DESA WISATA ADAUT</h1>
                    <p>Desa Wisata Adaut akan memberikan setiap orang pengalaman yang luar biasa dan sangat berbeda
                        ketika berkunjung. Dengan berbagai sajian wisata mulai dari Wisata Budaya, Wisata Bahari dan
                        Alam hingga berbagai macam Event Budaya Lokal yang disuguhkan.</p>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started">Selengkapnya</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-7 order-1 order-lg-2 hero-img">
                    <img src="{{ asset('assets/Scaffold/assets/img/hero-img6.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->


    <!-- Portfolio Section -->
    <section id="paket-wisata" class="portfolio section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Paket Wisata dan Event</h2>
            <p>Paket Wisata dan Event Wisata dengan beragam pilihan wisata alam, bahari, event budaya lokal dan wisata
                menarik lainnya.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    {{-- <li data-filter="*" class="filter-active">Semua</li> --}}
                    {{-- <li data-filter=".filter-paket">Paket-Wisata</li>
            <li data-filter=".filter-event">Event-Wisata</li> --}}
                    <li data-filter=".filter-wisata">Paket Wisata</li>

                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">


                    @foreach ($paketList as $paket)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-wisata">
                            <div class="portfolio-content h-100">
                                <img src="{{ asset('storage/' . $paket->gambar) }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $paket->nama }}</h4>
                                    <p>{{ $paket->nama }}</p>
                                    <a href="{{ asset('storage/' . $paket->gambar) }}" title="App 1"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('show.paket', $paket->id) }}" title="More Details"
                                        class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach




                    {{--             

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-event">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Product 3</h4>
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            </div><!-- End Portfolio Item --> --}}



                </div><!-- End Portfolio Container -->

            </div>

        </div>

    </section>


    <!-- Services Section -->
    <section id="services" class="services section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>FASILITAS DAN LAYANAN</h2>
            <p>Kami akan memberikan fasilitas dan layanan terbaik bagi anda.</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4">

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-bicycle icon"></i></div>
                        <h4>Transportasi</h4>
                        <p>Menyediakan transportasi laut dan darat untuk mobilitas wisatawan dalam menuju lokasi desa
                            wisata adaut.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-person-fill-check icon"></i></div>
                        <h4>Pemandu Wisata</h4>
                        <p>Wisatawan yang datang baik wisatawan lokal maupun mancanegara, desa adaut didukung pemandu
                            yang berpengalaman.</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-camera-fill icon"></i></div>
                        <h4>Dokumentasi</h4>
                        <p>Setiap kegiatan yang dilakukan wisatawan akan selalu kami dokumentasikan oleh para fotografer
                            profesional</p>
                    </div>
                </div><!-- End Service Item -->

                <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon"><i class="bi bi-cake icon"></i></div>
                        <h4>Kuliner</h4>
                        <p>Desa adaut menawarkan berbagai macam produk kuliner modern serta tradisional khas adaut.</p>
                    </div>
                </div><!-- End Service Item -->

            </div>

        </div>

    </section><!-- /Services Section -->



    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background"
        style="background-image: url('{{ asset('assets/Scaffold/assets/img/section-bg/section-2.png') }}')">

        <img src="assets/img/cta-bg.jpg" alt="">

        <div class="container">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-9 text-center text-xl-start">
                    <h3 style="color: #000000">Desa Wisata Adaut</h3>
                    <p style="color: #000000">Desa Adaut, yang terletak di Kabupaten Kepulauan Tanimbar, Maluku,
                        merupakan salah satu desa wisata yang menyuguhkan pesona alam yang masih alami dan kaya akan
                        keanekaragaman hayati. Dikelilingi oleh hutan tropis dan lanskap yang asri, desa ini menawarkan
                        suasana tenang yang sangat cocok untuk wisatawan yang ingin melepas penat dari hiruk pikuk
                        perkotaan. Keindahan alamnya juga didukung oleh udara yang segar serta pemandangan matahari
                        terbit dan terbenam yang memukau dari berbagai sudut desa.</p>
                </div>
                <div class="col-xl-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle"
                        href="https://wa.me/6282198653180?text=Halo%20saya%20mau%20bertanya%20tentang%20paket%20wisata%20%di%Desa%Adaut">Pesan
                        Sekarang</a>
                </div>
            </div>

        </div>

    </section><!-- /Call To Action Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>TESTIMONIAL</h2>
            <p>Apa kata mereka tentang Desa Wisata Adaut</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="swiper init-swiper" data-speed="600" data-delay="5000"
                data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
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
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 20
                }
              }
            }
          </script>
                <div class="swiper-wrapper">
                    @foreach ($testimonial as $item)
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>{{ $item->pesan }}</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{ asset('assets/img/testimonials/default.jpg') }}" class="testimonial-img"
                                    alt="">

                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="mb-0">{{ $item->nama }}</h3>
                                    <div class="ms-3">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $item->rating)
                                                <i class="bi bi-star-fill text-warning"></i>
                                            @else
                                                <i class="bi bi-star text-muted"></i>
                                            @endif
                                        @endfor
                                    </div>
                                </div>

                                <h4>{{ $item->paket ?? 'Paket Tidak Diketahui' }}</h4>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        </div>

    </section>
    <!-- /Testimonials Section -->

    <!-- Faq Section -->
    <section id="faq" class="faq section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>F.A.Q (Frequently Asked Questions)</h2>
            <p>Pertanyaan yang paling sering ditanyakan</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="faq-container">

                        <div class="faq-item faq-active" data-aos="fade-up" data-aos-delay="200">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Dimana lokasi Desa Adaut?</h3>
                            <div class="faq-content">
                                <p>Desa Adaut merupakan salah satu desa wisata di Kabupaten Kepulauan Tanimbar.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="300">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Bagaimana cara memesan paket Wisata Desa Adaut?</h3>
                            <div class="faq-content">
                                <p>Anda dapat menghubungi Pusat Layanan Informasi Pariwisata dan Produk UMKM Desa Adaut
                                    melalui chatbox melalui Whatsapp.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->

                        <div class="faq-item" data-aos="fade-up" data-aos-delay="400">
                            <i class="faq-icon bi bi-question-circle"></i>
                            <h3>Alat transportasi ke Desa Adaut bagaimana?</h3>
                            <div class="faq-content">
                                <p>Bagi anda yang berasal dari luar Provinsi, terlebih dahulu datang ke Kota Ambon dan
                                    melanjutkan perjalanan dengan Pesawat atau Kapal Laut ke Kabupaten Kepulauan
                                    Tanimbar (Saumlaki). Kemudian, dari Kota Saumlaki anda dapat menggunakan angkutan
                                    laut (speedboad) dari Pelabuhan Saumlaki ke Desa Adaut.</p>
                            </div>
                            <i class="faq-toggle bi bi-chevron-right"></i>
                        </div><!-- End Faq item-->



                    </div>

                </div>

            </div>

        </div>

    </section><!-- /Faq Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>KONTAK KAMI</h2>
            <p>Silahkan menghubungi kami untuk informasi lebih lanjut</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-6">

                    <div class="row gy-4">
                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="200">
                                <i class="bi bi-geo-alt"></i>
                                <h3>Alamat Pusat Informasi Pariwisata</h3>
                                <p>Kantor Desa Adaut</p>
                                <p>Jl. Desa Adaut No 1</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="300">
                                <i class="bi bi-telephone"></i>
                                <h3>Hubungi Kami Melalui Kontak</h3>
                                <p>+62 812 250 52300</p>
                                <p>+62 812 250 52300</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="400">
                                <i class="bi bi-envelope"></i>
                                <h3>Email Kami</h3>
                                <p>paketwisata@adaut.com</p>
                                <p>admindesa@adaut.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="col-md-6">
                            <div class="info-item" data-aos="fade" data-aos-delay="500">
                                <i class="bi bi-clock"></i>
                                <h3>Jam Layanan Pusat Informasi</h3>
                                <p>Senin - Sabtu</p>
                                <p>08.00 WIT - 18.00 WIT</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                </div>

                <div class="col-lg-6">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('save.kontak') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="col-md-6 ">
                                <input type="email" class="form-control" name="email" placeholder="Your Email"
                                    required="">
                            </div>

                   


                            <div class="col-12">
                                <input type="text" class="form-control" name="subject" placeholder="Subject"
                                    required="">
                            </div>



                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-primary">Send Message</button>
                            </div>

                        </div>
                    </form>

                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->

    <div class="wa-container">
        <a href="https://wa.me/6282198653180?text={{ urlencode('Halo saya mau bertanya tentang paket wisata di Desa Adaut') }}"
            class="wa-float" target="_blank" title="Chat via WhatsApp">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="WhatsApp"
                style="width:50px; height:50px;">
        </a>
        <div class="wa-text">
            Jika ada pertanyaan<br>silahkan hubungi kami
        </div>
    </div>

</main>
@include('layouts.homepage.footer')
