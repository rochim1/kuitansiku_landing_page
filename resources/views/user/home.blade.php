@extends('layouts.app')

@section('content')
    <style>
        .gabung {
            height: 300px;
        }

        .gabung::before {
            content: '';
            background: url("{{ asset('storage/footage/gabung_dengan_kami.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            left: 50%;
        }

        .pertanyaan::before {
            content: '';
            background: url("{{ asset('storage/footage/ajukan_tanya.png') }}");
            background-repeat: no-repeat;
            background-size: cover;
            position: absolute;
            z-index: 1;
        }
    </style>
    <!-- Start Main Banner Area -->
    <div class="home-area">
        <div class="container">
            <div class="home-slides owl-carousel owl-theme">
                @if ($jumbotron)
                    @foreach ($jumbotron as $item)
                        <div class="banner-item">
                            <div class="row align-items-center m-0">
                                <div class="col-lg-6 col-md-12 p-0">
                                    <div class="banner-item-content">
                                        <h1 style="text-shadow: 2px 2px 0px #ffffff;">{{ $item->judul_jumbotron }}</h1>
                                        <p>{!! $item->deskripsi_jumbotron !!}</p>
                                        <a target="_blank" href="{{ $daftar }}"
                                            class="btn btn-primary animated infinite headShake ms-3">Daftar</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 p-0">
                                    <div class="banner-item-image position-relative">
                                        @if ($item->gambar_jumbotron)
                                            <img class="img-secondary-banner img-responsive center-block"
                                                src="{{ asset('storage/' . $item->gambar_jumbotron) }}" alt="banner-image">
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- End Main Banner Area -->

    <!-- Start Featured Boxes Area -->
    {{-- fixed 3 item --}}
    <section class="featured-boxes-area">
        <div class="container">
            <div class="featured-boxes-inner">
                <div class="row m-0">
                    @if ($panel)
                        <div data-aos="fade-up" class="col-lg-3 col-md-3 col-sm-6 col-6 p-0">
                            <div class="single-featured-box">
                                <div class="icon color-fb7756">
                                    @if (Storage::exists($panel->logo_panel_pertama))
                                        <img src="{{ asset('storage/' . $panel->logo_panel_pertama) }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @else
                                        <img src="{{ asset('assets_user/img/centangpng.png') }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @endif

                                </div>

                                <h3>{{ $panel->judul_panel_pertama }}</h3>
                                <p>{{ $panel->deskripsi_panel_pertama }}</p>

                            </div>
                        </div>

                        <div data-aos="fade-up" class="col-lg-3 col-md-3 col-sm-6 col-6 p-0">
                            <div class="single-featured-box">
                                <div class="icon color-fb7756">
                                    @if (Storage::exists($panel->logo_panel_kedua))
                                        <img src="{{ asset('storage/' . $panel->logo_panel_kedua) }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @else
                                        <img src="{{ asset('assets_user/img/centangpng.png') }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @endif
                                </div>

                                <h3>{{ $panel->judul_panel_kedua }}</h3>
                                <p>{{ $panel->deskripsi_panel_kedua }}</p>

                            </div>
                        </div>

                        <div data-aos="fade-up" class="col-lg-3 col-md-3 col-sm-6 col-6 p-0">
                            <div class="single-featured-box">
                                <div class="icon color-fb7756">
                                    @if (Storage::exists($panel->logo_panel_ketiga))
                                        <img src="{{ asset('storage/' . $panel->logo_panel_ketiga) }}" 
                                            alt="gambar berita" class="img-fluid img-thumbnail border-0"><br>
                                    @else
                                        <img src="{{ asset('assets_user/img/centangpng.png') }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @endif
                                </div>

                                <h3>{{ $panel->judul_panel_ketiga }}</h3>
                                <p>{{ $panel->deskripsi_panel_ketiga }}</p>

                            </div>
                        </div>
                        
                        <div data-aos="fade-up" class="col-lg-3 col-md-3 col-sm-6 col-6 p-0">
                            <div class="single-featured-box">
                                <div class="icon color-fb7756">
                                    @if (Storage::exists($panel->logo_panel_keempat))
                                        <img src="{{ asset('storage/' . $panel->logo_panel_keempat) }}" 
                                            alt="gambar berita" class="img-fluid img-thumbnail border-0"><br>
                                    @else
                                        <img src="{{ asset('assets_user/img/centangpng.png') }}" 
                                            alt="gambar panel" class="img-fluid img-thumbnail border-0"><br>
                                    @endif
                                </div>

                                <h3>{{ $panel->judul_panel_keempat }}</h3>
                                <p>{{ $panel->deskripsi_panel_keempat }}</p>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Boxes Area -->

    <!-- Start Services Area -->
    <section class="services-area ptb-70">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-content">
                    <div data-aos="zoom-in" data-aos-duration="500" class="content left-content">
                        <h3>Tentang Kami</h3>
                        <div class="bar"></div>
                        @if ($tentang_kami)
                            <div style="text-align: justify">{!! $tentang_kami->deskripsi_tentang_kami !!}</div>
                        @endif
                        <ul class="services-list">
                            <li onclick="location.href = '/sejarah'"><span><i class="flaticon-check-mark"></i>
                                    Sejarah</span></li>
                            <li onclick="location.href = '/visi_misi'"><span><i class="flaticon-check-mark"></i> Visi -
                                    Misi</span></li>
                            <li onclick="location.href = '/legalitas'"><span><i class="flaticon-check-mark"></i>
                                    Legalitas</span></li>
                            <li onclick="location.href = '/struktur_kepengurusan'"><span><i class="flaticon-check-mark"></i>
                                    Struktur Kepengurusan</span></li>
                        </ul>
                    </div>
                </div>

                <div class="overview-image">
                    <div class="image">
                        @if ($tentang_kami)
                            <img data-aos="fade-up-left" src="{{ asset('storage/' . $tentang_kami->gambar_tentang_kami) }}"
                                width="420px" alt="image">
                        @endif
                        <div class="circle-img" style="z-index: -2">
                            <img src="{{ asset('assets_user/img/circle.png') }}" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->
    <section class="services-area ptb-70 bg-f7fafd">
        <div class="container-fluid p-0">
            <div class="overview-box">
                <div class="overview-content mb-5">
                    <div class="content left-content">
                        <div class="row">
                            <div data-aos="fade-right" class="col-lg-6 col-md-6 col-sm-12">
                                <a class="text-center w-100" href="/pembiayaan">
                                    <div class="single-features-box">
                                        <div class="icon">
                                            <img src="{{ asset('assets_user/img/produk/SVG/Artboard 7.svg') }}"
                                                alt="">
                                        </div>

                                        <h3>Pembiayaan</h3>
                                        <p>Merupakan fasilitas pembiayaan untuk memenuhi kebutuhan barang-barang, pembayaran
                                            biaya
                                            jasa,
                                            pengembangan usaha, keperluan modal usaha.</p>
                                    </div>
                                </a>
                            </div>

                            <div data-aos="fade-down" class="col-lg-6 col-md-6 col-sm-12">
                                <a class="text-center w-100" href="/simpanan">
                                    <div class="single-features-box">
                                        <div class="icon">
                                            <img src="{{ asset('assets_user/img/produk/SVG/Artboard 8.svg') }}"
                                                alt="">
                                        </div>

                                        <h3><i class='menu-icon tf-icons bx bx-save'></i> Simpanan</h3>
                                        <p>penyetoran dan penarikan secara harian, begitu mudah, aman, dan menguntungkan.
                                            Sistem
                                            pengelolaannya .</p>
                                    </div>
                                </a>
                            </div>

                            <div data-aos="fade-up" class="col-lg-6 col-md-6 col-sm-12">
                                <a class="text-center w-100" href="/deposito_syariah">
                                    <div class="single-features-box">
                                        <div class="icon">
                                            <img src="{{ asset('assets_user/img/produk/SVG/Artboard 4.svg') }}"
                                                alt="">
                                        </div>

                                        <h3>Deposito Syariah</h3>
                                        <p>Anggota memberikan kepercayaan untuk pemanfaatan dana dengan BMT sesuai nisbah
                                            (bagi hasil) yang disepakati di awal.</p>
                                    </div>
                                </a>
                            </div>

                            <div data-aos="fade-left" class="col-lg-6 col-md-6 col-sm-12">
                                <a class="text-center w-100" href="/zis">
                                    <div class="single-features-box">
                                        <div class="icon">
                                            <img src="{{ asset('assets_user/img/produk/SVG/Artboard 5.svg') }}"
                                                alt="">
                                        </div>

                                        <h3>ZIS (Zakat, Infak, Shodaqoh)</h3>
                                        <p>Fasilitas penghimpunan dan penyaluran dana Zakat, Infaq dan Shadaqah dari anggota
                                            dan
                                            masyarakat.
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overview-content">
                    <div data-aos="zoom-in" data-aos-duration="500" class="content right-content">
                        <span class="sub-title">PRODUK</span>
                        <h3>Keuntungan</h3>
                        <div class="bar"></div>
                        <p>Keuntungan yang didapat dengan menjadi bagian dari anggota KPPS BMT At-Ta'awun Mitra Sembada
                            antara lain:</p>
                        <table class="table">
                            @if (count($keunggulan))
                                @foreach ($keunggulan as $key => $item)
                                    <tr>
                                        <td><i class="flaticon-check-mark"></i></td>
                                        <td>{{ $item->deskripsi_keunggulan }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2">belum ada data!</td>
                                </tr>
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Start Get Started Area -->
    <section class="get-started-area ptb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="get-started-title pertanyaan">
                        <h3 style="z-index: 1;" class="position-relative"><strong class="text-white">Ajukan
                                Pertanyaan?</strong></h3>
                        <a href="{{ $linkWA }}" target="_blank" class="btn btn-primary"><i
                                class="fa fa-whatsapp pe-2" style="font-size: 25px"></i> Hubungi Via Whatsapp</a>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="get-started-content">
                        <p class="text-light">Dengan Menjunjung Tinggi Nilai-nilai Islam Dalam Memberikan Pelayanan yang
                            Prima Kesetiap Anggota, Karena Kami Yakin Bahwa Kenyamanan Anggota adalah Prioritas Utama Kami
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Get Started Area -->
    <!-- Start Invoicing Area -->
    <section class="blog-area ptb-70">
        <div class="container">
            <div class="section-title">
                <h3>Top Berita</h3>
                <div class="bar"></div>
                <p class="text-center">Berita seputar kegiatan yang dilakukan oleh BMT At-Ta'awun.</p>
            </div>

            <div class="row">
                @if ($berita_unggulan->count())
                    @foreach ($berita_unggulan as $item)
                        <div class="col-lg-4 col-md-6">
                            <div class="single-blog-post shadow">
                                    <div class="blog-image">
                                        <div class="image-frame-news">
                                            <a href="{{ url('/berita/detail/' . $item->id_berita) }}" class="w-100 h-100">
                                                <div class="w-100 h-100"
                                                    style="background-image: url('{{ asset('storage/' . $item->gambar_berita) }}'); background-size: cover">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="date">
                                            <i class="far fa-calendar-alt"></i> {{ $item->created_at->format('d M Y') }}
                                        </div>
                                    </div>

                                    <div class="blog-post-content overflow-hidden">
                                        <h3>
                                            <a style="font-weight: bold" href="{{ url('/berita/detail/' . $item->id_berita) }}">{{ $item->judul_berita }}</a>
                                        </h3>
                                        <span>by <a href="#">{{ $item->user->name }}</a></span>
                                        <p>
                                            @php
                                                echo substr(strip_tags($item->deskripsi_berita), 0, 150);
                                            @endphp
                                            ...
                                        </p>
                                    </div>

                                    <div class="container-fluid pb-3">
                                        <div class="d-flex news-property justify-content-between w-100">
                                            <div class="w-50">
                                                <a href="{{ url('/berita/detail/' . $item->id_berita) }}"
                                                    class="read-more-btn">selengkapnya <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>

                                            <div class="w-50">
                                                <div class="float-end" style="font-size: 12px">
                                                    <i class="fa fa-eye p-2"> {{ $item->dilihat }}</i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-center fs-4">Berita tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- End Invoicing Area -->
    <!-- Start Services Area -->
    <section class="services-area ptb-70 bg-f7fafd">
        <div class="container">
            <div class="section-title">
                <h3>Persyaratan</h3>
                <div class="bar"></div>
            </div>

            <div class="overview-box align-item-start">
                <div class="overview-content p-3">
                    <div class="content p-0">
                        {{-- <h3 class="text-center">Menabung</h3> --}}
                        <div data-aos="zoom-in-down" class="comparisons-table">
                            <table class="table tb-compare">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Syarat Menabung</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($persyaratan_menabung))
                                        @foreach ($persyaratan_menabung as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{!! $item->deskripsi_persyaratan_menabung !!}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2">Belum ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="overview-content p-3">
                    <div class="content p-0">
                        {{-- <h3 class="text-center">Pembiayaan</h3> --}}
                        <div data-aos="zoom-in-down" class="comparisons-table">
                            <table class="table tb-compare">
                                <thead>
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Syarat Pembiayaan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (count($persyaratan_pembiayaan))
                                        @foreach ($persyaratan_pembiayaan as $key => $item)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{!! $item->deskripsi_persyaratan_pembiayaan !!}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td>1</td>
                                            <td colspan="2">Belum ada data</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Area -->

    <!-- Start Account Create Area -->
    <section class="account-create-area">
        <div class="container gabung">
            <div class="account-create-content">
                <div class="animated infinite bounce">
                    <h3><strong class="text-white">Ayo Gabung Bersama Kami</strong></h3>
                    <p style="width: fit-content; margin: 0 auto">Klik untuk daftar menjadi Anggota BMT At-Ta'awun!</p>
                </div>
                <a target="_blank" href="{{ $daftar }}" class="btn btn-primary">Daftar
                    Sekarang</a>
            </div>
        </div>
    </section>
    <!-- End Account Create Area -->
@endsection
