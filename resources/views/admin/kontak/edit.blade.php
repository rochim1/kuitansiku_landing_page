@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kontak') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/kontak/'. Crypt::encryptString($kontak->id_kontak)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">No Telpon/Kontak<span class="text-danger fs-5">*</span></label><br>
                        <input min="0" type="number" class="form-control @error('no_kontak') is-invalid @enderror" name="no_kontak" value="{{old('no_kontak', $kontak->no_kontak)}}">
                        @error('no_kontak')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <div class="d-flex">
                            <label class="form-label">ada whatsapp</label><br>
                            <input type="checkbox" class="ms-3 @error('whatsapp') is-invalid @enderror" name="whatsapp" 
                                @if ($kontak->whatsapp)
                                    checked
                                @endif
                            >
                        </div>
                        @error('whatsapp')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div>
                        <label class="form-label" for="deskripsi">deskripsi</label>
                        <textarea name="deskripsi" cols="30" rows="5" class="form-control">{{old('deskripsi', $kontak->deskripsi)}}</textarea>
                        @error('deskripsi')
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
