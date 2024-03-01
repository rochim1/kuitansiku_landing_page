@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/kateber/berita/' . Crypt::encryptString($berita->kateber->id_kateber)) }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$berita)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                    <form action="{{ url('/admin/kateber/berita/update/' . Crypt::encryptString($berita->id_berita)) }}" method="POST" autocomplete="off" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="mb-4">
                            <div class="mb-4">
                                @if (Storage::exists($berita->gambar_berita))
                                    <img src="{{ asset('storage/' . $berita->gambar_berita) }}"  style="height: 420px; object-fit: contain" alt="foto berita" class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('assets_admin/media_sistem/pictureDefault.jpg') }}"  style="height: 420px; object-fit: contain" alt="tidak ada gambar" class="img-fluid"><br>
                                @endif
                                <label class="form-label">Gambar <span class="fst-italic small">(jpg, jpeg, png, bmp, gif, svg, webp / 10MB)</span></label>
                                <input type="file" class="form-control @error('gambar_berita') is-invalid @enderror" name="gambar_berita">
                                @error('gambar_berita')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Unggulan?<span class="text-danger fs-5">*</span></label>
                            <input type="checkbox" class="ms-1 @error('unggulan') is-invalid @enderror" name="unggulan" 
                                @if ($berita->unggulan)
                                    checked
                                @endif
                            >
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Kategori Berita</label>
                            <select class="form-select me-2 searchSelect" name="id_kateber">
                                @foreach ($kateber as $item)
                                    <option value="{{ $item->id_kateber }}" {{ old('id_kateber', $berita->id_kateber) == $item->id_kateber ? 'selected="selected"' : '' }}>{{ $item->nama_kateber }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Judul Berita<span class="text-danger fs-5">*</span></label>
                            <input type="text" class="form-control @error('judul_berita') is-invalid @enderror" name="judul_berita" value="{{ old('judul_berita', $berita->judul_berita) }}">
                            @error('judul_berita')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span></label><br>
                            <textarea id="ck_editor_berita" name="deskripsi_berita">{{ old('deskripsi_berita', $berita->deskripsi_berita) }}</textarea>
                            @error('deskripsi_berita')
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