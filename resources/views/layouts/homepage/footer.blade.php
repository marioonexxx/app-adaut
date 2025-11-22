

  <footer id="footer" class="footer light-background" style="background-color: #AFDDFF">

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-8 col-md-6 footer-about">
            <a href="{{ route('homepage') }}" class="logo d-flex align-items-center">
              <span class="sitename">DESA WISATA ADAUT</span>
              {{-- <img src="{{ asset('assets/Scaffold/assets/img/logo web.png') }}" alt="Desa Wisata Adaut" width="400px" height="125px"> --}}
 
            </a>
            <div class="footer-contact pt-3">
                           <p>Pusat Layanan dan Informasi Wisata</p>
              <p>Kantor Desa Adaut</p>
              <p class="mt-3"><strong>Telepon:</strong> <span>+6281225052300</span></p>
              <p><strong>Email:</strong> <span>wisata@adaut.com</span></p>
            </div>
          </div>

         

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Sitemap</h4>
            <ul>
              <li><a href="#">Home</a></li>
              <li><a href="#">Tentang</a></li>
              <li><a href="#">Paket Wisata</a></li>
              <li><a href="#">Gallery</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>

        </div>
      </div>
    </div>



    <div class="copyright text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div>
            © Copyright <strong><span>Tim Berdikari Politeknik Negeri Ambon</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href=""><i class="bi bi-twitter-x"></i></a>
          <a href=""><i class="bi bi-facebook"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>

      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/Scaffold/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/Scaffold/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('assets/Scaffold/assets/js/main.js') }}"></script>

</body>

</html>
