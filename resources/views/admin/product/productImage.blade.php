@extends('admin.layout')
@section('content')
<div class="container-fluid pad-top-20 pad-bot-50">
    <div class="row">
        <div class="col-lg-3">
            <div class="table-admin">
                <div>
                    <label for="">Product</label>
                </div>
                <br>
                <form action="{{ route('product-img-store') }}" method="POST"  enctype="multipart/form-data">
                    @csrf
                <div class="input-group mb-3">
                    <select name="idProduct" id="" class="form-select">
                        @foreach ($products as $product)
                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="inputGroupFile02">IMG</label>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" id="file-input" name="imageFile[]" multiple="multiple">
                            {{-- <input type="file" id="file-input" multiple /> --}}
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="in cen">
                            <div id="img-preview" style="width: 70%;height:70%" class="d-flex"></div>
                        </div>
                    </div>
                </div>

                <div class="text-center">
                    <button class="btn btn-primary">SAVE</button>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-9 mb-4">
            <div class="table-responsive table-admin">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        @foreach ($productImages as $productImage)
                        <tr>
                            <td>{{ $productImage->id }}</td>
                            <td>{{ $productImage->id_product }}</td>
                            <td>
                                <img src="{{ asset('Img/product-img/'.$productImage->image) }}" alt=""
                                    style="width: 250px;height:150px">
                            </td>
                            <td>
                                <button class="btn btn-warning editUser"><i class="far fa-pencil"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-danger"><i class="fal fa-trash"></i></button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center pagination-admin">
            {!! $productImages->render() !!}
        </div>
    </div>

</div>

<script>
    $(document).ready(function(){
     $('#file-input').on('change', function(){ //on file input change
        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {

            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result); //create image element
                        $('#img-preview').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
     });
    });

    </script>
@endsection
