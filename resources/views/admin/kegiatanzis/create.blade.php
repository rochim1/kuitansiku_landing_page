@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
        <a href="{{ url('/admin/kegiatan_zis') }}" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fas fa-arrow-left"></i>
            </span>
            <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">Form {{ $title }}</div>
        <div class="card-body">
            <form action="{{ url('admin/kegiatan_zis') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Kegiatan Zis<span class="text-danger fs-5">*</span> <span class="fst-italic small">(jpg, jpeg, png, bmp, gif, svg,
                            webp / 10MB)</span></label>
                    <input type="file" class="form-control @error('gambar_kegiatanzis') is-invalid @enderror" name="gambar_kegiatanzis">
                    @error('gambar_kegiatanzis')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer mt-4 mb-n3">
                    <button type="submit" class="btn btn-primary">
                        <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
