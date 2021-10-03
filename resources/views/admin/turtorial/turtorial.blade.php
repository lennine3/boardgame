@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">

    <div class="row d-flex bd-highlight mb-3">
        <div class="col-lg-6">
            <div class="me-auto p-2 bd-highlight">
                <h2>Product</h2>
            </div>
        </div>
        <div class="col-lg-6">
            <div class=" p-2 bd-highlight d-flex justify-content-end">
                <a href="{{ route('turtorial-create') }}" class="btn btn-primary">Add new</a>
            </div>
        </div>
    </div>


    <div class="table-responsive table-admin mb-4">
        <table class="table">
            <thead>
                <th>Id</th>
                <th>Id product</th>
                <th>Content</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($turtorials as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{!! $item->productRelation->name !!}</td>
                    <td>{!! $item->title !!}</td>
                    <td>
                        <a href="{{ url('admin/productContent-destroy/'.$item->id) }}" class="btn btn-danger"><i class="fal fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection
