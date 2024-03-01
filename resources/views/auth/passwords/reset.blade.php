<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password - BMT At Taawun</title>
    <link rel="icon" href="{{ asset('favicon.png') }}">

    {{-- bootstrap 4 --}}
    <link rel="stylesheet" href="{{ asset('assets_admin/bootstrap-4/dist/css/bootstrap.min.css') }}">

</head>

<body class="bg-success">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-md-6">
                <div class="card bg-white shadow-lg">
                    <div class="card-body px-5">
                        <div class="text-center">
                            <div class="mb-3">
                                <img src="{{ asset('favicon.png') }}" alt="img-logo"
                                    style="width: auto; height: 80px;">
                            </div>
                            <h5 class="fw-bold mt-2">BMT At Taawun</h5>
                            <small class="opacity-75 fst-italic">Input Password baru anda</small>
                        </div>
                        <div class="opacity-50 mb-3">
                            <hr>
                        </div>
                                     
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
    
                            <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mb-3">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus placeholder="Masukan Alamat Email...">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Masukan Password...">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Masukan Confirmasi Password...">
                                </div>
    
                            <div class="row text-center">
                                <div class="col-md">
                                    <button type="submit" class="btn btn-primary col-md">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                                <div class="col-md">
                                    <a href="/login" class="btn btn-danger col-md">
                                        Kembali login
                                    </a>
                                </div>
                            </div>
                        </form>
                                   
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- bootstrap 4 --}}
    <script src="{{ asset('assets_admin/bootstrap-4/dist/js/bootstrap.bundle.min.js') }}"></script>

    {{-- Jquery --}}
    <script src="{{ asset('asset/jquery/jquery-3.6.0.min.js') }}"></script>
    
</body>

</html>
