@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 " style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">ZIS (Zakat, Infaq, dan Shodaqoh)</h2>
            <p class="text-success ck-content" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">Produk > ZIS (Zakat, Infaq, dan Shodaqoh)</p>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start About Area -->
<section class="about-area ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="about-content">
                    <span>PRODUK</span>
                    <h2>ZIS (Zakat, Infaq, dan Shodaqoh</h2>
                    <p>
                        @if ($zis)
                            {!! $zis->deskripsi_zis !!}
                        @else
                            <p>Data Tidak Ada</p>    
                        @endif
                    </p>
                </div>
            </div>

           <div class="col-lg-4 col-md-12">
            <div class="content pb-4 border-bottom">
                <h4 class="fw-bold">Kegiatan ZIS</h4>
                <div class="row">
                    @foreach ($kegiatanzis as $item)
                        <div class="col-md-4 mb-2" style="position: relative; text-align: center; color: white; padding-right: 5px; padding-left: 5px;">
                            <img src="{{ asset('storage/' . $item->gambar_kegiatanzis) }}" alt="foto kegiatan zis" style="width: 165px; height: 120px; object-fit: cover;" class="img-fluid">
                            <div style="font-size: 12px; color: white; font-style: italic; position: absolute; bottom: 1px; left: 16px;">{{ $item->created_at->format('d M Y') }}</div>
                        </div>
                    @endforeach
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
