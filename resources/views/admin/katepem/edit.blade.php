@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/katepem') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$katepem)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/katepem/' . Crypt::encryptString($katepem->id_katepem)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Kategori<span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control @error('nama_katepem') is-invalid @enderror" name="nama_katepem"
                                value="{{ old('nama_katepem', $katepem->nama_katepem) }}">
                            @error('nama_katepem')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="modal-footer mt-4 mb-n3">
                            <button type="submit" class="btn btn-primary">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                        </div>
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
