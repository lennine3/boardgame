@extends('admin.layout')
@section('content')
<div class="container-fluid padding-top-35">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <div>
                    <label for="roleName" class="form-label">Role Name</label>
                    <input type="text" id="roleName" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">User</label>
                    <input type="text" id="User" class="form-control">
                </div>
                <div class="d-flex justify-content-end padding-top-35">
                    <a class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive" style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>User Name</th>
                        <th>Role</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Admin</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>kan1989</td>
                            <td>Admin</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
