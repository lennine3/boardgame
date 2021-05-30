@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Product</h2>
        </div>

        <div class="d-flex p-2 bd-highlight">
            <button class="btn btn-primary">New Product</button>
        </div>

    </div>

    <div class="table-responsive" style="background-color: #fff;border-radius:15px 15px 15px 15px">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>SKU</th>
                <th>Production ID</th>
                <th>Supplier ID</th>
                <th>Staff ID</th>
                <th>Name</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Promotion ID</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>MA-05</td>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>Monopoly</td>
                    <td>20</td>
                    <td>1</td>
                    <td>1</td>
                    <td>
                        <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
