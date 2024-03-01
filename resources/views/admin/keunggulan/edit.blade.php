@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/keunggulan') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$keunggulan)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/keunggulan/' . Crypt::encryptString($keunggulan->id_keunggulan)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">keunggulan<span class="text-danger fs-5">*</span></label><br>
                            <textarea class="form-control @error('deskripsi_keunggulan') border border-danger @enderror" name="deskripsi_keunggulan" rows="5">{{ old('deskripsi_keunggulan', $keunggulan->deskripsi_keunggulan) }}</textarea>
                            @error('deskripsi_keunggulan')
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
