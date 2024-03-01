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
                @if (!$katedeposito)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/deposito_syariah') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                            <select name="id_katedeposito" class="form-control @error('id_katedeposito') is-invalid @enderror">
                                <option value="">pilih</option>
                                @foreach ($katedeposito as $item)
                                <option value="{{$item->id_katedeposito}}">{{$item->nama_katedeposito}}</option>
                                @endforeach
                            </select>
                            @error('id_katedeposito')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                            <textarea id="ck_editor_deposito_syariah" name="deskripsi_depsyar">{{ old('deskripsi_depsyar') }}</textarea>
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