@extends('layouts.app')

@section('content')

<!-- Start About Area -->
<section class="about-area ptb-70 mt-5">
    <div class="container">
            <div class="col-lg-8 col-md-12">
                <div class="about-content">
                    <h2>Galeri</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($galeri as $item)
                    <div class="col-lg-4 col-md-6 position-relative" style="  position: relative; text-align: center; color: white; overflow: hidden; height: 300px;">
                        <img src="{{ asset('storage/' . $item->gambar_galeri) }}" style="position: absolute; left: 0; right: 0;" alt="foto galeri" class="img-fluid p-2 zoom">
                        <div style="color: white; font-style: italic; position: absolute; bottom: 8px; left: 16px;">{{ $item->created_at->format('d M Y') }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End About Area -->
@endsection