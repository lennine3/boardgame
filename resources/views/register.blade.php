<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content" style="background-color: transparent!important;border-style:none">
            <section class="ftco-section">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 col-lg-10">
                            <div class="wrap d-md-flex">
                                <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
                                    <div class="text w-100">
                                        <div class="d-flex justify-content-end close-button">
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <h2>Welcome to TK Board Game</h2>
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
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" class="text-log">{{ __('Forgot Password?') }}</a>
                                            @endif
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalLogin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div style="text-align: center;padding-bottom:20px">
                        <img src="{{ asset('BackEnd/Img/unsigned.png') }}" alt="" width="45%" class="rounded-circle">
                    </div>
                    <form method="POST" action="{{ route('create') }}">
                        @csrf
                        <div class=" mb-3">
                            <label for="name" class=" col-form-label text-md-right">{{ __('Name') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label for="email" class=" col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class=" mb-3">
                            <label for="password" class=" col-form-label text-md-right">{{ __('Password') }}</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class=" form-group mb-3">
                            <label for="password-confirm"
                                class=" col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                        {{-- <div class=" mb-3">
                            <input type="password" class="form-control" id="floatingPassword">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <div class=" mb-3">
                            <input type="password" class="form-control" id="floatingPassword">
                            <label for="floatingPassword">Confirm password</label>
                        </div> --}}
                        <div style="padding-top: 30px">
                            <button type="submit" class="btn btn-primary col-lg-12">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                    <div class="form-check" style="justify-content: start!important;padding-top:10px">
                        <input type="checkbox" id="term" class="form-check-input">
                        <label for="term" class="form-check-label">I had read your <a href="#">Term</a> and agree with
                            it.</label>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="buttoz" class="btn btn-Danger" data-bs-toggle="modal" data-bs-target="#ModalRegister"
                    data-bs-dismiss="modal">Login</button>
            </div>
        </div>
    </div>
</div>
