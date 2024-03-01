<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <div class="logo">
                        <div class="bg-white p-2" style="width: fit-content">
                            <a href="index.html" class="black-logo"><img src="{{ asset('logo.png') }}" width="130px"
                                    alt="logo"></a>
                            <a href="index.html" class="white-logo"><img src="{{ asset('logo.png') }}" width="130px"
                                    alt="logo"></a>
                        </div>
                        @if($layangPandang)
                            <p>{{ $layangPandang->layang_pandang }}</p>
                        @else
                            <p>Data Tidak Ada</p>    
                        @endif
                    </div>

                    <ul class="social-links">
                        @foreach ($sosmed as $item)
                            <li><a href="{{ $item->alamat_sosmed }}" target="_blank"><i
                                        class="fab fa-{{ $item->penyediaSosmed->nama_penyedia_sosmed }}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Tentang Kami</h3>

                    <ul class="list">
                        <li><a href="/sejarah">Sejarah</a></li>
                        <li><a href="/visi-misi">Visi-misi</a></li>
                        <li><a href="/legalitas">Legalitas</a></li>
                        <li><a href="/struktur_kepengurusan">Struktur kepengurusan</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Jam Kerja</h3>
                    <ul class="list">
                        @if ($jam_operasional)
                            @foreach ($jam_operasional as $item)
                                @if ($item->status != 'libur')
                                    <li>{{ $item->hari }} - {{ $item->jam_mulai }} s/d {{ $item->jam_selesai }}</li>
                                @endif
                            @endforeach
                        @endif
                    </ul>
                    <div class="pt-3">
                        @if ($ketOperasional)
                            {!! $ketOperasional->keterangan_operasional !!}
                        @endif
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <div class="single-footer-widget">
                    <h3>Alamat</h3>
                    <ul class="footer-contact-info">
                        @if ($alamat)
                            <li><span>lokasi:</span> {{ $alamat }}</li>
                        @endif
                        @if ($email)
                            <li><span>Email:</span> <a href="mailto: {{ $email }}">{{ $email }}</a></li>
                        @endif
                        <li>
                            <span>Telepon:</span><br>
                            @foreach ($kontak as $item)
                                <a href="tel:{{ $item->no_kontak }}">
                                    @if ($item->whatsapp)
                                        <i class="fa fa-whatsapp my-float me-1"></i>
                                    @else
                                        <i class="fa fa-phone my-float me-1"></i>
                                    @endif
                                    {{ $item->no_kontak }}
                                </a><br>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyright-area">
            <p><i class="fa-regular fa-copyright"></i> 2023 BMT At-Ta'awun Mitra Sembada</p>
        </div>
    </div>

    <div class="map-image"><img src="{{ asset('assets_user/img/bg-map.png') }}" alt="map"></div>
</footer>
