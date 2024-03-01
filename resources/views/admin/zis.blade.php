@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-md">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h4 class="mb-md-0">{{ $title }}</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    @if (!$zis)
                        <form action="{{ url('/admin/zis/') }}" method="POST" autocomplete="off">
                    @else
                        <form action="{{ url('admin/zis/' . Crypt::encryptString($zis->id_zis)) }}" method="POST"> 
                        @method('PUT')
                    @endif
                        @csrf
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                                <textarea id="ck_editor_zis" name="deskripsi_zis">{{ old('deskripsi_zis', $zis?->deskripsi_zis) }}</textarea>
                                @error('deskripsi_zis')
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