@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kalkupem') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/kalkupem/' . Crypt::encryptString($kalkupem->id_kalkupem)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md">
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <div class="mb-4">
                                        <label class="form-label">Bulan<span class="text-danger fs-5">*</span></label>
                                        <input type="text" class="form-control @error('bulan') is-invalid @enderror" name="bulan"
                                            value="{{ old('bulan', $kalkupem->bulan) }}">
                                        @error('bulan')
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
                            <div class="row g-3 align-items-center">
                                <div class="col-auto">
                                    <div class="mb-4">
                                        <label class="form-label">Bunga<span class="text-danger fs-5">*</span> <span class="fst-italic opacity-50">(, diganti dengan .)</span></label>
                                        <input type="text" class="form-control @error('bunga') is-invalid @enderror" name="bunga"
                                            value="{{ old('bunga', $kalkupem->bunga) }}">
                                        @error('bunga')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-auto">
                                        <span id="passwordHelpInline" class="form-text">
                                            dalam (%)
                                        </span>
                                </div>
                            </div>
                        </div>
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
