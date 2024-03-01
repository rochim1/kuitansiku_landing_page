@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1" style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Simpanan</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">Produk > Simpanan</p>
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
                    <h2>Simpanan</h2>
                    @foreach ($katesims as $katesim)
                        <h3>{{ $katesim->nama_katesim }}</h3>
                        @foreach ($katesim->simpanan as $item)
                            <div class="ck-content">
                                {!! $item->deskripsi_simpanan !!}
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="pb-5 animated infinite headShake">
                    <a href="{{$daftarSimpanan}}" class="optional-btn btn-submit btn btn-success w-100">daftar menabung</a>
                </div>
                <div class="pb-5">
                    @include('../layouts/rightbar')
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection
