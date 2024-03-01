@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header">Form Profil Admin</div>
        <div class="card-body">
            <form action="{{ url('/admin/update_profil') }}" method="POST" autocomplete="off">
                @csrf
                <div class="mb-4">
                    <label class="form-label">Password Lama<span class="text-danger fs-5">*</span></label>
                    <input type="password" class="form-control @error('password_lama') is-invalid @enderror"
                        name="password_lama" required>
                    @error('password_lama')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Nama Lengkap<span class="text-danger fs-5">*</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name', Auth::user()->name) }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Email<span class="text-danger fs-5">*</span></label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email', Auth::user()->email) }}">
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="form-label">Password Baru</label>
                    <input type="password" class="form-control @error('password_baru') is-invalid @enderror"
                        name="password_baru">
                    @error('password_baru')
                        <div class="invalid-feedback">{{ $message }}</div>
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
@endsection
