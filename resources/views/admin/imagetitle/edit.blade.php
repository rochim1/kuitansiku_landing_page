@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
        <a href="{{ url('/admin/image_title') }}" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fas fa-arrow-left"></i>
            </span>
            <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
        </a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">Form {{ $title }}</div>
        <div class="card-body">
            <form action="{{ url('admin/image_title/' . Crypt::encryptString($imagetitle->id_imagetitle)) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-4">
                    @if (Storage::exists($imagetitle->imagetitle))
                        <img src="{{ asset('storage/' . $imagetitle->imagetitle) }}"  style="height: 420px; object-fit: contain" alt="foto imagetitle" class="img-fluid img-thumbnail"><br>
                    @else
                        <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"  style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                    @endif
                    <label class="form-label">Image Title<span class="text-danger fs-5">*</span> <span class="fst-italic small">(jpg, jpeg, png, bmp, gif, svg,
                            webp / 10MB)</span></label>
                    <input type="file" class="form-control @error('imagetitle') is-invalid @enderror" name="imagetitle">
                    @error('imagetitle')
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
