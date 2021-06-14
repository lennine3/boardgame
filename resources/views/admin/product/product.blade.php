@extends('admin.layout')
@section('content')
<div class="container-fluid pad-top-20 pad-bot-50">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Product</h2>
        </div>

        <div class=" p-2 bd-highlight">
            <a class="btn btn-primary" href="{{ route('product.create') }}">New Product</a>
        </div>
    </div>

    <div class="table-responsive table-admin">
        <table class="table">
            <thead>
                <th>ID</th>
                <th>SKU</th>
                <th>Production ID</th>
                <th>Supplier ID</th>
                <th>Staff ID</th>
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
                    <td>{{ $product->id_product_type }}</td>
                    <td>{{ $product->id_supplier }}</td>
                    <td>{{ $product->id_staff }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                    <td>{{ $product->status }}</td>
                    <td>{{ $product->id_promotion }}</td>
                    <td><img src="{{ asset('Img/product-img/'.$product->image) }}" alt="" style="width: 150px;height:150px"></td>
                    <td>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-warning editUser"><i class="far fa-pencil"></i></a>

                    </td>
                    <td>
                        <button  class="btn btn-danger" data-bs-toggle="modal"
                    data-bs-target="#exampleModal"><i class="fal fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-admin d-flex justify-content-center" style="background-color: #454d55">
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <li class="page-item"><a class="page-link active" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
        </ul>
      </nav>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure to delete this product ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('product.destroy',$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" type="button" class="btn btn-primary">Yes</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
