@extends('admin.layout')
@section('content')
<div class="container-fluid pad-top-20 pad-bot-50">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Product</h2>
        </div>

        <div class=" p-2 bd-highlight">
            <a href="{{ route('turtorial-create') }}" class="btn btn-primary">Add new</a>
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
                @foreach ($turtorials as $turtorial)
                <tr>
                    <td>{{ $turtorial->id }}</td>
                    <td>{!! $turtorial->id_product !!}</td>
                    <td>{!! $turtorial->title !!}</td>
                    
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
</div>
@endsection
