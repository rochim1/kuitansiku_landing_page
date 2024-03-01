@extends('admin.layouts.main')
@section('content')
    <div class="row">
        <div class="col-md">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h4 class="mb-md-0">{{ $title }}</h4>
            </div>
            <div class="card">
                <div class="card-body">
                    @if (!$tentang_kami)
                        <form action="{{ url('admin/tentang_kami/') }}" enctype="multipart/form-data" method="POST">
                    @else
                        <form action="{{ url('admin/tentang_kami/' . Crypt::encryptString($tentang_kami->id_tentang_kami)) }}" enctype="multipart/form-data" method="POST">
                        @method('PUT')
                    @endif
                        @csrf
                            <div class="mb-4">
                                <div class="mb-4">
                                    @if (!$tentang_kami)
                                        <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"  style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                                    @else
                                        @if (Storage::exists($tentang_kami->gambar_tentang_kami))
                                            <img src="{{ asset('storage/' . $tentang_kami->gambar_tentang_kami) }}"  style="height: 420px; object-fit: contain" alt="gambar tentang kami" class="img-fluid img-thumbnail"><br>
                                        @else
                                            <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"  style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                                        @endif
                                    @endif
                                    <label class="form-label">Gambar <span class="fst-italic small">(jpg, jpeg, png, bmp, gif, svg, webp / 10MB)</span></label>
                                    <input type="file" class="form-control @error('gambar_tentang_kami') is-invalid @enderror" name="gambar_tentang_kami">
                                    @error('gambar_tentang_kami')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span></label><br>
                                <input type="hidden" id="deskripsi_tentang_kami" name="deskripsi_tentang_kami" 
                                    @if (!$tentang_kami)
                                        value="{{ old('deskripsi_tentang_kami') }}"
                                    @else
                                        value="{{ old('deskripsi_tentang_kami', $tentang_kami->deskripsi_tentang_kami) }}"
                                    @endif
                                >
                                <trix-editor input="deskripsi_tentang_kami" class="@error('deskripsi_tentang_kami') border border-danger @enderror"></trix-editor>
                                @error('deskripsi_tentang_kami')
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