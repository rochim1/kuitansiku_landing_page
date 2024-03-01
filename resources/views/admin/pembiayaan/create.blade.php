@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/pembiayaan') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$katepem)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('admin/pembiayaan') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                            <select name="id_katepem" class="form-control @error('id_katepem') is-invalid @enderror">
                                <option value="">pilih</option>
                                @foreach ($katepem as $item)
                                <option value="{{$item->id_katepem}}">{{$item->nama_katepem}}</option>
                                @endforeach
                            </select>
                            @error('id_katepem')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> </label><br>
                            <textarea id="ck_editor_pembiayaan" name="deskripsi_pembiayaan">{{ old('deskripsi_pembiayaan') }}</textarea>
                            @error('deskripsi_pembiayaan')
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