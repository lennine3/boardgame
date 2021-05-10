@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #ffffffb6;border-radius: 15px 15px 15px 15px;padding: 15px 15px 15px 15px">
                <div>
                    User
                </div>
                <hr>
                <div>
                    <div class="row">
                        <div class=" col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">User Name</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>

                    </div>
                    <div class="row">
                        <div class=" col-lg-6 mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="Email">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Password</label>
                            <input type="password" class="form-control" id="Password">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Address</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Birth</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                            <div class="col-lg-6 mb-3">
                                <label for="fullName" class="form-label">Sex</label>
                                <input type="text" class="form-control" id="fullName">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Role</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label for="fullName" class="form-label">Avarta</label>
                            <input type="text" class="form-control" id="fullName">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="justify-content-end d-flex" style="padding-top: 10px">
                    <button class="btn btn-danger">Add</button>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            abc
        </div>
    </div>
</div>

@endsection
