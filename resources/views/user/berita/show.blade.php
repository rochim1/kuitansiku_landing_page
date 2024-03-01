@extends('layouts.app')

@section('content')
<section class="blog-details-area ptb-70 mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="blog-details">
                            <div class="article-image">
                                @if (Storage::exists($detailBerita->gambar_berita))
                                    <img src="{{ asset('storage/' . $detailBerita->gambar_berita) }}" style="height: 420px; object-fit: contain"alt="gambar berita" class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('media-sistem/pictureDefault.jpg') }}" style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                                @endif
                            </div>

                            <div class="article-content">
                                <div class="entry-meta">
                                    <ul>
                                        <li><span>Posted On:</span> <a href="#">{{ $detailBerita->created_at->format('d M Y') }}</a></li>
                                        <li><span>Posted By:</span> <a href="#">{{ $detailBerita->user->name }}</a></li>
                                    </ul>
                                </div>

                                <h3>{{ $detailBerita->judul_berita }}</h3>

                                <div class="ck-content">{!! $detailBerita->deskripsi_berita !!}</div>
                            </div>

                            <div class="article-footer">
                                <div class="article-tags">
                                    <span><i class="fas fa-bookmark"></i></span>

                                    <a href="#">{{ $detailBerita->kateber->nama_kateber}}</a>
                                </div>

                                <div class="article-share">
                                    <ul class="social">
                                            <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i></a></li>
                                            <li><a href="whatsapp://send?text={{url()->full()}}" data-action="share/whatsapp/share"target="_blank"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        @include('../layouts/rightbar')
                    </div>
                </div>
            </div>
        </section>
@endsection
