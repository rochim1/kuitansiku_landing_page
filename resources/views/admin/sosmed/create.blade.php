@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/sosmed') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                <form action="{{ url('admin/sosmed') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="mb-4">
                        <label class="form-label">Penyedia Sosial Media<span class="text-danger fs-5">*</span></label>
                        <select name="penyedia_sosmed" class="form-control @error('penyedia_sosmed') is-invalid @enderror">
                            <option value="">pilih</option>
                            @if ($penyedia_sosmed)
                            @foreach ($penyedia_sosmed as $item)
                            <option 
                            @if ($item->id_penyedia_sosmed == old('penyedia_sosmed'))
                            selected    
                            @endif 
                            value="{{$item->id_penyedia_sosmed}}">{{$item->nama_penyedia_sosmed}}</option>
                            @endforeach
                            @endif
                        </select>
                        @error('penyedia_sosmed')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Sosial Media<span class="text-danger fs-5">*</span></label><br>
                        <textarea class="form-control @error('alamat_sosmed') border border-danger @enderror" name="alamat_sosmed" rows="5">{{ old('alamat_sosmed') }}</textarea>
                        @error('alamat_sosmed')
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
