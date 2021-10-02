@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">

    <div class="row">

        <div class="col-lg-3">
            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
                <div class="table-admin">
                    <div>
                        <label for="roleName" class="form-label">Supplier's Name</label>
                        <input type="text" id="roleName" name="name" class="form-control">
                    </div>
                    <div>
                        <label for="User" class="form-label">Supplier's Address</label>
                        <input type="text" id="User" name="address" class="form-control">
                    </div>
                    <div>
                        <label for="User" class="form-label">Supplier's Phone</label>
                        <input type="text" id="User" name="phone" class="form-control">
                    </div>
                    <div>
                        <label for="User" class="form-label">Supplier'Email</label>
                        <input type="text" id="User" name="email" class="form-control">
                    </div>

                    <div class="d-flex justify-content-end padding-top-35">
                        <button type="submit" class="btn btn-primary">Add</button>
                        {{-- <a class="btn btn-primary">Add</a> --}}
                    </div>
                </div>
            </form>
        </div>

        <div class="col-lg-9">
            <div class="table-responsive table-admin">
                <table class="table table-responsive overflow-auto row-border hover todo-table" id="table_id">
                    <thead>
                        <th>ID</th>
                        <th>Supplier's Name</th>
                        <th>Supplier's Adress</th>
                        <th>Supplier's Phone</th>
                        <th>Supplier's Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($supplier as $item )
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <p>
                                    <a class="btn btn-success" data-toggle="collapse"
                                        href="#collapseExample{{ $item->id }}" role="button" aria-expanded="false"
                                        aria-controls="collapseExample" style="width: 110px">
                                        <i class="fal fa-cog"></i> Action
                                    </a>
                                </p>
                                <div class="collapse" id="collapseExample{{ $item->id }}">
                                    <div class="card card-body">
                                        <br>
                                        <button class="btn btn-warning btn-block">Edit</button>
                                        <br>
                                        <button class="btn btn-danger btn-block">Delete</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable(

        );
    });

</script>
@endsection
