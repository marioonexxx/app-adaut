@include('layouts.homepage.header')

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li class="current">Detail Paket Wisata</li>
                </ol>
            </nav>
            <h1>Detail layanan</h1>
        </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

        <div class="container">
            <div class="row gy-5">

                <!-- Sidebar: 4 columns -->
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    

                    <div class="service-box">
                        <h4>Download Brosur</h4>
                        <div class="download-catalog">
                            <a href="#"><i class="bi bi-filetype-pdf"></i><span>Catalog PDF</span></a>
                            {{-- <a href="#"><i class="bi bi-file-earmark-word"></i><span>Catalog DOC</span></a> --}}
                        </div>
                    </div>

                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h4>Jika ada pertanyaan?</h4>
                        <p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>+62
                                812 2505 2300</span></p>
                        <p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <a
                                href="mailto:contact@example.com">wisata.adaut@gmail.com</a></p>
                    </div>
                </div>

                <!-- Main content: 8 columns -->
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">

                    <!-- Deskripsi Section -->
                    <div id="deskripsi">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">


                        <h1>Deskripsi</h1>
                        <hr>
                        <p style="text-align: justify;">{{ $paket->deskripsi }}</p>
                        
                        
                    </div>

                    <!-- Fasilitas Section -->
                    <div id="fasilitas">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h1>Fasilitas</h1>
                        <hr>
                         <p>{!! $paket->fasilitas !!}</p>
                    </div>

                    <!-- Itenary Section -->
                    <div id="itenary">
                        <img src="assets/img/services.jpg" alt="" class="img-fluid services-img">
                        <h1>Itenary</h1>
                        <hr>
                        <p>{!! $paket->itenary !!}</p>
                    </div>

                </div>

            </div>
        </div>

    </section><!-- /Service Details Section -->

</main>

@include('layouts.homepage.footer')
