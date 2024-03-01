@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">Layang Pandang</h4>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$layangpandang)
                    <form action="{{ url('/admin/layangpandang/') }}" method="POST" autocomplete="off">
                @else
                    <form action="{{ url('admin/layangpandang/' . Crypt::encryptString($layangpandang->id_layang_pandang)) }}" method="POST">
                        @method('PUT')
                @endif
                        @csrf
                        <div class="form-group">
                            <label for="layangpandang">layang pandang adalah penjelasan singat mengenai BMT At-ta'awun yang akan ditampilkan pada footer</label>
                            @if ($layangpandang == '' || !$layangpandang)
                                <span class="badge badge-danger">!</span>
                            @endif
                            <textarea name="layang_pandang" name="layangpandang" class="form-control @error('layang_pandang') is-invalid @enderror"
                                rows="5">@if(old('layang_pandang')){{old('layang_pandang')}}@else @if($layangpandang){{$layangpandang->layang_pandang}}@endif @endif</textarea>
                            @error('layang_pandang')
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
