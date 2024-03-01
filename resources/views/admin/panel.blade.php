@extends('admin.layouts.main')

@section('content')
    <div class="row">
        <div class="col-md">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h4 class="mb-md-0">{{ $title }}</h4>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-2 mb-3 mt-n2 fw-bold fst-italic text-center">Panel 1</div>
                            <div class="d-flex justify-content-center">
                                @if (Storage::exists($panel->logo_panel_pertama ?? ''))
                                    <img src="{{ asset('storage/' . $panel->logo_panel_pertama) }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="gambar panel"
                                        class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('assets_user/img/centangpng.png') }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="tidak ada gambar"
                                        class="img-fluid"><br>
                                @endif
                                @if (Storage::exists($panel->logo_panel_pertama ?? ''))
                                    <form class="d-inline" action="{{ url('/admin/panel/logo_panel') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="logo_panel" value="{{ $panel->logo_panel_pertama }}">
                                        <button type="submit" class="btn btn-danger mt-n4">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                            @if (!$panel)
                                <form action="{{ url('/admin/panel/') }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                @else
                                    <form action="{{ url('admin/panel/' . Crypt::encryptString($panel->id_panel)) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                            @endif
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Logo <span class="fst-italic small">(jpg, jpeg, png, bmp,
                                        gif,
                                        svg, webp / 10MB)</span></label>
                                <div class="row">
                                    <div class="col-md">
                                        <input type="file"
                                            class="form-control @error('logo_panel_pertama') is-invalid @enderror"
                                            name="logo_panel_pertama">
                                    </div>

                                </div>
                                @error('logo_panel_pertama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                                <input type="text"
                                    class="form-control @error('judul_panel_pertama') is-invalid @enderror"
                                    name="judul_panel_pertama"
                                    @if (!$panel) value="{{ old('judul_panel_pertama') }}" @else
                                        value="{{ old('judul_panel_pertama', $panel->judul_panel_pertama) }}" @endif>
                                @error('judul_panel_pertama')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> (gunakan
                                    Font
                                    Arial dengan Ukuran 16)</label><br>
                                <textarea class="form-control @error('deskripsi_panel_pertama') border border-danger @enderror"
                                    name="deskripsi_panel_pertama" rows="5">
                                    @if (!$panel)
                                    {{ old('deskripsi_panel_pertama') }}@else{{ old('deskripsi_panel_pertama', $panel->deskripsi_panel_pertama) }}
                                    @endif
                                    </textarea>
                                @error('deskripsi_panel_pertama')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary form-control">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-2 mb-3 mt-n2 fw-bold fst-italic text-center">Panel 2</div>
                            <div class="d-flex justify-content-center">
                                @if (Storage::exists($panel->logo_panel_kedua ?? ''))
                                    <img src="{{ asset('storage/' . $panel->logo_panel_kedua) }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="gambar panel"
                                        class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('assets_user/img/centangpng.png') }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="tidak ada gambar"
                                        class="img-fluid"><br>
                                @endif
                                @if (Storage::exists($panel->logo_panel_kedua ?? ''))
                                    <form class="d-inline" action="{{ url('/admin/panel/logo_panel') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="logo_panel" value="{{ $panel->logo_panel_kedua }}">
                                        <button type="submit" class="btn btn-danger mt-n4">
                                            <i class='bx bx-trash'></i>
                                        </button>
                                    </form>
                                @endif
                            </div>
                            @if (!$panel)
                                <form action="{{ url('/admin/panel/') }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                @else
                                    <form action="{{ url('admin/panel/' . Crypt::encryptString($panel->id_panel)) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                            @endif
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Logo <span class="fst-italic small">(jpg, jpeg, png, bmp,
                                        gif,
                                        svg, webp / 10MB)</span></label>
                                <input type="file" class="form-control @error('logo_panel_kedua') is-invalid @enderror"
                                    name="logo_panel_kedua">
                                @error('logo_panel_kedua')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                                <input type="text" class="form-control @error('judul_panel_kedua') is-invalid @enderror"
                                    name="judul_panel_kedua"
                                    @if (!$panel) value="{{ old('judul_panel_kedua') }}"
                                        @else value="{{ old('judul_panel_kedua', $panel->judul_panel_kedua) }}" @endif>
                                @error('judul_panel_kedua')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> (gunakan
                                    Font
                                    Arial dengan Ukuran 16)</label><br>
                                <textarea class="form-control @error('deskripsi_panel_kedua') border border-danger @enderror"
                                    name="deskripsi_panel_kedua" rows="5">
                                    @if (!$panel)
                                    {{ old('deskripsi_panel_kedua') }}@else{{ old('deskripsi_panel_kedua', $panel->deskripsi_panel_kedua) }}
                                    @endif
                                </textarea>
                                @error('deskripsi_panel_kedua')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary form-control">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-2 mb-3 mt-n2 fw-bold fst-italic text-center">Panel 3</div>
                            <div class="d-flex justify-content-center">
                                @if (Storage::exists($panel->logo_panel_ketiga ?? ''))
                                    <img src="{{ asset('storage/' . $panel->logo_panel_ketiga) }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="gambar panel"
                                        class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('assets_user/img/centangpng.png') }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="tidak ada gambar"
                                        class="img-fluid"><br>
                                @endif
                            </div>
                            @if (Storage::exists($panel->logo_panel_ketiga ?? ''))
                                <form class="d-inline" action="{{ url('/admin/panel/logo_panel') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="logo_panel" value="{{ $panel->logo_panel_ketiga }}">
                                    <button type="submit" class="btn btn-danger mt-n4">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            @endif
                            @if (!$panel)
                                <form action="{{ url('/admin/panel/') }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                @else
                                    <form action="{{ url('admin/panel/' . Crypt::encryptString($panel->id_panel)) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                            @endif
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Logo <span class="fst-italic small">(jpg, jpeg, png, bmp,
                                        gif,
                                        svg, webp / 10MB)</span></label>
                                <input type="file"
                                    class="form-control @error('logo_panel_ketiga') is-invalid @enderror"
                                    name="logo_panel_ketiga">
                                @error('logo_panel_ketiga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                                <input type="text"
                                    class="form-control @error('judul_panel_ketiga') is-invalid @enderror"
                                    name="judul_panel_ketiga"
                                    @if (!$panel) value="{{ old('judul_panel_ketiga') }}"
                                        @else value="{{ old('judul_panel_ketiga', $panel->judul_panel_ketiga) }}" @endif>
                                @error('judul_panel_ketiga')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> (gunakan
                                    Font
                                    Arial
                                    dengan Ukuran 16)</label><br>
                                <textarea class="form-control @error('deskripsi_panel_ketiga') border border-danger @enderror"
                                    name="deskripsi_panel_ketiga" rows="5">
                                    @if (!$panel)
                                    {{ old('deskripsi_panel_ketiga') }}@else{{ old('deskripsi_panel_ketiga', $panel->deskripsi_panel_ketiga) }}
                                    @endif
                                </textarea>
                                @error('deskripsi_panel_ketiga')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary form-control">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="border-bottom pb-2 mb-3 mt-n2 fw-bold fst-italic text-center">Panel 4</div>
                            <div class="d-flex justify-content-center">
                                @if (Storage::exists($panel->logo_panel_keempat ?? ''))
                                    <img src="{{ asset('storage/' . $panel->logo_panel_keempat) }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="gambar panel"
                                        class="img-fluid img-thumbnail"><br>
                                @else
                                    <img src="{{ asset('assets_user/img/centangpng.png') }}"
                                        style="width: 120px; height: 120px; object-fit: cover;" alt="tidak ada gambar"
                                        class="img-fluid"><br>
                                @endif
                            </div>
                            @if (Storage::exists($panel->logo_panel_keempat ?? ''))
                                <form class="d-inline" action="{{ url('/admin/panel/logo_panel') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="logo_panel" value="{{ $panel->logo_panel_keempat }}">
                                    <button type="submit" class="btn btn-danger mt-n4">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            @endif
                            @if (!$panel)
                                <form action="{{ url('/admin/panel/') }}" method="POST" autocomplete="off"
                                    enctype="multipart/form-data">
                                @else
                                    <form action="{{ url('admin/panel/' . Crypt::encryptString($panel->id_panel)) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @method('PUT')
                            @endif
                            @csrf
                            <div class="mb-4">
                                <label class="form-label">Logo <span class="fst-italic small">(jpg, jpeg, png, bmp,
                                        gif,
                                        svg, webp / 10MB)</span></label>
                                <input type="file"
                                    class="form-control @error('logo_panel_keempat') is-invalid @enderror"
                                    name="logo_panel_keempat">
                                @error('logo_panel_keempat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Judul<span class="text-danger fs-5">*</span></label>
                                <input type="text"
                                    class="form-control @error('judul_panel_keempat') is-invalid @enderror"
                                    name="judul_panel_keempat"
                                    @if (!$panel) value="{{ old('judul_panel_keempat') }}"
                                        @else value="{{ old('judul_panel_keempat', $panel->judul_panel_keempat) }}" @endif>
                                @error('judul_panel_keempat')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Deskripsi<span class="text-danger fs-5">*</span> (gunakan
                                    Font
                                    Arial
                                    dengan Ukuran 16)</label><br>
                                <textarea class="form-control @error('deskripsi_panel_keempat') border border-danger @enderror"
                                    name="deskripsi_panel_keempat" rows="5">
                                    @if (!$panel)
                                    {{ old('deskripsi_panel_keempat') }}@else{{ old('deskripsi_panel_keempat', $panel->deskripsi_panel_keempat) }}
                                    @endif
                                </textarea>
                                @error('deskripsi_panel_keempat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary form-control">
                                <i class='menu-icon tf-icons bx bx-save'></i> Simpan
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
