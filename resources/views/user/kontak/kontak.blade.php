@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg2 " style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Kontak</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">kirimkan pesan kapan saja dan dimana saja</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Area -->
<section class="contact-area ptb-70">
    <div class="container">
        <div class="section-title">
            <h3>kirimkan pesan kepada kami</h3>
            <p style="text-align: center">jangan ragu untuk mengirimkan kritik dan saran kepada kami.</p>
            <div class="bar"></div> 
        </div>

        <div class="row mb-3 p-3">
            <div class="col-lg-5 col-md-12">
                <div class="contact-info">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <span>Alamat</span>
                            @if ($alamat)
                        <li style="margin-top: -35px">{{ $alamat }}</li>
                        @endif
                        </li>

                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <span>Email</span>
                        </li>
                            @if ($email)
                        <li style="margin-top: -35px"><a href="mailto: {{ $email }}">{{ $email }}</a></li>
                        @endif

                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <span>Telpon</span>
                            @foreach ($kontak as $item)
                            <a href="tel:{{ $item->no_kontak }}">
                                <div class="mt-n4" style="margin-top: -8px">
                                    @if ($item->whatsapp)
                                    <i class="fa fa-whatsapp my-float me-1"></i>
                                    @else
                                    <i class="fa fa-phone my-float me-1"></i>
                                    @endif
                                    {{ $item->no_kontak }}
                                </div>
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-7 col-md-12">
                <div class="contact-form">
                    <form action="{{ url('kritikSaran/store/') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" id="nama" class="form-control" required
                                        data-error="masukkan nama anda" placeholder="Nama">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required
                                        data-error="masukkan email anda" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="telepon" id="telepon" required
                                        data-error="masukkan no telpon anda" class="form-control" placeholder="Telpon">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="saran" class="form-control" id="saran" cols="30" rows="6" required
                                        data-error="Tulis Pesan" placeholder="Pesan"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 pb-3">
                                <button type="submit" class="btn btn-primary float-end">kirim masukan</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="pt-5" style="background:#edefef;">
    <div class="container">
        <div class="section-title">
                <h3>Peta</h3>
                <p style="text-align: center">peta kantor kami.</p>
            </div>

            <div class="row">
                <div class="col 12">
                    <div id="map">
                        <div class="responsive-map">
                            @if ($maps)
                            {!! $maps->link_maps !!}
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<!-- End Contact Area -->
@endsection
