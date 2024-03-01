@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
        <a href="{{ url('/admin/simpanan/') }}" class="btn btn-danger btn-icon-split">
            <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            @if (!$simpanan)
                <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
            @else
                <div class="mb-3">
                    <label class="fs-6 text-black-50 fst-italic mb-n2">Judul:</label><br>
                    <label>{{ $simpanan->katesim->nama_katesim }}</label>
                </div>
                <div class="mb-3">
                    <label class="fs-6 text-black-50 fst-italic mb-n2">Deskripsi:</label><br>
                    <label>{!! $simpanan->deskripsi_simpanan !!}</label>
                </div>
            @endif
        </div>
    </div>
@endsection
