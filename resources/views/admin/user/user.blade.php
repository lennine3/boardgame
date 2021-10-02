@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="table-responsive table-admin">
        <table class="table table-responsive overflow-auto cell-border hover todo-table" id="table_id">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    @can('edit user')
                    <th>Edit</th>
                    @endcan
                    @role('admin')
                    <th>Delete</th>
                    @endrole('admin')
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td class="id">{!! $user->id !!}</td>
                    <td class="name">{!! $user->name !!}</td>
                    <td class="email">{!! $user->email !!}</td>
                    @can('edit user')
                    <td>
                        <button class="btn btn-warning editUser" data-id="{!! $user->id !!}" data-toggle="modal"
                            data-target="#exampleModal"><i class="far fa-pencil"></i></button>
                    </td>@endcan
                    @role('admin')
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                    @endrole
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@include('admin.user.userCreate_modal')

<script>
    $(document).on('click', '.editUser', function () {
        var _this = $(this).parents('tr');
        $('#v_id').val(_this.find('.id').text());
        $('#v_name').val(_this.find('.name').text());
        $('#v_email').val(_this.find('.email').text());
    });

</script>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable();
    });

</script>
@endsection
