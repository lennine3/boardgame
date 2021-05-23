@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div>
                <div>
                    <label for="roleName" class="form-label">Role Name</label>
                    <input type="text" id="roleName" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">User</label>
                    <input type="text" id="User" class="form-control">
                </div>
            </div>
        </div>
        <div class="col-lg-8"></div>
    </div>

</div>
@endsection
