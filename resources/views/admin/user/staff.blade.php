@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="table-responsive" style="background-color: #fff;border-radius:15px 15px 15px 15px;padding:15px 15px 15px 15px">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Birth</th>
                <th>Sex</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Avatar</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <td>
                    1
                </td>
                <td>
                    tvdkhoa1801@gmail.com
                </td>
                <td>
                    Trần Võ Đăng khoa
                </td>
                <td>
                    18/1/2000
                </td>
                <td>
                    Male
                </td>
                <td>
                    0382024592
                </td>
                <td>634/7 Sư Vạn Hạnh p10 q10</td>
                <td>
                    <img src="{{ asset('Img/unsigned.png') }}" alt="" style="width: 150px;height:150px">
                </td>
                <td>
                    <a href="#" class="btn btn-success"><i class="far fa-pencil"></i></a>
                </td>
                <td>
                    <a href="#" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                </td>
            </tbody>
        </table>
    </div>
</div>
@endsection
