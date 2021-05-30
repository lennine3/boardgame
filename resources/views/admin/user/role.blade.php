@extends('admin.layout')
@section('content')
<div class="container-fluid padding-top-35">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <form action="{{ route('roleStore') }}" method="POST">
                    @csrf
                    <div>
                        <label for="roleName" class="form-label">Role Name</label>
                        <input type="text" name="name" id="roleName" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-end padding-top-35">
                        <button class="btn btn-primary" type="submit">SAVE</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive"
                style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <table class="table">
                    <thead>
                        <th style="width: 50%">ID</th>
                        <th style="width: 50%">Role Name</th>
                    </thead>
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td style="width: 50%">{{  $role->id  }}</td>
                            <td style="width: 50%">{{ $role->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
