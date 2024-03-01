@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 " style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Pembiayaan</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">Produk > Pembiayaan</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="about-content">
                    <span>PRODUK</span>
                    <h2>Pembiayaan</h2>
                    @foreach ($katepems as $katepem)
                        <h3>{{ $katepem->nama_katepem }}</h3>
                        @foreach ($katepem->pembiayaan as $item)
                            <div class="ck-content">
                                {!! $item->deskripsi_pembiayaan !!}
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="pb-5 animated infinite headShake">
                    <a href="{{$daftarPembiayaan}}" class="optional-btn btn-submit btn btn-success w-100">Ajukan Pembiayaan</a>
                </div>
                <div class="content pb-4">
                    <h4 class="fw-bold border-bottom">Kalkulator Pembiayaan</h4>
                    <div class="contact-form border-bottom">
                        <form action="#" id="form" autocomplete="off">
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label class="form-label">Nominal Pembiayaan</label>
                                        <input type="text" id="nominal" name="nominal" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="mb-3">
                                        <label class="form-label d-flex">Periode (bulan)</label>
                                        <select class="form-control" id="periode" name="periode" required>
                                            <option value="" selected="selected" disabled="disabled">Periode Pembiayaan</option>
                                            @foreach ($kalkupem as $item)
                                                <option value="{{ $item->bunga }}">{{ $item->bulan }} Bulan</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group result">
                                  <div class="row border-top border-bottom py-2">
                                    <div class="col-md">Periode</div>
                                    <div class="col-md text-end" id="periode_hasil">0 bulan</div>
                                  </div>
                                  <div class="row border-bottom py-2">
                                    <div class="col-md">Angsuran /bulan</div>
                                    <div class="col-md text-end" id="angsuran">Rp. 0,00</div>
                                  </div>
                                  <div class="row border-bottom py-2">
                                    <div class="col-md">Total Pengembalian</div>
                                    <div class="col-md text-end" id="total">Rp. 0,00</div>
                                  </div>
                            </div>
                            <div class="form-group my-3">
                                @if ($deskripsi_kalkupem)
                                    {!! $deskripsi_kalkupem->deskripsi_kalkupem !!}
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="optional-btn btn-submit btn btn-success" type="submit" onclick="hitung()">Hitung</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="mt-5">
                    @include('../layouts/rightbar')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection
