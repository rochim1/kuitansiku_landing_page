@extends('layouts.app')

@section('content')
<!-- Start Page Title Area -->
<div class="page-title-area item-bg1 " style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
    <div class="container">
        <div class="page-title-content">
            <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Sejarah</h2>
            <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">tentang kami > sejarah</p>
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
                    <h2>Sejarah</h2>
                    @if ($sejarah)
                    <div class="ck-content">    
                        {!! $sejarah->deskripsi_sejarah !!}
                    </div>
                    @else
                        belum ada sejarah di database~
                    @endif
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
