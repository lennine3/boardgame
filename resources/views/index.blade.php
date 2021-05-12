@extends('shop.layout')
@section('content')

<!--Banner-->
<div class="banner">
    <div class="container" style="padding-bottom:50px;padding-top:50px">
        <div class="owl-banner owl-carousel owl-theme col-lg-12">
            <div class="item">
                <div class="row">
                    <div class="col-lg-5" style="text-align: left">
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
                    <div class="col-lg-5" style="text-align: left">
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
                    <div class="col-lg-5" style="text-align: left">
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
<div style="padding-top: 100px;">
    <div class="container" style="height:150px;box-shadow: 0 10px 30px rgb(0 0 0 / 10%);">
        <div class="row" style="text-align: center;padding: 25px 0px 10px 0px;">
            <div class="col-lg-3" style="border-right: 1px#eee solid;height:50px"><i class="fal fa-truck fa-2x"></i> <h6 style="padding-top: 10px"><b>Free Delivery</b></h6> Fee ship on all order  </div>
            <div class="col-lg-3" style="border-right: 1px#eee solid;height:50px"><i class="fal fa-sync-alt fa-2x"></i><h6 style="padding-top: 10px"><b>Return Policy</b></h6> Fee ship on all order</div>
            <div class="col-lg-3" style="border-right: 1px#eee solid;height:50px"><i class="fal fa-headphones-alt fa-2x"></i><h6 style="padding-top: 10px"><b>24/7 Support</b></h6> Fee ship on all order</div>
            <div class="col-lg-3" style="border-right: 1px#eee solid;height:50px"><i class="fal fa-database fa-2x"></i><h6 style="padding-top: 10px"><b>Secure Payment</b></h6> Fee ship on all order</div>
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
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <h1 style="color: #000" style="padding-top: 30px"><b>Family</b></h1>
                                        <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsum harum iusto
                                            corrupti
                                            repudiandae rerum excepturi fugiat blanditiis ducimus voluptas sint, saepe
                                            illum adipisci <br>
                                            officiis est nostrum incidunt soluta dolor commodi.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-20">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
                                                                        <i class="fal fa-shopping-bag fa-3x addCart"></i>
                                                                    </a><span class="tooltiptext">Add Cart</span>
                                                                </div>
                                                                <div class="tooltip col-lg-6 ">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                                        <div class="col-lg-3 col-md-6 p-b-30">
                                            <div class="single-product">
                                                <img class="img-fluid" src="{{ asset('FrontEnd/img/monopoly.jpg') }}"
                                                    alt="">
                                                <div class="product-details">
                                                    <h6> <a href="{{ route('single') }}">The Best borad game to play with friend</a></h6>
                                                    <div class="price">
                                                        <h6>$60</h6>
                                                    </div>
                                                    <hr>
                                                    <div class="prd-bottom">
                                                        <div class="row">
                                                            <div class="d-flex justify-content-center">
                                                                <div class="tooltip col-lg-6">
                                                                    <a href="#">
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
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="row clock-wrap">
                                <div  class="col clockinner">
                                    <h1 id="days"></h1>
                                    <span>Days</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="hours"></h1>
                                    <span>Hours</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="minutes"></h1>
                                    <span>Minnutes</span>
                                </div>
                                <div  class="col clockinner">
                                    <h1 id="seconds"></h1>
                                    <span>Second</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href class="primary-btn"> Shop Now</a>
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
                                                <h6 >$175</h6>
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
                                                <h6 >$175</h6>
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
                                                <h6 >$175</h6>
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
                                <div class="owl-prev-custome"><img src="{{ asset('FrontEnd/img/prev-black.png') }}" alt="" class="img-fluid"></div>
                            </div>
                            <div class="btn-right-exclusive">
                                <div class="owl-next-custome"><img src="{{ asset('FrontEnd/img/next-black.png') }}" alt="" class="img-fluid"></div>
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
<!--slide Banner-->
<script>
    //slide
    $('.owl-banner').owlCarousel({
        loop: true,
        autoplay: true,
        navSpeed: 1750,
        dots: false,
        margin: 10,
        center: true,
        center: true,
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

</script>
<!--slide Banner-->
<!--slide Exclusive-->
<script>
    //slide
    $('.owl-exclusive').owlCarousel({
        loop: true,
        autoplay: false,
        navSpeed: 1750,
        dots: false,
        margin: 10,
        autoplayTimeout:6500,
        center: true,
        center: true,
        navText: ["<img src={{ asset('FrontEnd/img/prev-arrow.png') }}>",
            "<img src={{ asset('FrontEnd/img/next-arrow.png') }}>"
        ],
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
    var owl = $('.owl-exclusive');
    owl.owlCarousel();
    // Go to the next item
    $('.btn-right-exclusive').click(function () {
        owl.trigger('next.owl.carousel',[1750]);
    })
    // Go to the previous item
    $('.btn-left-exclusive').click(function () {
        // With optional speed parameter
        // Parameters has to be in square bracket '[]'
        owl.trigger('prev.owl.carousel', [1750]);
    })

</script>
<!--slide Exclusive-->
<script>
    //slide
    $('.owl-carousel').owlCarousel({
        loop: true,
        autoplay: false,
        navSpeed: 1750,
        dots: false,
        nav: true,
        margin: 10,
        center: true,
        navText: ["<img src={{ asset('FrontEnd/img/prev.png') }}>",
            "<img src={{ asset('FrontEnd/img/next.png') }}>"
        ],
        center: true,
        autoplaySpeed: 1750,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

</script>
<script>
    window.onscroll = function () {
        myFunction()
    };

    var navbar = document.getElementById("navBar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

</script>
<script>
    function searchVisible() {
        document.getElementById("search_input_box").removeAttribute("class", "visible_hidden");
    }

</script>
<script>
    function searchHidden() {
        document.getElementById("search_input_box").setAttribute("class", "visible_hidden");
    }

</script>

<!--Count Down Watch Start-->
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 14, 2021 00:00:00").getTime();

    var nowLater = new Date().getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        /*  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
         + minutes + "m " + seconds + "s "; */
        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        // If the count down is over, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);

</script>
<!--Count Down Watch End-->
<!--exclusive end-->
@endsection
