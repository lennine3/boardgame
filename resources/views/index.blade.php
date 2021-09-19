@extends('shop.layout')
@section('content')

<!--Banner-->
<div class="banner">
    <div class="container banner-padding">
        <div class="owl-banner owl-carousel owl-theme col-lg-12">
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 text-start">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/monopoly.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 text-start">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/dragomino-1.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="row">
                    <div class="col-lg-5 text-start">
                        <h1>Title</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae praesentium dignissimos natus
                            ullam itaque obcaecati,
                            vero iusto cum adipisci perferendis, quo deleniti aperiam laboriosam! Repellendus vero
                            mollitia reprehenderit explicabo debitis.</p>
                        <div>
                            <a class="btn"><i class="far fa-plus-circle fa-3x add-btn"></i></a>Add to Cart
                        </div>
                    </div>
                    <div class="col-lg-7"><img src="{{ asset('FrontEnd/img/foldscope.jpg') }}" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Banner-->
<div class="pad-top-100">
    <div class="container term">
        <div class="row" style="text-align: center;padding: 25px 0px 10px 0px;">
            <div class="col-lg-3 term-box"><i class="fal fa-truck fa-2x"></i>
                <h6 class="pad-top-10"><b>Free Delivery</b></h6> Fee ship on all order
            </div>
            <div class="col-lg-3 term-box"><i class="fal fa-sync-alt fa-2x"></i>
                <h6 class="pad-top-10"><b>Return Policy</b></h6> Fee ship on all order
            </div>
            <div class="col-lg-3 term-box"><i class="fal fa-headphones-alt fa-2x"></i>
                <h6 class="pad-top-10"><b>24/7 Support</b></h6> Fee ship on all order
            </div>
            <div class="col-lg-3 term-box"><i class="fal fa-database fa-2x"></i>
                <h6 class="pad-top-10"><b>Secure Payment</b></h6> Fee ship on all order
            </div>
        </div>
    </div>
</div>


