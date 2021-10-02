@extends('admin.layout')
@section('content')
<div class="container-fluid pad-top-20 pad-bot-50">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>customer</h2>
        </div>
    </div>

    <div class="table-responsive table-admin mb-4">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Birth</th>
                <th>Gender</th>
                <th>Avatar</th>
                <th>Rank</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->birth }}</td>
                    <td>{{ $customer->gender }}</td>
                    <td><img src="{{ asset('Img/customer-avatar/'.$customer->avatar) }}" alt="" style="width: 150px;height:150px"></td>
                    <td>{{ $customer->rank }}</td>
                    <td>
                        <a href="{{ url('admin/customer-edit',$customer->id) }}" class="btn btn-warning editUser"><i class="far fa-pencil"></i></a>

                    </td>
                    <td>
                        <button  class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center pagination-admin">
       {{--  {!! $customers->render() !!} --}}
    </div>
</div>
@endsection
