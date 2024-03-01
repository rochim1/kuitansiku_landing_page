@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/persyaratan_menabung') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/persyaratan_menabung') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Persyaratan<span class="text-danger fs-5">*</span></label><br>
                        <input type="hidden" id="deskripsi_persyaratan_menabung" name="deskripsi_persyaratan_menabung" value="{{ old('deskripsi_persyaratan_menabung') }}">
                        <trix-editor input="deskripsi_persyaratan_menabung" class="@error('deskripsi_persyaratan_menabung') border border-danger @enderror"></trix-editor>
                        @error('deskripsi_persyaratan_menabung')
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