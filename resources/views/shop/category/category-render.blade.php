@foreach ($products as $product)
<div class="col-lg-4 col-md-6 p-b-40">
    <div class="single-product">
        <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
            <div class="box-img">
                <a href="{{ route('single',$product->id) }}">
                    <img class="img-fluid" src="{{ asset('Img/product-img/'.$product->image) }}" alt="">
                </a>
            </div>
        </div>
        <div class="product-details">
            <h6> <a href="{{ route('single',$product->id) }}">{{ $product->name }}</a></h6>
            <div class="price">
                <h6>${{ $product->price }}</h6>
            </div>
            <hr>
            <div class="prd-bottom">
                <div class="row p-b-20">
                    <div class="d-flex justify-content-center">
                        <div class="tooltip col-lg-6">
                            <a onclick="AddCart({{ $product->id }})" href="javascript:">
                                <i class="fal fa-shopping-bag fa-3x addCart"></i>
                            </a><span class="tooltiptext">Add Cart</span>
                        </div>
                        <div class="tooltip col-lg-6">
                            <a href="#">
                                <i class="fas fa-heart-circle fa-3x addFav"></i>
                            </a><span class="tooltiptext">Favortire</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
