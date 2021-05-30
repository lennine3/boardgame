<!-- Modal -->
<div class="modal fade" id="modalRegister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form method="POST" action="{{ route('UserLogin') }}">
                        @csrf
                        <div style="text-align: center;padding-bottom:20px">
                            <img src="{{ asset('BackEnd/Img/unsigned.png') }}" alt="" width="45%"
                                class="rounded-circle">
                        </div>
                        <div class="mb-3">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div style="padding-top: 30px">

                            <button type="submit" class="btn btn-primary" style="text-decoration: none;color:#fff">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                    <div class="form-check" style="justify-content: start!important;padding-top:10px">
                        <input type="checkbox" id="rememberME" class="form-check-input">
                        <label for="rememberME" class="form-check-label">Remember Me</label>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                <button type="buttoz" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#ModalLogin"
                    data-bs-dismiss="modal">Register</button>
            </div>
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
