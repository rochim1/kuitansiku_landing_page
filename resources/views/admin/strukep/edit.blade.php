@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/katestrukep/strukep/' . Crypt::encryptString($strukep->katestrukep->id_katestrukep)) }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$strukep)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                <form action="{{ url('/admin/katestrukep/strukep/update/' . Crypt::encryptString($strukep->id_strukep)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <label class="form-label">Kategori Berita</label>
                            <select class="form-select searchSelect me-2 searchSelect" name="id_katestrukep">
                                @foreach ($katestrukep as $item)
                                    <option value="{{ $item->id_katestrukep }}" {{ old('id_katestrukep', $strukep->id_katestrukep) == $item->id_katestrukep ? 'selected="selected"' : '' }}>{{ $item->nama_katestrukep }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Nama<span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $strukep->nama) }}">
                            @error('nama')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Jabatan<span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" value="{{ old('jabatan', $strukep->jabatan) }}">
                            @error('jabatan')
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
