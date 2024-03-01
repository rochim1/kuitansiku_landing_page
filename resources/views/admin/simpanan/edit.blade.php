@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/simpanan') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$simpanan)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('/admin/simpanan/' . Crypt::encryptString($simpanan->id_simpanan)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                        <div class="mb-4">
                            <label class="form-label">Judul</label>
                            <select class="form-select me-2 @error('id_katesim') is-invalid @enderror" name="id_katesim">
                                <option value="">pilih</option>
                                @foreach ($katesim as $item)
                                    <option value="{{ $item->id_katesim }}" {{ old('id_katesim', $simpanan->id_katesim) == $item->id_katesim ? 'selected="selected"' : '' }}>{{ $item->nama_katesim }}</option>
                                @endforeach
                            </select>
                            @error('id_katesim')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                            <textarea id="ck_editor_simpanan" name="deskripsi_simpanan">{{ old('deskripsi_simpanan', $simpanan->deskripsi_simpanan) }}</textarea>
                            @error('deskripsi_simpanan')
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