@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="table-responsive table-admin">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Customer ID</th>
                <th>Staff ID</th>
                <th>Total Money</th>
                <th>Date Create</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>1</td>
                    <td>1</td>
                    <td>$ 720</td>
                    <td>30/5/2021</td>
                    <td>
                        <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>1</td>
                    <td>1</td>
                    <td>$ 720</td>
                    <td>30/5/2021</td>
                    <td>
                        <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>1</td>
                    <td>1</td>
                    <td>$ 720</td>
                    <td>30/5/2021</td>
                    <td>
                        <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                    </td>
                    <td>
                        <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>1</td>
                    <td>1</td>
                    <td>$ 720</td>
                    <td>30/5/2021</td>
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
