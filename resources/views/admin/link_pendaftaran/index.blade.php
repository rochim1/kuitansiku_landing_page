@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
        </div>
        @if (!count($linkPendaftaran))
        <div class="card">
            <div class="card-body">
                <h6 class="text-center">Data {{ $title }} Belum Ada!</h6>
            </div>
        </div>
        @else
        @foreach ($linkPendaftaran as $item)
        <div class="card mb-3">
            <div class="card-body">
                    <form action="{{ url('admin/linkPendaftaran/' . Crypt::encryptString($item->id_link_pendaftaran)) }}" method="POST" autocomplete="off">
                        @method('PUT')
                        @csrf
                        <h6 class="mb-3">
                            {{ $item->nama_link }}
                        </h6>
                        <div class="mb-3">
                            <label class="form-label">link<span class="text-danger fs-5">*</span> </label><br>
                            <input class="form-control @error('link') border border-danger @enderror" name="link" value="{{ old('link', $item->link) }}">
                            @error('link')
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
        @endforeach
        @endif
    </div>
</div>

@endsection
