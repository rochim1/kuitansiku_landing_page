@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if (!$visi)
                            <form action="{{ url('admin/visi_misi') }}" method="POST" autocomplete="off">
                        @else
                            <form action="{{ url('admin/visi_misi/' . Crypt::encryptString('visi+'.$visi->id_visi)) }}" method="POST">
                            @method('PUT')
                        @endif
                        @csrf
                        <input type="hidden" name="tanda" value="visi">
                            <div>
                                <label class="form-label">visi<span class="text-danger fs-5">*</span></label><br>
                                <input type="hidden" id="visi" name="visi" 
                                    @if (!$visi)
                                        value="{{ old('visi') }}"
                                    @else
                                        value="{{ old('visi', $visi->visi) }}"
                                    @endif
                                >
                                <trix-editor input="visi" class="@error('visi') border border-danger @enderror"></trix-editor>
                                @error('visi')
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

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if (!$misi)
                            <form action="{{ url('admin/visi_misi') }}" method="POST" autocomplete="off">
                        @else
                            <form action="{{ url('admin/visi_misi/' . Crypt::encryptString('misi+'.$misi->id_misi)) }}" method="POST">
                            @method('PUT')
                        @endif
                        @csrf
                        <input type="hidden" name="tanda" value="misi">
                            <div>
                                <label class="form-label">misi<span class="text-danger fs-5">*</span></label><br>
                                <input type="hidden" id="misi" name="misi" 
                                    @if (!$misi)
                                        value="{{ old('misi') }}"
                                    @else
                                        value="{{ old('misi', $misi->misi) }}"
                                    @endif
                                >
                                <trix-editor input="misi" class="@error('misi') border border-danger @enderror"></trix-editor>
                                @error('misi')
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
    </div>
</div>
@endsection