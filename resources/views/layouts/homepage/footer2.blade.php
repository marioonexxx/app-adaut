<footer id="footer" class="footer position-relative dark-background">

    <div class="container">
        <div class="row gy-5">

            <div class="col-lg-4">
                <div class="footer-content">
                    <a href="https://wisata.adaut.com" class="logo d-flex align-items-center mb-4">
                        <span class="sitename">Desa Wisata Adaut</span>
                    </a>
                    <p class="mb-4">Platform resmi informasi dan layanan wisata Desa Adaut. Temukan pengalaman
                        budaya Tnyafar, jelajahi alam, dan rasakan keramahan masyarakat lokal.</p>

                    <div class="newsletter-form">
                        <h5>Berlangganan Informasi</h5>
                        <form action="forms/newsletter.php" method="post" class="php-email-form">
                            <div class="input-group">
                                <input type="email" name="email" class="form-control"
                                    placeholder="Masukkan email anda" required="">
                                <button type="submit" class="btn-subscribe">
                                    <i class="bi bi-send"></i>
                                </button>
                            </div>
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Terima kasih sudah berlangganan!</div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <div class="footer-links">
                    <h4>Informasi</h4>
                    <ul>
                        <li><a href="https://wisata.adaut.com/about"><i class="bi bi-chevron-right"></i> Tentang
                                Kami</a></li>
                        <li><a href="https://wisata.adaut.com/packages"><i class="bi bi-chevron-right"></i> Paket
                                Wisata</a></li>
                        <li><a href="https://wisata.adaut.com/culture"><i class="bi bi-chevron-right"></i> Budaya
                                Tnyafar</a></li>
                        <li><a href="https://wisata.adaut.com/gallery"><i class="bi bi-chevron-right"></i>
                                Galeri</a></li>
                        <li><a href="https://wisata.adaut.com/contact"><i class="bi bi-chevron-right"></i>
                                Kontak</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-6">
                <div class="footer-links">
                    <h4>Layanan</h4>
                    <ul>
                        <li><a href="https://wisata.adaut.com/info"><i class="bi bi-chevron-right"></i> Pusat
                                Informasi Wisata</a></li>
                        <li><a href="https://wisata.adaut.com/guide"><i class="bi bi-chevron-right"></i> Pemandu
                                Lokal</a></li>
                        <li><a href="https://wisata.adaut.com/accommodation"><i class="bi bi-chevron-right"></i>
                                Akomodasi</a></li>
                        <li><a href="https://wisata.adaut.com/transport"><i class="bi bi-chevron-right"></i>
                                Transportasi</a></li>
                        <li><a href="https://wisata.adaut.com/events"><i class="bi bi-chevron-right"></i> Budaya &
                                Event</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-contact">
                    <h4>Pusat Layanan dan Informasi Wisata</h4>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <div class="contact-info">
                            <p>Kantor Desa Adaut<br>Kecamatan Selaru<br>Kabupaten Kepulauan Tanimbar</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                        </div>
                        <div class="contact-info">
                            <p>+6281225052300</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        <div class="contact-info">
                            <p>wisata@adaut.com</p>
                        </div>
                    </div>

                    <div class="social-links">
                        <a href="https://web.facebook.com/profile.php?id=61579763391001"><i class="bi bi-facebook"></i></a>
                        {{-- <a href="#"><i class="bi bi-instagram"></i></a> --}}
                        <a href="https://www.youtube.com/@umkmwisatadesaadaut"><i class="bi bi-youtube"></i></a>
                        {{-- <a href="#"><i class="bi bi-tiktok"></i></a> --}}
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>© <span>Copyright</span> <strong class="px-1 sitename">Desa Wisata Adaut</strong>
                            <span>All Rights Reserved</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-bottom-links">
                        <a href="https://wisata.adaut.com/privacy">Kebijakan Privasi</a>
                        <a href="https://wisata.adaut.com/terms">Syarat Layanan</a>
                        <a href="https://wisata.adaut.com/cookie-policy">Kebijakan Cookie</a>
                    </div>
                    {{-- <div class="credits">
                        Template oleh <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

</footer>


<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="{{ asset('traveltime/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('traveltime/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('traveltime/assets/js/main.js') }}"></script>
