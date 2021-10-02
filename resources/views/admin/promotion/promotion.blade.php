@extends('admin.layout.layout')
@section('adminContent')

<div class="inner-block-other">
    <div class="row">
        <div class="col-lg-3">
            <form action="{{ route('promotion-store') }}" method="POST">
                @csrf
                <div class="table-admin">
                <div class="mb-3">
                    <label for="roleName" class="form-label">Promotion's Name</label>
                    <input type="text" id="roleName" class="form-control" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="User" class="form-label">Sale off</label>
                    <input type="text" id="User" class="form-control" name="rate" required>
                </div>
                {{-- <div class="mb-3">
                    <label for="User" class="form-label">Start Date</label>
                    <input type="date" id="User" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="User" class="form-label">End' Date</label>
                    <input type="date" id="User" class="form-control">
                </div> --}}
                <div class="d-flex justify-content-end" style="padding: 15px 15px 15px 15px">
                    <button class="btn btn-primary">Add</button>
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
                        <th>Promotion's Name</th>
                        <th>Sale Off</th>
                        {{-- <th>Start Date</th>
                        <th>End Date</th> --}}
                    </thead>
                    <tbody>
                        @foreach ($promotions as $promotion)
                        <tr>
                            <td>{{ $promotion->id }}</td>
                            <td>{{ $promotion->name }}</td>
                            <td>{{ $promotion->rate }}%</td>
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
            {"pageLength": 10}
        );
    });

</script>
@endsection
