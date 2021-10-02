@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="row">
        <div class="col-lg-3">
            <div class="table-admin">
                @if(!empty($ProductTypeSingle))
                <form action="{{ route('productType-update',$ProductTypeSingle->id) }}" method="post">
                    @csrf
                    @else
                    <form action="{{ route('productType-store') }}" method="post">
                        @csrf
                        @endif

                        <div>
                            <label for="roleName" class="form-label">Product Type Name</label>
                            <input type="text" id="roleName" class="form-control" name="product_type_name"
                                value="{{ !empty($ProductTypeSingle)? $ProductTypeSingle->product_type_name:''	 }}">
                        </div>
                        <div class="d-flex justify-content-end padding-top-35">
                            @if(!empty($ProductTypeSingle))
                            <button class="btn btn-primary" type="submit">Update</button>
                            @else
                            <button class="btn btn-primary" type="submit">Save</button>
                            @endif
                        </div>
                    </form>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive table-admin">
                <table class="table table-responsive overflow-auto row-border hover todo-table" id="table_id">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($productTypes as $productType)
                        <tr>
                            <td>{{ $productType->id }}</td>
                            <td>{{ $productType->product_type_name }}</td>
                            <td><a href="{{ route('productType-edit',$productType->id) }}" class="btn btn-success"><i
                                        class="far fa-pencil"></i></a></td>
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
                <form action="{{ route('productType-destroy',$productType->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" type="button" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable(
            {"pageLength": 5}
        );
    });

</script>
@endsection
