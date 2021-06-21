@extends('shop.layout')
@section('content')
<section class="banner-category">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-end" style="padding: 90px 120px 100px 0;">
            <div>
                <h1 class="color-w"><b>Shopping cart</b></h1>
                <nav class="d-flex align-items-center color-w">
                    <a href>
                        Home
                        <span style="  display: inline-block;
                        margin: 0 10px;"><i class="fal fa-long-arrow-right"></i></span>
                    </a>
                    <a href>
                        Cart
                    </a>
                </nav>
            </div>
        </div>
    </div>
</section>
@include('shop.ListCart')

<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center" style="padding-bottom: 35px">
                <div class="section-title">
                    <h1>Deals of the Week</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore
                        magna aliqua.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom: 35px">
                        <div class="single-related-product d-flex">
                            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                    style="height: 75px;weight:75px"></a>
                            <div class="desc">
                                <a href="#" class="title">Black lace Heels</a>
                                <div class="price">
                                    <h6>$189.00</h6>
                                    <h6 class="l-through">$210.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
                        <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                                style="height: 75px;weight:75px"></a>
                        <div class="desc">
                            <a href="#" class="title">Black lace Heels</a>
                            <div class="price">
                                <h6>$189.00</h6>
                                <h6 class="l-through">$210.00</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
                    <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                            style="height: 75px;weight:75px"></a>
                    <div class="desc">
                        <a href="#" class="title">Black lace Heels</a>
                        <div class="price">
                            <h6>$189.00</h6>
                            <h6 class="l-through">$210.00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
                <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt=""
                        style="height: 75px;weight:75px"></a>
                <div class="desc">
                    <a href="#" class="title">Black lace Heels</a>
                    <div class="price">
                        <h6>$189.00</h6>
                        <h6 class="l-through">$210.00</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
            <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
            <div class="desc">
                <a href="#" class="title">Black lace Heels</a>
                <div class="price">
                    <h6>$189.00</h6>
                    <h6 class="l-through">$210.00</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 mb-20" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
        <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
        <div class="desc">
            <a href="#" class="title">Black lace Heels</a>
            <div class="price">
                <h6>$189.00</h6>
                <h6 class="l-through">$210.00</h6>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
        <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
        <div class="desc">
            <a href="#" class="title">Black lace Heels</a>
            <div class="price">
                <h6>$189.00</h6>
                <h6 class="l-through">$210.00</h6>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
        <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
        <div class="desc">
            <a href="#" class="title">Black lace Heels</a>
            <div class="price">
                <h6>$189.00</h6>
                <h6 class="l-through">$210.00</h6>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6" style="padding-bottom:35px"">
                        <div class=" single-related-product d-flex">
        <a href="#"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" alt="" style="height: 75px;weight:75px"></a>
        <div class="desc">
            <a href="#" class="title">Black lace Heels</a>
            <div class="price">
                <h6>$189.00</h6>
                <h6 class="l-through">$210.00</h6>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    <div class="col-lg-3">
        <div class="ctg-right">
            <a href="#" target="_blank">
                <img class="img-fluid d-block mx-auto" src="{{ asset('FrontEnd/img/deal.png') }}" alt="">
            </a>
        </div>
    </div>
    </div>
    </div>
</section>
<script>
    function DeleteItem(id){
        $.ajax({
            url: 'remove-Listitem-cart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response)
            alertify.success('Product deleted successful');
        });
    }


    function UpdateItem(id){
        var quanty = $("#quanty-item"+id).val();
        $.ajax({
            url: 'update-Listitem-cart/'+id+'/'+quanty,
            type: 'GET',
        }).done(function(response){
            RenderListCart(response)
            alertify.success('Product updated successful');
        });
    }
    function RenderListCart(response){
        $("#listCart").empty();
        $("#listCart").html(response);
        $("#quanty-show").text($("#quanty-cart").val());
    }
    var userMain=document.getElementById("dropdownCart");
    if(window.location.href.indexOf("cart")>-1){
        userMain.className="visible_hidden"
    }
</script>
@endsection
