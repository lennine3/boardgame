@extends('admin.layout.layout')
@section('adminContent')
<div class="inner-block-other">
    <div class="row  d-flex mb-4">
        <div class="col-lg-8">
            <h1>Product</h1>
        </div>

        <div class="col-lg-4 ">
            <div class="d-flex justify-content-end">
                <a class="btn btn-primary" href="{{ route('product.create') }}">New Product</a>
            </div>

        </div>
    </div>

    <div class="table-responsive table-admin mb-4">
        <table class="table table-responsive overflow-auto row-border hover todo-table" id="table_id">
            <thead>
                <th>ID</th>
                <th>SKU</th>
                <th>Production name</th>
                <th>Supplier name</th>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Status</th>
                <th>Promotion ID</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->stock_keeper_unit }}</td>
                    <td>{{ $product->productTypeRelation->product_type_name }}</td>
                    <td>{{ $product->supplierRelation->name }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->promotionRelation->name }}</td>
                    <td><img src="{{ asset('Img/product-img/'.$product->image) }}" alt="" style="width: 150px;height:150px"></td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning editUser"><i class="far fa-pencil"></i></a>

                    </td>
                    <td>
                        <button  class="btn btn-danger" data-toggle="modal"
                    data-target="#exampleModal"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this product ?
            </div>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-lg-6 d-flex justify-content-start">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" type="button" class="btn btn-primary">Yes</button>
                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable(
            {"pageLength": 4}
        );
    });

</script>
@endsection
