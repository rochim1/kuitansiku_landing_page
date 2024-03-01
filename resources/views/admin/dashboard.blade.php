@extends('admin.layouts.main')

@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h4 class="mb-md-0">{{ $title }}</h4>
    </div>

    <div class="card">
        <div class="card-body">
            <h1>Selamat Datang di Halaman Administrator</h1>
            <h4>Halaman ini hanya dapat diakses oleh user admin</h4>
            <p>Nama : {{ auth()->user()->name }}</p>
            <p class="mt-n3">Email : {{ auth()->user()->email }}</p>
            <p class="mt-n3">Email verified : {{ auth()->user()->email_verified_at }}</p>
            @if (auth()->user()->email_verified_at == null)
                <p class="text-danger">Segera verifikasi email anda untuk mengantisipasi lupa pasword! </p>
                <p>kirim ulang email verifikasi <a href="{{url('')}}/send/mail/verify/{{Crypt::encryptString(auth()->user()->id)}}">klik</a></p>
            @endif
            <a href="{{ url('admin/logout') }}" class="btn btn-warning" id="btn_logout"><i class="bx bx-power-off me-2"></i> Logout</a>
        </div>
    </div>
@endsection