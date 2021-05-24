@extends('admin.layout')
@section('content')
<div class="container-fluid padding-top-35">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #fff;border-radius:10px 10px 10px 10px;padding:15px 15px 15px 15px">
                <div>
                    <label for="roleName" class="form-label">Supplier's Name</label>
                    <input type="text" id="roleName" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">Supplier's Address</label>
                    <input type="text" id="User" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">Supplier's Phone</label>
                    <input type="text" id="User" class="form-control">
                </div>
                <div>
                    <label for="User" class="form-label">Supplier'Email</label>
                    <input type="text" id="User" class="form-control">
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
                        <th>Supplier's Name</th>
                        <th>Supplier's Adress</th>
                        <th>Supplier's Phone</th>
                        <th>Supplier's Email</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Max Factory</td>
                            <td>65/98 abc San Francisco</td>
                            <td>MF@gmail.com</td>
                            <td>03265898745</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Good Smile Company</td>
                            <td>69/78 Los Angeles</td>
                            <td>GSC@gmail.com</td>
                            <td>36025487985</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
