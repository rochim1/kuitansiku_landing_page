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
                    <form action="{{ url('admin/deposito_syariah/' . Crypt::encryptString($deposito_syariah->id_deposito_syariah)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md">
                                <div class="row g-3 align-items-center">
                                    <div class="col-auto">
                                        <div class="mb-4">
                                            <label class="form-label">Jangka Waktu<span class="text-danger fs-5">*</span></label>
                                            <input type="text" class="form-control @error('jangka_waktu') is-invalid @enderror" name="jangka_waktu"
                                            value="{{ old('jangka_waktu', $deposito_syariah->jangka_waktu) }}">
                                            @error('jangka_waktu')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                            <span id="passwordHelpInline" class="form-text">
                                                Bulan
                                            </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-4">
                                    <label class="form-label">Nisbah<span class="text-danger fs-5">*</span></label>
                                    <input type="text" class="form-control @error('nisbah') is-invalid @enderror" name="nisbah"
                                        value="{{ old('nisbah', $deposito_syariah->nisbah) }}">
                                    @error('nisbah')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
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