<!--Content-->
<div class="container-fluid" style="padding-bottom:30px">
    <div class="container">
        <!--Newest-->
        <div class="row" style="padding-top: 20px">
            <div class="col-lg-12" style="padding-top: 20px">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Product Type 1</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach ($productType_1 as $product)
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <a href="{{ route('single',$product->id) }}">
                                                    <span class="onsale">Sale {{ $product->promotionRelation->rate }}%
                                                        off</span>
                                                    <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
                                                        <div class="box-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Img/product-img/'.$product->image) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h6> <a
                                                                href="{{ route('single',$product->id) }}">{{ $product->name }}</a>
                                                        </h6>
                                                        <div class="price">
                                                            @if ($product->id_promotion!=0)
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <h6 class="price-color">
                                                                        ${{ $product->promotion_price}}
                                                                    </h6>
                                                                </div>
                                                                <div class="col-lg-6">
                                                                    <h6 class="l-through">${{ $product->price }}</h6>
                                                                </div>
                                                            </div>
                                                            @else
                                                            <h6>${{ $product->price }}</h6>
                                                            @endif

                                                        </div>
                                                        <hr>
                                                        <div class="prd-bottom">
                                                            <div class="row p-b-20">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="tooltip col-lg-6">
                                                                        <a onclick="AddCart({{ $product->id }})"
                                                                            href="javascript:">
                                                                            <i
                                                                                class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                        </a><span class="tooltiptext">Add Cart</span>
                                                                    </div>
                                                                    <div class="tooltip col-lg-6">
                                                                        <a href="#">
                                                                            @if (auth()->check())
                                                                                @php
                                                                                    $check = auth()->user()->favorites()->where('product_id', $product->id)->first();
                                                                                @endphp
                                                                                @if ($check)
                                                                                    <i class="fas fa-heart-circle fa-3x addFav removefav active" data-target="{{ $product->id }}"></i>
                                                                                @else
                                                                                    <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                                @endif
                                                                            @else
                                                                                <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                            @endif
                                                                        </a><span class="tooltiptext">Favortire</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Product Type 2</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach ($productType_2 as $product)
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <a href="{{ route('single',$product->id) }}">
                                                    <span class="onsale">Sale {{ $product->promotionRelation->rate }}%
                                                        off</span>
                                                    <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
                                                        <div class="box-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Img/product-img/'.$product->image) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h6> <a
                                                                href="{{ route('single',$product->id) }}">{{ $product->name }}</a>
                                                        </h6>
                                                        <div class="price">
                                                            <h6>${{ $product->price }}</h6>
                                                        </div>
                                                        <hr>
                                                        <div class="prd-bottom">
                                                            <div class="row p-b-20">
                                                                <div class="d-flex justify-content-center p-b-20">
                                                                    <div class="tooltip col-lg-6">
                                                                        <a onclick="AddCart({{ $product->id }})"
                                                                            href="javascript:">
                                                                            <i
                                                                                class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                        </a><span class="tooltiptext">Add Cart</span>
                                                                    </div>
                                                                    <div class="tooltip col-lg-6">
                                                                        <a href="#">
                                                                            @if (auth()->check())
                                                                                @php
                                                                                    $check = auth()->user()->favorites()->where('product_id', $product->id)->first();
                                                                                @endphp
                                                                                @if ($check)
                                                                                    <i class="fas fa-heart-circle fa-3x addFav removefav active" data-target="{{ $product->id }}"></i>
                                                                                @else
                                                                                    <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                                @endif
                                                                            @else
                                                                                <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                            @endif
                                                                        </a><span class="tooltiptext">Favortire</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Product Type 3</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach ($productType_3 as $product)
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <a href="{{ route('single',$product->id) }}">
                                                    <span class="onsale">Sale {{ $product->promotionRelation->rate }}%
                                                        off</span>
                                                    <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
                                                        <div class="box-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Img/product-img/'.$product->image) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h6> <a
                                                                href="{{ route('single',$product->id) }}">{{ $product->name }}</a>
                                                        </h6>
                                                        <div class="price">
                                                            <h6>${{ $product->price }}</h6>
                                                        </div>
                                                        <hr>
                                                        <div class="prd-bottom">
                                                            <div class="row p-b-20">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="tooltip col-lg-6">
                                                                        <a onclick="AddCart({{ $product->id }})"
                                                                            href="javascript:">
                                                                            <i
                                                                                class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                        </a><span class="tooltiptext">Add Cart</span>
                                                                    </div>
                                                                    <div class="tooltip col-lg-6">
                                                                        <a href="#">
                                                                            @if (auth()->check())
                                                                                @php
                                                                                    $check = auth()->user()->favorites()->where('product_id', $product->id)->first();
                                                                                @endphp
                                                                                @if ($check)
                                                                                    <i class="fas fa-heart-circle fa-3x addFav removefav active" data-target="{{ $product->id }}"></i>
                                                                                @else
                                                                                    <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                                @endif
                                                                            @else
                                                                                <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                            @endif
                                                                        </a><span class="tooltiptext">Favortire</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <div style="padding-left: 5px;padding-top:13px">
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Product Type 4</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        @foreach ($productType_4 as $product)
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <a href="{{ route('single',$product->id) }}">
                                                    <span class="onsale">Sale {{ $product->promotionRelation->rate }}%
                                                        off</span>
                                                    <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
                                                        <div class="box-img">
                                                            <img class="img-fluid"
                                                                src="{{ asset('Img/product-img/'.$product->image) }}"
                                                                alt="">
                                                        </div>
                                                    </div>
                                                    <div class="product-details">
                                                        <h6> <a
                                                                href="{{ route('single',$product->id) }}">{{ $product->name }}</a>
                                                        </h6>
                                                        <div class="price">
                                                            <h6>${{ $product->price }}</h6>
                                                        </div>
                                                        <hr>
                                                        <div class="prd-bottom">
                                                            <div class="row p-b-20">
                                                                <div class="d-flex justify-content-center">
                                                                    <div class="tooltip col-lg-6">
                                                                        <a onclick="AddCart({{ $product->id }})"
                                                                            href="javascript:">
                                                                            <i
                                                                                class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                        </a><span class="tooltiptext">Add Cart</span>
                                                                    </div>
                                                                    <div class="tooltip col-lg-6">
                                                                        <a href="#">
                                                                            @if (auth()->check())
                                                                                @php
                                                                                    $check = auth()->user()->favorites()->where('product_id', $product->id)->first();
                                                                                @endphp
                                                                                @if ($check)
                                                                                    <i class="fas fa-heart-circle fa-3x addFav removefav active" data-target="{{ $product->id }}"></i>
                                                                                @else
                                                                                    <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                                @endif
                                                                            @else
                                                                                <i class="fas fa-heart-circle fa-3x addFav addtofav" data-target="{{ $product->id }}"></i>
                                                                            @endif
                                                                        </a><span class="tooltiptext">Favortire</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//Content-->

