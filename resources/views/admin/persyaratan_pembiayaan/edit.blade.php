@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/persyaratan_pembiayaan') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$persyaratan_pembiayaan)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/persyaratan_pembiayaan/' . Crypt::encryptString($persyaratan_pembiayaan->id_persyaratan_pembiayaan)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">persyaratan_pembiayaan<span class="text-danger fs-5">*</span></label><br>
                            <input type="hidden" id="deskripsi_persyaratan_pembiayaan" name="deskripsi_persyaratan_pembiayaan" value="{{ old('deskripsi_persyaratan_pembiayaan', $persyaratan_pembiayaan->deskripsi_persyaratan_pembiayaan) }}">
                            <trix-editor input="deskripsi_persyaratan_pembiayaan" class="@error('deskripsi_persyaratan_pembiayaan') border border-danger @enderror"></trix-editor>
                            @error('deskripsi_persyaratan_pembiayaan')
                                <small class="text-danger">{{ $message }}</small>
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