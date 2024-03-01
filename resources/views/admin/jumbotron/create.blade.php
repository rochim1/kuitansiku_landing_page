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
                <form action="{{ url('/admin/jumbotron/') }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Gambar<span class="text-danger fs-5">*</span> <span class="fst-italic small">(jpg, jpeg, png, bmp, gif, svg, webp / 10MB)</span></label>
                        <input type="file" class="form-control @error('gambar_jumbotron') is-invalid @enderror" name="gambar_jumbotron">
                        @error('gambar_jumbotron')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Title<span class="text-danger fs-5">*</span></label>
                        <input type="text" class="form-control @error('judul_jumbotron') is-invalid @enderror" name="judul_jumbotron" value="{{ old('judul_jumbotron') }}">
                        @error('judul_jumbotron')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                        <textarea class="form-control @error('deskripsi_jumbotron') border border-danger @enderror" name="deskripsi_jumbotron" id="" cols="30" rows="5">{{ old('deskripsi_jumbotron') }}</textarea>
                        @error('deskripsi_jumbotron')
                            <small class="text-danger">{{ $message }}</small>
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
    </div>
</div>

@endsection