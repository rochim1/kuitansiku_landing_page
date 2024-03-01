@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/jumbotron/') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$jumbotron)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <div class="">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Gambar</label>
                        @if (Storage::exists($jumbotron->gambar_jumbotron))
                            <img src="{{ asset('storage/' . $jumbotron->gambar_jumbotron) }}" style="height: 420px; object-fit: contain"alt="gambar jumbotron" class="img-fluid img-thumbnail"><br>
                        @else
                            <img src="{{ asset('media-sistem/pictureDefault.jpg') }}" style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                        @endif
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Judul:</label><br>
                        <label>{{  $jumbotron->judul_jumbotron }}</label>
                    </div>
                    <div class="mb-3">
                        <label class="fs-6 text-black-50 fst-italic mb-n2">Deskripsi:</label><br>
                        <label>{!!  $jumbotron->deskripsi_jumbotron !!}</label>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
