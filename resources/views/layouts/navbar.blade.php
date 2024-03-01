<div class="navbar-area">
    <div class="nan-responsive-nav">
        <div class="container">
            <div class="nan-responsive-menu">
                <div class="logo">
                    <a href="/">
                        <img src="{{asset('logo.png')}}" alt="logo">
                        <img src="{{asset('logo.png')}}" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="nan-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="/">
                    <img src="{{asset('logo.png')}}" alt="logo">
                    <img src="{{asset('logo.png')}}" alt="logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">

                        <li class="nav-item"><a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home
                            </a></li>

                        <li class="nav-item"><a href="#" class="nav-link 
                            @php
                                if(Request::is('sejarah*') || Request::is('visi_misi*') || Request::is('legalitas*') || Request::is('struktur_kepengurusan*')) {
                                    echo 'active open';
                                }
                            @endphp
                            ">Tentang Kami <i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="/sejarah" class="nav-link">Sejarah</a></li>

                                <li class="nav-item"><a href="/visi_misi" class="nav-link">Visi & Misi</a></li>

                                <li class="nav-item"><a href="/legalitas" class="nav-link">Legalitas</a></li>

                                <li class="nav-item"><a href="/struktur_kepengurusan" class="nav-link">Struktur
                                        Kepengurusan</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item"><a href="#" class="nav-link 
                            @php
                                if(Request::is('simpanan*') || Request::is('pembiayaan*') || Request::is('zis*') || Request::is('deposito_syariah*')) {
                                    echo 'active open';
                                }
                            @endphp
                            ">Produk<i class="fas fa-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="/pembiayaan" class="nav-link">Pembiayaan</a></li>
                                <li class="nav-item"><a href="/simpanan" class="nav-link">Simpanan</a></li>
                                <li class="nav-item"><a href="#" class="nav-link">Deposito Syariah</a>
                                    <ul class="dropdown-menu">
                                        @foreach ($katedeposito as $item)
                                        <li class="nav-item"><a href="/deposito_syariah/{{$item->nama_katedeposito}}" class="nav-link">{{$item->nama_katedeposito}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="/zis" class="nav-link">ZIS (Zakat, Infaq, dan Shodaqah)</a></li>
                            </ul>
                        </li>

                        <li class="nav-item"><a href="/berita"
                                class="nav-link {{ Request::is('berita*') ? 'active' : '' }}">Berita </a></li>

                        <li class="nav-item"><a href="/galeri"
                                class="nav-link {{ Request::is('galeri*') ? 'active' : '' }}">Galeri </a></li>
                        <li class="nav-item"><a href="/kontak"
                                class="nav-link {{ Request::is('kontak*') ? 'active' : '' }}">Kontak </a></li>
                    </ul>

                    <div class="others-options">
                        <a target="_blank" class="daftar-nav-link"
                            href="https://bit.ly/FormPendaftaranKeanggotanKSPPSBMTAMS" class="login-btn"><i
                                class="flaticon-user"></i> Daftar</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
