@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/deposito_syariah') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$deposito_syariah)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('/admin/deposito_syariah/' . Crypt::encryptString($deposito_syariah->id_depsyar)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                        <div class="mb-4">
                            <label class="form-label">Judul</label>
                            <select class="form-select me-2 @error('id_katedeposito') is-invalid @enderror" name="id_katedeposito">
                                <option value="">pilih</option>
                                @foreach ($katedeposito as $item)
                                    <option value="{{ $item->id_katedeposito }}" {{ old('id_katedeposito', $deposito_syariah->id_katedeposito) == $item->id_katedeposito ? 'selected="selected"' : '' }}>{{ $item->nama_katedeposito }}</option>
                                @endforeach
                            </select>
                            @error('id_katedeposito')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                            <textarea id="ck_editor_deposito_syariah" name="deskripsi_depsyar">{{ old('deskripsi_depsyar', $deposito_syariah->deskripsi_depsyar) }}</textarea>
                            @error('deskripsi_depsyar')
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