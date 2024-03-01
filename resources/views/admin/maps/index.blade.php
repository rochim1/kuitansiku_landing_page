@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">Maps</h4>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$maps)
                    <form action="{{ url('/admin/maps/') }}" method="POST" autocomplete="off">
                @else
                    <form action="{{ url('admin/maps/' . Crypt::encryptString($maps->id_maps)) }}" method="POST">
                    @method('PUT')
                @endif
                    @csrf
                    <div class="form-group">
                        <label for="maps">Link Alamat Goggle Maps</label>
                        @if ($maps == '' || !$maps)
                        <span class="badge badge-danger">!</span>
                        @endif
                        <textarea name="link_maps" name="maps" class="form-control @error('link_maps') is-invalid @enderror" rows="5">@if (!$maps){{ old('link_maps') }}@else{{ old('link_maps', $maps->link_maps) }}@endif</textarea>
                        @error('link_maps')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                        <div class="modal-footer mt-4 mb-n3">
                            <button type="submit" class="btn btn-primary">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>

@endsection
