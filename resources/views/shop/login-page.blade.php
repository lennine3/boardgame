@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Login Page</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        Home
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Login
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section" style="padding: 30px 0px 150px 0px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                        <div class="text w-100">
                            <div class="d-flex justify-content-end close-button">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <h2>Welcome to login</h2>
                            <p>Don't have an account?</p>
                            <button type="buttoz"
                                class="btn btn-white btn-outline-white Ripple-effect radius-50"
                                data-bs-toggle="modal" data-bs-target="#ModalLogin"
                                data-bs-dismiss="modal">Sign Up</button>
                        </div>
                    </div>

                    <div class="login-wrap p-4 p-lg-5">
                        <div class="d-flex">
                            <div class="w-100">
                                <h3 class="mb-4">Sign In</h3>
                            </div>
                            <div class="w-100">
                                <p class="social-media d-flex justify-content-end">
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fab fa-facebook-f"></span></a>
                                    <a href="#"
                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                            class="fab fa-twitter"></span></a>
                                </p>
                            </div>
                        </div>
                        <form method="POST" action="{{ route('UserLogin') }}" class="signin-form">
                            @csrf
                            <div class="form-group mb-3">

                                <label class="label mb-3"
                                    for="name">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control log-input" @error('email')
                                    is-invalid @enderror" name="email" value="{{ old('email') }}"
                                    required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="label mb-3"
                                    for="password">{{ __('Password') }}</label>
                                <input type="password" class="form-control log-input"
                                    placeholder="Password" required @error('password') is-invalid
                                    @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit"
                                    class="form-control btn primary-btn submit px-3 radius-50 Ripple-effect">{{ __('Sign In') }}</button>
                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>

                        </form>
                        <div class="form-group d-md-flex mb-3">
                            <div class="w-50 text-left remember">
                                <input type="checkbox" id="rememberCheck" checked>
                                <span class="checkmark"></span>
                                <label class="checkbox-wrap checkbox-primary mb-0 label-color"
                                    for="rememberCheck">Remember Me</label>
                            </div>
                            <div class="w-50 d-flex justify-content-end text-md-right">
                                <a href="#" class="text-log">Forgot Password</a>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
