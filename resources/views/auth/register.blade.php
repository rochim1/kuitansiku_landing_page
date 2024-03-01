@extends('layouts.default')

@section('content')
<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            <a class="text-center" href="index.html">
                                <h4>Register</h4>
                            </a>

                            <form method="post" action="{{ route('register') }}" class="mt-5 mb-5 login-input">
                                @csrf
                                <div class="form-group">
                                    <input id="name" type="text" name="name" required
                                        class="form-control @error('name') is-invalid @enderror" placeholder="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="email" type="email" name="email" required
                                        class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <input type="password" class="form-control" name="password_confirmation" required
                                        autocomplete="new-password" required autocomplete="current-password"
                                        placeholder="Password">
                                </div>
                                <div class="form-group"> 
                                    <label for="super_user" class="mr-2">super user ? </label>
                                    <input type="checkbox" name="super_user" placeholder="super user">
                                </div>

                                <button class="mt-3 btn login-form__btn submit w-100">Register</button>
                            </form>
                            <p class="mt-5 login-form__footer">have account? <a href="{{ route('login') }}"
                                    class="text-primary">Sign In</a> now</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
