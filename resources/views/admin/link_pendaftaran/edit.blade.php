@extends('admin.layouts.main')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h4 class="mb-md-0">{{ $title }}</h4>
            <a href="{{ url('/admin/user') }}" class="btn btn-danger btn-icon-split">
                <span class="text"><i class="menu-icon tf-icons bx bxs-chevron-left"></i>Kembali</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (!$user)
                    <h6 class="text-center text-danger">Sistem Dalam Perbaikan, Silahkan Hubungi Developer!</h6>
                @else
                <form action="{{ url('admin/user/' . Crypt::encryptString($user->id)) }}" method="POST" autocomplete="off">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label class="form-label">Nama<span class="text-danger fs-5">*</span></label><br>
                        <input id="name" type="text" name="name" required class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $user->name) }}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email<span class="text-danger fs-5">*</span></label><br>
                        <input id="email" type="email" name="email" required class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $user->email) }}">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password<span class="text-danger fs-5">*</span></label><br>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label">Konfirmasi Password<span class="text-danger fs-5">*</span></label><br>
                        <input type="password" class="form-control" name="password_confirmation" autocomplete="new-password" autocomplete="current-password">
                    </div>
                    <div class="form-group"> 
                        <label for="super_user" class="mr-2">Super User?</label>
                        <input type="checkbox" name="super_user" placeholder="super user">
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
