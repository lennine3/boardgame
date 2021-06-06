@extends('admin.layout')
@section('content')
<div class="container-fluid" style="padding-top: 20px">
    <div class="d-flex bd-highlight mb-3">
        <div class="me-auto p-2 bd-highlight">
            <h2>Add Product</h2>
        </div>
    </div>
    <div class="table-admin">
        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputSKU" class="form-label">Stock Keeping Unit</label>
                        <input type="text" class="form-control" id="inputSKU" placeholder="Ex: MA-105" name="sku">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="productType" class="form-label">Product Type</label>
                        <select name="productType" id="productType" class="form-select">
                            @foreach ($producttypes as $producttype)
                            <option value="{{ $producttype->id }}">{{ $producttype->product_type_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputSupplier" class="form-label">Supplier</label>
                        <select name="supplier" id="inputSupplier" class="form-select">
                            @foreach ($suppliers as $supplier)
                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="inputStaff" class="form-label">Staff</label>
                    <select name="staff" id="inputStaff" class="form-select">
                        @foreach ($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder=""
                            name="name">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="inputStock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="inputStock" name="stock">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="formPromotion" class="form-label">promotion</label>
                        <select name="promotion" id="formPromotion" class="form-select">
                            <option value="0">No Promotion</option>
                            <option value="1">Promotion A</option>
                            <option value="2">Promotion B</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <label for="" class="form-label">Status</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="status" name="status">
                        <label class="form-check-label" for="status">
                            Active
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image</label>
                        <input class="form-control" type="file" id="formFile" name="image" onchange="ImgPreview()">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="in cen">
                        <img id="img-preview" {{-- class="profile_staff" --}} style="width: 70%;hright:70%">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="d-flex justify-content-center">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
<script>
    function ImgPreview() {
        var src = URL.createObjectURL(event.target.files[0]);
        var preview = document.getElementById("img-preview");
        preview.src = src;
    }

</script>
@endsection