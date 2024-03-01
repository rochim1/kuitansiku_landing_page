@extends('layouts.app')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg2 "
        style="background-image: url('{{ asset('storage/' . $imagetitle?->imagetitle) }}');">
        <div class="container">
            <div class="page-title-content" style="margin-top: -100px; margin-bottom: 50px;">
                <h2 class="text-success" style="text-shadow: 2.5px 2.5px 0px rgba(255,255,255, 0.2);">Berita</h2>
                <p class="text-success" style="text-align: center; text-shadow: 0.5px 0.5px 0px rgba(255,255,255, 0.2);">Berita Kegiatan BMT-Attawun</p>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Area -->
    <section class="contact-area ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @if ($kategori)
                        <div class="d-flex">
                            <a href="/berita" class="p-1 me-3 border-1 rounded text-center text-dark" style="width: 50px"><i
                                    class="fa fa-chevron-left" aria-hidden="true"></i></a>
                            <h3>Kategori : {{ $kategori }}</h3>
                        </div>
                    @elseif ($arsip)
                        <h3>Arsip Berita {{ date('M Y', $arsip) }} </h3>
                    @else
                        <h3>Berita</h3>
                    @endif
                </div>
                <div class="col-md-4 widget-area">
                    <section class="widget widget_search mb-1 w-100">
                        <form class="search-form" action="{{ url()->current() }}" method="post">
                            @csrf
                            <label>
                                <span class="screen-reader-text">Search for:</span>
                                <input type="search" class="search-field" name="search" placeholder="Search..."
                                    value="{{ request('search') }}">
                            </label>
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </section>
                </div>
                @if ($berita->count())
                    @foreach ($berita as $item)
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
                    <div class="row">

                        <div class="col-lg-6 col-md-6">
                            <div class="d-flex justify-content-between my-2 opacity-75 fst-italic">
                                <p>
                                    Showing {{ $berita->firstItem() }} to {{ $berita->lastItem() }} of
                                    {{ $berita->total() }}
                                    entries
                                </p>
                            </div>
                        </div>


                        <div class="col-lg-6 col-md-6">
                            {{ $berita->links() }}
                            {{-- <div class="pagination-area float-end">
                                <a href="#" class="prev page-numbers"><i class="fas fa-angle-double-left"></i></a>
                                <a href="#" class="page-numbers">1</a>
                                <span class="page-numbers current" aria-current="page">2</span>
                                <a href="#" class="page-numbers">3</a>
                                <a href="#" class="page-numbers">4</a>
                                <a href="#" class="next page-numbers"><i class="fas fa-angle-double-right"></i></a>
                            </div> --}}
                        </div>
                    </div>
                @else
                    <p class="text-center fs-4">Berita tidak ditemukan.</p>
                @endif
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
@endsection
