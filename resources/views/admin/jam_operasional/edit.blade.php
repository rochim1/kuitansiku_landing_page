@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/jam_operasional') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$jam_operasional)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/jam_operasional/' . Crypt::encryptString($jam_operasional->id_jam_operasional)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-4">
                                    <label class="form-label">hari<span class="text-danger fs-5">*</span></label>
                                    <select class="form-select searchSelect me-2 @error('hari') is-invalid @enderror"" name="hari">
                                        <option value="{{ $jam_operasional->hari }}">{{ $jam_operasional->hari }}</option>
                                        <option value="Minggu">Minggu</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                    </select>
                                    @error('hari')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-4">
                                    <label class="form-label">Status<span class="text-danger fs-5">*</span></label>
                                    <select class="form-select searchSelect me-2 @error('status') is-invalid @enderror"" name="status">
                                        <option value="{{ $jam_operasional->status }}">{{ $jam_operasional->status }}</option>
                                        <option value="kerja">Kerja</option>
                                        <option value="libur">Libur</option>
                                    </select>
                                    @error('status')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="mb-4">
                                    <label class="form-label">jam_mulai<span class="text-danger fs-5">*</span></label>
                                    <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai', $jam_operasional->jam_mulai) }}">
                                    @error('jam_mulai')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-4">
                                    <label class="form-label">jam_selesai<span class="text-danger fs-5">*</span></label>
                                    <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="jam_selesai" value="{{ old('jam_selesai', $jam_operasional->jam_selesai) }}">
                                    @error('jam_selesai')
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
