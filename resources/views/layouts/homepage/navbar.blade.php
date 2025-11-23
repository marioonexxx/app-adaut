    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container position-relative d-flex align-items-center justify-content-between">

            <a href="{{ route('homepage') }}" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="{{ asset('traveltime/assets/img/logo-adaut.png') }}" alt="Desa Wisata Adaut">
                {{-- <h1 class="sitename">WISATA ADAUT</h1> --}}
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('homepage') }}" class="active">Home</a></li>
                    <li><a href="{{ route('homepage.tentang.adaut') }}">Tentang</a></li>
                    <li><a href="{{ route('homepage.listpaket') }}">Paket Wisata</a></li>
                    <li><a href="blog.html">Blog</a></li>

                    {{-- <li><a href="contact.html">Contact</a></li> --}}
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted"
                href="https://wa.me/6282198653180?text=Halo%20Admin%20Wisata%20Adaut,%20saya%20ingin%20memesan%20paket%20wisata."
                target="_blank">
                Pesan Sekarang
            </a>


        </div>
    </header>
