@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <!-- Button trigger modal -->
    <div style="padding-bottom: 20px">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            ADD USER
          </button>
    </div>

  <div class="table-responsive" style="background-color: #fff;border-radius:15px 15px 15px 15px">
      <table class="table">
          <thead>
              <tr>
                <th>Full Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Birth</th>
                <th>Sex</th>
                <th>Role</th>
                <th>Avartar</th>
                <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>
                      Trần Võ Đăng Khoa
                  </td>
                  <td>kan1989bd</td>
                  <td>tvdkhoa1801@gmail.com</td>
                  <td>0382024592</td>
                  <td>634/7 Sư Vạn hạn p10 q10</td>
                  <td>18/01/2000</td>
                  <td>Male</td>
                  <td>Admin</td>
                  <td><img src="{{ asset('Img/unsigned.png') }}" alt="" width="150px"></td>
                  <td>
                    <p>
                        <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="width: 110px">
                            <i class="fal fa-cog"></i> Action
                        </a>
                      </p>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                         <button class="btn btn-warning">Edit</button>
                         <br><br>
                         <button class="btn btn-danger">Delete</button>
                        </div>
                      </div>
                  </td>

              </tr>
          </tbody>
      </table>
  </div>
</div>


@include('admin.user.userCreate_modal')
@endsection
