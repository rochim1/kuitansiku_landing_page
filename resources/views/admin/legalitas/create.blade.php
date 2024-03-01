@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/legalitas') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/legalitas') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                        <select name="judul_legalitas" class="form-control @error('judul_legalitas') is-invalid @enderror">
                            <option value="">pilih</option>
                            @if ($judul_legalitas)
                            @foreach ($judul_legalitas as $item)
                            <option 
                            @if ($item->id_judul_legalitas == old('judul_legalitas'))
                            selected    
                            @endif 
                            value="{{$item->id_nama_legalitas}}">{{$item->nama_legalitas}}</option>
                            @endforeach
                            @endif
                        </select>
                        @error('judul_legalitas')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                        <textarea class="form-control @error('deskripsi_legalitas') border border-danger @enderror" name="deskripsi_legalitas" rows="5">{{ old('deskripsi_legalitas') }}</textarea>
                        @error('deskripsi_legalitas')
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