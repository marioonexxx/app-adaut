<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                {{-- ROLE ADMINISTRATOR --}}
                @if (Auth::user()->role == '1')
                <!-- Sidenav Menu Heading (Core)-->
                <div class="sidenav-menu-heading"></div>
                <a class="nav-link" href="{{ route('administrator.dashboard') }}">
                    <div class="nav-link-icon"><i data-feather="home"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{ route('administrator.showpaketwisata') }}">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Paket Wisata Old
                </a>
                 <a class="nav-link" href="{{ route('paket-wisata.index') }}">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Paket Wisata
                </a>
                <a class="nav-link" href="{{ route('adminstrator.testimonial.index') }}">
                    <div class="nav-link-icon"><i data-feather="edit"></i></div>
                    Testimoni
                </a>




                @endif



            </div>
        </div>
        <!-- Sidenav Footer-->
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="dropdown-user-details-name">{{ Auth::user()->name }}</div>
            </div>
        </div>
    </nav>
</div>
