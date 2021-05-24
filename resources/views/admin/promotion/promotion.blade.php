@extends('admin.layout')
@section('content')
<div class="container-fluid padding-top-35">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <div>
                    <label for="roleName" class="form-label">Promotion's Name</label>
                    <input type="text" id="roleName" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">Sale off</label>
                    <input type="text" id="User" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">Start Date</label>
                    <input type="date" id="User" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">End' Date</label>
                    <input type="date" id="User" class="form-control">
                </div>
                <div class="d-flex justify-content-end padding-top-35">
                    <a class="btn btn-primary">Add</a>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive" style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Promotion's Name</th>
                        <th>Sale Off</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>New Customer</td>
                            <td>10 %</td>
                            <td>27/5/2021</td>
                            <td>27/5/2030</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>International Children Date</td>
                            <td>30 %</td>
                            <td>1/6/2021</td>
                            <td>3/6/2021</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
