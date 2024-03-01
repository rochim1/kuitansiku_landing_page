@extends('admin.layouts.main')
@section('content')
<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$sejarah)
                    <form action="{{ url('admin/sejarah') }}" method="POST" autocomplete="off">
                @else
                    <form action="{{ url('admin/sejarah/' . Crypt::encryptString($sejarah->id_sejarah)) }}" method="POST">
                    @method('PUT')
                @endif
                    @csrf
                    <div>
                        <label class="form-label">Sejarah<span class="text-danger fs-5">*</span></label><br>
                        <textarea id="ck_editor_sejarah" name="deskripsi_sejarah">{{ old('deskripsi_sejarah', $sejarah?->deskripsi_sejarah) }}</textarea>
                        @error('deskripsi_sejarah')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="modal-footer mt-4 mb-n3">
                            <button type="submit" class="btn btn-primary">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection