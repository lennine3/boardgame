@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="row">
        <div class="col-lg-3">
            <div style="background-color: #fff;border-radius:15px 15px 15px 15px;padding:15px 15px 15px 15px">
                <div>
                    <label for="">Product</label>
                </div>
                <br>
                <div class="input-group mb-3">
                    <select name="" id="" class="form-select">
                        <option value="">Monopoly</option>
                        <option value="">Conan</option>
                        <option value="">ETA</option>
                    </select>
                </div>
                <div>
                    <label for="inputGroupFile02">IMG</label>
                </div>
                <br>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">SAVE</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="table-responsive"
                style="background-color: #fff;border-radius:15px 15px 15px 15px;padding:15px 15px 15px 15px">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Monopoly</td>
                            <td>
                                <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                    style="width: 250px;height:150px">
                            </td>
                            <td>
                                <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Monopoly</td>
                            <td>
                                <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                    style="width: 250px;height:150px">
                            </td>
                            <td>
                                <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Monopoly</td>
                            <td>
                                <img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                    style="width: 250px;height:150px">
                            </td>
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
    </div>

</div>
@endsection
