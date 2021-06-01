@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="row justify-content-between d-flex">
        <div class="col-lg-4">
            <h1>Staff</h1>
        </div>

        <div class="col-lg-4 ">
            <div class="d-flex justify-content-end">
                <a href="{{ route('staffs.create') }}" class="btn btn-primary">Add</a>
            </div>

        </div>
    </div>

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
                <th>Role</th>
                <th>Avatar</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($staffs as $staff)
                <tr>
                    <td>
                        {{ $staff->id }}
                    </td>
                    <td>
                        {{ $staff->userRelation->email }}
                    </td>
                    <td>
                        {{ $staff->name }}
                    </td>
                    <td>
                        {{ $staff->birth }}
                    </td>
                    <td>
                        {{ $staff->sex }}
                    </td>
                    <td>
                        {{ $staff->phone }}
                    </td>
                    <td>
                        {{ $staff->address }}
                    </td>
                    <td>
                        {{ $staff->roleRelation->name ?? ''}}
                    </td>
                    <td>
                        <img src="{{ asset('Img/user-img/'.$staff->avatar) }}" alt="" style="width: 150px;height:150px">
                    </td>
                    <td>
                        <a href="{{ route('staffs.edit',$staff->id) }}" class="btn btn-success"><i class="far fa-pencil"></i></a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