<!--exclusive start-->
<section class="exclusive-deal-area">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 exclusive-left">
                <div class="row exclusive-slogan" style="padding-bottom: 30px">
                    <div class="col-lg-12">
                        <h1>Exclusive Hot Deal End Soon!</h1>
                        <p>Get it now before it End.</p>
                    </div>
                    <div class="col-lg-12 d-flex justify-content-center" id="notice">
                        <div class="row clock-wrap">
                            <div class="col clockinner">
                                <h1 id="days"></h1>
                                <span>Days</span>
                            </div>
                            <div class="col clockinner">
                                <h1 id="hours"></h1>
                                <span>Hours</span>
                            </div>
                            <div class="col clockinner">
                                <h1 id="minutes"></h1>
                                <span>Minnutes</span>
                            </div>
                            <div class="col clockinner">
                                <h1 id="seconds"></h1>
                                <span>Second</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href class="exclusive-btn Ripple-effect"> Shop Now</a>
            </div>
            <div class="col-lg-6 exclusive-right">
                <div>
                    <div class="active-exclusive-product-slider owl-carousel owl-exclusive owl-theme owl-loaded">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <img src="{{ asset('FrontEnd/img/conan.png') }}" alt="" class="img-fluid">
                                    <div class="product-detail">
                                        <div class="price">
                                            <h6>$175</h6>
                                        </div>
                                    </div>
                                    <h4>Detective Conan Limited Edition</h4>
                                    <div class="d-flex align-items-center justify-content-center p-b-30">
                                        <div class="tooltip">
                                            <a href="#">
                                                <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                            </a><span class="tooltiptext">Add Cart</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <img src="{{ asset('FrontEnd/img/conan.png') }}" alt="" class="img-fluid">
                                    <div class="product-detail">
                                        <div class="price">
                                            <h6>$175</h6>
                                        </div>
                                    </div>
                                    <h4>Detective Conan Limited Edition</h4>
                                    <div class="d-flex align-items-center justify-content-center p-b-30">
                                        <div class="tooltip">
                                            <a href="#">
                                                <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                            </a><span class="tooltiptext">Add Cart</span>
                                        </div>
                                    </div>

                                </div>
                                <div class="owl-item">
                                    <img src="{{ asset('FrontEnd/img/conan.png') }}" alt="" class="img-fluid">
                                    <div class="product-detail">
                                        <div class="price">
                                            <h6>$175</h6>
                                        </div>
                                    </div>
                                    <h4>Detective Conan Limited Edition</h4>
                                    <div class="d-flex align-items-center justify-content-center p-b-30">
                                        <div class="tooltip">
                                            <a href="#">
                                                <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                            </a><span class="tooltiptext">Add Cart</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="btn-left-exclusive">
                                <div class="owl-prev-custome"><img src="{{ asset('FrontEnd/img/prev-black.png') }}"
                                        alt="" class="img-fluid"></div>
                            </div>
                            <div class="btn-right-exclusive">
                                <div class="owl-next-custome"><img src="{{ asset('FrontEnd/img/next-black.png') }}"
                                        alt="" class="img-fluid"></div>
                            </div>
                        </div>
                        {{-- <div class="owl-dots">
                            <div class="owl-dot active"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                            <div class="owl-dot"><span></span></div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--exclusive start-->

<!--Label-->
<div class="certificate">
    <div class="container">
        <div class="row">
            <a class="col">
                <img src="{{ asset('FrontEnd/img/label.png') }}" alt="" class="single-img"></a>
            <a class="col">
                <img src="{{ asset('FrontEnd/img/crown.png') }}" alt="" class="single-img img-fluid">
            </a>
            <a class="col">
                <img src="{{ asset('FrontEnd/img/dock.png') }}" alt="" class="single-img img-fluid">
            </a>
            <a class="col">
                <img src="{{ asset('FrontEnd/img/mountain.png') }}" alt="" class="single-img img-fluid">
            </a>
            <a class="col">
                <img src="{{ asset('FrontEnd/img/creative.png') }}" alt="" class="single-img img-fluid">
            </a>
        </div>
    </div>
</div>
<!--Label-->

<!--Deal start-->
<section class="related-product-area section_gap_bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center" style="padding-bottom: 35px">
                <div class="section-title">
                    <h1>Best deals for you</h1>
                    <p>All the products below all sale form 40-50%, get it before too late.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9">
                <div>
                    <div class="owl-product-deal owl-carousel owl-theme owl-loaded ">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                @foreach ($deals as $deal)
                                @if ($deal->promotionRelation->rate>35)
                                <div class="owl-item">
                                    <div class="single-product">
                                        <a href="{{ route('single',$deal->id) }}">
                                        <span class="onsale">Sale {{ $deal->promotionRelation->rate }}% off</span>
                                        <div class="wrap" style="top: 0px;z-index: 200;position: relative;">
                                            <div class="box-img">
                                                <img class="img-fluid" src="{{ asset('Img/product-img/'.$deal->image) }}"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div class="product-details">
                                            <h6> <a href="{{ route('single',$deal->id) }}">{{ $deal->name }}</a></h6>
                                            <div class="price">
                                                @if ($product->id_promotion!=0)
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <h6 class="price-color"> <span
                                                                class="price_icon">$</span>{{ $deal->promotion_price}}
                                                        </h6>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <h6 class="l-through"><span
                                                                class="price_icon">$</span>{{ $deal->price }}</h6>
                                                    </div>
                                                </div>
                                                @else
                                                <h6>${{ $deal->price }}</h6>
                                                @endif
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="owl-nav">
                            <div class="btn-left-deal">
                                <div class="owl-prev-deal"><img src="{{ asset('FrontEnd/img/prev-deal.png') }}" alt=""
                                        class="img-fluid-deal"></div>
                            </div>
                            <div class="btn-right-deal">
                                <div class="owl-next-deal"><img src="{{ asset('FrontEnd/img/next-deal.png') }}" alt=""
                                        class="img-fluid-deal"></div>
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
<!--Deal end-->

<script src="{{ asset('FrontEnd/js/deal.js') }}"></script>
<script src="{{ asset('FrontEnd/js/slider.js') }}"></script>
<!--slide Exclusive-->



@endsection
