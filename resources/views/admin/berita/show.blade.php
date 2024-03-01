@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kateber/berita/' . Crypt::encryptString($berita->kateber->id_kateber)) }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$berita)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <div class="">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Gambar berita</label>
                        @if (Storage::exists($berita->gambar_berita))
                            <img src="{{ asset('storage/' . $berita->gambar_berita) }}" style="height: 420px; object-fit: contain"alt="gambar berita" class="img-fluid img-thumbnail"><br>
                        @else
                            <img src="{{ asset('media-sistem/pictureDefault.jpg') }}" style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Kategori berita:</label><br>
                        <label>{{ $berita->kateber->nama_kateber }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Dibuat:</label><br>
                        <label>{{  $berita->user->name }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Dilihat:</label><br>
                        <label>{{  $berita->dilihat }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Judul:</label><br>
                        <label>{{  $berita->judul_berita }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Deskripsi:</label><br>
                        <label>{!!  $berita->deskripsi_berita !!}</label>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
