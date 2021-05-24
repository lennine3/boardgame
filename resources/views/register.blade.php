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
                    <div style="text-align: center;padding-bottom:20px">
                        <img src="{{ asset('BackEnd/Img/unsigned.png') }}" alt="" width="45%" class="rounded-circle">
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div style="padding-top: 30px">
                        <a href="{{ route('admin') }}" style="text-decoration: none;color:#fff"  type="button" class="btn btn-primary col-lg-12" >Login</a>
                    </div>
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
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput">
                        <label for="floatingInput">First name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="floatingInput">
                        <label for="floatingInput">Last name</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword">
                        <label for="floatingPassword">Confirm password</label>
                    </div>
                    <div style="padding-top: 30px">
                        <button type="button" class="btn btn-primary col-lg-12">Create Now</button>
                    </div>
                    <div class="form-check" style="justify-content: start!important;padding-top:10px">
                        <input type="checkbox" id="term" class="form-check-input">
                        <label for="term" class="form-check-label">I had read your <a href="#">Term</a> and agree with it.</label>
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
