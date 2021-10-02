@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>customer</h2>
        </div>
    </div>

    <div class="table-responsive table-admin mb-4">
        <table class="table table-responsive overflow-auto row-border hover todo-table" id="table_id">
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
                    <td>
                        @if ($customer->sex==1)
                        Male
                        @elseif ($customer->sex==2)
                        Female
                        @elseif($customer->sex==3)
                        Other
                        @endif
                    </td>
                    <td><img src="{{ asset('Img/customer-avatar/'.$customer->avatar) }}" alt=""
                            style="width: 150px;height:150px"></td>
                    <td>{{ $customer->rank }}</td>
                    <td>
                        <a href="{{ url('admin/customer-edit',$customer->id) }}" class="btn btn-warning editUser"><i
                                class="far fa-pencil"></i></a>

                    </td>
                    <td>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fal fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable({
            "pageLength": 4
        });
    });

</script>
@endsection
