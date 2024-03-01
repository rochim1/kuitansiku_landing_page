@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 " style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Struktur Kepengurusan</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">tentang kami > Struktur Kepengurusan</p>
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
                    <span>Tentang Kami</span>
                    <h2>Struktur Kepengurusan</h2>
                    @foreach ($katestrukeps as $katestrukep)
                        <div class="card p-2 mb-3">
                            <h5 class="mb-0 mt-2">
                            {{$katestrukep->nama_katestrukep}}
                        </h5>
                        <p class="mt-0 mb-3">
                            <ul class="list-group list-group-flush" style="border-bottom: none">
                                @foreach ($katestrukep->strukep as $strukep)
                                    <div class="list-group-item" style="border: none"><span class="border-bottom pb-1 fst-italic fw-bold">{{ $strukep->jabatan }} :</span></div>
                                    <div class="list-group-item" style="border: none; margin-top: -12px">{{ $strukep->nama }}</div>
                                @endforeach
                            </ul>
                        </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                @include('../layouts/rightbar')
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection
