@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="row d-flex mb-4">
        <div class="col-lg-8">
            <h1>Staff</h1>
        </div>

        <div class="col-lg-4 ">
            <div class="d-flex justify-content-end">
                <a href="{{ route('staffs.create') }}" class="btn btn-primary">Add</a>
            </div>

        </div>
    </div>

    <div class="table-responsive table-admin">
        <table class="table table-responsive overflow-auto cell-border hover todo-table" id="table_id">
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
                        <a href="{{ route('staffs.edit',$staff->id) }}" class="btn btn-success"><i
                                class="far fa-pencil"></i></a>
                    </td>
                    <td>
                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fal fa-trash"></i></button>
                        {{-- <form action="{{ route('staffs.destroy',$staff->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="text" value="{{ $staff->id }}" name="staff_id">
                        <input type="text" value="{{ $staff->user }}" name="user_id">

                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this staff ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('staffs.destroy',$staff->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="text" value="{{ $staff->id }}" name="staff_id" hidden>
                    <input type="text" value="{{ $staff->user }}" name="user_id" hidden>
                    <button type="submit" type="button" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
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
